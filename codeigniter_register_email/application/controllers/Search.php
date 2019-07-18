<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Search extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('custom_search','customers');
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
            $row[] = $customers->clientname;
            $row[] = $customers->invoice_id;
            $row[] = $customers->product;
            $row[] = $customers->quantity;
            $row[] = $customers->unitprice;
            $row[] = $customers->amount;
             $row[] = $customers->invoicedate;
 
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