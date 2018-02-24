<?php

	class InventoryReturnsList_Model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_companyreturns(){
			$query = $this->db->query("SELECT company_returnID, sup_returnDate, sup_company, sup_returnQty, sup_returnItem, sup_returnRemarks FROM jhcs.company_returns NATURAL JOIN supplier;");
			return $query->result();
			
		}
		public function get_clientcoffeereturns(){
			$query = $this->db->query("SELECT client_coffReturnID, client_dr, coff_returnDate, client_company, coff_returnQty, coff_remarks, coff_returnAction FROM jhcs.client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client;");
			return $query->result();
			
		}
		public function get_clientmachinereturns(){
			$query = $this->db->query("SELECT client_machReturnID, client_dr, mach_returnDate, client_company, mach_id, mach_returnQty, mach_remarks, mach_returnAction FROM jhcs.client_machreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client;");
			return $query->result();
			
		}
		public function get_suppliers(){
			$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
			return $query->result();
			
		}
		public function get_coffee(){
			$query = $this->db->query("SELECT raw_coffee FROM jhcs.raw_coffee;");
			return $query->result();
			
		}

		function insert_data($data){ 
			$this->db->insert('company_returns', $data);
		}
	}

?>