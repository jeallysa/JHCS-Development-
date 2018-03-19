<?php 

class AdminStickers_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}
	

	function getStickers(){
		$query=$this->db->query("SELECT sticker_id, sticker, sticker_reorder, sticker_limit, sup_company, sticker_stock FROM sticker NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('sticker', $data);
	}

    function update($id, $name, $reorder, $stocks, $stocklimit, $sup_id){
		$data = array(
	        'sticker' => $name,
	        'sticker_reorder' => $reorder,
	        'sticker_stock' => $stocks,
	        'sticker_limit' => $stocklimit,
	        'sup_id' => $sup_id
		);

		$this->db->where('sticker_id', $id);
		$this->db->update('sticker', $data);
	}
}
?>