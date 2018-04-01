<?php 

	class SalesDelivery_model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_delivery_list(){
			$query = $this->db->query("SELECT * FROM contracted_client JOIN contracted_po ON contracted_client.client_id = contracted_po.client_id JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id JOIN packaging ON coffee_blend.package_id = packaging.package_id WHERE contracted_po.delivery_stat = 'pending' OR contracted_po.delivery_stat = 'partial delivery'");
			return $query->result();
			
		}
		public function get_delivered(){
			$query = $this->db->query("SELECT *, client_delivery.client_dr, client_delivery.client_deliveryID FROM contracted_po JOIN client_delivery ON contracted_po.contractPO_id = client_delivery.contractPO_id JOIN contracted_client ON client_delivery.client_id = contracted_client.client_id JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id  JOIN packaging ON coffee_blend.package_id = packaging.package_id LEFT OUTER JOIN client_coffreturn ON client_coffreturn.client_dr = client_delivery.client_dr");
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

		function record_data($quantity, $blend, $size){
			
			$blend_id = $this->db->query('SELECT a.blend_id AS blend_id, a.blend, b.package_size FROM coffee_blend a JOIN packaging b ON a.package_id = b.package_id WHERE a.blend = "'.$blend.'" AND b.package_size = '.$size.';')->row()->blend_id;

			$this->db->query("UPDATE coffee_blend SET blend_qty = blend_qty - ".$quantity." WHERE blend_id = '".$blend_id."'");
			/*

			$query = $this->db->query('SELECT c.percentage, c.raw_id, d.package_id, d.package_size, b.sticker_id FROM coffee_blend b JOIN proportions c JOIN packaging d ON b.blend_id = c.blend_id AND b.package_id = d.package_id WHERE c.blend_id ='.$blend_id.';');		
			
			/*$data = array(
				'walkin_date' => $date,
				'walkin_qty' => $quantity,
				'blend_id' => $blend_id
			);

			$this->db->insert('walkin_sales', $data);
			$inserted_id = $this->db->insert_id();

			$pack_id = $query->row()->package_id;
			$stick_id = $query->row()->sticker_id;
			$this->db->query("UPDATE packaging SET package_stock = package_stock - ".$quantity." WHERE package_id =".$pack_id.";");
			$this->db->query('UPDATE sticker SET sticker_stock = sticker_stock - '.$quantity.' WHERE sticker_id ='.$stick_id.';'); 
			$data_trans = array(
						'transact_date' => $date,
						'dr_client' => $cli_dr,
			        	'type' => "OUT"
			);
			$this->db->insert('inv_transact', $data_trans);
			$trans_id = $this->db->insert_id();
			
			foreach ($query->result() as $row)
			{

			        $raw_guide = $row->raw_id;
			        $percentage = $row->percentage;
			        $package = $row->package_size;
			        $this->db->query('UPDATE raw_coffee SET raw_stock = raw_stock - '.$quantity*($package*($percentage * 0.01)).' WHERE raw_id ='.$raw_guide.';'); 
			        
			        $data_for = array(
			        	'trans_id' => $trans_id,
			        	'raw_coffeeid' => $raw_guide,
			        	'quantity' => $quantity*($package*($percentage * 0.01))
			        );
			        $this->db->insert('trans_raw', $data_for);
			}

			$data_pack = array(
			        	'trans_id' => $trans_id,
			        	'package_id' => $pack_id,
			        	'quantity' => $quantity
			);
			$data_stick = array(
					'trans_id' => $trans_id,
			        	'sticker_id' => $stick_id,
			        	'quantity' => $quantity
			);
			$this->db->insert('trans_pack', $data_pack);
			$this->db->insert('trans_stick', $data_stick);
			$this->db->query('INSERT INTO trans_mach (trans_id) VALUES ('.$trans_id.')');*/

			
		}

		function activity_logs($module, $activity){
		$username = $this->session->userdata('username');
        $query = $this->db->query("SELECT user_no from jhcs.user where username ='".$username."';");
        foreach ($query ->result() as $row) {
        	$id = $row->user_no;
        }

        $data = array(
            'user_no' => $id,
            'timestamp' => date('Y\-m\-d\ H:i:s A'),
            'message' => $activity,
            'type' => $module
        );
        $this->db->insert('activitylogs', $data);
		}
	}

?>