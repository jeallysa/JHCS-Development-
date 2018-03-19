<?php

	class InventoryInventoryReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
<<<<<<< HEAD
			$this->load->model('InventoryInventoryReport_Model');
			$data["get_inventoryin"] = $this->InventoryInventoryReport_Model->get_inventoryin();
            $this->load->view('Inventory_Module/inventoryInventoryReport', $data);
=======
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('Inventory_Module/inventoryInventoryReport');
			} else {
				redirect('login');
			}

>>>>>>> f278ebc5390af8d8b83b78a01d5062a138f3c795
		}

	}
?>