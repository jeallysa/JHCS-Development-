<?php

	class SalesReturns_model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_machine_return(){
			$query = $this->db->query("SELECT *, client_machreturn.mach_remarks FROM contracted_client NATURAL JOIN client_machreturn  INNER JOIN machine on client_machreturn.mach_id = machine.mach_id");
			return $query->result();
			
		}
		public function get_coffee_return(){
			$query = $this->db->query("SELECT * FROM client_coffreturn NATURAL JOIN client_delivery  NATURAL JOIN contracted_client NATURAL JOIN contracted_po NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE client_delivery.return='Returned' AND client_coffreturn.resolved = 'No'");
			return $query->result();
			
		}
		public function get_resolved_coffee(){
			$query = $this->db->query("SELECT * FROM client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client WHERE client_coffreturn.resolved='Yes' ");
			return $query->result();
			
		}
		public function get_resolved_machine(){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN client_machreturn NATURAL JOIN machine WHERE mach_returnAction IS NOT NULL OR mach_returnAction=''");
			return $query->result();
			
		}
		public function getDetailsCoffee($id){
			$query = $this->db->query("SELECT * FROM client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_po NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE client_id='$id' ");
			 return $query->row();
			
		
			
			/* if ($query->num_rows() > 0 ) {
				 return $query->result();
			   } else {
				 return FALSE;
			   }*/
			
		}
		public function getDetailsMachine($id){
			$query = $this->db->query("SELECT * FROM client_machreturn INNER JOIN machine ON client_machreturn.mach_id = machine.mach_id WHERE client_id='$id' ");
			 return $query->row();
		}
		
		
		
		public function ResolveCoffeeReturnsA( $date, $receiver, $dr, $SI, $client_id,$po){
			
			$dataA = array(
				'client_dr' => $dr,
				'client_deliverDate' => $date,
				'client_receive' => $receiver,
				'client_id' => $client_id,
				'client_invoice' => $SI,
				'contractPO_id' => $po
			);
		
			$this->db->insert('client_delivery', $dataA);
			
			
			
		}
		public function ResolveCoffeeReturnsB($RID, $remarks, $resolved ){
			$dataB = array(
				'coff_returnAction' => $remarks,
				'resolved' => $resolved
			);
			$this->db->where('client_coffReturnID', $RID);
			$this->db->update('client_coffreturn', $dataB);
			
		}
		
	}

?>