<?php

	class SalesReturns extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('SalesReturns_model');
		}
		
		public function index()
		{ 

			$data1['coffee'] = $this->SalesReturns_model->get_coffee_return();
			$data2['machine'] = $this->SalesReturns_model->get_machine_return();
			$data3['resolved_coffee'] = $this->SalesReturns_model->get_resolved_coffee();
			$data4['resolved_machine'] = $this->SalesReturns_model->get_resolved_machine();
			
			
			$this->load->view('Sales_Module/salesReturns', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
		}
		function getDetails()
		{
			/*$id=$this->input->post('id');*/
			$id = $this->uri->segment(3,1);
			
			/*$id = array('id'=> $this->input->post('id'));	*/

			$data['blends'] = $this->SalesReturns_model->getDetailsCoffee($id);
			/*$coffee = json_decode($coffeee);*/
			/*$this->load->view('Sales_Module/Modals/CoffeeReturns_Modals',$coffee);*/
			
			  /*echo json_encode($data);*/
			$this->load->view('SalesModule/Modals/CoffeeReturns_Modals', $data);
			
			
		}

		function addReturns()
		{
			$this->form_validation->set_rules('delivery_date','Delivery Date','recquired');
			$this->form_validation->set_rules('receiver','Receiver','recquired');
			if ($this->form_validation->run())
				{
					echo 'A new return has been resolved';
				}
				else
				{
					echo validation_errors();
				}
		}
		
		
	}

?>