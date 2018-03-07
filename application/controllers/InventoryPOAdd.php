<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOAdd extends CI_Controller{
        
		function __construct(){
			parent::__construct();
             $this->load->model('inventoryPOAdd_model');
		}
		
    
        
		public function index(){ 
           
            $this->load->view('layout/header');
           
            
            $data['suppliers'] = $this->inventoryPOAdd_model ->retrieveSuppliers();
            $data['suppliersItem'] = $this->inventoryPOAdd_model ->retrieveItems();
            $data['truckingFee'] = $this->inventoryPOAdd_model->retrieveTruckingFee();
            
			$this->load->view('Inventory_Module/inventoryPOAdd', $data);
            
		}
//put inside the form validation. dito muna to.
     public function insertSupplierToTemp(){
         $dataInsert = array("supp_name" => $this->input->post("dropdown"),
                             "date" => $this->input->post("date"),
                             "trucking_fee" => $this->input->post("truckingFee"),
                             "credit_term" => $this->input->post("creditTerms")
                            );
         
         $this->inventoryPOAdd_model->insertChosenSupplier($dataInsert);
         
         
         
         
         redirect(base_url('Inventory_Module/inventoryPOAdd'));
     }   
    
      
              
              
   
        
      public function insertOrder(){
                
          
  //Populate the supplier Puchase Order.       
        $data['tempPO'] = $this->inventoryPOAdd_model->retrieveTemp();
        $datax = array();
            
         $i=0;   
          foreach($data['tempPO'] as $object){ 
             
             $datax[$i] = array(
                'supp_id' => $object->sup_id,
                'suppPO_date' => $object->date,
                'trucking_fee' => $object->trucking_fee,
                'supp_creditTerm' => $object->credit_term,
               
                 
            );
            $i++;
          }$this->inventoryPOAdd_model->insertPO($datax);
   //end           
               
   
   //get from data from view.       
       if ($_POST)  {
           
        $lastPO = $this->inventoryPOAdd_model->singleLineRetrieveLastPO(); //single line query to determine the last PO number
           
        $itemv=$this->input->post('item');
        $qtyv=$this->input->post('qty');
      //  $unitPricev=$this->input->post('unitPrice');
      //  $amountv=$this->input->post('amount');
        $data = array();
           
        for ($i = 0; $i < count($this->input->post('item')); $i++)
        {
            $data[$i] = array(
               
                'item' => $itemv[$i],
                'qty' => $qtyv[$i],
             //   'unitPrice' => $unitPricev[$i],
            //    'amount' => $amountv[$i],
                'supp_po_id' =>$lastPO[0]->supp_po_id,
               
            );
        }
           
        $this->inventoryPOAdd_model->insertOrder($data);
    }
         
          redirect(base_url('Inventory_Module/inventoryPOAdd'));

      
}
        
  
        
        
    }
?>