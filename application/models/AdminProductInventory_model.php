<?php 

class AdminProductInventory_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getProduct(){
		$query=$this->db->query("SELECT raw_coffee, raw_reorder, raw_limit, sup_company, raw_stock FROM raw_coffee NATURAL JOIN supplier");
		return $query->result();
	}
}
?>