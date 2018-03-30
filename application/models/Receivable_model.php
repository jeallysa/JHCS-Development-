<?php 

class Receivable_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getReceivable(){
		$query=$this->db->query("SELECT * from payment_contracted RIGHT JOIN client_delivery ON payment_contracted.client_deliveryID = client_delivery.client_deliveryID NATURAL JOIN contracted_client WHERE payment_contracted.client_deliveryID IS NULL");
		return $query->result();
	}
}

?>