<?php

	class AdminAddContract extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
                $this->load->model('AdminAddContract_model');
	            $data1['getBlend'] = $this->AdminAddContract_model->getBlend();
                $data2['getBag'] = $this->AdminAddContract_model->getBag();
              	 $data3['getMachine'] = $this->AdminAddContract_model->getMachine(); 
                $data4['getName'] = $this->AdminAddContract_model->getName();
                $data5['getPackage'] = $this->AdminAddContract_model->getPackage();
				$this->load->view('Admin_Module/adminAddContract', ['data1' => $data1,'data2' => $data2,'data3' => $data3,'data4' => $data4,'data5' => $data5]);
                
			} else {
				redirect('login');
			}
		}
        
          function insert()
		{
			$this->load->model('AdminAddContract_model');
			
			$data_bag = array(
                "client_id" =>$this->input->post("client_company"),
				"date" =>$this->input->post("date_started"),
				"mach_id" =>$this->input->post("contract_machine"),
                "mach_qty" =>$this->input->post("contract_mqty"),
                "mach_serial" =>$this->input->post("contract_serial"),
                "status" => "rented"
			);
			
			$this->db->insert('machine_out', $data_bag);
			$m_sales_id = $this->db->insert_id();
			$data = array(
                "client_id" =>$this->input->post("client_company"),
				"date_started" =>$this->input->post("date_started"),
				"date_expiration" =>$this->input->post("date_expiration"),
				"blend_id" =>$this->input->post("contract_blend"),
				"mach_id" =>$this->input->post("contract_machine"),
				"required_qty" =>$this->input->post("contract_bqty"),
				"package_id" =>$this->input->post("contract_bag"),
				"mach_salesID" => $m_sales_id
                
			);
			$client_id = $this->input->post("client_company");
			$data = $this->security->xss_clean($data);
			$query_client = $this->db->query("SELECT * FROM contract WHERE client_id = '".$client_id."';");
			if ($query_client->num_rows() == 0){
				$this->AdminAddContract_model->insert_data($data);
				$this->session->set_flashdata('success', 'Insert & Update successful!');
			}else{
				$this->db->where('client_id', $client_id);
				$this->db->update('contract', $data);
				$this->session->set_flashdata('success', 'Update successful!');
			}
			

			$blend_id = $this->input->post("contract_blend");
			$data_blend = array(
				'package_id' => $this->input->post("contract_bag"),
				'sticker_id' => $this->input->post("contract_sticker")

			);
			$this->db->where('blend_id', $blend_id);
			$this->db->update('coffee_blend', $data_blend);
			
			redirect('adminAddContract');

			/* data - contract; data_bag = machine_out*/
		}
	}
?>