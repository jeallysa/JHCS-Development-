<?php

	class InventoryStocks extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model("InventoryStocks_Model");
			$rawcoff_data["fetch_data"] = $this->InventoryStocks_Model->fetch_data();
			$this->load->view('Inventory_Module/inventoryStocks', $rawcoff_data);
		}

	}

?>