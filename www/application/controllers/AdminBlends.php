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

			if ($this->session->userdata('username') != ''){
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
			$this->load->model('Admin_Blends_model');

				$this->load->view('Admin_Module/adminAddBlend');
			} else {
				redirect('login');
			}
		}

		public function edit_trial(){
			$this->load->model('Admin_Blends_Model');
			$blend_name = $this->input->post('blend_name');
			$id = $this->input->post('id');
			$price = $this->input->post('price');
			$packaging = $this->input->post('package_id');
			$type = $this->input->post('type');
			$sticker = $this->input->post('stick');

			$pack = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$packaging."'")->row()->package_type;
			$size = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$packaging."'")->row()->package_size;
			$this->Admin_Blends_Model->activity_logs('admin', "Updated Coffee Blend: ".$blend_name.", ".$pack." Bag ".$size." grams in ".$type." ");
			$this->db->query("UPDATE coffee_blend SET blend = '".$blend_name."', blend_price = '".$price."', package_id = '".$packaging."', blend_type = '".$type."', sticker_id = '".$sticker."' WHERE blend_id = '".$id."'");
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
		}

		public function insertion(){
			$this->load->model('Admin_Blends_model');
			$blend_name = $this->input->post('blend_name');
			$price = $this->input->post('price');
			$packaging = $this->input->post('package_id');
			$type = $this->input->post('type');
			$sticker = $this->input->post('stick');
			$pack = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$packaging."'")->row()->package_type;	
			$size = $this->db->query("SELECT * FROM packaging WHERE package_id = '".$packaging."'")->row()->package_size;

			$this->Admin_Blends_model->activity_logs('admin', "Inserted New Coffee Blend: ".$blend_name.", ".$pack." bag ".$size." grams in ".$type." blend ");	
			$data_blend = array(
				'blend' => $blend_name,
				'package_id' => $packaging,
				'blend_price' => $price,
				'blend_type' => $type,
				'sticker_id' => $sticker
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
			$deact = $this->db->query("SELECT * FROM coffee_blend WHERE blend_id = '".$id."'")->row()->blend_activation;
			
			$name = $this->db->query("SELECT * FROM coffee_blend WHERE blend_id = '".$id."'")->row()->blend;
			$type = $this->db->query("SELECT * FROM `coffee_blend` NATURAL JOIN packaging WHERE blend_id = '".$id."' ")->row()->package_type;
			$size =  $this->db->query("SELECT * FROM `coffee_blend` NATURAL JOIN packaging WHERE blend_id = '".$id."' ")->row()->package_size;

			if ($deact == 1){
				$this->Admin_Blends_model->activity_logs('admin', "Deactivated: ".$name." ".$type." ".$size." grams ");	
				$this->Admin_Blends_model->activation($id);
				echo "<script>alert('Deactivation successful!');</script>";
				redirect('adminBlends', 'refresh');

			}else{	
				$this->Admin_Blends_model->activity_logs('admin', "Activated: ".$name." ".$type." ".$size." grams ");	
				$this->Admin_Blends_model->activation($id);
				echo "<script>alert('Activation successful!');</script>";

				redirect('adminBlends', 'refresh');
			}
		}
        

	}
?>