<?php

	class InventorySamplesList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model("InventorySamplesList_Model");
			$smpl_data["fetch_data"] = $this->InventorySamplesList_Model->fetch_data();
			$this->load->view('Inventory_Module/inventorySamplesList', $smpl_data);
		}

	}

?>