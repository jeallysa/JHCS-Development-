<?php 
 
	class AdminBlends extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('Admin_Blends_Model');
				$blend_data["fetch_data_eb"] = $this->Admin_Blends_Model->fetch_data_eb();
				$this->load->view('Admin_Module/adminBlends', $blend_data);
			} else {
				redirect('login');
			}
		}

		public function edit_show(){
			$id = $this->input->get('id');
			$type = $this->input->get('type');
			if ($this->session->userdata('username') != '')
			{
				$this->load->model('Admin_Blends_Model');
				$s_data["edit_page"] = $this->Admin_Blends_Model->edit_page($id);
				$this->load->view('Admin_Module/adminBlends_edit', $s_data);
			} else {
				redirect('login');
			}
		}

		public function add_show(){
			if ($this->session->userdata('username') != '')
			{
				$this->load->view('Admin_Module/adminAddBlend');
			} else {
				redirect('login');
			}
		}

		public function edit_trial(){
			$blend_name = $this->input->post('blend_name');
			$id = $this->input->post('id');
			$price = $this->input->post('price');
			$packaging = $this->input->post('package_id');
			$this->db->query("UPDATE coffee_blend SET blend = '".$blend_name."', blend_price = '".$price."', package_id = '".$packaging."' WHERE blend_id = '".$id."';");
			$query = $this->db->query("SELECT * FROM raw_coffee;");
			foreach($query->result() as $row){
				$prop = $this->input->post("per[".$row->raw_id."]");
				$query_spec = $this->db->query("SELECT blend_id, raw_id, percentage FROM proportions WHERE blend_id = '".$id."' AND raw_id = '".$row->raw_id."';");
				if ($query_spec->num_rows() == 0){
					$data_for = array(
			        	'blend_id' => $id,
			        	'raw_id' => $row->raw_id,
			        	'percentage' => $prop
			        );
			        $this->db->insert('proportions', $data_for);
				}else{
					$this->db->query("UPDATE proportions SET percentage = '".$prop."' WHERE blend_id = '".$id."' AND raw_id = '".$row->raw_id."'");
				}
			}
			echo "<script>alert('Update successful!');</script>";
			redirect('adminBlends', 'refresh');









			/*
			echo $this->input->post('blend_name');
			echo '<br>';
			echo $this->input->post('size');
			echo '<br>';
			echo $this->input->post('packaging');
			echo '<br>';
			echo $this->input->post('price');
			echo '<br>';
			echo $this->input->post('per[1]');
			echo '<br>';
			echo $this->input->post('per[2]');
			echo '<br>';
			echo $this->input->post('per[3]');
			echo '<br>';
			echo $this->input->post('per[4]');
			echo '<br>';
			echo $this->input->post('per[5]');
			echo '<br>';
			echo $this->input->post('per[6]');
			echo '<br>';
			echo $this->input->post('package_id');
			*/
			
		}

		public function insertion(){
			$blend_name = $this->input->post('blend_name');
			$price = $this->input->post('price');
			$packaging = $this->input->post('package_id');
			$type = $this->input->post('type');
			$data_blend = array(
				'blend' => $blend_name,
				'package_id' => $packaging,
				'blend_price' => $price,
				'blend_type' => $type
			);

			$this->db->insert('coffee_blend', $data_blend);
			$id = $this->db->insert_id();
			$query = $this->db->query("SELECT * FROM raw_coffee;");
			foreach($query->result() as $row){
				$prop = $this->input->post("per[".$row->raw_id."]");
				$data_for = array(
			        	'blend_id' => $id,
			        	'raw_id' => $row->raw_id,
			        	'percentage' => $prop
			        );
			    $this->db->insert('proportions', $data_for);

			}
			echo "<script>alert('Update successful!');</script>";
			redirect('adminBlends', 'refresh');


		}

		public function activation(){
			$this->load->model('Admin_Blends_model');
			$id = $this->input->post("deact_id");
			$this->Admin_Blends_model->activation($id);
			redirect('adminBlends');
		}
        

	}
?>