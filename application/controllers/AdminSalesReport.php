<?php

	class AdminSalesReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model("Admin_SalesReport_Model");
			$salesdata["fetch_data"] = $this->Admin_SalesReport_Model->fetch_data();
			$this->load->view('Admin_Module/adminSalesReport', $salesdata);
		}

	}
?>