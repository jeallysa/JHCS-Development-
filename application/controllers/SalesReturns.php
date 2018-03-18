<?php

	class SalesReturns extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('SalesReturns_model');
		}
		
		public function index()
		{ 
<<<<<<< HEAD

			$data1['coffee'] = $this->SalesReturns_model->get_coffee_return();
			$data2['machine'] = $this->SalesReturns_model->get_machine_return();
			$data3['resolved_coffee'] = $this->SalesReturns_model->get_resolved_coffee();
			$data4['resolved_machine'] = $this->SalesReturns_model->get_resolved_machine();
			
			
			$this->load->view('Sales_Module/salesReturns', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
=======
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
>>>>>>> 7a4ff242e7f68f2a166cecaf46f647d535969dad
		}
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

		function addReturns()
		{
			$this->form_validation->set_rules('delivery_date','Delivery Date','required');
			$this->form_validation->set_rules('receiver','Receiver','required');
			/*$this->form_validation->set_rules('DRReturns','Delivery Receipt','required|callback_DRCheck');*/
			/*$this->form_validation->set_rules('delivery_status','Delivery Status','required');*/
			$this->form_validation->set_rules('remarksReturns','Remarks','required');
			if ($this->form_validation->run())
				{
					echo 'A new return has been resolved';
				 		// post values
					  $name = $this->input->post('delivery_date');
					  $username = $this->input->post('receiver');
					  $email = $this->input->post('DRReturns');
					  $password = $this->input->post('delivery_status');
					  // set post values
					  $this->user->setName($name);
					  $this->user->setUserName($username);
					  $this->user->setEmail($email);
					  $this->user->setPassword(MD5($password));
					  $this->user->setStatus(1);
					  // insert values in database
					  $this->user->createUser();
					  redirect('users/index');
				}
				else
				{
					echo validation_errors();
				}
		}
		
		
	}

?>