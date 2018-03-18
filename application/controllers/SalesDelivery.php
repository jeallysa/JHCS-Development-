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

	}

?>