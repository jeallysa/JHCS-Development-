<?php

	class SalesDashboard extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->view('Sales_Module/salesDashboard');
		}
	}

?>