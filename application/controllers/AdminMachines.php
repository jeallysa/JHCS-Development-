<?php

	class AdminMachines extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
        function index()
		{ 
			$this->load->model('AdminMachines_model');
			$data['machines']=$this->AdminMachines_model->getMachines();
            $data1['getSupplier'] = $this->AdminMachines_model->getSupplier();
			$this->load->view('Admin_Module/adminMachines', ['data' => $data,  'data1' => $data1]);
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
			$this->AdminMachines_model->insert_data($data);
			$this->index();
		}

	}
?>