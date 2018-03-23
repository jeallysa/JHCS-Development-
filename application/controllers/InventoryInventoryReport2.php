<?php

	class InventoryInventoryReport2 extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('InventoryInventoryReportOut_Model');
				$data["get_inventoryout"] = $this->InventoryInventoryReportOut_Model->get_inventoryout();
				$this->load->view('Inventory_Module/inventoryInventoryReport2', $data);
			} else {
				redirect('login');
			}
		}

	}

?>