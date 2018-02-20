<?php 

class AdminMachines_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getMachines(){
		$query=$this->db->query("SELECT brewer, brewer_type, mach_reorder, mach_limit, sup_company, mach_stocks FROM machine NATURAL JOIN supplier");
		return $query->result();
	}
}
?>