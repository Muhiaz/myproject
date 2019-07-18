<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	private $_ID;
    private $_url;
    var $table = 'invoices';
    var $column_order = array(null, 'clientname','invoice_id','product','quantity','unitprice','amount','invoicedate'); //set column field database for datatable orderable
    var $column_search = array('clientname','invoice_id','product','quantity','unitprice','amount','invoicedate'); //set column field database for datatable searchable 
    var $order = array('invoice_id' => 'asc'); // default order
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

     private function _get_datatables_query()
    {
         
        //add custom filter here
        if($this->input->post('clientname'))
        {
            $this->db->like('clientname', $this->input->post('clientname'));
        }
        if($this->input->post('invoice_id'))
        {
            $this->db->like('invoice_id', $this->input->post('invoice_id'));
        }
        
        $this->db->from($this->table);
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
          if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    public function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }
 
    public function get_list_countries()
    {
        $this->db->select('clientname');
        $this->db->from($this->table);
        $this->db->order_by('clientname','asc');
        $query = $this->db->get();
        $result = $query->result();
 
        $countries = array();
        foreach ($result as $row) 
        {
            $countries[] = $row->country;
             }
        return $countries;
    }
	public function getAllUsers(){
		$query = $this->db->get('users');
		return $query->result(); 
	}
	public function save_invoice($invoice_data){
		$this->load->helper('string');
		$clientemail = $this->input->post('clientemail');
		$clientname = $this->input->post('clientname');
		$clientphone = $this->input->post('clientphone');
		$invoicedate = $this->input->post('invoicedate');
		$duedate = $this->input->post('duedate');
		$billingaddress = $this->input->post('billingaddress');
		$total = $this->input->post('total');
		$tax = $this->input->post('tax');
		$amountpaid = $this->input->post('amount');
		$balancedue = $this->input->post('balancedue');
		$invoice = random_string('alnum',5);
		$sql = "INSERT INTO invoices(clientname,clientphone,invoicedate,duedate,billingaddress,total,amount,tax,balancedue,invoice) VALUES(
		" . $this->db->escape($clientname).",
		" . $this->db->escape($clientphone).",
		" . $this->db->escape($invoicedate).",
		" . $this->db->escape($duedate).",
		" . $this->db->escape($billingaddress).",
		" . $this->db->escape($total).",
		" . $this->db->escape($tax).",
		" . $this->db->escape($amountpaid).",
		" . $this->db->escape($invoice).",
		" . $this->db->escape($balancedue).")";
		// $this->db->query($sql);
		for ($i=0; $i < count($invoice_data); $i++) { 
			$data[]= array(
				'no'=>$invoice_data[$i]['no'],
				'tax'=>$invoice_data[$i]['tax'],
				'product'=>$invoice_data[$i]['product'],
				'clientname'=>$invoice_data[$i]['clientname'],
				'clientemail'=>$invoice_data[$i]['clientemail'],
				'clientphone'=>$invoice_data[$i]['clientphone'],
				'duedate'=>$invoice_data[$i]['duedate'],
				'invoicedate'=>$invoice_data[$i]['invoicedate'],
				'description'=>$invoice_data[$i]['description'],
				'balancedue'=>$invoice_data[$i]['balancedue'],
				'amountpaid'=>$invoice_data[$i]['amountpaid'],
				'total'=>$invoice_data[$i]['total'],
				'billingaddress'=>$invoice_data[$i]['billingaddress'],
				'description'=>$invoice_data[$i]['description'],
				'quantity'=>$invoice_data[$i]['quantity'],
				'unitprice'=>$invoice_data[$i]['unitprice'],
				'amount'=>$invoice_data[$i]['amount']

			);
		}
		try{
			//insert data into database...
			for ($i=0; $i <count($invoice_data) ; $i++) { 
				$this->db->insert('invoices',$data[$i]);
				$this->db->insert('sales',$data[$i]);
			}
			return 'success';
		}catch(Exception $e){
			return 'failed';
		}
	}
	public function save_purchase($invoice_data){
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$phonenumber = $this->input->post('phonenumber');
		$total = $this->input->post('total');
		$amountpaid = $this->input->post('amountpaid');
		$balancedue = $this->input->post('balancedue');
		// $sql = "INSERT INTO purchases(name,phonenumber,email,no,product,total,amount,balancedue,amountpaid,description,quantity,unitprice) VALUES(
		// " . $this->db->escape($name).",
		// " . $this->db->escape($phonenumber).",
		// " . $this->db->escape($email).",
		// " . $this->db->escape($total).",
		// " . $this->db->escape($amountpaid).",
		// " . $this->db->escape($balancedue).")";
		// // $this->db->query($sql);
		for ($i=0; $i < count($invoice_data); $i++) { 
			$data[]= array(
				'no'=>$invoice_data[$i]['no'],
				'product'=>$invoice_data[$i]['product'],
				'name'=>$invoice_data[$i]['name'],
				'email'=>$invoice_data[$i]['email'],
				'phonenumber'=>$invoice_data[$i]['phonenumber'],
				// 'description'=>$invoice_data[$i]['description'],
				'balancedue'=>$invoice_data[$i]['balancedue'],
				'amountpaid'=>$invoice_data[$i]['amountpaid'],
				'total'=>$invoice_data[$i]['total'],
				'quantity'=>$invoice_data[$i]['quantity'],
				'unitprice'=>$invoice_data[$i]['unitprice'],
				'amount'=>$invoice_data[$i]['amount']
			);
		}
		try{
			//insert data into database...
			for ($i=0; $i <count($invoice_data) ; $i++) { 
				$this->db->insert('purchases',$data[$i]);
				$this->db->insert('totalexpenditure',$data[$i]);
			}
			return 'success';
		}catch(Exception $e){
			return 'failed';
		}
	}
	public function save_expense($invoice_data){
		$expensedate = $this->input->post('expensedate');
		$total = $this->input->post('total');
		$description = $this->input->post('description');
		$sql = "INSERT INTO expenses(expensedate,no,product,quantity,unitprice,amount,description) VALUES(
		" . $this->db->escape($expensedate).",
		" . $this->db->escape($total).",
		" . $this->db->escape($description).")";
		// $this->db->query($sql);
		for ($i=0; $i < count($invoice_data); $i++) { 
			$data[]= array(
				'no'=>$invoice_data[$i]['no'],
				'product'=>$invoice_data[$i]['product'],
				'expensedate'=>$invoice_data[$i]['expensedate'],
				'total'=>$invoice_data[$i]['total'],
				'quantity'=>$invoice_data[$i]['quantity'],
				'unitprice'=>$invoice_data[$i]['unitprice'],
				'amount'=>$invoice_data[$i]['amount']
			);
		}
		try{
			//insert data into database...
			for ($i=0; $i <count($invoice_data) ; $i++) { 
				$this->db->insert('expenses',$data[$i]);
				$this->db->insert('totalexpenditure',$data[$i]);
			}
			return 'success';
		}catch(Exception $e){
			return 'failed';
		}
	}
	public function save_cashtransaction($invoice_data){
		$clientemail = $this->input->post('clientemail');
		$clientname = $this->input->post('clientname');
		$clientphone = $this->input->post('clientphone');
		$invoicedate = $this->input->post('invoicedate');
		$billingaddress = $this->input->post('billingaddress');
		$total = $this->input->post('total');
		$amountpaid = $this->input->post('amount');
		$description = $this->input->post('description');
		$sql = "INSERT INTO cashtransactions(clientname,clientphone,invoicedate,billingaddress,total,amount,description) VALUES(
		" . $this->db->escape($clientname).",
		" . $this->db->escape($clientphone).",
		" . $this->db->escape($invoicedate).",
		" . $this->db->escape($billingaddress).",
		" . $this->db->escape($total).",
		" . $this->db->escape($description).")";
		// $this->db->query($sql);
		for ($i=0; $i < count($invoice_data); $i++) { 
			$data[]= array(
				'no'=>$invoice_data[$i]['no'],
				'tax'=>$invoice_data[$i]['tax'],
				'product'=>$invoice_data[$i]['product'],
				'clientname'=>$invoice_data[$i]['clientname'],
				'clientemail'=>$invoice_data[$i]['clientemail'],
				'clientphone'=>$invoice_data[$i]['clientphone'],
				'transactiondate'=>$invoice_data[$i]['transactiondate'],
				'total'=>$invoice_data[$i]['total'],
				'billingaddress'=>$invoice_data[$i]['billingaddress'],
				'quantity'=>$invoice_data[$i]['quantity'],
				'unitprice'=>$invoice_data[$i]['unitprice'],
				'amount'=>$invoice_data[$i]['amount']
			);
		}
		try{
			//insert data into database...
			for ($i=0; $i <count($invoice_data) ; $i++) { 
				$this->db->insert('cashtransactions',$data[$i]);
				$this->db->insert('sales',$data[$i]);
				$this->db->insert('totalincome',$data[$i]);
			}
			return 'success';
		}catch(Exception $e){
			return 'failed';
		}
	}
	public function edit_invoice(){
		$invoiceprefix = $this->input->post('invoiceprefix');
		$sql = "INSERT INTO editinvoice(invoiceprefix) VALUES(" . $this->db->escape($invoiceprefix) . ")";
		$result = $this->db->query($sql);
	}
	public function edit_quotation(){
		$invoiceprefix = $this->input->post('invoiceprefix');
		$sql = "INSERT INTO editquotation(invoiceprefix) VALUES(" . $this->db->escape($invoiceprefix) . ")";
		$result = $this->db->query($sql);
	}
	public function save_invoicepayment($invoice_data,$id){
		$invoice_id = $this->input->post('invoice_id');
		$amountrecieved = $this->input->post('amountrecieved');
		$clientemail = $this->input->post('clientemail');
		$clientname = $this->input->post('clientname');
		$clientphone = $this->input->post('clientphone');
		$invoicedate = $this->input->post('invoicedate');
		$duedate = $this->input->post('duedate');
		$billingaddress = $this->input->post('billingaddress');
		$total = $this->input->post('total');
		$amountpaid = $this->input->post('amount');
		$balancedue = $this->input->post('balancedue');
		$sql = "INSERT INTO incomeaccount(invoice_id,balancedue,amountpaid,description,clientname,clientphone,clientemail,quantity,unitprice,amount,tax,newamountpaid) VALUES(
		" . $this->db->escape($invoice_id).",
		" . $this->db->escape($amountrecieved).",
		" . $this->db->escape($total).")";
		// $this->db->query($sql);
		for ($i=0; $i < count($invoice_data); $i++) { 
			$data[]= array(
				'invoice_id'=>$invoice_data[$i]['invoice_id'],
				'tax'=>$invoice_data[$i]['tax'],
				// 'product'=>$invoice_data[$i]['product'],
				'clientname'=>$invoice_data[$i]['clientname'],
				'clientemail'=>$invoice_data[$i]['clientemail'],
				'clientphone'=>$invoice_data[$i]['clientphone'],
				// 'duedate'=>$invoice_data[$i]['duedate'],
				'newamountpaid'=>$invoice_data[$i]['newamountpaid'],
				'product'=>$invoice_data[$i]['product'],
				'balancedue'=>$invoice_data[$i]['newbalancedue'],
				'amountpaid'=>$invoice_data[$i]['amountrecieved'],
				'total'=>$invoice_data[$i]['total'],
				// 'billingaddress'=>$invoice_data[$i]['billingaddress'],
				// 'description'=>$invoice_data[$i]['description'],
				'quantity'=>$invoice_data[$i]['quantity'],
				'unitprice'=>$invoice_data[$i]['unitprice'],
				'amount'=>$invoice_data[$i]['amount']
			);
		}
		try{
			//insert data into database...
			for ($i=0; $i <count($invoice_data) ; $i++) { 
				$this->db->where('invoice_id',$id);
                $this->db->set($data[$i]);
                $this->db->update('invoices', $data[$i]);
                $this->db->insert('incomeaccount', $data[$i]);
                $this->db->insert('totalincome', $data[$i]);
			}
			return 'success';
		}catch(Exception $e){
			return 'failed';
		}
	}
public function save_deletedinvoice($invoice_data,$id){
		$invoice_id = $this->input->post('invoice_id');
		$amountrecieved = $this->input->post('amountrecieved');
		$clientemail = $this->input->post('clientemail');
		$clientname = $this->input->post('clientname');
		$clientphone = $this->input->post('clientphone');
		$invoicedate = $this->input->post('invoicedate');
		$duedate = $this->input->post('duedate');
		$billingaddress = $this->input->post('billingaddress');
		$total = $this->input->post('total');
		$amountpaid = $this->input->post('amount');
		$balancedue = $this->input->post('balancedue');
		$email = $this->input->post('email');
		$sql = "INSERT INTO deletedinvoices(invoice_id,balancedue,amountpaid,description,clientname,clientphone,clientemail,quantity,unitprice,amount,tax,email) VALUES(
		" . $this->db->escape($invoice_id).",
		" . $this->db->escape($amountrecieved).",
		" . $this->db->escape($email).",
		" . $this->db->escape($total).")";
		// $this->db->query($sql);
		for ($i=0; $i < count($invoice_data); $i++) { 
			$data[]= array(
				'invoice_id'=>$invoice_data[$i]['invoice_id'],
				'tax'=>$invoice_data[$i]['tax'],
				// 'product'=>$invoice_data[$i]['product'],
				'clientname'=>$invoice_data[$i]['clientname'],
				'clientemail'=>$invoice_data[$i]['clientemail'],
				'clientphone'=>$invoice_data[$i]['clientphone'],
				// 'duedate'=>$invoice_data[$i]['duedate'],
				'email'=>$invoice_data[$i]['email'],
				'product'=>$invoice_data[$i]['product'],
				'balancedue'=>$invoice_data[$i]['newbalancedue'],
				'amountpaid'=>$invoice_data[$i]['amountrecieved'],
				'total'=>$invoice_data[$i]['total'],
				// 'billingaddress'=>$invoice_data[$i]['billingaddress'],
				// 'description'=>$invoice_data[$i]['description'],
				'quantity'=>$invoice_data[$i]['quantity'],
				'unitprice'=>$invoice_data[$i]['unitprice'],
				'amount'=>$invoice_data[$i]['amount']
			);
		}
		try{
			//insert data into database...
			for ($i=0; $i <count($invoice_data) ; $i++) { 
                $this->db->insert('deletedinvoices', $data[$i]);
			}
			return 'success';
		}catch(Exception $e){
			return 'failed';
		}
	}
	public function update_invoice($invoice_data,$id){
		$invoice_id = $this->input->post('invoice_id');
		$amountrecieved = $this->input->post('amountrecieved');
		$clientemail = $this->input->post('clientemail');
		$clientname = $this->input->post('clientname');
		$clientphone = $this->input->post('clientphone');
		$invoicedate = $this->input->post('invoicedate');
		$duedate = $this->input->post('duedate');
		$billingaddress = $this->input->post('billingaddress');
		$total = $this->input->post('total');
		$amountpaid = $this->input->post('amount');
		$balancedue = $this->input->post('balancedue');
		$sql = "INSERT INTO invoices(invoice_id,balancedue,amountpaid,description,clientname,clientphone,clientemail,quantity,unitprice,amount,tax) VALUES(
		" . $this->db->escape($invoice_id).",
		" . $this->db->escape($amountrecieved).",
		" . $this->db->escape($total).")";
		// $this->db->query($sql);
		for ($i=0; $i < count($invoice_data); $i++) { 
			$data[]= array(
				'invoice_id'=>$invoice_data[$i]['invoice_id'],
				'tax'=>$invoice_data[$i]['tax'],
				// 'product'=>$invoice_data[$i]['product'],
				'clientname'=>$invoice_data[$i]['clientname'],
				'clientemail'=>$invoice_data[$i]['clientemail'],
				'clientphone'=>$invoice_data[$i]['clientphone'],
				// 'duedate'=>$invoice_data[$i]['duedate'],
				// 'invoicedate'=>$invoice_data[$i]['invoicedate'],
				'product'=>$invoice_data[$i]['product'],
				'balancedue'=>$invoice_data[$i]['newbalancedue'],
				'amountpaid'=>$invoice_data[$i]['amountrecieved'],
				'total'=>$invoice_data[$i]['total'],
				// 'billingaddress'=>$invoice_data[$i]['billingaddress'],
				// 'description'=>$invoice_data[$i]['description'],
				'quantity'=>$invoice_data[$i]['quantity'],
				'unitprice'=>$invoice_data[$i]['unitprice'],
				'amount'=>$invoice_data[$i]['amount']
			);
		}
		try{
			//insert data into database...
			for ($i=0; $i <count($invoice_data) ; $i++) { 
				return $this->db->where('id',$id)
				

		                 ->update('products',$data);
			}
			return 'success';
		}catch(Exception $e){
			return 'failed';
		}
	}
	public function save_quotation($quotation_data){
		$clientemail = $this->input->post('clientemail');
		$clientname = $this->input->post('clientname');
		$clientphone = $this->input->post('clientphone');
		$invoicedate = $this->input->post('invoicedate');
		$billingaddress = $this->input->post('billingaddress');
		$amount = $this->input->post('amount');
		$total = $this->input->post('total');
		$sql = "INSERT INTO invoices(clientname,clientphone,invoicedate,billingaddress,total,amount) VALUES(
		" . $this->db->escape($clientname).",
		" . $this->db->escape($clientphone).",
		" . $this->db->escape($invoicedate).",
		" . $this->db->escape($billingaddress).",
		" . $this->db->escape($amount).",
		" . $this->db->escape($total).",)";
		// $this->db->query($sql);
		for ($i=0; $i < count($quotation_data); $i++) { 
			$data[]= array(
				'no'=>$quotation_data[$i]['no'],
				'product'=>$quotation_data[$i]['product'],
				'clientname'=>$quotation_data[$i]['clientname'],
				'clientemail'=>$quotation_data[$i]['clientemail'],
				'clientphone'=>$quotation_data[$i]['clientphone'],
				'invoicedate'=>$quotation_data[$i]['invoicedate'],
				'description'=>$quotation_data[$i]['description'],
				'total'=>$quotation_data[$i]['total'],
				'billingaddress'=>$quotation_data[$i]['billingaddress'],
				'quantity'=>$quotation_data[$i]['quantity'],
				'unitprice'=>$quotation_data[$i]['unitprice'],
				'amount'=>$quotation_data[$i]['amount']
			);
		}
		try{
			//insert data into database...
			for ($i=0; $i <count($quotation_data) ; $i++) { 
				$this->db->insert('quotations',$data[$i]);
			}
			return 'success';
			redirect('<?php echo base_url("user/quotationtemplate");?>');
		}catch(Exception $e){
			return 'failed';
		}
	}
	public function insert($user){
		$this->db->insert('users', $user);
		return $this->db->insert_id(); 
	}
	public function fetch_client($email,$name){
		if (empty($name)){
			$name = 'clientname';
		}
		$name = strtolower(trim());
	}
	public function add_client(){
		$firstname = $this->input->post('firstname');
		$secondname =$this->input->post('secondname');
		$email =$this->input->post('email');
		$street =$this->input->post('street');
		$town =$this->input->post('town');
		$company =$this->input->post('company');
		$phone =$this->input->post('phone');
		$state =$this->input->post('state');
		$products =$this->input->post('products');
		$sql = "INSERT INTO clients(firstname,secondname,email,street,town,company,phone,state,products) VALUES(
		" . $this->db->escape($firstname).",
	    " . $this->db->escape($secondname).",
	    " . $this->db->escape($email).",
	    " . $this->db->escape($street).",
	    " . $this->db->escape($town).",
	    " . $this->db->escape($company).",
	    " . $this->db->escape($phone).",
	    " . $this->db->escape($state).",
	    " . $this->db->escape($products)."
	)";

	    $result=$this->db->query($sql);
	    redirect("user/clients");
	}
	public function add_employee(){
		$firstname = $this->input->post('firstname');
		$secondname =$this->input->post('secondname');
		$emailaddress =$this->input->post('emailaddress');
		$phonenumber =$this->input->post('phonenumber');
		$streetaddress =$this->input->post('streetaddress');
		$employeenumber =$this->input->post('employeenumber');
		$department =$this->input->post('department');
		$jobtitle =$this->input->post('jobtitle');
		$salary =$this->input->post('salary');
		$allowances =$this->input->post('allowances');
		$sql = "INSERT INTO employees(firstname,secondname,emailaddress,phonenumber,streetaddress,employeenumber,department,jobtitle,salary,allowances) VALUES(
		" . $this->db->escape($firstname).",
	    " . $this->db->escape($secondname).",
	    " . $this->db->escape($emailaddress).",
	    " . $this->db->escape($phonenumber).",
	    " . $this->db->escape($streetaddress).",
	    " . $this->db->escape($employeenumber).",
	    " . $this->db->escape($department).",
	    " . $this->db->escape($jobtitle).",
	    " . $this->db->escape($salary).",
	    " . $this->db->escape($allowances)."
	)";

	    $result=$this->db->query($sql);
	    $this->session->set_flashdata('msg','Successfully Added Employee');
	    redirect("user/humanresource");
	}
	public function getemployees(){
		$query = $this->db->get('employees');
		return $query;
	}
	public function add_supplier(){
		$firstname = $this->input->post('firstname');
		$secondname =$this->input->post('secondname');
		$email =$this->input->post('email');
		$street =$this->input->post('street');
		$town =$this->input->post('town');
		$phone =$this->input->post('phone');
		$state =$this->input->post('state');
		$sql = "INSERT INTO suppliers(firstname,secondname,email,street,town,phone,state) VALUES(
		" . $this->db->escape($firstname).",
	    " . $this->db->escape($secondname).",
	    " . $this->db->escape($email).",
	    " . $this->db->escape($street).",
	    " . $this->db->escape($town).",
	    " . $this->db->escape($phone).",
	    " . $this->db->escape($state)."
	)";

	    $result=$this->db->query($sql);
	    redirect("user/suppliers");
	}
	public function add_clientcompany(){
		$name = $this->input->post('name');
		$email =$this->input->post('email');
		$number =$this->input->post('phonenumber');
		$street =$this->input->post('street');
		$town =$this->input->post('town');
		$postalcode =$this->input->post('postalcode');
		$country =$this->input->post('country');
		$state =$this->input->post('state');
		$sql = "INSERT INTO clientcompany(name,email,phonenumber,street,town,postalcode,country,state) VALUES(
		" . $this->db->escape($name).",
	    " . $this->db->escape($email).",
	    " . $this->db->escape($number).",
	    " . $this->db->escape($street).",
	    " . $this->db->escape($town).",
	    " . $this->db->escape($postalcode).",
	    " . $this->db->escape($country).",
	    " . $this->db->escape($state)."
	  
	)";

	    $result=$this->db->query($sql);
	    redirect("user/clients");
	}
	public function add_suppliercompany(){
		$name = $this->input->post('name');
		$email =$this->input->post('email');
		$number =$this->input->post('phonenumber');
		$street =$this->input->post('street');
		$town =$this->input->post('town');
		$postalcode =$this->input->post('postalcode');
		$country =$this->input->post('country');
		$state =$this->input->post('state');
		$sql = "INSERT INTO suppliercompany(name,email,phonenumber,street,town,postalcode,country,state) VALUES(
		" . $this->db->escape($name).",
	    " . $this->db->escape($email).",
	    " . $this->db->escape($number).",
	    " . $this->db->escape($street).",
	    " . $this->db->escape($town).",
	    " . $this->db->escape($postalcode).",
	    " . $this->db->escape($country).",
	    " . $this->db->escape($state)."
	  
	)";

	    $result=$this->db->query($sql);
	    redirect("user/suppliers");
	}
	public function company_profile(){
		$companyname = $this->input->post('companyname');
		$companyemail=$this->input->post('companyemail');
		$companyphone=$this->input->post('companyphone');
		$companylocation=$this->input->post('companylocation');
		$county=$this->input->post('county');
		$companytype=$this->input->post('companytype');
		$streetlocation=$this->input->post('streetlocation');
		$avenuelocation=$this->input->post('avenuelocation');
		$building=$this->input->post('building');
		$town=$this->input->post('town');
		$street=$this->input->post('street');
		$postalcode = $this->input->post('postalcode');
		$companywebsite=$this->input->post('companywebsite');
		$sql = "INSERT INTO company(companyname,companyemail,companyphone,companylocation,county,companytype,streetlocation,avenuelocation,building,town,street,postalcode,companywebsite) VALUES(
		" . $this->db->escape($companyname).",
		 " . $this->db->escape($companyemail).",
	    " . $this->db->escape($companyphone).",
	    " . $this->db->escape($companylocation).",
	    " . $this->db->escape($county).",
	     " . $this->db->escape($companytype).",
	      " . $this->db->escape($streetlocation).",
	       " . $this->db->escape($avenuelocation).",
	        " . $this->db->escape($building).",
	      " . $this->db->escape($town).",
	    " . $this->db->escape($street).",
	    " . $this->db->escape($postalcode).",
	    " . $this->db->escape($companywebsite)."
	)";
	    $result=$this->db->query($sql);
	    redirect("user/admin");
	}
	public function getunpaidinvoices(){
		$this->db->select_sum('balancedue');
	    $query = $this->db->get('invoices');
	    return $query;
	}
	public function getsales(){
		$this->db->select_sum('amount');
	    $query = $this->db->get('sales');
	    return $query;
	}
	public function getsales1(){
	    $query = $this->db->get('sales');
	    return $query;
	}
	
	public function getexpenses(){
		$this->db->select_sum('amount');
	    $query = $this->db->get('expenses');
	    return $query;
	}
	public function getcash(){
		$this->db->select_sum('amount');
	    $query = $this->db->get('cashtransactions');
	    return $query;
	}
	public function getpurchases(){
		$this->db->select_sum('amount');
	    $query = $this->db->get('purchases');
	    return $query;
	}
	public function getbank(){
		$this->db->select_sum('amount');
	    $query = $this->db->get('bankaccount');
	    return $query;
	}
	public function getclients(){
		$this->db->select('id');
		$this->db->distinct();
		$this->db->from('clients');
		$query = $this->db->get();
		return $query;
	}
	public function getincome(){
		$this->db->select_sum('amountpaid');
	    $query = $this->db->get('incomeaccount');
	    return $query;
	}
	public function getbankaccount(){
		$this->db->select_sum('amount');
	    $query = $this->db->get('bankaccount');
	    return $query;
	}
	public function gettotalincome(){
		$this->db->select_sum('amountpaid');
		$query = $this->db->get('totalincome');
		return $query;
	}
	public function gettotalincome1(){
		$query = $this->db->get('totalincome');
		return $query;
	}
	public function add_invoice(){
		$invoicenumber=$this->input->post('invoicenumber');
		$clientname = $this->input->post('clientname');
		$amountdue=$this->input->post('amountdue');
		$productname=$this->input->post('productname');
		$productdescription=$this->input->post('productdescription');
		$productquantity=$this->input->post('productquantity');
		$unitprice=$this->input->post('unitprice');
		$total=$this->input->post('total');
		$amountpaid=$this->input->post('amountpaid');
		$balancedue=$this->input->post('balancedue');
		$sql = "INSERT INTO invoices(invoicenumber,clientname,clientphone,clientemail,productname,productdescription,productquantity,dategiven,duedate) VALUES(
		" . $this->db->escape($invoicenumber).",
		" . $this->db->escape($clientname).",
	    " . $this->db->escape($amountdue).",
	    " . $this->db->escape($productname).",
	    " . $this->db->escape($productdescription).",
	    " . $this->db->escape($productquantity).",
	    " . $this->db->escape($unitprice).",
	    " . $this->db->escape($total)."
	    " . $this->db->escape($amountpaid)." ,
	     " . $this->db->escape($balancedue)." ,
	)";
	    $result=$this->db->query($sql);
	    redirect("user/products");
	}
	public function bankaccount(){
		$receiptno=$this->input->post('receiptno');
		$bank=$this->input->post('bank');
		$details=$this->input->post('details');
		$depositdate=$this->input->post('depositdate');
		$amount = $this->input->post('amount');
		$sql = "INSERT INTO bankaccount(receiptno,bank,details,depositdate,amount) VALUES(
		" . $this->db->escape($receiptno).",
		" . $this->db->escape($bank).",
		" . $this->db->escape($details).",
		" . $this->db->escape($depositdate).",
		" . $this->db->escape($amount)."
	    )";
	    $result=$this->db->query($sql);
	}
	public function pettycashaccount(){
		$transferredby=$this->input->post('transferredby');
		$details=$this->input->post('details');
		$depositdate=$this->input->post('depositdate');
		$amount = $this->input->post('amount');
		$sql = "INSERT INTO pettycashaccount(transferredby,details,depositdate,amount) VALUES(
		" . $this->db->escape($transferredby).",
		" . $this->db->escape($details).",
		" . $this->db->escape($depositdate).",
		" . $this->db->escape($amount)."
	    )";
	    $result=$this->db->query($sql);
	}
	public function add_product(){
		$productname=$this->input->post('productname');
		$productcategory=$this->input->post('productcategory');
		$productquantity=$this->input->post('productquantity');
		$productdate = $this->input->post('productdate');
		$productdescription=$this->input->post('productdescription');
		$unitprice=$this->input->post('unitprice');
		$productimage=$this->input->post('productimage');
		$sql = "INSERT INTO products(productname,productcategory,productquantity,productdate,productdescription,unitprice) VALUES(
		" . $this->db->escape($productname).",
		" . $this->db->escape($productcategory).",
		" . $this->db->escape($productquantity).",
		" . $this->db->escape($productdate).",
		" . $this->db->escape($productdescription).",
	    " . $this->db->escape($unitprice)."
	    )";
	    $result=$this->db->query($sql);
	    redirect("user/products");
	}
	public function add_service(){
		$servicename=$this->input->post('servicename');
		$servicecategory=$this->input->post('servicecategory');
		$purchaseinformation=$this->input->post('purchaseinformation');
		$salesinformation = $this->input->post('salesinformation');
		$servicedescription=$this->input->post('servicedescription');
		$unitprice=$this->input->post('unitprice');
		$sql = "INSERT INTO services(servicename,servicecategory,purchaseinformation,salesinformation,servicedescription,unitprice) VALUES(
		" . $this->db->escape($servicename).",
		" . $this->db->escape($servicecategory).",
		" . $this->db->escape($purchaseinformation).",
		" . $this->db->escape($salesinformation).",
		" . $this->db->escape($servicedescription).",
	    " . $this->db->escape($unitprice)."
	    )";
	    $result=$this->db->query($sql);
	    redirect("user/products");
	}
	public function fetch_product(){
		$query = $this->db->get("products");
		return $query;
	}
	public function fetch_service(){
		$query = $this->db->get("services");
		return $query;
	}
	public function fetch_logo(){
		$query = $this->db->get("table_img");
		return $query;
	}
	public function fetch_productimage(){
		$query = $this->db->get("table_productimg");
		return $query;
	}
	public function fetch_quotations(){
		$query = $this->db->get("quotations");
		return $query;
	}
	public function fetch_clientinvoice(){
		$query = $this->db->get("invoices");
		return $query;
	}
	public function fetch_incomeaccounts(){
		$query = $this->db->get('incomeaccount');
		return $query;
	}
	public function fetch_cashtransactions(){
		$query = $this->db->get('cashtransactions');
		return $query;
	}
	public function fetch_cashtransactions1(){
		$query = $this->db->get('cashtransactions');
		return $query->result();
	}
	public function fetch_serviceimage(){
		$query = $this->db->get("table_serviceimg");
		return $query;
	}
	public function fetch_expenses(){
		$query = $this->db->get("expenses");
		return $query;
	}
	public function fetch_supplier(){
		$query = $this->db->get("suppliers");
		return $query;
	}
	public function fetch_suppliercompany(){
		$query = $this->db->get("suppliercompany");
		return $query;
	}
	public function fetch_purchases(){
		$query = $this->db->get("purchases");
		return $query;
	}
	public function fetch_company(){
		$query = $this->db->get("company");
		return $query;
	}
	public function fetch_editinvoice(){
		$query = $this->db->get("editinvoice");
		return $query;
	}
	public function fetch_editquotation(){
		$query = $this->db->get("editquotation");
		return $query;
	}
	public function fetch_bankaccount(){
		$query = $this->db->get("bankaccount");
		return $query;
	}
	public function gettotalexpenditure(){
		$this->db->select_sum('amount');
		$query = $this->db->get('totalexpenditure');
		return $query;
	}
	public function gettotalexpenditure1(){
		$query = $this->db->get('totalexpenditure');
		return $query;
	}
	public function fetch_pettycashaccount(){
		$query = $this->db->get("pettycashaccount");
		return $query;
	}
	public function fetch_deletedinvoices(){
		$query = $this->db->get("deletedinvoices");
		return $query;
	}
	public function update_profile($data,$id){
		return $this->db->where('id',$id)
		                 ->update('company',$data);
	}
	public function update_product($data,$id){
		return $this->db->where('id',$id)
		                 ->update('products',$data);
	}
	public function update_service($data,$id){
		return $this->db->where('id',$id)
		                 ->update('services',$data);
	}
	public function update_client($data,$id){
		return $this->db->where('id',$id)
		                 ->update('clients',$data);
	}
	public function fetch_invoices(){
		$query = $this->db->get("invoices");
		return $query;
	}
	public function fetch_clients(){
		$query = $this->db->get("clients");
		return $query;
	}
	public function fetch_clientcompany(){
		$query = $this->db->get("clientcompany");
		return $query;
	}
	public function getsupplierdata($id){
		$this->db->select(['suppliers.id','suppliers.firstname','suppliers.secondname','suppliers.email','suppliers.street','suppliers.town','suppliers.phone','suppliers.state']);
		$this->db->from('suppliers');
		$this->db->where(['suppliers.id'=>$id]);
		$clients = $this->db->get();
		return $clients->result();
	}
	public function getclientdata($id){
		$this->db->select(['clients.id','clients.firstname','clients.secondname','clients.email','clients.street','clients.town','clients.company','clients.phone','clients.state','clients.products']);
		$this->db->from('clients');
		$this->db->where(['clients.id'=>$id]);
		$clients = $this->db->get();
		return $clients->result();
	}
	public function get_salesinfo(){
		$query = $this->db->get('sales');
		return $query->result();
	}
	public function getcashtransactionsdata($id){
		$this->db->select(['cashtransactions.cash_id','cashtransactions.no','cashtransactions.product','cashtransactions.transactiondate','cashtransactions.quantity','cashtransactions.clientemail','cashtransactions.unitprice','cashtransactions.clientname','cashtransactions.clientphone','cashtransactions.total','cashtransactions.tax','cashtransactions.amount']);
		$this->db->from('cashtransactions');
		$this->db->where(['cashtransactions.cash_id'=>$id]);
		$receipts = $this->db->get();
		return $receipts->result();
	}
	public function getincomeaccountdata($id){
		$this->db->select(['incomeaccount.id','incomeaccount.invoice_id','incomeaccount.product','incomeaccount.amountpaid','incomeaccount.dateofreceipt','incomeaccount.quantity','incomeaccount.clientemail','incomeaccount.unitprice','incomeaccount.clientname','incomeaccount.clientphone','incomeaccount.total','incomeaccount.tax','incomeaccount.balancedue','incomeaccount.newamountpaid']);
		$this->db->from('incomeaccount');
		$this->db->where(['incomeaccount.id'=>$id]);
		$receipts = $this->db->get();
		return $receipts->result();
	}
	public function getincomeaccountdata1($id){
		$this->db->select(['incomeaccount.id','incomeaccount.invoice_id','incomeaccount.product','incomeaccount.amountpaid','incomeaccount.dateofreceipt','incomeaccount.quantity','incomeaccount.clientemail','incomeaccount.unitprice','incomeaccount.clientname','incomeaccount.clientphone','incomeaccount.total','incomeaccount.tax','incomeaccount.balancedue','incomeaccount.newamountpaid']);
		$this->db->from('incomeaccount');
		$this->db->where(['incomeaccount.id'=>$id]);
		$receipts = $this->db->get();
		return $receipts->row();
	}
	public function getinvoicedata($id){
		$this->db->select(['invoices.invoice_id','invoices.no','invoices.clientname','invoices.clientemail','invoices.invoicedate','invoices.duedate','invoices.billingaddress','invoices.clientphone','invoices.product','invoices.quantity','invoices.unitprice','invoices.amount','invoices.total','invoices.tax','invoices.amountpaid','invoices.balancedue','invoices.newamountpaid']);
		$this->db->from('invoices');
		$this->db->where(['invoices.invoice_id'=>$id]);
		$clients = $this->db->get();
		return $clients->result();
	}
	public function getquotationdata($id){
		$this->db->select(['quotations.id','quotations.no','quotations.clientname','quotations.clientemail','quotations.invoicedate','quotations.billingaddress','quotations.clientphone','quotations.product','quotations.quantity','quotations.unitprice','quotations.amount','quotations.total']);
		$this->db->from('quotations');
		$this->db->where(['quotations.id'=>$id]);
		$quotations = $this->db->get();
		return $quotations->result();
	}
	public function getproductdata($id){
		$this->db->select(['products.id','products.productname','products.productcategory','products.productquantity','products.productdate','products.productdescription','products.unitprice']);
		$this->db->from('products');
		$this->db->where(['products.id'=>$id]);
		$clients = $this->db->get();
		return $clients->result();
	}
	public function getservicedata($id){
		$this->db->select(['services.id','services.servicename','services.servicecategory','services.purchaseinformation','services.salesinformation','services.servicedescription','services.unitprice']);
		$this->db->from('services');
		$this->db->where(['services.id'=>$id]);
		$services = $this->db->get();
		return $services->result();
	}
	public function getsuppliercompanydata($id){
		$this->db->select(['suppliercompany.id','suppliercompany.name','suppliercompany.email','suppliercompany.phonenumber','suppliercompany.street','suppliercompany.town','suppliercompany.postalcode','suppliercompany.country','suppliercompany.state']);
		$this->db->from('suppliercompany');
		$this->db->where(['suppliercompany.id'=>$id]);
		$clients = $this->db->get();
		return $clients->result();

	}
	public function getclientcompanydata($id){
		$this->db->select(['clientcompany.id','clientcompany.name','clientcompany.email','clientcompany.phonenumber','clientcompany.street','clientcompany.town','clientcompany.postalcode','clientcompany.country','clientcompany.state']);
		$this->db->from('clientcompany');
		$this->db->where(['clientcompany.id'=>$id]);
		$clients = $this->db->get();
		return $clients->result();

	}
	public function getcompanydata($id){
		$this->db->select(['company.id','company.companyname','company.companyphone','company.companyemail','company.companylocation','company.county','company.street','company.companywebsite','company.postalcode']);
		$this->db->from('company');
		// $this->db->join('table_img','company.id = table_img.id');
		$this->db->where(['company.id'=>$id]);
		$companies = $this->db->get();
		return $companies->result();

	}
	public function getcompanyrecords($id){
		$this->db->select(['company.id','company.companyname','company.companyphone','company.companyemail','company.companylocation','company.county','company.street','company.companywebsite','company.postalcode','company.companytype','company.streetlocation','company.avenuelocation','company.building','company.town']);
		$this->db->from('company');
		$company=$this->db->get();
		return $company->row();
	}
	public function getinvoicerecords($id){
		$this->db->select(['invoices.invoice_id','invoices.no','invoices.clientname','invoices.clientemail','invoices.invoicedate','invoices.duedate','invoices.billingaddress','invoices.clientphone','invoices.product','invoices.quantity','invoices.unitprice','invoices.amount','invoices.total','invoices.tax','invoices.amountpaid','invoices.balancedue']);
		$this->db->from('invoices');
		$this->db->where(['invoices.invoice_id'=>$id]);
		$invoices = $this->db->get();
		return $invoices->row();
	}
	public function getservicerecords($id){
		$this->db->select(['services.id','services.servicename','services.servicecategory','services.purchaseinformation','services.salesinformation','services.servicedescription','services.unitprice']);
		$this->db->from('services');
		$company=$this->db->get();
		return $company->row();
	}
	public function getproductrecords($id){
		$this->db->select(['products.id','products.productname','products.productcategory','products.productquantity','products.productdate','products.productdescription','products.unitprice']);
		$this->db->from('products');
		$company=$this->db->get();
		return $company->row();
	}
	public function getclientrecords($id){
		$this->db->select(['clients.id','clients.firstname','clients.secondname','clients.email','clients.street','clients.town','clients.company','clients.phone','clients.state','clients.products']);
		$this->db->from('clients');
		$company=$this->db->get();
		return $company->row();
	}
	public function getUser($id){
		$query = $this->db->get_where('users',array('id'=>$id));
		return $query->row_array();

	}

	public function activate($data, $id){
		$this->db->where('users.id', $id);
		return $this->db->update('users', $data);
	}
	public function setID($ID) {
        $this->_ID = $ID;
    }
 
    public function setURL($url) {
        $this->_url = $url;
    }
    // get image
    public function getPicture() {        
        $this->db->select(array('p.id','p.logo'));
        $this->db->from('table_img p');  
        $this->db->where('p.id', $this->_ID);     
        $query = $this->db->get();
       return $query->row_array();
    }
    // insert image
    public function create() { 
        $data = array(
            'logo' => $this->_url,
        );
        $this->db->insert('table_img', $data);
        return $this->db->insert_id();
    }
     public function createproduct() { 
        $data = array(
            'productimage' => $this->_url,
        );
        $this->db->insert('table_productimg', $data);
        return $this->db->insert_id();
    }
    public function createservice() { 
        $data = array(
            'serviceimage' => $this->_url,
        );
        $this->db->insert('table_serviceimg', $data);
        return $this->db->insert_id();
    }
	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$sql = "SELECT id,email,active,password FROM users WHERE email = '{$email}' LIMIT 1";
		$result = $this->db->query($sql);
		$row=$result->row();
		if($result->num_rows()===1){
			if($row->active ){
				if ($row->password === sha1($this->config->item('salt') . $password)) {
					$session_data=array('email','email');
        		$this->session->set_userdata('email',$email);
					return 'logged_in';
				}
				else{
					return "incorrect_password";
				}
			}
			else{
					return "not_activated";
				}
		}
		else{
					return "email not found";
				}
	    }

}
