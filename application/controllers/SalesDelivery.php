<?php

	class SalesDelivery extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->model('SalesDelivery_model');
				$data1['get_delivery_list'] = $this->SalesDelivery_model->get_delivery_list();
				$data2['get_delivered'] = $this->SalesDelivery_model->get_delivered();
				$data3['get_paid'] = $this->SalesDelivery_model->get_paid();
				$this->load->view('Sales_Module/salesPenDelivery', ['data1' => $data1, 'data2' => $data2, 'data3' => $data3] );
			} else {
				redirect('login');
			}
		}

        function insert()
		{
			$this->load->model('SalesDelivery_model');
			$data = array(
				"client_dr" =>$this->input->post("client_dr"),
				"client_deliverDate" =>$this->input->post("delivery_date"),
				"client_invoice" =>$this->input->post("invoice"),
                "client_receive" =>$this->input->post("receive_by"),        
                "contractPO_id" =>$this->input->post("po_id"),        
                "client_balance" =>$this->input->post("client_balance"),        
                "client_id" =>$this->input->post("client_id"),      
                "deliver_quantity" =>$this->input->post("delivered_qty")      
			);
			$data = $this->security->xss_clean($data);
			
			$fulDel = $this->input->post('full_qty');
			$delivered_quantity = $this->input->post('delivered_qty');

			if ($delivered_quantity == $fulDel) {
				$deliver = 'delivered';
				$po_id = $this->input->post("po_id");
				$delivered_qty = $this->SalesDelivery_model->insert_data($data);
				$this->SalesDelivery_model->updateDel($deliver, $po_id, $delivered_quantity);
				echo "<script>alert('Delivery successful!');</script>";

				
			} 	elseif ($delivered_quantity < $fulDel) {
				$deliver = 'partial delivery';
				$po_id = $this->input->post("po_id");
				$delivered_qty = $this->SalesDelivery_model->insert_data($data);
				$this->SalesDelivery_model->updateDel($deliver, $po_id, $delivered_quantity);
				echo "<script>alert('Delivery successful!');</script>";

				
			} 

			redirect('SalesDelivery', 'refresh');
		}

        function insert1()
		{
			$this->load->model('SalesDelivery_model');
			$dataA = array(
				"client_deliveryID" =>$this->input->post("deliveryID"),
				"client_dr" =>$this->input->post("client_dr"),
				"coff_returnDate" =>$this->input->post("date_returned"),
				"coff_returnQty" =>$this->input->post("qty_returned"),
                "coff_remarks" =>$this->input->post("remarks")    
			);
			$dataA = $this->security->xss_clean($dataA);
			$add_blend =$this->input->post("qty_returned");
			$blend_id =$this->input->post("blend_id");
			$return = 'Returned';
			$deliver_id = $this->input->post("deliveryID");
			$this->SalesDelivery_model->insert_dataA($dataA);
			$this->SalesDelivery_model->updateA($return, $deliver_id);
			$this->SalesDelivery_model->add_blend($add_blend, $blend_id);
			echo "<script>alert('Item Returned!');</script>";
			redirect('SalesDelivery', 'refresh');
		}

        function insert2()
		{
			$this->load->model('SalesDelivery_model');
			$dataB = array(
				"client_deliveryID" =>$this->input->post("deliver_id"),
				"paid_date" =>$this->input->post("date_paid"),
				"collection_no" =>$this->input->post("cr"),
                "paid_amount" =>$this->input->post("amount"),    
                "withheld" =>$this->input->post("withheld"),    
                "remarks" =>$this->input->post("remarkspay"),    
                "payment_mode" =>$this->input->post("mod"),
                "paid_amount" =>  $this->input->post("amount")
			);
			$dataB = $this->security->xss_clean($dataB);
			

				$total_amount = $this->input->post("total_amount");
				$withheld = $this->input->post("withheld");
				$amount_input = $this->input->post("amount");
				$amount_paid = $withheld + $amount_input;


				if ($amount_paid < $total_amount) {
					$payment_stat = 'partially paid';
					$deliver_id = $this->input->post("deliver_id");
					$this->SalesDelivery_model->insert_dataB($dataB);
					$this->SalesDelivery_model->updateB($payment_stat, $deliver_id, $amount_paid);
					echo "<script>alert('Payment recorded!');</script>";
				} else{
					$payment_stat = 'paid';
					$deliver_id = $this->input->post("deliver_id");
					$this->SalesDelivery_model->insert_dataB($dataB);
					$this->SalesDelivery_model->updateB($payment_stat, $deliver_id, $amount_paid);
					echo "<script>alert('Payment recorded!');</script>";
				}


			

			redirect('SalesDelivery', 'refresh');
		}

	}

?>