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
		$query2=$this->db->query("SELECT mach_id, date, client_company, brewer, mach_qty, mach_price FROM machine_out NATURAL JOIN contracted_client NATURAL JOIN machine");
		return $query2->result();
	}

	Public function getBlends(){
		$query3=$this->db->query("SELECT * FROM coffee_blend where blend_activation = 1");
		return $query3->result();
	}

	Public function getMachine(){
		$query4=$this->db->query("SELECT * FROM machine where mach_activation = 1");
		return $query4->result();
	}

	Public function getClient(){
		$query5=$this->db->query("SELECT * FROM contracted_client where client_status = 'enabled'");
		return $query5->result();
	}



	function record_data($data4){ 
		$this->db->insert('walkin_sales', $data4);
	}

	function add_data($data7){ 
		$this->db->insert('machine_out', $data7);
	}
}

?>