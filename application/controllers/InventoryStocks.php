<?php

	class InventoryStocks extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->view('Inventory_Module/inventoryStocks');
		}

	}

?>