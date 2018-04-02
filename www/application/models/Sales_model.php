<?php 

class Sales_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getSales(){
		$query=$this->db->query("SELECT * FROM client_delivery NATURAL JOIN contracted_po NATURAL JOIN contracted_client NATURAL JOIN coffee_blend NATURAL JOIN packaging");
		return $query->result();
	}
}

?>