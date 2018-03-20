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
		$query = $this->db->query("SELECT user_no, u_lname, u_fname, u_type, u_address, u_email, u_contact, u_activation FROM user");
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
    
    function activation($id){
		$this->db->query("UPDATE user SET u_activation = IF(u_activation=1, 0, 1) WHERE user_no = ".$id."");
	}

}
