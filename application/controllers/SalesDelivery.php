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
				"client_dr" =>$this->input->post("dr_no"),
				"client_deliverDate" =>$this->input->post("delivery_date"),
				"client_invoice" =>$this->input->post("invoice"),
                "client_receive" =>$this->input->post("receive_by"),        
                "contractPO_id" =>$this->input->post("po_id"),        
                "client_balance" =>$this->input->post("client_balance"),        
                "client_id" =>$this->input->post("client_id")      
			);
			$data = $this->security->xss_clean($data);
			$deliver = 'delivered';
			$po_id = $this->input->post("po_id");
			$this->SalesDelivery_model->insert_data($data);
			$this->SalesDelivery_model->update($deliver, $po_id);
			echo "<script>alert('Delivery successful!');</script>";
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
			$return = 'Yes';
			$dr = $this->input->post("client_dr");
			$this->SalesDelivery_model->insert_dataA($dataA);
			$this->SalesDelivery_model->updateA($return, $dr);
			echo "<script>alert('Item Returned!');</script>";
			redirect('SalesDelivery', 'refresh');
		}

        function insert2()
		{
			$this->load->model('SalesDelivery_model');
			$dataB = array(
				"client_dr" =>$this->input->post("client_dr"),
				"paid_date" =>$this->input->post("date_paid"),
				"collection_no" =>$this->input->post("cr"),
                "paid_amount" =>$this->input->post("amount"),    
                "withheld" =>$this->input->post("withheld"),    
                "remarks" =>$this->input->post("remarkspay"),    
                "payment_mode" =>$this->input->post("mod")    
			);
			$dataB = $this->security->xss_clean($dataB);
			$pay = 'paid';
			$dr = $this->input->post("client_dr");
			$this->SalesDelivery_model->insert_dataB($dataB);
			$this->SalesDelivery_model->updateB($pay, $dr);
			redirect('SalesDelivery', 'refresh');
		}

	}

?>