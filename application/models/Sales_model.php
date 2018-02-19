<?php 

/**
* 
*/
class Sales_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getSales(){
		$query=$this->db->query("");
		return $query->result();
	}
}




 ?>