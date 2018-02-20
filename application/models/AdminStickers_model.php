<?php 

class AdminStickers_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getStickers(){
		$query=$this->db->query("SELECT sticker, sticker_reorder, sticker_limit, sup_company, sticker_stock FROM sticker NATURAL JOIN supplier");
		return $query->result();
	}
}
?>