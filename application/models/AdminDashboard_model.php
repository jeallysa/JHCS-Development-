<?php 

class AdminDashboard_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getSales(){
		$query=$this->db->query("SELECT client_dr, client_invoice, client_deliverDate, client_company, contractPO_qty, client_balance, client_type  FROM client_delivery NATURAL JOIN contracted_po NATURAL JOIN contracted_client");
		return $query->result();
	}
}

?>