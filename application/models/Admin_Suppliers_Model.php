<?php

class Admin_Suppliers_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->query("SELECT sup_id, sup_company, CONCAT(sup_fname, ' ', sup_lname) AS contact_personnel, sup_position, sup_address, sup_email, sup_contact FROM supplier");
		return $query;
	}

	public function get_by_id($id)
	{
		$this->db->from('supplier');
		$this->db->where('sup_id',$id);
		$query = $this->db->get();
 
		return $query->row();
	}

	public function sup_update($where, $data)
	{
		$this->db->update('supplier', $data, $where);
		return $this->db->affected_rows();
	}

}