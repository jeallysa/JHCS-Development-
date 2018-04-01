<?php

	class InventoryDashboard extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
            if ($this->session->userdata('username') != '')
			{
		        $this->load->model('InventoryDashboard_model');
		        $rawcoffeeStock = $this->InventoryDashboard_model->get_rawcoffeestock();
		        $data1['rawcoffeestock'] = $rawcoffeeStock[0]->rawstock;
		        $packagingStock = $this->InventoryDashboard_model->get_packagingstock();
		        $data2['packagingstock'] = $packagingStock[0]->packstock;
		        $stickerStock = $this->InventoryDashboard_model->get_stickerstock();
		        $data3['stickerstock'] = $stickerStock[0]->stickerstock;
		        $machineStock = $this->InventoryDashboard_model->get_machinestock();
		        $data4['machinestock'] = $machineStock[0]->machinestock;
                $data5["coffeein"] = $this->InventoryDashboard_model->get_coffeein();
                $data6["coffeeout"] = $this->InventoryDashboard_model->get_coffeeout();
                $data7["datav"] = NULL;
		        $this->load->view('Inventory_Module/inventoryDashboard', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data5' => $data5, 'data6' => $data6, 'data7' => $data7] );
		    } else {
		    	redirect('login');
		    }

		}
        public function date_filt(){
            $df = $this->input->post('datefilt');
            $this->load->model('InventoryDashboard_model');
            $data1["coffeein"] = $this->InventoryDashboard_model->get_coffeeinWithP($df);
            $data6["coffeeout"] = $this->InventoryDashboard_model->get_coffeeoutWithP($df);
            $data5["datav"] = $df;
			$this->load->view("Inventory_Module/inventoryDashboard", ['data1' => $data1, 'data5' => $data5, 'data6' => $data6]);
        }

	}

?>