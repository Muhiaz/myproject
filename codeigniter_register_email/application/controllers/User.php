<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('users_model');
		$this->users_model->login();
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');

        //get all users
        $this->data['users'] = $this->users_model->getAllUsers();
	}

	public function index(){
		$this->load->view('register', $this->data);
		 $data['page'] = 'image-img';
        $data['title'] = 'Upload Image | TechArise';         
        // $this->load->view('img/index', $data);
	}
	public function clientreceipt($id){
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['receipts']=$this->users_model->getincomeaccountdata($id);
		$data['fetch_editinvoice'] = $this->users_model->fetch_editinvoice();
		$this->load->view('receipttemplate',$data);
	}
	public function edit_invoice(){
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_editinvoice'] = $this->users_model->fetch_editinvoice();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('invoiceprefix','Invoice Prefix', 'required');
		if($this->form_validation->run()){
			$this->users_model->edit_invoice();
			return redirect("user/invoices");
		}
		else{
			echo "error";
		}
	}
	public function edit_quotation(){
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_editquotation'] = $this->users_model->fetch_editquotation();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('invoiceprefix','Invoice Prefix', 'required');
		if($this->form_validation->run()){
			$this->users_model->edit_quotation();
			return redirect("user/quotations");
		}
		else{
			echo "error";
		}
	}
	public function accounts(){
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_incomeaccounts'] = $this->users_model->fetch_incomeaccounts();
		$data['fetch_editinvoice'] = $this->users_model->fetch_editinvoice();
		$this->load->view('accounts',$data);
	}
	public function reports(){
		$this->load->view('reports');
	}
	public function pdfinvoice(){
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$this->load->library('Pdf');
		$this->load->view('pdfinvoice', $data);         
        // $this->load->view('img/index', $data);
	}
	 public function myformAjax($id) { 
       $result = $this->db->where('id',$id)->get("clients")->result();
       echo json_encode($result);
   }
   public function myformAjax1($id) { 
       $result = $this->db->where('id',$id)->get("clientcompany")->result();
       echo json_encode($result);
   }


	public function sendemail(){
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$subject = $this->input->post('subject');
		$emailbody = $this->input->post('emailbody');
		$attachment = $this->upload_file();
		$this->load->view('sendemail',$data);
		if (is_array($attachment)) {
			$message = "Successfully sent the email";
			$config = array(
				'protocol' => 'smtp',
		  		'smtp_host' => 'ssl://smtp.googlemail.com',
		  		'smtp_port' => 465,
		  		'smtp_user' => 'davidmuhia87@gmail.com', // change it to yours
		  		'smtp_pass' => 'annwacuka', // change it to yours
		  		'mailtype' => 'html',
		  		'charset' => 'iso-8859-1',
		  		'wordwrap' => TRUE
			);
			$this->load->library('email',$config);
			$this->email->set_newline("\r\n");
			$this->email->from($this->input->post('email'));
			$this->email->to('zoghoriinvestments@gmail.com');
			$this->email->subject($subject);
			$this->email->message($emailbody);
			$this->email->attach($attachment['full_path']);
			if ($this->email->send()) {
				if (delete_files($attachment['file_path'])){
					$this->session->set_flashdata('message','Email sent');
					redirect("user/clients");
				}
			}
			else{

			}
		}
		else{
			$this->session->set_flashdata('message','There is an error in attached file.');
		}
	}
	public function upload_file(){
		$config['upload_path']='./uploads';
		$config['allowed_types']='doc|docx|pdf|odt';
		$this->load->library('upload',$config);
		if($this->upload->do_upload('attachment')){
			return $this->upload->data();
		}
		else{
			$this->upload->display_errors();
		}
	}
	public function views(){
		$data1['fetch_logo'] = $this->users_model->fetch_logo();
		$this->load->view('viewcompany',$data);
	}
	public function addservice(){
		$this->load->model('users_model');
		$data1['fetch_company'] = $this->users_model->fetch_company();
		$data1['fetch_logo'] = $this->users_model->fetch_logo();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('servicename', 'Service Name', 'required');
		$this->form_validation->set_rules('servicecategory', 'Service Category', 'required');
		$this->form_validation->set_rules('purchaseinformation', 'Purchase Information', 'required');
		$this->form_validation->set_rules('salesinformation', 'Sales Information', 'required');
		$this->form_validation->set_rules('servicedescription', 'Service Description', 'required');
		$this->form_validation->set_rules('unitprice', 'Unit Price', 'required');
		if ($this->form_validation->run()) {
			 $this->saveservice();
	         // $this->users_model->add_product();
	     
          // $this->load->view('admin', $data);
          
		}
		else{
			$this->load->view('add_service', $data1);
		}	
	}
	public function save_invoice(){
		$invoice_data = $this->input->post('data_table');
		$invoice = $this->users_model->save_invoice($invoice_data);
		$clientemail= $this->input->post('clientemail');
		$this->output->set_content_type('application/json');
		echo json_encode(array('invoice'=>$invoice));
	}
	public function saveinvoicepayment(){
		$invoice_data = $this->input->post('data_table');
		$invoice = $this->users_model->save_invoicepayment($invoice_data);
		$clientemail= $this->input->post('clientemail');
		$this->output->set_content_type('application/json');
		echo json_encode(array('invoice'=>$invoice));
	}
	public function save_quotation(){
		$quotation_data = $this->input->post('data_table');
		$quotation = $this->users_model->save_quotation($quotation_data);
		$clientemail= $this->input->post('clientemail');
		$this->output->set_content_type('application/json');
		echo json_encode(array('quotation'=>$quotation));
	}
	public function modifyserviceprofile($id){
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_service'] = $this->users_model->fetch_service();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_serviceimage'] = $this->users_model->fetch_serviceimage();
		$this->load->model('users_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('servicename', 'Service Name', 'required');
		$this->form_validation->set_rules('servicecategory', 'Service Category', 'required');
		$this->form_validation->set_rules('purchaseinformation', 'Purchase Information', 'required');
		$this->form_validation->set_rules('salesinformation', 'Sales Information', 'required');
		$this->form_validation->set_rules('servicedescription', 'Service Description','required');
		$this->form_validation->set_rules('unitprice', 'Unit Price','required');
		if ($this->form_validation->run()) {
			 // $this->save();
	   //    $this->users_model->company_profile();
			$data=$this->input->post();
			  // $this->users_model->company_profile();
			  if($this->users_model->update_service($data,$id)){
			  	$this->session->set_flashdata('message','Company record updated successfully');
			  }
	     else{
	     $this->session->set_flashdata('message','Failed to update Company record.') ;	
	     }
	     return redirect('user/services');
          }// $this->load->view('admin', $data);
        
		else{
			$this->load->view('editserviceprofile', $data);
		}
	}
	public function editserviceprofile($id){
		$servicedata['servicedata'] = $this->users_model->getservicerecords($id);
         $this->load->view('editserviceprofile',$servicedata);
	}
	public function admin(){
		$data1['fetch_company'] = $this->users_model->fetch_company();
		$data1['fetch_logo'] = $this->users_model->fetch_logo();
		$data1['gettotals'] = $this->users_model->gettotals();
		$data1['getincome'] = $this->users_model->getincome();
		$data1['bankaccount'] = $this->users_model->bankaccount();
		$this->load->view('admin',$data1);
	}
	public function viewclient($id){
		$clients = $this->users_model->getclientdata($id);
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		// $data['getclientdata'] = $this->users_model->getclientdata($id);
		$data['clients']=$this->users_model->getclientdata($id);
		$this->load->view('viewclient',$data);
	}
	public function clientinvoice($id){
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_editinvoice'] = $this->users_model->fetch_editinvoice();
		// $data['getclientdata'] = $this->users_model->getclientdata($id);
		$data['invoices']=$this->users_model->getinvoicedata($id);
		$this->load->view('invoicetemplate',$data);
	}

	 public function get_clientname(){
	 	$email = $this->input->get('clientemail');
	 	$name = $this->input->get('clientname');
	 	$client = $this->users_model->fetch_client($email,$name);
	 	echo json_encode($client);exit;
	 }
	public function viewclientcompany($id){
		$clients = $this->users_model->getclientcompanydata($id);
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		// $data['getclientdata'] = $this->users_model->getclientdata($id);
		$data['clients']=$this->users_model->getclientcompanydata($id);
		$this->load->view('viewclientcompany',$data);
	}
	public function viewproduct($id){
		$products = $this->uers_model->getproductdata($id);
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_productimage'] = $this->users_model->fetch_productimage();
		$data['products'] = $this->users_model->getproductdata($id);
		$this->load->view('productprofile',$data);
	}
	public function viewservice($id){
		$services = $this->users_model->getservicedata($id);
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_serviceimage'] = $this->users_model->fetch_serviceimage();
		$data['services'] = $this->users_model->getservicedata($id);
		$this->load->view('serviceprofile',$data);
	}
	public function viewquotation($id){
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_serviceimage'] = $this->users_model->fetch_serviceimage();
		$data['quotations'] = $this->users_model->getquotationdata($id);
		$data['fetch_editinvoice'] = $this->users_model->fetch_editinvoice();
		$data['fetch_editquotation'] = $this->users_model->fetch_editquotation();
		$this->load->view('quotationtemplate',$data);
	}

	public function viewcompany($id){
		$companies = $this->users_model->getcompanydata($id);
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['companies'] = $this->users_model->getcompanydata($id);
		$this->load->view('profile',$data);
	}
	public function viewcompanyimage($id){
		$companies = $this->users_model->getcompanyimage($id);
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['companies'] = $this->users_model->getcompanydata($id);
		$data['fetchcompany'] = $this->users_model->getcompanydata($id);
		$this->load->view('profile',$data);
	}
	public function products(){
		$this->load->model('users_model');
		$data['fetch_product'] = $this->users_model->fetch_product();
		$data['fetch_invoices'] = $this->users_model->fetch_invoices();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_clientcompany'] = $this->users_model->fetch_clientcompany();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_product'] = $this->users_model->fetch_product();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_productimage'] = $this->users_model->fetch_productimage();
		$this->load->view('products',$data);
	}
	public function invoicetemplate(){
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_clientinvoice'] = $this->users_model->fetch_clientinvoice();
		$data['fetch_service'] = $this->users_model->fetch_service();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_serviceimage'] = $this->users_model->fetch_serviceimage();
		$data['fetch_editinvoice'] = $this->users_model->fetch_editinvoice();
		$this->load->view('invoicetemplate',$data);
	}
	public function services(){
		$this->load->model('users_model');
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_service'] = $this->users_model->fetch_service();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_serviceimage'] = $this->users_model->fetch_serviceimage();
		$this->load->view('services',$data);
	}
	public function profile(){
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$this->load->view('companies',$data);
	}
	public function add_client(){
		$data1['fetch_company'] = $this->users_model->fetch_company();
		$data1['fetch_logo'] = $this->users_model->fetch_logo();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('secondname', 'Second Name', 'required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[8]|max_length[500]|valid_email|is_unique[clients.email]');
		$this->form_validation->set_rules('street', 'Street', 'required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('town', 'Town', 'required|min_length[1]|max_length[15]');
		$this->form_validation->set_rules('company', 'Company', 'required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('phone', 'Phone', 'required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('state', 'State', 'required|min_length[1]|max_length[150]');
		$this->form_validation->set_rules('products', 'Products', 'required|min_length[4]|max_length[150]');
		if ($this->form_validation->run()) {
			$this->load->model('users_model');
			$this->users_model->add_client();

		}
		else{
			$this->load->view('add_client',$data1);
		}
	}
	public function editclient($id){
		$clientdata['clientdata'] = $this->users_model->getclientrecords($id);
         $this->load->view('editclient',$clientdata);
	}
	public function quotations(){
		$data['fetch_product'] = $this->users_model->fetch_product();
		$data['fetch_invoices'] = $this->users_model->fetch_invoices();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_clientcompany'] = $this->users_model->fetch_clientcompany();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_product'] = $this->users_model->fetch_product();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_quotations'] = $this->users_model->fetch_quotations();
		$data['fetch_productimage'] = $this->users_model->fetch_productimage();
         $this->load->view('quotations',$data);
	}
	public function modifycompany($id){
		$data['fetch_company'] = $this->users_model->fetch_company();
		$this->load->model('users_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('companyname', 'Company Name', 'required');
		$this->form_validation->set_rules('companyemail', 'Company Email', 'required');
		$this->form_validation->set_rules('companyphone', 'Company Phone', 'required');
		$this->form_validation->set_rules('companylocation', 'Company Location', 'required');
		$this->form_validation->set_rules('county', 'County', 'required');
		$this->form_validation->set_rules('companytype', 'Company Type', 'required');
		$this->form_validation->set_rules('town', 'Town', 'required');
		$this->form_validation->set_rules('streetlocation', 'Street Location', 'required');
		$this->form_validation->set_rules('avenuelocation', 'Avenue Location', 'required');
		$this->form_validation->set_rules('street', 'Street', 'required');
		$this->form_validation->set_rules('postalcode', 'Postal Code', 'required');
		$this->form_validation->set_rules('companywebsite', 'Company Website');
		if ($this->form_validation->run()) {
			 // $this->save();
	   //    $this->users_model->company_profile();
			$data=$this->input->post();
			  // $this->users_model->company_profile();
			  if($this->users_model->update_profile($data,$id)){
			  	$this->session->set_flashdata('message','Company record updated successfully');
			  }
	     else{
	     $this->session->set_flashdata('message','Failed to update Company record.') ;	
	     }
	     return redirect('user/companies');
          }// $this->load->view('admin', $data);
        
		else{
			$this->load->view('companyprofile', $data);
		}
	}
	public function modifyclient($id){
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$this->load->model('users_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('secondname', 'Second Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('street', 'Street', 'required');
		$this->form_validation->set_rules('town', 'Town', 'required');
		$this->form_validation->set_rules('company', 'Company', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('products', 'Products', 'required');
		if ($this->form_validation->run()) {
			// $this->load->model('users_model');
			// $this->users_model->add_client();
			$data = $this->input->post();
			if($this->users_model->update_client($data,$id)){
			  	$this->session->set_flashdata('message','Company record updated successfully');
			  }
	     else{
	     $this->session->set_flashdata('message','Failed to update Company record.') ;	
	     }
	     return redirect('user/clients');
          }// $this->load->view('admin', $data);
        
		else{
			$this->load->view('admin', $data);
		}
	}
	public function companies(){
		$data1['fetch_company'] = $this->users_model->fetch_company();
		$data1['fetch_logo'] = $this->users_model->fetch_logo();
		$this->load->view('companies',$data1);
	}
	public function clientcompanies(){
		$data1['fetch_company'] = $this->users_model->fetch_company();
		$data1['fetch_logo'] = $this->users_model->fetch_logo();
		$data1['fetch_clientcompany'] = $this->users_model->fetch_clientcompany();
		$this->load->view('clients',$data1);
	}
	public function banks(){
		$this->load->model('users_model');
		$data['fetch_product'] = $this->users_model->fetch_product();
		$data['fetch_invoices'] = $this->users_model->fetch_invoices();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_bankaccount'] =$this->users_model->fetch_bankaccount();
		$data['fetch_clientcompany'] = $this->users_model->bankaccount();
		$this->load->view('bankaccount', $data);
	}
	public function main_view(){
		$this->load->view('companyprofile');
	}
	public function invoices(){
		$this->load->model('users_model');
		$data['fetch_product'] = $this->users_model->fetch_product();
		$data['fetch_invoices'] = $this->users_model->fetch_invoices();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_clientcompany'] = $this->users_model->fetch_clientcompany();
		$this->load->view('invoices', $data);
	}
	public function bankaccount(){
		$this->load->model('users_model');
		$data['fetch_product'] = $this->users_model->fetch_product();
		$data['fetch_invoices'] = $this->users_model->fetch_invoices();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('amount','Amount');
		if($this->form_validation->run()){
			$this->users_model->bankaccount();
		}
		else{
			$this->load->view('bankreceipt',$data);
		}
	}
	public function bankreceipt($id){
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['receipts']=$this->users_model->getincomeaccountdata1($id);
		$data['fetch_editinvoice'] = $this->users_model->fetch_editinvoice();
		$this->load->view('bankreceipt', $data);
	}
	public function payinvoice($id){
		$data['fetch_product'] = $this->users_model->fetch_product();
		$data['fetch_invoices'] = $this->users_model->fetch_invoices();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_clientcompany'] = $this->users_model->fetch_clientcompany();
		$data['invoicedata'] = $this->users_model->getinvoicerecords($id);
		$data['fetch_editinvoice'] = $this->users_model->fetch_editinvoice();
		$this->load->view('payinvoice',$data);

	}
	public function editcompany($id){
		$companydata['companydata'] = $this->users_model->getcompanyrecords($id);
		//  = ;
		// echo "<pre>";
		// print_r();
		// echo "</pre>";
		// exit();
		$this->load->view('editcompany',$companydata);

	}
	public function addinvoice(){
		$this->load->model('users_model');
		$data["fetch_product"]=$this->users_model->fetch_product();
		$data['fetch_clients']=$this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
// $this->load->view('add_invoice',);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('invoicenumber', 'Invoice Number', 'required');
		$this->form_validation->set_rules('clientname', 'Client Name', 'required');
		$this->form_validation->set_rules('amountdue', 'Amount Due', 'required');
		$this->form_validation->set_rules('productname', 'Product Name', 'required');
		$this->form_validation->set_rules('productdescription', 'Product Description', 'required');
		$this->form_validation->set_rules('productquantity', 'Product Quantity', 'required');
		$this->form_validation->set_rules('unitprice', 'Unit Price', 'required');
		$this->form_validation->set_rules('total', 'Total', 'required');
		$this->form_validation->set_rules('amountpaid', 'Amount Paid', 'required');
		$this->form_validation->set_rules('balancedue', 'Balance Due', 'required');
		if ($this->form_validation->run()) {
			$this->users_model->add_invoice();

		}
		else{
			$this->load->view('add_invoice',$data);
		}
	}
	public function add_clientcompany(){
		$this->load->model('users_model');
		$data1['fetch_company'] = $this->users_model->fetch_company();
		$data1['fetch_logo'] = $this->users_model->fetch_logo();
		$data1['fetch_clients']=$this->users_model->fetch_clients();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phonenumber', 'Phone Number', 'required');
		$this->form_validation->set_rules('street', 'Street', 'required');
		$this->form_validation->set_rules('town', 'Town', 'required');
		$this->form_validation->set_rules('postalcode', 'Postal Code', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		if ($this->form_validation->run()) {
			$this->users_model->add_clientcompany();

		}
		else{
			$this->load->view('clients',$data1);
		}
	}
	public function addproducts(){
		$this->load->model('users_model');
		$data1['fetch_company'] = $this->users_model->fetch_company();
		$data1['fetch_logo'] = $this->users_model->fetch_logo();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('productname', 'Product Name', 'required');
		$this->form_validation->set_rules('productcategory', 'Product Category', 'required');
		$this->form_validation->set_rules('productquantity', 'Product Quantity', 'required');
		$this->form_validation->set_rules('productdate', 'Product Date', 'required');
		$this->form_validation->set_rules('productdescription', 'Product Description', 'required');
		$this->form_validation->set_rules('unitprice', 'Unit Price', 'required');
		$this->form_validation->set_rules('productprofile', 'Unit Price', 'required');
		if ($this->form_validation->run()) {
			 $this->saveproduct();
	         // $this->users_model->add_product();
	     
          // $this->load->view('admin', $data);
          
		}
		else{
			$this->load->view('add_product', $data1);
		}
	}
	public function modifyproductprofile($id){
		$this->load->model('users_model');
		$data1['fetch_company'] = $this->users_model->fetch_company();
		$data1['fetch_logo'] = $this->users_model->fetch_logo();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('productname', 'Product Name', 'required');
		$this->form_validation->set_rules('productcategory', 'Product Category', 'required');
		$this->form_validation->set_rules('productquantity', 'Product Quantity', 'required');
		$this->form_validation->set_rules('productdate', 'Product Date', 'required');
		$this->form_validation->set_rules('productdescription', 'Product Description', 'required');
		$this->form_validation->set_rules('unitprice', 'Unit Price', 'required');
		if ($this->form_validation->run()) {
			// $this->load->model('users_model');
			// $this->users_model->add_client();
			$data = $this->input->post();
			if($this->users_model->update_product($data,$id)){
			  	$this->session->set_flashdata('message','Company record updated successfully');
			  }
	     else{
	     $this->session->set_flashdata('message','Failed to update Company record.') ;	
	     }
	     return redirect('user/products');
          }// $this->load->view('admin', $data);
        
		else{
			$this->load->view('admin', $data1);
		}
	}
	public function editproductprofile($id){
		$productdata['productdata'] = $this->users_model->getproductrecords($id);
		//  = ;
		// echo "<pre>";
		// print_r();
		// echo "</pre>";
		// exit();
		$this->load->view('editproductprofile',$productdata);

	}
	public function clients(){
		$this->load->model('users_model');
		$data['fetch_clients'] = $this->users_model->fetch_clients();
		$data['fetch_company'] = $this->users_model->fetch_company();
		$data['fetch_logo'] = $this->users_model->fetch_logo();
		$data['fetch_clientcompany'] = $this->users_model->fetch_clientcompany();
		$this->load->view('clients',$data);
        }
	public function login(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[8]|max_length[500]|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]|max_length[30]');
        if ($this->form_validation->run()==FALSE) {
        	$this->session->set_flashdata('message', 'User activated successfully You can now log in');
        	$this->load->view('login');

        }
        else{
        	$result=$this->users_model->login();
        	switch ($result) {
        		case 'logged_in':
        			// $this->load->view('admin');
        		redirect('user/admin');
        			break;
        		case 'incorrect_password':
        			$this->load->view('login');
        			break;
        		
        		case 'not_activated':
        			$this->load->view('login');
        		case 'email_not_found':
        			$this->load->view('login');
        	}
        }
	}

	public function register(){
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[8]|max_length[500]|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]|max_length[30]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) { 
         	$this->load->view('register', $this->data);
		}
		else{
			//get user inputs
			$email = $this->input->post('email');
			$password = sha1($this->config->item('salt') . $this->input->post('password'));

			//generate simple random code
			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);

			//insert user to users table and get id
			$user['email'] = $email;
			$user['password'] = $password;
			$user['code'] = $code;
			$user['active'] = false;
			$id = $this->users_model->insert($user);

			//set up email
			$config = array(
		  		'protocol' => 'smtp',
		  		'smtp_host' => 'ssl://smtp.googlemail.com',
		  		'smtp_port' => 465,
		  		'smtp_user' => 'davidmuhia87@gmail.com', // change it to yours
		  		'smtp_pass' => 'annwacuka', // change it to yours
		  		'mailtype' => 'html',
		  		'charset' => 'iso-8859-1',
		  		'wordwrap' => TRUE
			);

			$message = 	"
						<html>
						<head>
							<title>Verification Code</title>
						</head>
						<body>
							<h2>Thank you for Registering at Rich Tech Software .</h2>
							<p>Your Account:</p>
							<p>Email: ".$email."</p>
							<p>Password: ".$password."</p>
							<p>Please click the link below to activate your account.</p>
							<h4><a href='".base_url()."user/activate/".$id."/".$code."'>Activate My Account</a></h4>
						</body>
						</html>
						";
	 		
		    $this->load->library('email', $config);
		    $this->email->set_newline("\r\n");
		    $this->email->from($config['smtp_user']);
		    $this->email->to($email);
		    $this->email->subject('Signup Verification Email');
		    $this->email->message($message);

		    //sending email
		    if($this->email->send()){
		    	$this->session->set_flashdata('message','Activation code sent to email');
		    }
		    else{
		    	$this->session->set_flashdata('message', $this->email->print_debugger());
	 
		    }

        	redirect('register');
		}

	}
	
	public function companyprofile(){
		$data['fetch_company'] = $this->users_model->fetch_company();
		$this->load->model('users_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('companyname', 'Company Name', 'required');
		$this->form_validation->set_rules('companyemail', 'Company Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('companyphone', 'Company Phone', 'required');
		$this->form_validation->set_rules('companylocation', 'Company Location', 'required');
		$this->form_validation->set_rules('county', 'County');
		$this->form_validation->set_rules('streetlocation', 'Street Location');
		$this->form_validation->set_rules('avenuelocation', 'Avenue Location');
		$this->form_validation->set_rules('building', 'Building');
		$this->form_validation->set_rules('companytype', 'Company Type');
		$this->form_validation->set_rules('town','Town');
		$this->form_validation->set_rules('street', 'Street');
		$this->form_validation->set_rules('postalcode', 'Postal Code');
		$this->form_validation->set_rules('companywebsite', 'Company Website');
		if ($this->form_validation->run()) {
			 $this->save();
	      $this->users_model->company_profile();
	     
          // $this->load->view('admin', $data);
          
		}
		else{
			$this->load->view('companyprofile', $data);
		}
	}
	public function save() {
		$this->load->library('upload');
        $path = ROOT_UPLOAD_PATH;
        // Define file rules
        $initialize = $this->upload->initialize(array(
            "upload_path" => './uploads/',
            "allowed_types" => "gif|jpg|jpeg|png|bmp",
            "max_size" => '1000',
            "max_width"  => '1024',
            "max_height"  => '1760',
            "remove_spaces" => TRUE
        ));
        $imagename = 'no-img.jpg';
        if (!$this->upload->do_upload('logo')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $confg['image_library']='gd2';
        	$config['source_image']='./uploads'. $data['file_name'];
        	$confg['create_thumb']=FALSE;
        	$confg['maintain_ratio']=FALSE;
            $imagename = $data['file_name'];
            $this->users_model->setURL($imagename);            
            $this->users_model->create();
            $this->users_model->company_profile();                           
            $this->session->set_flashdata('img_uploaded_msg', '<div class="alert alert-success">Image uploaded successfully!</div>');
            $this->session->set_flashdata('img_uploaded', $imagename);
            redirect('user/admin');
        }
        } 
        public function saveproduct() {
		$this->load->library('upload');
        $path = ROOT_UPLOAD_PATH;
        // Define file rules
        $initialize = $this->upload->initialize(array(
            "upload_path" => './uploads/',
            "allowed_types" => "gif|jpg|jpeg|png|bmp",
            "max_size" => '1000',
            "max_width"  => '2024',
            "max_height"  => '1760',
            "remove_spaces" => TRUE
        ));
        $imagename = 'no-img.jpg';
        if (!$this->upload->do_upload('productimage')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $confg['image_library']='gd2';
        	$config['source_image']='./uploads'. $data['file_name'];
        	$confg['create_thumb']=FALSE;
        	$confg['maintain_ratio']=FALSE;
            $imagename = $data['file_name'];
            $this->users_model->setURL($imagename);            
            $this->users_model->createproduct();
            $this->users_model->add_product();                           
            $this->session->set_flashdata('img_uploaded_msg', '<div class="alert alert-success">Image uploaded successfully!</div>');
            $this->session->set_flashdata('img_uploaded', $imagename);
            redirect('user/admin');
        }
        }         
        public function saveservice() {
		$this->load->library('upload');
        $path = ROOT_UPLOAD_PATH;
        // Define file rules
        $initialize = $this->upload->initialize(array(
            "upload_path" => './uploads/',
            "allowed_types" => "gif|jpg|jpeg|png|bmp",
            "max_size" => '1000',
            "max_width"  => '2024',
            "max_height"  => '1760',
            "remove_spaces" => TRUE
        ));
        $imagename = 'no-img.jpg';
        if (!$this->upload->do_upload('serviceimage')) {
            $error = array('error' => $this->upload->display_errors());
            echo $this->upload->display_errors();
        } else {
            $data = $this->upload->data();
            $confg['image_library']='gd2';
        	$config['source_image']='./uploads'. $data['file_name'];
        	$confg['create_thumb']=FALSE;
        	$confg['maintain_ratio']=FALSE;
            $imagename = $data['file_name'];
            $this->users_model->setURL($imagename);            
            $this->users_model->createservice();
            $this->users_model->add_service();                           
            $this->session->set_flashdata('img_uploaded_msg', '<div class="alert alert-success">Image uploaded successfully!</div>');
            $this->session->set_flashdata('img_uploaded', $imagename);
            redirect('user/admin');
        }
        }
        public function getclientemail(){
        $keyword=$this->input->post('email');
        $data=$this->mautocomplete->GetRow($keyword);        
        echo json_encode($data);
    }        
	public function activate(){
		$id =  $this->uri->segment(3);
		$code = $this->uri->segment(4);

		//fetch user details
		$user = $this->users_model->getUser($id);

		//if code matches
		if($user['code'] == $code){
			//update user active status
			$data['active'] = true;
			$query = $this->users_model->activate($data, $id);

			if($query){
				$this->session->set_flashdata('message', 'Account activated successfully');
				redirect("user/login");
			}
			else{
				$this->session->set_flashdata('message', 'Something went wrong in activating account');
			}
		}
		else{
			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
		}

		redirect('register');

	}

}














