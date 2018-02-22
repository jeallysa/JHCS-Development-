<?php

class InventoryOutRawCoffee_model extends CI_Model {
    
    function get_rawcoffeeout(){
        
        $query = $this->db->query("SELECT * FROM contracted_po NATURAL JOIN client_delivery NATURAL JOIN contracted_client");
        return $query->result();
    }
    
}

?>