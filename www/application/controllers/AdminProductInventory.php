<?php

	class AdminProductInventory extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('AdminProductInventory_model', 'CM');
			$this->load->helper('security');
		}
		
		function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('AdminProductInventory_model');
	            $data["product"] = $this->AdminProductInventory_model->getProducts();
	            $data1['getSupplier'] = $this->AdminProductInventory_model->getSupplier();
				$this->load->view('Admin_Module/adminProductInventory', ['data' => $data,  'data1' => $data1]);
			} else {
				redirect('login');
			}
            
		}

		function update(){
			$this->load->model('AdminProductInventory_model');
			$id = $this->input->post("raw_id");
			$name = $this->input->post("name");
			$raw_type = $this->input->post("raw_type");
			$reorder = $this->input->post("reorder");
			$stocks = $this->input->post("stocks");
			$price = $this->input->post("price");
			$sup_id = $this->input->post("sup_company");
			$this->AdminProductInventory_model->activity_logs('admin', "Updated Raw Coffee: ".$name.", ".$raw_type." roast ");
			$this->AdminProductInventory_model->update($id, $name, $raw_type, $reorder, $stocks, $price, $sup_id);
            echo "<script>alert('Update successful!');</script>";
			redirect('adminProductInventory', 'refresh');
		}
        
        function insert()
		{
			$this->load->model('AdminProductInventory_model');
			$data = array(
				"raw_coffee" =>$this->input->post("name"),
				"raw_type" =>$this->input->post("raw_type"),
				"raw_reorder" =>$this->input->post("reorder"),
                "raw_stock" =>$this->input->post("stocks"),
                "unitPrice" =>$this->input->post("price"),
                "sup_id" =>$this->input->post("sup_company")
        
			);
			$name = $this->input->post("name");
			$raw_type = $this->input->post("raw_type");
			$this->AdminProductInventory_model->activity_logs('admin', "Inserted New Raw Coffee: ".$name.",".$raw_type." roast ");	
			$data = $this->security->xss_clean($data);
			$this->AdminProductInventory_model->insert_data($data);
			echo "<script>alert('Inserted successful!');</script>";
			redirect('adminProductInventory', 'refresh');
		}
 
		function activation(){
			$this->load->model('AdminProductInventory_model');
			$id = $this->input->post("deact_id");
			$deact = $this->db->query("SELECT * FROM raw_coffee WHERE raw_id = '".$id."'")->row()->raw_activation;
			$raw_type = $this->input->post("raw_type");
			$name = $this->input->post("name");
			if ($deact == 1){
				$this->AdminProductInventory_model->activity_logs('admin', "Deactivated: ".$name." ,".$raw_type." roast ");	
				$this->AdminProductInventory_model->activation($id);
				echo "<script>alert('Deactivation successful!');</script>";
				redirect('adminProductInventory', 'refresh');

			}else{	
				$this->AdminProductInventory_model->activity_logs('admin', "Activated: '".$name."' ,'".$raw_type."' ");	
				$this->AdminProductInventory_model->activation($id);
				echo "<script>alert('Activation successful!');</script>";
				redirect('adminProductInventory', 'refresh');
			}
		}
	}
?>