<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class InventoryPOAdd extends CI_Controller{
        
		function __construct(){
			parent::__construct();
             $this->load->model('inventoryPOAdd_model');
		}
		
 
        
        
        
		public function index(){ 
           
      //      $this->load->view('layout/header');
           
            
            $data['suppliers'] = $this->inventoryPOAdd_model ->retrieveSuppliers();
            $data['suppliersItem'] = $this->inventoryPOAdd_model ->retrieveItems();
            $data['truckingFee'] = $this->inventoryPOAdd_model->retrieveTruckingFee();
            $data['lastPO'] = $this->inventoryPOAdd_model->RetrieveLastPO();
            $data['tempExisting'] = $this->inventoryPOAdd_model->checkIfTempIsEmpty();
            $data['TempOrdered'] = $this->inventoryPOAdd_model->displayOrderedTemp();
            
			$this->load->view('inventoryPOAdd', $data);
            
		}
        
             
    public function get_selectItem_amount(){          //ajax part
        $item_name = $this->input->post('item_name');
        $sup_id = $this->input->post('sup_id');
        
        $result = $this->inventoryPOAdd_model->querySelectedAmount($item_name,$sup_id);
        
        if(count($result)>0){
            echo json_encode($result->unitPrice);
        }
    }
        
        
        
        
    public function get_selectIftem_type(){          //ajax part
        $item_name = $this->input->post('item_name');
        $sup_id = $this->input->post('sup_id');
        
        $results = $this->inventoryPOAdd_model->querySelectedType($item_name , $sup_id);
        

		if(count($result)>0){
	           $pro_select_box = '';
			$pro_select_box .= '<option value="">Select Province</option>';
			foreach ($results as $result) {
				$pro_select_box .=' <option value="'.$result->package_size.'">'.$result->package_size.'</option>';
			}
			echo json_encode($pro_select_box);
		}
	}
        
        
        /*
      public function get_selectItem_Type(){          //ajax part
        $item_name = $this->input->post('item_name');
        $sup_id = $this->input->post('sup_id');
        
        $results = $this->inventoryPOAdd_model->querySelectedType($item_name , $sup_id);
        
        if(count($results)>0){
            $pro_select_box = '';
            $pro_select_box .= '<option value="">Select Province</option>';
          foreach ($results as $result) {  
             $pro_select_box .=' <option value="'.$result->package_size.'">'.$result->package_size.'</option>';
          }
            
            echo json_encode($pro_select_box);
        }
    }
        
       */ 
        
        
        
        
        
        
        
        
        
        
        
        
            
          
            
            
        
      public function cancelPO(){
        $this->inventoryPOAdd_model->cancelPO();
        redirect(base_url('inventoryPOAdd'));
        }
        
      public function resetOrder(){
        $this->inventoryPOAdd_model->resetOrder();
        redirect(base_url('inventoryPOAdd'));
        } 
        
  
      
              
//   $data['check']$this->inventoryPOAdd_model->checkIfTempIsEmpty();  //check if the tempPO has a existing chosen supplier.
 //        if(empty($data['check']))
                        
   
        
      public function insertOrder(){
  //Populate First The supplier supp_po.       
        $data['tempPO'] = $this->inventoryPOAdd_model->retrieveTemp();
        $totalItemv = $this->input->post('totalItem');
        $totalAmountv = $this->input->post('totalAmount'); 
            
        $datax = array();
            
         $i=0;   
          foreach($data['tempPO'] as $object){ 
             
             $datax[$i] = array(
                'supp_id' => $object->sup_id,
                'suppPO_date' => $object->date,
                'trucking_fee' => $object->trucking_fee,
                'supp_creditTerm' => $object->credit_term,
                'total_item' => $totalItemv,
                'total_amount' =>$totalAmountv,
            );
            $i++;
          }$this->inventoryPOAdd_model->insertPO($datax);
   //end           
               
   
   //get from data from view.       
       if ($_POST)  {   //---- FROM the Dynamic Insert
        $lastPO = $this->inventoryPOAdd_model->RetrieveLastPO(); //return  1 row from the temp_po. the last PO.
        $itemv=$this->input->post('item_name');
        $qtyv=$this->input->post('qty');
        $typev=$this->input->post('type');
        $amountv=$this->input->post('amount');
        $data = array();
           
        for ($i = 0; $i < count($this->input->post('item_name')); $i++)
        {
            $data[$i] = array(
               
                'item' => $itemv[$i],
                'qty' => $qtyv[$i],
                'type' => $typev[$i],
                'amount' => $amountv[$i],
                'supp_po_id' =>$lastPO[0]->supp_po_id,
               
            );
        }
           
        $this->inventoryPOAdd_model->insertOrder($data);
    }
         
          redirect(base_url('inventoryPOAdd'));

      
}
    
  
        
      public function insertTempOrder(){
         $dataInsert = array("item_name" => $this->input->post('item'),
                             "qty"       => $this->input->post('qty'),
                            // "type"      => $typev,
                             "unitPrice" => $this->input->post('unitPrice'),
                             "amount"    => $this->input->post('amount'),
                            );    
        
        $this->inventoryPOAdd_model->insertTempOrder($dataInsert);
          
        redirect(base_url('inventoryPOAdd'));
      }
        
        
        
             
     public function insertSupplierToTemp(){
         $this->inventoryPOAdd_model->emptyTemp();   
         $dataInsert = array("id_supp_temp_PO" => 1,
                             "supp_name" => $this->input->post("dropdown"),
                             "date"      => $this->input->post("date"),
                             "trucking_fee" => $this->input->post("truckingFee"),
                             "credit_term" => $this->input->post("creditTerms"),
                            );
         
         $this->inventoryPOAdd_model->insertChosenSupplier($dataInsert);
         
         
         
         
         redirect(base_url('inventoryPOAdd'));
     }   
          
        
        
        
        
        
        
        
        
        
        
    }
?>