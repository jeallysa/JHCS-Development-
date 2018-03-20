<?php

	class AdminMachines extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('AdminMachines_model', 'CM');
			$this->load->helper('security');
		}
		
        function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminMachines_model');
				$data['machines']=$this->AdminMachines_model->getMachines();
	            $data1['getSupplier'] = $this->AdminMachines_model->getSupplier();
				$this->load->view('Admin_Module/adminMachines', ['data' => $data,  'data1' => $data1]);
			} else {
				redirect('login');
			}
		}
        
         function insert()
		{
			$this->load->model('AdminMachines_model');
			$data = array(
                "brewer" =>$this->input->post("brewer"),
				"brewer_type" =>$this->input->post("type"),
				"mach_reorder" =>$this->input->post("reorder"),
				"mach_limit" =>$this->input->post("stocklimit"),
                "mach_stocks" =>$this->input->post("stocks"),
                "sup_id" =>$this->input->post("sup_company")
        
			);
			$data = $this->security->xss_clean($data);
			$this->AdminMachines_model->insert_data($data);
			$this->index();
		}

		function update(){
			$this->load->model('AdminMachines_Model');
			$id = $this->input->post("id");
			$serial = $this->input->post("mach_serial");
			$brewer = $this->input->post("brewer");
			$type = $this->input->post("type");
			$price = $this->input->post("price");
			$reorder = $this->input->post("reorder");
			$limit = $this->input->post("stocklimit");
			$stock_level = $this->input->post("stocks");
			$sup_id = $this->input->post("sup_company");
			$this->AdminMachines_Model->update($id, $serial, $brewer, $type, $price, $reorder, $limit, $stock_level, $sup_id);
			echo "<script>alert('Update successful!');</script>";
			redirect('adminMachines', 'refresh');
		}

        function activation(){
			
			$this->load->model('AdminMachines_model');
			$id = $this->input->post("deact_id");
			$this->AdminMachines_model->activation($id);
			redirect('adminMachines');

		}
	}
?>