<?php

	class SalesClients_model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_clients_list(){
			$query = $this->db->query("SELECT * FROM contracted_client WHERE client_status='enabled' ");
			return $query->result();
			
		}
	}

?>