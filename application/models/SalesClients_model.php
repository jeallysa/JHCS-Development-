<?php

	class SalesClients_model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_clients_list(){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN contract WHERE client_activation='1' ");
			return $query->result();
			
		}
		public function getClientsDetails($id){
			$query = $this->db->query("SELECT * FROM contract NATURAL JOIN contracted_client INNER JOIN coffee_blend ON contract.blend_id = coffee_blend.blend_id INNER JOIN packaging ON contract.package_id = packaging.package_id WHERE client_id='$id'");
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

		public function load_Client_det($id){
			$query = $this->db->query("SELECT * FROM contracted_client WHERE client_id = '$id' ");
			return $query->result();
		}

		public function load_POClient($id){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN contracted_po NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE client_id = '$id' ");
			return $query->result();
		}

		public function load_DelClient($id){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN contracted_po NATURAL JOIN coffee_blend NATURAL JOIN packaging NATURAL JOIN client_delivery WHERE client_id = '$id' ");
			return $query->result();
		}

		public function load_Client_coff($id){
			$query = $this->db->query("SELECT * FROM contract NATURAL JOIN contracted_client INNER JOIN coffee_blend ON contract.blend_id = coffee_blend.blend_id INNER JOIN packaging ON contract.package_id = packaging.package_id WHERE contracted_client.client_id='$id'");
			return $query->result();
		}
		

		public function load_Client_mach($id){
			$query = $this->db->query("SELECT * FROM machine_out NATURAL JOIN contracted_client NATURAL JOIN machine where status = 'rented' AND client_id='$id' AND (machine_out.remarks='Received' OR machine_out.remarks='Returned')");
			return $query->result();
		}


		public function getClientInfo($id){
			$query = $this->db->query("SELECT * FROM contracted_client WHERE client_id='$id'");
			return $query->result();
		}
		
		public function getBlends(){
			$query = $this->db->query("SELECT * FROM coffee_blend NATURAL JOIN packaging");
			return $query->result();
		}
		

		public function addMultipleOrders($data){
			
			for($x = 0; $x < count($data); $x++){
				$orders[] = array(
					'client_id' => $data[$x]['id'],
					'contractPO_date' => $data[$x]['dateO'],
					'blend_id' => $data[$x]['blend'],
					'contractPO_qty' => $data[$x]['quantity'],
				);
			}
			
			try{
				
				for($x = 0; $x<count($data);$x++){
					$this->db->insert('contracted_po', $orders[$x]);
				}
				
				return 'success';
				
			}catch(Exception $e){
				return 'failed';
			}
			
		}

		public function load_PayClient($id){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN contracted_po NATURAL JOIN client_delivery NATURAL JOIN payment_contracted WHERE client_id='$id'");
			return $query->result();
		}
		
	}

?>