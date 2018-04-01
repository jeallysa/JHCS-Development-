<?php

	class InventoryActivityLogs extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryActivityLogs_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				
				$data["fetch_data"] = $this->InventoryActivityLogs_Model->fetch_data();
				$data['reorder'] = $this->notification_model->reorder();

				$this->load->view('Inventory_Module/inventoryActivityLogs', $data);
			} else {
				redirect('login');
			}
		}

	}

?>