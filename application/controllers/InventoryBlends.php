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
				$blnd_data["fetch_data"] = $this->InventoryBlends_Model->fetch_data();
				$this->load->view('Inventory_Module/inventoryBlends', $blnd_data);
			} else {
				redirect('login');
			}
		}

	}

?>