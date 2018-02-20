<?php 

class AdminPackaging_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getPackaging(){
		$query=$this->db->query("SELECT package_type, sup_company, package_size, package_reorder, package_limit, package_stock FROM packaging NATURAL JOIN supplier");
		return $query->result();
	}
}
?>