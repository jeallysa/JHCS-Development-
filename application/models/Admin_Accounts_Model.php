<?php

class Admin_Accounts_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->get("user");
		return $query;
	}

	function update($id, $l_name, $f_name, $position, $address, $email, $cell_no){
		$data = array(
	        
	        'u_lname' => $l_name,
	        'u_fname' => $f_name,
	        'u_type' => $position,
	        'u_address' => $address,
	        'u_email' => $email,
	        'u_contact' => $cell_no
	        
		);

		$this->db->where('user_no', $id);
		$this->db->update('user', $data);
	}

}
