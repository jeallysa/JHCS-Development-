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
			$data4 = array(
				"walkin_fname" =>$this->input->post("fname"),
				"walkin_lname" =>$this->input->post("lname"),
				"walkin_date" =>$this->input->post("date"),
                "walkin_qty" =>$this->input->post("qty"),
                "blend_id" =>$this->input->post("blend_id")
        
			);
			$data4 = $this->security->xss_clean($data4);
			$this->sellProduct_model->record_data($data4);
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
		

	}

?>