<?php

	class InventoryInventoryReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('InventoryInventoryReport_Model');
			$data["get_inventoryin"] = $this->InventoryInventoryReport_Model->get_inventoryin();
            $this->load->view('Inventory_Module/inventoryInventoryReport', $data);
		}

	}

?>