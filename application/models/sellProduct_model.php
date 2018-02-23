<?php 

class sellProduct_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getSoldCoffee(){
		$query=$this->db->query("SELECT blend_id, walkin_date, CONCAT(walkin_fname,' ', walkin_lname) AS Client, blend, bag, size, walkin_qty, blend_price FROM walkin_sales NATURAL JOIN coffee_blend");
		return $query->result();
	}

	Public function getSoldMachine(){
		$query2=$this->db->query("SELECT mach_tagNO, date, client_company, brewer, mach_qty, mach_price FROM machine_out NATURAL JOIN contracted_client NATURAL JOIN machine");
		return $query2->result();
	}
}

?>