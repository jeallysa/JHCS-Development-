<?php

class InventoryOutRawCoffee_model extends CI_Model {
    
    function get_rawcoffeeout(){
        
        $query = $this->db->query('Select * from inventoryout');
        return $query->result();
    }
    
}

?>