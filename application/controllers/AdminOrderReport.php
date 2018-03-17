<?php

	class AdminOrderReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('Admin_Module/adminOrderReport');
			} else {
				redirect('login');
			}
		}

	}
?>