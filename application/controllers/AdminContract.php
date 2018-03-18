<?php

	class AdminContract extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('Admin_Module/adminContract');
			} else {
				redirect('login');
			}
		}

	}
?>