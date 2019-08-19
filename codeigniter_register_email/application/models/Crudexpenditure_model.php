<?php
/**
 * 
 */
class Crudexpenditure_model extends CI_Model
{
	var $table = "totalexpenditure";
	   var $select_column = array('product','quantity','unitprice','amount','date','amount');
	    var $order_column = array('product','quantity','unitprice','amount','date','amount');
	    function make_query(){
	    	$this->db->select($this->select_column);
	    	$this->db->from($this->table);
	    	if (isset($_POST["search"]["value"])) {
	    		$this->db->like('quantity',$_POST["search"]["value"]);
	    		$this->db->or_like('product',$_POST["search"]["value"]);
	    	}
	    	if (isset($_POST["order"])) {
	    		$this->db->order_by($this->order_column[$_POST['order']['0']['column']],$_POST['order']['0']['dir']);
	    		// $this->db->or_like('clientname',$_POST["search"]["value"]);
	    	}
	    	else{
	    		$this->db->order_by('quantity','ASC');

	    	}
	    }
	    public function make_datatables(){
	    		$this->make_query();
	    		if(isset($_POST["length"])) {
	    			$this->db->limit($_POST["length"],$_POST["start"]);
	    		}
	    		$query = $this->db->get();
	    		return $query->result();
	    	}
	    	public function get_filtered_data(){
	    		$this->make_query();
	    		$query = $this->db->get();
	    		return $query->num_rows();
	    	}
	    	public function get_all_data(){
	    		 $this->db->select('*');
	    		 $this->db->from($this->table);
	    		return $this->db->count_all_results();
	    	}

}
?>