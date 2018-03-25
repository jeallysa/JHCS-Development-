<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddAccounts_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function add_data($user_no, $u_lname, $u_fname, $u_type, $u_address, $u_email, $u_contact, $username, $password){
		$data = array(
            'user_no' => $user_no,
			'u_lname' => $u_lname,
			'u_fname' => $u_fname,
            'u_type' => $u_type,
			'u_address' => $u_address,
            'u_email' => $u_email,
			'u_contact' => $u_contact,
            'username' => $username,
            'password' => $password

		);
		
		$this->db->insert('user', $data);
		
		
		echo "<script>alert('You have inserted a new user!');
		window.location.href='" . base_url() . "adminAccounts';
		</script>";
	}

}