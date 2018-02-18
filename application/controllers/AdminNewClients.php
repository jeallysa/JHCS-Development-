<?php

	class AdminNewClients extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->view('Admin_Module/adminNewClients');
		}

	}
?>