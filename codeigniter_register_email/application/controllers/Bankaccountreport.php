<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Bankaccountreport extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bankaccountreport_model','customers');
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
        $data['gettotalbankaccount'] = $this->users_model->gettotalbankaccount();
        $data['fetch_expenses'] = $this->users_model->fetch_expenses();
        $data['form_country'] = form_dropdown('',$opt,'','id="country" class="form-control"');
        $this->load->view('gettotalbankaccount', $data);
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
            $row['receiptno'] = $customers->receiptno;
            $row['bank'] = $customers->bank;
            $row['details'] = $customers->details;
            $row['depositdate'] = $customers->depositdate;
             $row['amount'] = $customers->amount;
 
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