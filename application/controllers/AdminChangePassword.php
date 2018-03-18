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
				$this->load->view('Admin_Module/adminChangePassword');
			} else {
				redirect('login');
			}
		}

	}
?>