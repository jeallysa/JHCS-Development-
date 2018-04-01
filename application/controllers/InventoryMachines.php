<?php

	class InventoryMachines extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryMachines_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['reorder'] = $this->notification_model->reorder();
				$data["machine"] = $this->InventoryMachines_Model->retrieveMachine();
				$this->load->view('Inventory_Module/inventoryMachines', $data);
			} else {
				redirect('login');
			}
		}


		function update(){
			$query  = $this->db->query("SELECT * FROM raw_coffee NATURAL JOIN supplier WHERE raw_activation = '1';");
              $res = $query->row();

              $c = 1; 
          
    foreach($res as $object){
       $temp =  $object->mach_id;

			$this->load->model('InventoryMachines_Model');
			$machid = $this->input->post("machid".$temp);
			$count = $this->input->post("physcount".$temp);
			$discrepancy = $this->input->post("discrepancy".$temp);
			$invdate = $this->input->post("date".$temp);
			$remarks = $this->input->post("remarks".$temp);
			$this->InventoryStickers_Model->update($machid, $count, $discrepancy, $remarks, $invdate);
			echo "<script>alert('Update successful!');</script>";
			redirect('inventoryMachines', 'refresh');

			$c++;
		}
	}


	}

?>