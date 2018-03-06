<?php 

/**
* 
*/
class AdminDeliveryReport_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getDelivery(){
		$query=$this->db->query("SELECT * FROM contracted_po NATURAL JOIN client_delivery NATURAL JOIN contracted_client NATURAL JOIN payment_contracted");
		return $query->result();
	}
}

 ?>