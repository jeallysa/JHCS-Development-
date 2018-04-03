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
				
				$reorder = $this->notification_model->reorder();
				$data1["coffeein"] = $this->InventoryInventoryReport_Model->get_coffeein();
                $data6["coffeeout"] = $this->InventoryInventoryReport_Model->get_coffeeout();
                $data5["datav"] = NULL;
<<<<<<< HEAD
				$this->load->view('Inventory_Module/inventoryInventoryReport', ['data1' => $data1, 'data5' => $data5, 'data6' => $data6]);
=======

				$this->load->view('Inventory_Module/inventoryInventoryReport', ["reorder" => $reorder, 'data1' => $data1, 'data5' => $data5, 'data6' => $data6]);
>>>>>>> d841d74416ef02f98eabf387833fa58193a5a850
			} else {
				redirect('login');
			}
		}
        
        public function date_filt(){
            $df = $this->input->post('datefilt');
            $data['reorder'] = $this->notification_model->reorder();
            $data1["coffeein"] = $this->InventoryInventoryReport_Model->get_coffeeinWithP($df);
            $data6["coffeeout"] = $this->InventoryInventoryReport_Model->get_coffeeoutWithP($df);
            $data5["datav"] = $df;
<<<<<<< HEAD
			$this->load->view("Inventory_Module/inventoryInventoryReport", ['data1' => $data1, 'data5' => $data5, 'data6' => $data6]);
=======

			$this->load->view("Inventory_Module/inventoryInventoryReport", ['data1' => $data1, 'data5' => $data5, 'data6' => $data6]);

>>>>>>> d841d74416ef02f98eabf387833fa58193a5a850
        }

	}
?>