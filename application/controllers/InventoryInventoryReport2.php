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
				$this->load->view('Inventory_Module/inventoryInventoryReport2');
			} else {
				redirect('login');
			}
		}

	}

?>