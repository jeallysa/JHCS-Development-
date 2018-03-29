<?php

	class InventoryStocks extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$this->load->model("InventoryStocks_Model");
                $data['coffee'] = $this->InventoryStocks_Model ->retrieveCoffee();
				$this->load->view('Inventory_Module/inventoryStocks', $data);
			} else {
				redirect('login');
			}
		}


		function update($id){

        $rawid = $this->input->post("rawid");
		$physcount = $this->input->post("physcount");
		$discrepancy = $this->input->post("discrepancy");
		$remarks = $this->input->post("remarks");
		$coffee_id = $id;

            
        if ($_POST)  {
            for ($i = 0; $i < count($this->input->post('rawid')); $i++){       //to have a length used the itemID             
                if(!empty($discrepancy[$i])){
                    $data[$i] = array(
                        'raw_id' => $id,
                        'raw_physcount' => $physcount[$i],
                        'raw_discrepancy' => $discrepancy[$i],
                        'raw_remarks'    => $remarks[$i],
                    );              
                }
        }
            $this->InventoryStocks_Model->update($data, $coffee_id);    
        }
            
            
            redirect('inventoryStocks', 'refresh');
    }  

	}

?>