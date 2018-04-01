<?php

	class InventoryInventoryReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('notification_model');
			$this->load->model('InventoryInventoryReport_Model');
		}
		
        public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				
				$data['reorder'] = $this->notification_model->reorder();
				$data1["coffeein"] = $this->InventoryInventoryReport_Model->get_coffeein();
                $data6["coffeeout"] = $this->InventoryInventoryReport_Model->get_coffeeout();
                /*$data2["packagein"] = $this->InventoryInventoryReport_Model->get_packagein();
                $data3["stickerin"] = $this->InventoryInventoryReport_Model->get_stickerin();
                $data4["machinein"] = $this->InventoryInventoryReport_Model->get_machinein();*/
                $data5["datav"] = NULL;
				$this->load->view('Inventory_Module/inventoryInventoryReport', [$data, 'data1' => $data1, /*'data2' => $data2, 'data3' => $data3, 'data4' => $data4,*/ 'data5' => $data5, 'data6' => $data6]);
			} else {
				redirect('login');
			}
		}
        
        public function date_filt(){
            $df = $this->input->post('datefilt');
            $data['reorder'] = $this->notification_model->reorder();
            $data1["coffeein"] = $this->InventoryInventoryReport_Model->get_coffeeinWithP($df);
            $data6["coffeeout"] = $this->InventoryInventoryReport_Model->get_coffeeoutWithP($df);
            /*$data2["packagein"] = $this->InventoryInventoryReport_Model->get_packagein();
            $data3["stickerin"] = $this->InventoryInventoryReport_Model->get_stickerin();
            $data4["machinein"] = $this->InventoryInventoryReport_Model->get_machinein();*/
            
            $data5["datav"] = $df;
			$this->load->view("Inventory_Module/inventoryInventoryReport", [$data, 'data1' => $data1, /*'data2' => $data2, 'data3' => $data3, 'data4' => $data4,*/ 'data5' => $data5, 'data6' => $data6]);
        }

	}
?>