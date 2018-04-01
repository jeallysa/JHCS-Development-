<?php

	class InventoryBlends extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryBlends_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				
				$data["blend"] = $this->InventoryBlends_Model->retrieveBlends();
				$data['reorder'] = $this->notification_model->reorder();
				$this->load->view('Inventory_Module/inventoryBlends', $data);
			} else {
				redirect('login');
			}
		}

	}

?>