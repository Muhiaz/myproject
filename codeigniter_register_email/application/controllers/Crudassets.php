<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Crudassets extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('crudassetsreport_model','customers');
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
            $row['name'] = $customers->name;
            $row['invoiceno'] = $customers->id;
            $row['product'] = $customers->product;
            $row['quantity'] = $customers->quantity;
            $row['unitprice'] = $customers->unitprice;
            $row['amount'] = $customers->amount;
             $row['amountpaid'] = $customers->amountpaid;
            $row['balancedue'] = $customers->balancedue;
             $row['date'] = $customers->date;
 
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