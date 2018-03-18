<?php

	class SalesReturns_model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_machine_return(){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN client_machreturn NATURAL JOIN machine ");
			return $query->result();
			
		}
		public function get_coffee_return(){
			$query = $this->db->query("SELECT * FROM client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client NATURAL JOIN contracted_po NATURAL JOIN coffee_blend WHERE returned='Yes' ");
			return $query->result();
			
		}
		public function get_resolved_coffee(){
			$query = $this->db->query("SELECT * FROM client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client WHERE returned='Yes' AND coff_returnAction IS NOT NULL OR coff_returnAction='' ");
			return $query->result();
			
		}
		public function get_resolved_machine(){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN client_machreturn NATURAL JOIN machine WHERE mach_returnAction IS NOT NULL OR mach_returnAction=''");
			return $query->result();
			
		}
		public function getDetailsCoffee($id){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN client_delivery NATURAL JOIN contracted_po NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE client_id='$id' ");
			 return $query->row();
			
		
			
			/* if ($query->num_rows() > 0 ) {
				 return $query->result();
			   } else {
				 return FALSE;
			   }*/
			
		}
		
	}

?>