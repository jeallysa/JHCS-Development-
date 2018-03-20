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
            $data['lastPO'] = $this->inventoryPOAdd_model->RetrieveLastPO();
            $data['tempExisting'] = $this->inventoryPOAdd_model->checkIfTempIsEmpty();
            
			$this->load->view('inventoryPOAdd', $data);
            
		}
        
        
        
        
//put inside the form validation. dito muna to.
     public function insertSupplierToTemp(){
         $this->inventoryPOAdd_model->emptyTemp();   
         $dataInsert = array("id_supp_temp_PO" => 1,
                             "supp_name" => $this->input->post("dropdown"),
                             "date" => $this->input->post("date"),
                             "trucking_fee" => $this->input->post("truckingFee"),
                             "credit_term" => $this->input->post("creditTerms"),
                            );
         
         $this->inventoryPOAdd_model->insertChosenSupplier($dataInsert);
         
         
         
         
         redirect(base_url('inventoryPOAdd'));
     }   
        
        
      public function cancelPO(){
        $this->inventoryPOAdd_model->cancelOrder();
        redirect(base_url('inventoryPOAdd'));
        }
  
      
              
//   $data['check']$this->inventoryPOAdd_model->checkIfTempIsEmpty();  //check if the tempPO has a existing chosen supplier.
 //        if(empty($data['check']))
                        
   
        
      public function insertOrder(){
            
  //Populate First The supplier supp_po.       
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
       if ($_POST)  {   //---- FROM the Dynamic Insert
        $lastPO = $this->inventoryPOAdd_model->RetrieveLastPO(); //return  1 row from the temp_po. the last PO.
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
         
          redirect(base_url('inventoryPOAdd'));

      
}
      
        
        
    }
?>