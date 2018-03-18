<?php

	class AdmiChangePassword extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('adminChangePassword');
			} else {
				redirect('login');
			}
		}

	}
?>