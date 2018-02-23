<?php

	class SalesDelivery_model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_delivery_list(){
			$query = $this->db->query("SELECT * FROM contracted_po NATURAL JOIN client_delivery NATURAL JOIN contracted_client");
			return $query->result();
			
		}
		public function get_delivered(){
			$query = $this->db->query("SELECT * FROM contracted_po NATURAL JOIN client_delivery NATURAL JOIN contracted_client NATURAL JOIN payment_contracted WHERE  payment_remarks = 'unpaid'");
			return $query->result();
			
		}
		public function get_paid(){
			$query = $this->db->query("SELECT * FROM payment_contracted NATURAL JOIN client_delivery NATURAL JOIN contracted_client WHERE  payment_remarks = 'paid'");
			return $query->result();
			
		}
	}

?>