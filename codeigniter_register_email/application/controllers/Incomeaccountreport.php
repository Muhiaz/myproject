<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Incomeaccountreport extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('incomeaccountreport_model','customers');
        $this->load->model('users_model');

    }
 
    public function index()
    {
        $this->load->helper('url');
        $this->load->helper('form');
         
        $countries = $this->customers->get_list_countries();
 
        $opt = array('' => 'All Country');
        foreach ($countries as $country) {
            $opt[$country] = $country;
        }
        $data['fetch_incomeaccounts'] = $this->users_model->fetch_incomeaccounts();
        $data['form_country'] = form_dropdown('',$opt,'','id="country" class="form-control"');
        $this->load->view('accounts', $data);
    }
    
 
    public function ajax_list()
    {
        $list = $this->customers->get_datatables();
        $data = array();
        // $no = $_POST['start'];
        foreach ($list as $customers) {
            // $no++;
            $row = array();
             // $row[] = $no;
            $row['id'] = $customers->id;
            $row['invoice_id'] = $customers->invoice_id;
            $row['amountpaid'] = $customers->amountpaid;
            $row['balancedue'] = $customers->balancedue;
            $row['dateofreceipt'] = $customers->dateofreceipt;
            $row['product'] = $customers->product;
            $row['clientname'] = $customers->clientname;
            $row['clientphone'] = $customers->clientphone;
            $row['quantity'] = $customers->quantity;
            $row['unitprice'] = $customers->unitprice;
            $row['amount'] = $customers->amount;
             $row['clientemail'] = $customers->clientemail;
            $data[] = $row;
        }
 
        $output = array(
                        // "draw" => $_POST['draw'],
                        "recordsTotal" => $this->customers->count_all(),
                        "recordsFiltered" => $this->customers->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
}