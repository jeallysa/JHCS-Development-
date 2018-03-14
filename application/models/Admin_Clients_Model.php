<?php

class Admin_Clients_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->query("SELECT client_id, client_company, client_fname, client_lname, CONCAT(client_fname, ' ', client_lname) AS contact_personnel, client_position, client_email, client_address, client_contact, client_type FROM contracted_client");
		return $query;
	}

	function update($id, $comp_name, $cli_type, $l_name, $f_name, $address, $email, $cell_no){
		$data = array(
	        'client_company' => $comp_name,
	        'client_type' => $cli_type,
	        'client_lname' => $l_name,
	        'client_fname' => $f_name,
	        'client_address' => $address,
	        'client_email' => $email,
	        'client_contact' => $cell_no	        
		);

		$this->db->where('client_id', $id);
		$this->db->update('contracted_client', $data);
	}

}