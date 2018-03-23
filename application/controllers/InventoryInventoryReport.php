<?php

	class InventoryInventoryReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
        public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('InventoryInventoryReport_Model');
				$data1["coffeein"] = $this->InventoryInventoryReport_Model->get_coffeein();
                $data2["packagein"] = $this->InventoryInventoryReport_Model->get_packagein();
                $data3["stickerin"] = $this->InventoryInventoryReport_Model->get_stickerin();
                $data4["machinein"] = $this->InventoryInventoryReport_Model->get_machinein();
				$this->load->view('Inventory_Module/inventoryInventoryReport', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
			} else {
				redirect('login');
			}
		}

	}
?>