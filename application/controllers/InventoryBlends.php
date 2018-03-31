<?php

	class InventoryBlends extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model("InventoryBlends_Model");
				$data["blend"] = $this->InventoryBlends_Model->retrieveBlends();
				$this->load->view('Inventory_Module/inventoryBlends', $data);
			} else {
				redirect('login');
			}
		}

	}

?>