<?php

	class InventoryActivityLogs extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model("InventoryActivityLogs_Model");
			$actvlg_data["fetch_data"] = $this->InventoryActivityLogs_Model->fetch_data();
			$this->load->view('Inventory_Module/inventoryActivityLogs', $actvlg_data);
		}

	}

?>