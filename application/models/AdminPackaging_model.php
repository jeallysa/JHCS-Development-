<?php 

class AdminPackaging_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getPackaging(){
		$query=$this->db->query("SELECT package_type, sup_company, package_size, package_reorder, package_limit, package_stock FROM packaging NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('packaging', $data);
	}

}
?>