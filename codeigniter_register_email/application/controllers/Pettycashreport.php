<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pettycashreport extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pettycashreport_model','customers');
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
        $data['gettotalpettycashaccount'] = $this->users_model->gettotalpettycashaccount();
        $data['form_country'] = form_dropdown('',$opt,'','id="country" class="form-control"');
        $this->load->view('gettotalpettycashaccount', $data);
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
            $row['depositdate'] = $customers->depositdate;
            $row['transferredby'] = $customers->transferredby;
            $row['details'] = $customers->details;
            $row['id'] = $customers->id;
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