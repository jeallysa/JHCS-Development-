<?php

class InventoryOutRawCoffee_model extends CI_Model {
    
    function get_rawcoffeeout(){
        
        $query = $this->db->query("Select * from client_delivery NATURAL JOIN contracted_client NATURAL JOIN contracted_po NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE delivery_stat = 'delivered' ");
        return $query->result();
    }
    
}

?>