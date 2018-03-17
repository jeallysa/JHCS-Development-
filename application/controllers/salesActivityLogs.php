<?php

	class SalesActivityLogs extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->view('Sales_Module/salesActivityLogs');
            } else {
            	redirect('login');
            }
		}

	}

?>