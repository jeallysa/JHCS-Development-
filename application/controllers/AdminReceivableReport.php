<?php

	class AdminReceivableReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->view('Admin_Module/adminReceivableReport');
		}

	}
?>