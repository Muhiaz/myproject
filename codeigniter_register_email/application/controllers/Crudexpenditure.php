<?php
class Crud extends CI_Controller{
	public function index(){
		$data1['fetch_company'] = $this->users_model->fetch_company();
		$data1['fetch_logo'] = $this->users_model->fetch_logo();
		$data1['gettotals'] = $this->users_model->getunpaidinvoices();
		$data1['getincome'] = $this->users_model->getincome();
		$data1['getbank'] = $this->users_model->getbank();
		$data1['getexpenses'] = $this->users_model->getexpenses();
		$data1['getpurchases'] = $this->users_model->getpurchases();
		$data1['getcash'] = $this->users_model->getcash();
		$data1['getsales'] = $this->users_model->getsales1();
		$data1['getsales1'] = $this->users_model->getsales();
		$data1['fetch_invoices'] = $this->users_model->fetch_invoices();
		$data1['getclients'] = $this->users_model->getclients();
		$this->load->view('expenditurereport',$data1);
	}
	public function fetch_user(){
		$this->load->model('crudexpenditure_model');
		$fetch_data=$this->crud_model->make_datatables();
		$data= array();
		foreach ($fetch_data as $row) {
			$sub_array = array();
			$sub_array["product"]=$row->product;
			$sub_array["quantity"]=$row->quantity;
			$sub_array["unitprice"]=$row->unitprice;
			$sub_array["amount"]=$row->amount;
			$sub_array["date"]=$row->date;
			$data[] = $sub_array;
		}
		$output = array(
			// "draw"=>intval($_POST["draw"]),
			"recordstotal"=>$this->crud_model->get_all_data(),
			"recordsfiltered"=>$this->crud_model->get_filtered_data(),
			"data"=>$data
		);
		echo json_encode($output);
	}
}

?>