<?php

	class InventoryReturnsList_Model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_companyreturns(){
			$query = $this->db->query("SELECT * FROM jhcs.company_returns INNER JOIN raw_coffee ON sup_returnItem = raw_id INNER JOIN supplier ON company_returns.sup_id = supplier.sup_id;");
			return $query->result();
			
		}
		public function get_clientcoffeereturns(){
			$query = $this->db->query("SELECT client_coffReturnID, client_dr, coff_returnDate, client_company, coff_returnQty, coff_remarks, coff_returnAction FROM jhcs.client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client;");
			return $query->result();
			
		}
		public function get_clientmachinereturns(){
			$query = $this->db->query("SELECT client_machReturnID, mach_serial, mach_returnDate, client_company, CONCAT(brewer,' ',brewer_type) AS machine, mach_returnQty, client_machreturn.mach_remarks, mach_returnAction FROM jhcs.client_machreturn NATURAL JOIN contracted_client INNER JOIN machine ON client_machreturn.mach_id = machine.mach_id;");
			return $query->result();
			
		}
		public function get_suppliers(){
			$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
			return $query->result();
			
		}
		public function get_coffee(){
			$query = $this->db->query("SELECT raw_coffee, raw_id FROM jhcs.raw_coffee WHERE raw_activation = '1';");
			return $query->result();
			
		}

		function insert_data($data){ 
			$this->db->insert('company_returns', $data);
			return $this->db->insert_id();
		}

		function compReturnDecrease($date, $quantity, $raw_id, $return_id){

			$stock = $this->db->query("SELECT * FROM raw_coffee WHERE raw_id = '".$raw_id."';")->row()->raw_stock;
			if ($stock < $quantity){
				return;
			}
			
			$data_trans = array(
						'transact_date' => $date,
						'company_returnID' => $return_id,
			        	'type' => "OUT"
			);
			$this->db->insert('inv_transact', $data_trans);
			$trans_id = $this->db->insert_id();
			
			$this->db->query('UPDATE raw_coffee SET raw_stock = raw_stock - '.$quantity.' WHERE raw_id ='.$raw_id.';'); 
			        
			$data_for = array(
			  	'trans_id' => $trans_id,
			   	'raw_coffeeid' => $raw_id,
			   	'quantity' => $quantity
			);
			$this->db->insert('trans_raw', $data_for);

			$this->db->query('INSERT INTO trans_pack (trans_id) VALUES ('.$trans_id.')');
			$this->db->query('INSERT INTO trans_stick (trans_id) VALUES ('.$trans_id.')');
			$this->db->query('INSERT INTO trans_mach (trans_id) VALUES ('.$trans_id.')');

						
			
		
		}
	}

?>