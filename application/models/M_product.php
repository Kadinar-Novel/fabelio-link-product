<?php 

class M_product extends CI_Model{
	function show_data(){
		return $this->db->get('page_link');
	}

	function show_link($where,$table){
		return $this->db->get_where($table,$where);
	}

	function add_data($data,$table){
		$this->db->insert($table,$data);
	}

	function delete_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
}
}