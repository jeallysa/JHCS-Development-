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
			$query = $this->db->query("SELECT client_coffReturnID, client_dr, coff_returnDate, client_company, coff_returned, coff_bag, coff_baggrams, coff_returnQty, coff_remarks, coff_returnAction, status FROM jhcs.client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client;");
			return $query->result();
			
		}
		public function get_clientmachinereturns(){
			$query = $this->db->query("SELECT client_machReturnID, client_dr, mach_returnDate, client_company, mach_id, mach_returnQty, mach_remarks, mach_returnAction, status FROM jhcs.client_machreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client;");
			return $query->result();
			
		}
	}

?>