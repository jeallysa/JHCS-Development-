<?php

	class AdminSupplier extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('Admin_Suppliers_Model');
			$sup_data["fetch_data"] = $this->Admin_Suppliers_Model->fetch_data();
			$this->load->view('Admin_Module/adminSupplier', $sup_data);
		}

	}
?>