<?php

	class InventoryStickers extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->model("InventoryStickers_Model");
				$stckr_data["fetch_data"] = $this->InventoryStickers_Model->fetch_data();
				$this->load->view('Inventory_Module/inventoryStickers', $stckr_data);
			} else {
				redirect('login');
			}
		}

	}

?>