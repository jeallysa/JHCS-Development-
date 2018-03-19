<?php

	class SalesDelivery_model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_delivery_list(){
			$query = $this->db->query("SELECT * FROM contracted_po NATURAL JOIN contracted_client NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE delivery_stat = 'pending'");
			return $query->result();
			
		}
		public function get_delivered(){
			$query = $this->db->query("SELECT * FROM contracted_po NATURAL JOIN client_delivery NATURAL JOIN contracted_client NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE delivery_stat = 'delivered' AND payment_remarks='unpaid' AND client_delivery.return='No'");
			return $query->result();
			
		}
		public function get_paid(){
			$query = $this->db->query("SELECT * FROM payment_contracted NATURAL JOIN client_delivery NATURAL JOIN contracted_client WHERE  payment_remarks = 'paid'");
			return $query->result();
			
		}

		function insert_data($data){ 
			$this->db->insert('client_delivery', $data);
		}

		function update($deliver, $po_id){
			$data1 = array(
		        'delivery_stat' => $deliver
			);

			$this->db->where('contractPO_id', $po_id);
			$this->db->update('contracted_po', $data1);
		}
		function insert_dataA($dataA){ 
			$this->db->insert('client_coffreturn', $dataA);
		}
		function updateA($return, $dr){
			$data2 = array(
		        'return' => $return
			);

			$this->db->where('client_dr', $dr);
			$this->db->update('client_delivery', $data2);
		}

		function insert_dataB($dataB){ 
			$this->db->insert('payment_contracted', $dataB);
		}
		function updateB($pay, $dr){
			$dataB = array(
		        'payment_remarks' => $pay
			);

			$this->db->where('client_dr', $dr);
			$this->db->update('client_delivery', $dataB);
		}
	}

?>