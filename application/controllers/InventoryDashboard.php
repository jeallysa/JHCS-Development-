<?php

	class InventoryDashboard extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('notification_model');
			$this->load->model('InventoryDashboard_model');
		}
		
		public function index()
		{ 
            if ($this->session->userdata('username') != '')
			{
		        $data['reorder'] = $this->notification_model->reorder();
		        $rawcoffeeStock = $this->InventoryDashboard_model->get_rawcoffeestock();
		        $data1['rawcoffeestock'] = $rawcoffeeStock[0]->rawstock;
		        $packagingStock = $this->InventoryDashboard_model->get_packagingstock();
		        $data2['packagingstock'] = $packagingStock[0]->packstock;
		        $stickerStock = $this->InventoryDashboard_model->get_stickerstock();
		        $data3['stickerstock'] = $stickerStock[0]->stickerstock;
		        $machineStock = $this->InventoryDashboard_model->get_machinestock();
		        $data4['machinestock'] = $machineStock[0]->machinestock;
		        $this->load->view('Inventory_Module/inventoryDashboard', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4] );
		    } else {
		    	redirect('login');
		    }

		}

	}

?>