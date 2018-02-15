<?php

/**
* 
*/
class Login_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$data = $this->Login_Model->login($username, $password);
		if (count($data) > 0) {
			if($data[0]->fname === 'me' && $data[0]->password === 'me')
			{
				$this->load->view('admin', ['first_name' => $data[0]->fname]);
			}
			else
			{
				echo "Invalid";
			}
		}
		else
		{
			echo "Invalid";
		}

	}
}