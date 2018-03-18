<?php

	class InventoryMachines extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model("InventoryMachines_Model");
				$mchn_data["fetch_data"] = $this->InventoryMachines_Model->fetch_data();
				$this->load->view('Inventory_Module/inventoryMachines', $mchn_data);
			} else {
				redirect('login');
			}
		}

	}

?>