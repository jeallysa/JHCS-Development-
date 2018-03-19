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
		$query = $this->db->query("SELECT sup_id, sup_company, sup_fname, sup_lname, CONCAT(sup_fname, ' ', sup_lname) AS contact_personnel, sup_position, sup_address, sup_email, sup_contact FROM supplier");
		return $query;
	}

	function update($id, $sup_company, $sup_address, $sup_email, $sup_contact, $sup_position, $sup_fname, $sup_lname){
		$data = array(

			'sup_company' => $sup_company,
	        'sup_address' => $sup_address,
	        'sup_email' => $sup_email,
	        'sup_contact' => $sup_contact,
	        'sup_position' => $sup_position,
	        'sup_fname' => $sup_fname,
	        'sup_lname' => $sup_lname

		);

		$this->db->where('sup_id', $id);
		$this->db->update('supplier', $data);
	}

	

}