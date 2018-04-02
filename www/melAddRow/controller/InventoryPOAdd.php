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
            
			$this->load->view('inventoryPOAdd', $data);
            
		}
//put inside the form validation. dito muna to.
     public function insertSupplier(){
         $dataInsert = array("supp_name" => $this->input->post("dropdown"),
                             "date" => $this->input->post("date"),
                             "trucking_fee" => $this->input->post("truckingFee"),
                             "credit_term" => $this->input->post("creditTerms")
                            );
         
         $this->inventoryPOAdd_model->insertChosenSupplier($dataInsert);
         
         redirect(base_url('inventoryPOAdd'));
     }   
        
   
        
      public function insertOrder(){
       if ($_POST)  {
        $itemv=$this->input->post('item');
        $qtyv=$this->input->post('qty');
        $unitPricev=$this->input->post('unitPrice');
        $amountv=$this->input->post('amount');
        $data = array();
        for ($i = 0; $i < count($this->input->post('item')); $i++)
        {
            $data[$i] = array(
        
                'item' => $itemv[$i],
                'qty' => $qtyv[$i],
                'unitPrice' => $unitPricev[$i],
                'amount' => $amountv[$i],
               
            );
        }
        $this->inventoryPOAdd_model->insertOrder($data);
    }
          redirect(base_url('inventoryPOAdd'));
      }
        
  
        
        
    }
?>