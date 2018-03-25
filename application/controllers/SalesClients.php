<?php

	class SalesClients extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('SalesClients_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	
				$data['clients'] = $this->SalesClients_model->get_clients_list();
				$this->load->view('Sales_Module/salesClients', $data);
			} else {
				redirect('login');
			}
		}
		public function salesClientsInfo()
		{
			$id = $this->input->get('id');
			$this->load->model('SalesClients_model');
			$data["cli_data"] = $this->SalesClients_model->load_POClient($id);
			$this->load->view('Sales_Module/salesClientsInfo', $data);
		}
		public function salesContract()
		{
			
			$this->load->view('Sales_Module/salesContract');
		}
		
		public function salesClientDetails(){
			$id = $this->uri->segment(3,1);
			$data = $this->SalesClients_model->getClientsDetails($id);
			  echo json_encode($data);
		}
		public function addClientPO(){

					echo 'A new Purchase Order has been Added';
					  $id = $this->input->post('client_id');
					  $date = $this->input->post('date');
					  $QTY = $this->input->post('quantity');
						$blend_id = $this->input->post('ItemCode');
				
					  $this->SalesClients_model->addClientPO( $date, $QTY, $id, $blend_id);
					  redirect('SalesClients/index');

		}
		
		public function salesMultipleOrders(){
			$this->load->view('Sales_Module/salesMultipleOrders');
		}
		
		
		/*public function addMultipleOrders(){
			$blendName = $this->input->post('blendName');
			$typeBag = $this->input->post('typeBag');
			$sizeBag = $this->input->post('sizeBag');
			$quantity = $this->input->post('quantity');
			
			$array = $this->SalesClient_model->AddMultipleOrders($blendName, $typeBag, $sizeBag, $quantity);
			echo json_encode($array);
			
		}*/

	}

?>