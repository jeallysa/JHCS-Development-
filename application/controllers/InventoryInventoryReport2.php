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
				$data1["inventoryout"] = $this->InventoryInventoryReportOut_Model->get_inventoryout();
                $data2["machineout"] = $this->InventoryInventoryReportOut_Model->get_machineout();
				$this->load->view('Inventory_Module/inventoryInventoryReport2', ['data1' => $data1, 'data2' => $data2]);
			} else {
				redirect('login');
			}
		}

	}

?>