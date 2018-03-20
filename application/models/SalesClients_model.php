<?php

	class SalesClients_model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_clients_list(){
			$query = $this->db->query("SELECT * FROM contracted_client WHERE client_activation='1' ");
			return $query->result();
			
		}
		public function getClientsDetails($id){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN contract NATURAL JOIN contracted_po NATURAL JOIN coffee_blend WHERE client_id='$id' ");
			 return $query->row();
		}
		public function addClientPO( $date, $QTY, $id, $blend_id){		
			$data = array(
				'contractPO_date' => $date,
				'client_id' => $id,
				'contractPO_qty' => $QTY,
				'blend_id' => $blend_id
			);
			$this->db->insert('contracted_po', $data);
		}
	}

?>