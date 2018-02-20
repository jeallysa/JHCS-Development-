<?php 

class Receivable_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getReceivable(){
		$query=$this->db->query("SELECT client_company, client_balance from payment_contracted RIGHT JOIN client_delivery ON payment_contracted.client_dr = client_delivery.client_dr NATURAL JOIN contracted_client WHERE payment_contracted.client_dr IS NULL");
		return $query->result();
	}
}

?>