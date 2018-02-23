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
		$query = $this->db->query("SELECT client_id, client_company, CONCAT(client_fname, ' ', client_lname) AS contact_personnel, client_position, client_email, client_address, client_contact, client_type FROM contracted_client");
		return $query;
	}

}