<?php

	class InventoryReturnsList extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('InventoryReturnsList_Model');
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$reorder = $this->notification_model->reorder();
				$data1['get_companyreturns'] = $this->InventoryReturnsList_Model->get_companyreturns();
				$data2['get_clientcoffeereturns'] = $this->InventoryReturnsList_Model->get_clientcoffeereturns();
				$data3['get_clientmachinereturns'] = $this->InventoryReturnsList_Model->get_clientmachinereturns();
				$data4['get_suppliers'] = $this->InventoryReturnsList_Model->get_suppliers();
				$data5['get_coffee'] = $this->InventoryReturnsList_Model->get_coffee();
				$this->load->view('Inventory_Module/inventoryReturnsList', ["reorder" => $reorder, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4, 'data5' => $data5] );
			} else {
				redirect('login');
			}

			
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
			$date = $this->input->post("date");
			$raw_id = $this->input->post("coffee");
			$quantity = $this->input->post("quantity");
			$return_id = $this->InventoryReturnsList_Model->insert_data($data);
			$this->InventoryReturnsList_Model->compReturnDecrease($date, $quantity, $raw_id, $return_id);
			redirect('inventoryReturnsList', 'refresh');
			
		}

	}

?>