<?php

	class InventoryReturnsList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('InventoryReturnsList_model');
			$data1['get_companyreturns'] = $this->InventoryReturnsList_model->get_companyreturns();
			$data2['get_clientcoffeereturns'] = $this->InventoryReturnsList_model->get_clientcoffeereturns();
			$data3['get_clientmachinereturns'] = $this->InventoryReturnsList_model->get_clientmachinereturns();
			$this->load->view('Inventory_Module/inventoryReturnsList', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3] );
		}

	}

?>