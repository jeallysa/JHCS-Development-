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
	function getUserid($username){
        $query = $this->db->query("SELECT user_no from jhcs.user where username ='".$username."';");
        foreach ($query ->result() as $row) {
        	return $row->user_no;
        }
	}
	function getCurrPassword($userid){
		$query = $this->db->where(['user_no' => $userid])
							->get('user');
		if ($query->num_rows() > 0) {
			return $query->row();
		} 
	}

	function updateUsername($u_name, $userid){
		$data = array(
			'username' => $u_name
		);
		return $this->db->where('user_no', $userid)
		->update('user', $data);
	}

	function updatePassword($u_name, $new_password, $userid ){
		$data = array(
			'username' => $u_name,
			'password' => $new_password
		);
		return $this->db->where('user_no', $userid)
		->update('user', $data);
	}

}