<?php

	class InventoryChangePassword extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('Inventory_Module/inventoryChangePassword');
			} else {
				redirect('login');
			}
		}
	}

?>