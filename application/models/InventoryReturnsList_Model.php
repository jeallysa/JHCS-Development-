<?php

	class InventoryReturnsList_Model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_companyreturns(){
			$query = $this->db->query("SELECT * FROM company_returns INNER JOIN raw_coffee ON sup_returnItem = raw_id INNER JOIN supplier ON company_returns.sup_id = supplier.sup_id;");
			return $query->result();
			
		}
		public function get_clientcoffeereturns(){
			$query = $this->db->query("SELECT * FROM client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client;");
			return $query->result();
			
		}
		public function get_clientmachinereturns(){
			$query = $this->db->query("SELECT client_machReturnID, mach_returnDate, client_company, client_machreturn.mach_id, mach_returnQty, client_machreturn.mach_remarks, mach_returnAction, CONCAT(name,' (',type,')') AS machine FROM client_machreturn NATURAL JOIN contracted_client INNER JOIN machine ON client_machreturn.mach_id = machine.mach_id;");
			return $query->result();
			
		}
		public function get_suppliers(){
			$query = $this->db->query("SELECT * FROM supplier;");
			return $query->result();
			
		}
		public function get_coffee(){
			$query = $this->db->query("SELECT * FROM raw_coffee WHERE raw_activation = '1';");
			return $query->result();
			
		}

		function insert_data($data){ 
			$this->db->insert('company_returns', $data);
		}
	}

?>