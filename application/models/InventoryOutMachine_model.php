<?php

class InventoryOutMachine_model extends CI_Model {
    
    function get_machineout(){
        
        $query = $this->db->query('Select mach_salesID, client_company, date, mach_qty, remarks, CONCAT(brewer," (",brewer_type,")") AS machine from machine_out NATURAL JOIN contracted_client NATURAL JOIN machine;');
        return $query->result();
    }
    
}

?>