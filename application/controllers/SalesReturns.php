<?php

	class SalesReturns extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('SalesReturns_model');
		}
		
		public function index()
		{ 

			if ($this->session->userdata('username') != '')
            {
            	$this->load->model('SalesReturns_model');
				$data1['coffee'] = $this->SalesReturns_model->get_coffee_return();
				$data2['machine'] = $this->SalesReturns_model->get_machine_return();
				$data3['resolved_coffee'] = $this->SalesReturns_model->get_resolved_coffee();
				$data4['resolved_machine'] = $this->SalesReturns_model->get_resolved_machine();
				$this->load->view('Sales_Module/salesReturns', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
			} else {
				redirect('login');
			}

		}
		//Get Coffee Details
		function getDetails()
		{
			/*$id=$this->input->post('id');*/
			$id = $this->uri->segment(3,1);
			
			/*$id = array('id'=> $this->input->post('id'));	*/

			$data = $this->SalesReturns_model->getDetailsCoffee($id);
			/*$coffee = json_decode($coffeee);*/
			/*$this->load->view('Sales_Module/Modals/CoffeeReturns_Modals',$coffee);*/
			
			  echo json_encode($data);		
		}
		//Get Machine Details
		function getMachineDetails()
		{
			$id = $this->uri->segment(3,1);
			$data = $this->SalesReturns_model->getDetailsMachine($id);
			  echo json_encode($data);		
		}

		function addReturns()
		{
			$this->form_validation->set_rules('delivery_date','Delivery Date','required');
			$this->form_validation->set_rules('receiver','Receiver','required');
			$this->form_validation->set_rules('DRReturns','Delivery Receipt','required');
			$this->form_validation->set_rules('quantity_delivered','Delivered Quantity','required|integer');
			$this->form_validation->set_rules('remarksReturns','Remarks','required');
			if ($this->form_validation->run())
				{
					echo 'A new return has been resolved';
					  
					   $date = $this->input->post('delivery_date');
					  $receiver = $this->input->post('receiver');
					  $dr = $this->input->post('DRReturns');
					  $quantity = $this->input->post('quantity_delivered');
						$remarks = $this->input->post('remarksReturns');
				
					
					  $this->SalesReturns_model->ResolveCoffeeReturns($date, $receiver, $dr, $quantity, $remarks);
					  redirect('SalesReturns/index');
				}
				else
				{
					echo validation_errors();
				}
		}
		
		
	}

?>