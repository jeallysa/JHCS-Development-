<?php

	class AdminInventoryReport extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
        public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('Admin_Inventory_Report_Model');
				$data1["coffeein"] = $this->Admin_Inventory_Report_Model->get_coffeein();
                $data6["coffeeout"] = $this->Admin_Inventory_Report_Model->get_coffeeout();
                /*$data2["packagein"] = $this->Admin_Inventory_Report_Model->get_packagein();
                $data3["stickerin"] = $this->Admin_Inventory_Report_Model->get_stickerin();
                $data4["machinein"] = $this->Admin_Inventory_Report_Model->get_machinein();*/
                $data5["datav"] = NULL;
				$this->load->view('Admin_Module/AdminInventoryReport', ['data1' => $data1, /*'data2' => $data2, 'data3' => $data3, 'data4' => $data4,*/ 'data5' => $data5, 'data6' => $data6]);
			} else {
				redirect('login');
			}
		}
        
        public function date_filt(){
            $df = $this->input->post('datefilt');
            $this->load->model('Admin_Inventory_Report_Model');
            $data1["coffeein"] = $this->Admin_Inventory_Report_Model->get_coffeeinWithP($df);
            $data6["coffeeout"] = $this->Admin_Inventory_Report_Model->get_coffeeoutWithP($df);
            /*$data2["packagein"] = $this->Admin_Inventory_Report_Model->get_packagein();
            $data3["stickerin"] = $this->Admin_Inventory_Report_Model->get_stickerin();
            $data4["machinein"] = $this->Admin_Inventory_Report_Model->get_machinein();*/
            
            $data5["datav"] = $df;
			$this->load->view("Admin_Module/adminInventoryReport", ['data1' => $data1, /*'data2' => $data2, 'data3' => $data3, 'data4' => $data4,*/ 'data5' => $data5, 'data6' => $data6]);
        }

	}
?>