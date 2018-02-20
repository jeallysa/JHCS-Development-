<?php 

/**
* 
*/
class Collections_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getCollections(){
		$query=$this->db->query("SELECT collection_no, client_delivery.client_dr, client_company, payment_mode, paid_date, paid_amount, client_balance, withheld, payment_remarks FROM payment_contracted JOIN client_delivery ON payment_contracted.client_dr = client_delivery.client_dr NATURAL join contracted_po NATURAL JOIN contracted_client");
		return $query->result();
	}
}




 ?>