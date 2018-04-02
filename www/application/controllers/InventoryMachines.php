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


		function update($id){
             
            
            $data = array(
                        'mach_id'         => $this->input->post("machid"),
                        'mach_physcount'  => $this->input->post("physcount"),
                        'mach_discrepancy'=> $this->input->post("discrepancy"),
                        'mach_remarks'    => $this->input->post("remarks"),
                        'inventory_date'    => $this->input->post("date"),
                    );              
                
        
            $this->InventoryMachines_Model->update($data , $id);    
        
            
            redirect('inventoryMachines');
        }  


	}

?>