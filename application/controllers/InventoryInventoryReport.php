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
                $data6["coffeeout"] = $this->InventoryInventoryReport_Model->get_coffeeout();
                $data5["datav"] = NULL;
				$this->load->view('Inventory_Module/inventoryInventoryReport', ['data1' => $data1, 'data5' => $data5, 'data6' => $data6]);
			} else {
				redirect('login');
			}
		}
        
        public function date_filt(){
            $df = $this->input->post('datefilt');
            $this->load->model('InventoryInventoryReport_Model');
            $data1["coffeein"] = $this->InventoryInventoryReport_Model->get_coffeeinWithP($df);
            $data6["coffeeout"] = $this->InventoryInventoryReport_Model->get_coffeeoutWithP($df);
            $data5["datav"] = $df;
			$this->load->view("Inventory_Module/inventoryInventoryReport", ['data1' => $data1, 'data5' => $data5, 'data6' => $data6]);
        }

	}
?>