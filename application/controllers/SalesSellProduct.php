<?php 

	class SalesSellProduct extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
            {
            	$this->load->model('sellProduct_model');
				$data1['sellCoffee']=$this->sellProduct_model->getSoldCoffee();
				$data2['sellMachine']=$this->sellProduct_model->getSoldMachine();
				$this->load->view('Sales_Module/salesSellProduct', ['data1' => $data1, 'data2' => $data2]);
				$this->load->library('session');
				echo $this->session->flashdata('success');
			} else {
				redirect('login');
			}
		}
		public function salesMachine()
		{ 
			$this->load->model('sellProduct_model');
			$data5['machine']=$this->sellProduct_model->getMachine();
			$data6['client']=$this->sellProduct_model->getClient();
			$this->load->view('Sales_Module/salesMachine', ['data6' => $data6, 'data5' => $data5]);
		}
		public function salesWalkin()
		{ 
			$this->load->model('sellProduct_model');
			$data3['blends']=$this->sellProduct_model->getBlends();

			$this->load->view('Sales_Module/salesWalkin', ['data3' => $data3]);
		}


		public function record()
		{
			$this->load->model('sellProduct_model');

			$date =  $this->input->post("date");
            $quantity = $this->input->post("qty");
            $blend_id = $this->input->post("blend_id");

			$this->sellProduct_model->record_data($date, $quantity, $blend_id);
			echo "<script>alert('Client order has been saved!');</script>";
			$this->salesWalkin();
		}

		public function add()
		{
			$this->load->model('sellProduct_model');
			$data7 = array(
				"mach_id" =>$this->input->post("mach_id"),
				"date" =>$this->input->post("date"),
				"mach_qty" =>$this->input->post("qty"),
                "client_id" =>$this->input->post("client_id"),
			);
			$data7 = $this->security->xss_clean($data7);
			$this->sellProduct_model->add_data($data7);
            redirect ('salesSellProduct');
		}

        function return_machine()
		{
			$this->load->model('sellProduct_model');
			$dataA = array(
				"mach_returnDate" =>$this->input->post("deliveryID"),
				"mach_returnQty" =>$this->input->post("client_dr"),
				"client_id" =>$this->input->post("date_returned"),
				"mach_id" =>$this->input->post("qty_returned"),
                "mach_remarks" =>$this->input->post("remarks")    
			);
			$dataA = $this->security->xss_clean($dataA);
			$return = 'Returned';
			$dr = $this->input->post("client_dr");
			$this->SalesDelivery_model->insert_dataA($dataA);
			$this->SalesDelivery_model->updateA($return, $dr);
			echo "<script>alert('Item Returned!');</script>";
			redirect('SalesDelivery', 'refresh');
		}
		

	}

?>