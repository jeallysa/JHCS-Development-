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
			$query = $this->db->query("SELECT client_machReturnID, client_dr, mach_returnDate, client_company, mach_id, mach_returnQty, mach_remarks, mach_returnAction, CONCAT(brewer,' (',brewer_type,')') AS machine FROM jhcs.client_machreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client NATURAL JOIN machine;");
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
		}
	}

?>