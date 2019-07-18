<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * @package Image :  CodeIgniter Upload Image with MySQL
 *
 * @author TechArise Team
 *
 * @email info@techarise.com
 *   
 * Description of Upload Image Controller
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pdf_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    // upload image
    public function generate_pdf_report() {        
        $this->load->view('salesreportview');
    }    
    // action save method
}
?>