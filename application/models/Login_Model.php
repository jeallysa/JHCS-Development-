<?php


/**
* 
*/
class Login_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function login($username, $password)
	{
		$result = $this->db->get_where('user', ['username' => $username, 'password' => $password])->result();
		return $result;
	}
}