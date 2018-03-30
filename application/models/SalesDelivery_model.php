<?php

	class SalesDelivery_model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_delivery_list(){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN contracted_po NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE contracted_po.delivery_stat = 'pending' OR contracted_po.delivery_stat = 'partial delivery'");
			return $query->result();
			
		}
		public function get_delivered(){
			$query = $this->db->query("SELECT *, client_delivery.client_dr, client_delivery.client_deliveryID FROM contracted_po NATURAL JOIN client_delivery NATURAL JOIN contracted_client NATURAL JOIN coffee_blend NATURAL JOIN packaging LEFT OUTER JOIN client_coffreturn ON client_coffreturn.client_dr = client_delivery.client_dr");
			return $query->result();
			
		}
		public function get_paid(){
			$query = $this->db->query("SELECT * FROM payment_contracted NATURAL JOIN client_delivery NATURAL JOIN contracted_client WHERE  payment_remarks = 'paid' OR payment_remarks='partially paid'");
			return $query->result();
			
		}

		function insert_data($data){ 
			$this->db->insert('client_delivery', $data);
			

		}

		function updateDel($deliver, $po_id, $delivered_quantity){

			$this->db->query("UPDATE contracted_po SET delivery_stat ='".$deliver."', delivered_qty = delivered_qty + ".$delivered_quantity." WHERE contractPO_id = '".$po_id."';");
		}

		function insert_dataA($dataA){ 
			$this->db->insert('client_coffreturn', $dataA);
		}
		function updateA($return, $deliver_id){
			$data2 = array(
		        'return' => $return
			);

			$this->db->where('client_deliveryID', $deliver_id);
			$this->db->update('client_delivery', $data2);
		}

		function insert_dataB($dataB){ 
			$this->db->insert('payment_contracted', $dataB);
		}
		function updateB($pay, $deliver_id, $amount_paid){
			$this->db->query("UPDATE client_delivery SET payment_remarks ='".$pay."', amount_paid = amount_paid + ".$amount_paid." WHERE client_deliveryID = '".$deliver_id."';");
		}

		function add_blend($add_blend, $blend_id){
			$this->db->query("UPDATE coffee_blend SET blend_qty = blend_qty + ".$add_blend." WHERE blend_id = '".$blend_id."';");
		}
	}

?>