<?php 

class AdminStickers_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}
	

	function getStickers(){
		$query=$this->db->query("SELECT sticker, sticker_reorder, sticker_limit, sup_company, sticker_stock FROM sticker NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('sticker', $data);
	}

}
?>