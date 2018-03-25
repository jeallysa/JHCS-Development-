<?php

class Changepassword_Model extends CI_model
{
	function __construct()
	{ 
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function getCurrPassword($userid){
		$query = $this->db->where(['user_no' => $userid])
							->get('user');
		if ($query->num_rows() > 0) {
			return $query->row();
		} 
	}

	function updatePassword($new_password, $userid ){
		$data = array(
			'password' => $new_password
		);
		return $this->db->where('user_no', $userid)
		->update('user', $data);
	}

}