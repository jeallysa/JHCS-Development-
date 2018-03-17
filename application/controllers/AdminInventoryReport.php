<?php

	class AdminInventoryReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('Admin_Inventory_Report_Model');
				$inv_data["fetch_data"] = $this->Admin_Inventory_Report_Model->fetch_data();
				$this->load->view('Admin_Module/adminInventoryReport', $inv_data);
			} else {
				redirect('login');
			}
		}

	}
?>