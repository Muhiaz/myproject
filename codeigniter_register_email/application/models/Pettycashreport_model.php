<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Site Model
 *
 * @author TechArise Team
 *
 * @email  info@techarise.com
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pettycashreport_model extends CI_Model {
    var $table = 'pettycashaccount';
    var $column_order = array('id','transferredby','details','depositdate','amount'); //set column field database for datatable orderable
    var $column_search = array('id','transferredby','details','depositdate','amount'); //set column field database for datatable searchable 
    var $order = array('id' => 'asc'); // default order 

     public function _get_datatables_query()
    {
   
        $this->db->from($this->table);

        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if(isset($_POST['search']['value'])) // if datatable send POST for search
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
        if(isset($_POST['length']))
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
        $this->db->select('id');
        $this->db->from($this->table);
        $this->db->order_by('id','asc');
        $query = $this->db->get();
        $result = $query->result();
 
        $countries = array();
        foreach ($result as $row) 
        {
            $countries[] = $row->country;
             }
        return $countries;
    }
    
 
}
?>