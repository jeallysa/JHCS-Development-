<?php 

class AdminMachines_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getMachines(){
		$query=$this->db->query("SELECT brewer, brewer_type, mach_reorder, mach_limit, sup_company, mach_stocks FROM machine NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('machine', $data);
	}
}
?>