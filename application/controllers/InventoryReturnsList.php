<?php

	class InventoryReturnsList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			$this->load->model('InventoryReturnsList_Model');
			$data1['get_companyreturns'] = $this->InventoryReturnsList_Model->get_companyreturns();
			$data2['get_clientcoffeereturns'] = $this->InventoryReturnsList_Model->get_clientcoffeereturns();
			$data3['get_clientmachinereturns'] = $this->InventoryReturnsList_Model->get_clientmachinereturns();
			$data4['get_suppliers'] = $this->InventoryReturnsList_Model->get_suppliers();
			$data5['get_coffee'] = $this->InventoryReturnsList_Model->get_coffee();
			$this->load->view('Inventory_Module/inventoryReturnsList', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data5' => $data5] );

			
		}

		public function insert()
		{
			$this->load->model('InventoryReturnsList_Model');
			$data = array(
				"sup_returnDate" =>$this->input->post("date"),
				"sup_id" =>$this->input->post("supplier"),
				"sup_returnItem" =>$this->input->post("coffee"),
				"sup_returnQty" =>$this->input->post("quantity"),
				"sup_returnRemarks" =>$this->input->post("remarks")
			);
			$this->InventoryReturnsList_Model->insert_data($data);
			$this->index();
		}

	}

?>