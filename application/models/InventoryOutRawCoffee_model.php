<?php

class InventoryOutRawCoffee_model extends CI_Model {
    
    
    public function get_coffeeoutwalkin(){
        
        $query = $this->db->query("SELECT walkin_id, blend_id, walkin_date, blend, package_type, package_size, walkin_qty, blend_price FROM walkin_sales NATURAL JOIN coffee_blend NATURAL JOIN packaging");
        return $query->result();
    }
     public function get_coffeeoutcontracted(){
        
        $query = $this->db->query("SELECT client_dr, client_deliverDate, client_company, blend, package_type, package_size, contractPO_qty, client_receive FROM contracted_po NATURAL JOIN client_delivery NATURAL JOIN contracted_client NATURAL JOIN coffee_blend NATURAL JOIN packaging where delivery_stat='delivered'");
        return $query->result();
    }
    public function get_machineout(){
        
        $query = $this->db->query('Select * from machine_out NATURAL JOIN contracted_client NATURAL JOIN machine');
        return $query->result();
    }
    
}

?>