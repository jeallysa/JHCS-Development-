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
				$coffeewalkin['coffee'] = $this->SalesReturns_model->get_coffee_walkin_return();
				$data1['coffee'] = $this->SalesReturns_model->get_coffee_return();
				$data2['machine'] = $this->SalesReturns_model->get_machine_return();
				$data3['resolved_coffee'] = $this->SalesReturns_model->get_resolved_coffee(); 
				$data4['resolved_machine'] = $this->SalesReturns_model->get_resolved_machine();
				$this->load->view('Sales_Module/salesReturns', ['coffeewalkin' => $coffeewalkin, 'data1' => $data1, 'data2' => $data2, 'data3' => $data3, 'data4' => $data4]);
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
			/*$this->load->view('Sales_Module/SalesReturns',$data);*/
			
			  echo json_encode($data);		
		}
		//Get Machine Details
		function getMachineDetails()
		{
			$id = $this->uri->segment(3,1);
			$data = $this->SalesReturns_model->getDetailsMachine($id);
			  echo json_encode($data);		
		}

		function resolveReturns()
		{

		  $id = $this->input->post('deliveryID');
		  // $date = $this->input->post('delivery_date');
		  // $receiver = $this->input->post('receiver');
		  // $dr = $this->input->post('DRReturns');
		  // $SI = $this->input->post('SINo');
		  // $client_id = $this->input->post('client_id');
		  // $po = $this->input->post('PO_ID');
		  // $RID = $this->input->post('RID');
		  $client = $this->input->post('company');
		  $quantity = $this->input->post('quantity');
		  $blend_id = $this->input->post('blend_id');	
		  // $remarks = $this->input->post('remarksReturns');
	
		 //  $this->SalesReturns_model->ResolveCoffeeReturnsA($date, $receiver, $dr, $SI, $client_id, $po);
			// $resolved = 'Yes';
		 //  $this->SalesReturns_model->ResolveCoffeeReturnsB($RID, $remarks, $resolved);
		  $this->SalesReturns_model->activity_logs('sales', "Resolved ".$client." from Contracted Client Order ");
		  $this->SalesReturns_model->update_return($id);
		  $this->SalesReturns_model->update_delivery($id);
		  $this->SalesReturns_model->update_less_return_coffee($quantity, $blend_id);
		echo "<script>alert('Blend Return has been resolved!');</script>";
		  redirect('SalesReturns/index');

		}

		function resolve_walkin()
		{

		  $id = $this->input->post('walkin_id');
		  $quantity = $this->input->post('resolve_walkin_qty');
		  $blend_id = $this->input->post('blend_id_walkin');
		  $client = $this->db->query("SELECT * FROM coffee_blend WHERE blend_id = '".$blend_id."'")->row()->blend;
		  $this->SalesReturns_model->activity_logs('sales', "Resolved ".$client." of Walkin Client Order ");
		  $this->SalesReturns_model->update_walkin_sales($id);
		  $this->SalesReturns_model->update_less_return_coffee($quantity, $blend_id);
		echo "<script>alert('Blend Return has been resolved!');</script>";
		  redirect('SalesReturns/index');

		}
		
		function resolveMachines(){
			$c_id= $this->input->post('client_id');
			$m_id= $this->input->post('mach_id');
			$date= $this->input->post('delivery_date');
			$serial= $this->input->post('serial');
			$qty= $this->input->post('qty');
			$MRID= $this->input->post('MRID');
			$remarks = 'Received';

			// $this->SalesReturns_model->ResolveMachineReturnsA($c_id, $m_id, $date, $remarks, $serial, $qty);
			// $resolved = 'Yes';
			// $this->SalesReturns_model->ResolveMachineReturnsB($MRID, $resolved);
			$client = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '".$c_id."'")->row()->client_company;
			$machine = $this->db->query("SELECT * FROM machine WHERE mach_id = '".$m_id."'")->row()->brewer;
			$mach_type = $this->db->query("SELECT * FROM machine WHERE mach_id = '".$m_id."'")->row()->brewer_type;
			$this->SalesReturns_model->activity_logs('sales', "Resolved ".$client."'s ".$machine." machine ".$mach_type." ");
			$this->SalesReturns_model->less_machine($m_id, $qty);
			$this->SalesReturns_model->update_mach_return($MRID);
			$this->SalesReturns_model->update_mach_return_rent($c_id, $remarks);
			echo "<script>alert('Blend Return has been resolved!');</script>";
			redirect('SalesReturns/index');
		}
		
		
	}

?>