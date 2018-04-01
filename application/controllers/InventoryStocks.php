<?php

	class InventoryStocks extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model("InventoryStocks_Model");
			$this->load->model('notification_model');
		}
		
		public function index()
		{ 
			if ($this->session->userdata('username') != '')
			{
				$data['reorder'] = $this->notification_model->reorder();
                $data['coffee'] = $this->InventoryStocks_Model ->retrieveCoffee();
				$this->load->view('Inventory_Module/inventoryStocks', $data);
			} else {
				redirect('login');
			}
		}

		public function update($details){
           
        $rawidv=$this->input->post('rawid');
        $physcountv=$this->input->post('physcount');
        $discrepancyv=$this->input->post('discrepancy');
        $remarksv=$this->input->post('remarks');
        $datev=$this->input->post('date');
        $modalnum = $details;
            
       
  if ($_POST)  {
        
 for ($i = 0; $i < count($this->input->post('rawid')); $i++){                             
              
              
                             $data[$i] = array(
                                    'raw_physcount' => $physcountv[$i],
          							'raw_remarks' => $remarksv[$i],
          							'raw_discrepancy' => $discrepancyv[$i],
          							'inventory_date' => $datev[$i],
        
                                 );

        $this->inventoryStocks_Model->updateInventory($data, $physcountv[$i]); 
                       
     
}
      
      
    
      
      
	}
            
           redirect(base_url('inventorystocks'));
           
    }

	}

?>