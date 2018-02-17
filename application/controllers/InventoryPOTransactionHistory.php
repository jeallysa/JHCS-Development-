<?php

	class InventoryPOTransactionHistory extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->view('Inventory_Module/inventoryPOTransactionHistory');
		}

	}

?>