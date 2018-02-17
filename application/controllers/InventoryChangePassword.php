<?php

	class InventoryChangePassword extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->view('Inventory_Module/inventoryChangePassword');
		}
	}

?>