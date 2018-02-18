<?php

	class AdminMachines extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->view('Admin_Module/adminMachines');
		}

	}
?>