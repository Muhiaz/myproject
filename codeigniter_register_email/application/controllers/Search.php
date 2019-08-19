<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Search extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('custom_search','customers');
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
        $data['fetch_invoices'] = $this->users_model->fetch_invoices();
        $data['form_country'] = form_dropdown('',$opt,'','id="country" class="form-control"');
        $this->load->view('invoicesreport', $data);
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
            $row['name'] = $customers->clientname;
            $row['invoiceno'] = $customers->invoice_id;
            $row['product'] = $customers->product;
            $row['quantity'] = $customers->quantity;
            $row['unitprice'] = $customers->unitprice;
            $row['amount'] = $customers->amount;
             $row['amountpaid'] = $customers->amountpaid;
            $row['date'] = $customers->invoicedate;
            $row['balancedue'] = $customers->balancedue;
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