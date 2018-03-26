<?php

class SalesDashboard_model extends CI_model
{
	function __construct()
	{ 
		parent::__construct();
	}


	function getSales(){
		$query = $this->db->query("SELECT * FROM client_delivery ");
		return $query->result();
	}

}
