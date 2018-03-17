<?php

	class SalesChangePassword extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->view('Sales_Module/salesChangePassword');
            } else {
            	redirect('login');
            }
		}

	}

?>