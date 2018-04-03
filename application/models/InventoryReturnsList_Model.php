<?php

	class InventoryReturnsList_Model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
        
        
        public function get_PO(){
			$query = $this->db->query("SELECT distinct supp_po_id FROM supp_delivery");
			return $query->result();
			
		}
        
        
        
        
           public function get_PoList($po){
			$query = $this->db->query("SELECT distinct supp_delivery.supp_po_ordered_id , item, type FROM supp_delivery join supp_po_ordered on supp_delivery.supp_po_ordered_id = supp_po_ordered.supp_po_ordered_id where supp_delivery.supp_po_id = ".$po);
			return $query->result();
			
		}
        
        
        
        
        
           function insertReturns($return){ 
                  
           $this->db->insert("company_returns" , $return);
           }
               
        
        
           function updateStocks($return){ 
         
           $query1 = $this->db->query("SELECT * from supp_po_ordered where supp_po_ordered_id = ".$return['sup_returnItem']." and supp_po_id = ".$return['poNo']);
           $query2 = $this->db->query("SELECT * from supp_po where supp_po_id = ".$return['poNo']);        
                        
                        $result1= $query1->row();
                        $result2= $query2->row();
                        
                        $itemName = $result1->item;//result1['item'];  //
                        $itemType = $result1->type;//result1['type'];  //
                        
                        $sup_id = $result2->supp_id;// result2['supp_id']; //
               
               
               
             $arrayItem = array("raw_coffee","sticker","packaging","machine");
                   $arrayOn = array("raw_coffee","sticker","package_type","brewer");
                      $arrayType = array("raw_type","sticker_type","package_size","brewer_type");
                           $stockColumn= array("raw_stock","sticker_stock","package_stock","mach_stocks");
               
               
                         for($i= 0 ; $i <= 3 ; $i++){
                          
                     $retrieveDetails ="SELECT ".$stockColumn[$i]." as stock FROM ".$arrayItem[$i]." where ".$arrayOn[$i]." = '".$itemName."' and ".$arrayType[$i]." = '".$itemType."' and sup_id = ".$sup_id;  
               
                                       $query = $this->db->query($retrieveDetails);
                                           if ($query->num_rows() > 0) {
                                                  $tempResult = $query->row();
                                                  $stock = $tempResult->stock - $return['sup_returnQty'];
                                               
                                       $where = array( $arrayOn[$i] =>$itemName, $arrayType[$i] =>$itemType, 'sup_id' => $sup_id ); // multiple where
                                               
                                       $toUpdate =array( $stockColumn[$i] => $stock);        
                                               
                                       $this->db->where($where);  //used the where here
                                       $this->db->update($arrayItem[$i], $toUpdate);   
                                               
                                        $this->db->insert($arrayItem[$i] , $toUpdate);       
                                              }
                                            }
                      
                      
                      
                   
                
         
         }  
        
        
        
		public function get_companyreturns(){
			$query = $this->db->query("SELECT * FROM company_returns join supp_po_ordered on supp_po_ordered_id = sup_returnItem");
			return $query->result();
			
        }
            
          
            
            
               
		public function get_maxModel($item, $poNo){
			$query = $this->db->query("SELECT yield_weight-sup_returnQty as max  FROM company_returns join supp_delivery on poNo = supp_po_id where poNo = ".$poNo. " and sup_returnItem = ".$item);
		
                if($query->num_rows() > 0){
                               return $query->row();
                    
                    
                    
                    
                    
                    
                }else{
                    
                      $query2 = $this->db->query("SELECT yield_weight as max FROM supp_delivery where supp_po_id = ".$poNo. " and supp_po_ordered_id =".$item);
                         if($query2->num_rows() > 0){
                                    return $query2-> row();
                              }
                }
        }
            
            
            
            
            

        
        
    
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
		public function get_clientcoffeereturns(){
			$query = $this->db->query("SELECT client_coffReturnID, client_dr, coff_returnDate, client_company, coff_returnQty, coff_remarks, coff_returnAction FROM jhcs.client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client;");
			return $query->result();
			
		}
		public function get_clientmachinereturns(){
			$query = $this->db->query("SELECT client_machReturnID, mach_serial, mach_returnDate, client_company, CONCAT(brewer,' ',brewer_type) AS machine, mach_returnQty, client_machreturn.mach_remarks, mach_returnAction FROM jhcs.client_machreturn NATURAL JOIN contracted_client INNER JOIN machine ON client_machreturn.mach_id = machine.mach_id;");
			return $query->result();
			
		}
		public function get_suppliers(){
			$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
			return $query->result();
			
		}
		public function get_coffee(){
			$query = $this->db->query("SELECT raw_coffee, raw_id FROM jhcs.raw_coffee WHERE raw_activation = '1';");
			return $query->result();
			
		}

		function insert_data($data){ 
			$this->db->insert('company_returns', $data);
			return $this->db->insert_id();
		}

		function compReturnDecrease($date, $quantity, $raw_id, $return_id){

			$stock = $this->db->query("SELECT * FROM raw_coffee WHERE raw_id = '".$raw_id."';")->row()->raw_stock;
			if ($stock < $quantity){
				return;
			}
			
			$data_trans = array(
						'transact_date' => $date,
						'company_returnID' => $return_id,
			        	'type' => "OUT"
			);
			$this->db->insert('inv_transact', $data_trans);
			$trans_id = $this->db->insert_id();
			
			$this->db->query('UPDATE raw_coffee SET raw_stock = raw_stock - '.$quantity.' WHERE raw_id ='.$raw_id.';'); 
			        
			$data_for = array(
			  	'trans_id' => $trans_id,
			   	'raw_coffeeid' => $raw_id,
			   	'quantity' => $quantity
			);
			$this->db->insert('trans_raw', $data_for);

			$this->db->query('INSERT INTO trans_pack (trans_id) VALUES ('.$trans_id.')');
			$this->db->query('INSERT INTO trans_stick (trans_id) VALUES ('.$trans_id.')');
			$this->db->query('INSERT INTO trans_mach (trans_id) VALUES ('.$trans_id.')');

						
			
		
		}
	}

?>