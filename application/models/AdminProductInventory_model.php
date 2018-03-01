<?php 

class AdminProductInventory_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}
    
	function getProducts(){
		$query=$this->db->query("SELECT raw_coffee, raw_reorder, raw_limit, sup_company, raw_stock FROM raw_coffee NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('raw_coffee', $data);
	}

}
?>