<?php

class InventoryStocks_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}
    
    function retrieveCoffee(){
      $query = $this->db->query("SELECT * FROM raw_coffee NATURAL JOIN supplier WHERE raw_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }


  function updateInventory($data, $modalnum){
  
     
    $query  = $this->db->query("SELECT * FROM raw_coffee NATURAL JOIN supplier WHERE raw_activation = '1';");
              $res = $query->row();
               
   
     $i=0;
       
  foreach($data as $key => $object){
      
    
      
     $this->db->where('raw_id', $physcountv[$i]);
    $this->db->update('raw_coffee', $data);
     
            
                
         }
      
   
}
      
      

}
