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


	function update($data, $coffee_id){
               
    $this->db->where('raw_id', $res->coffee_id ); 
    $this->db->update('raw_coffee', $data);    
   
                
  }
      
      

}
