<?php

	class InventoryPackaging extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model("InventoryPackaging_Model");
			$pckng_data["fetch_data"] = $this->InventoryPackaging_Model->fetch_data();
			$this->load->view('Inventory_Module/inventoryPackaging', $pckng_data);
		}

	}

?>