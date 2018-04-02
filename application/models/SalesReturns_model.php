<?php

	class SalesReturns_model extends CI_MODEL{
		function __construct(){
			parent::__construct();
		}
		
		public function get_machine_return(){
			$query = $this->db->query("SELECT *, client_machreturn.mach_remarks FROM contracted_client NATURAL JOIN client_machreturn INNER JOIN machine on client_machreturn.mach_id = machine.mach_id WHERE resolved='No' ");
			return $query->result();
			
		}
		public function get_coffee_return(){
			$query = $this->db->query("SELECT * FROM client_coffreturn NATURAL JOIN client_delivery  NATURAL JOIN contracted_client NATURAL JOIN contracted_po NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE client_delivery.return='Returned' AND client_coffreturn.resolved = 'No'");
			return $query->result();
			
		}

		public function get_coffee_walkin_return(){
			$query = $this->db->query("SELECT * FROM client_coffreturn INNER JOIN walkin_sales ON walkin_sales.walkin_id = client_coffreturn.client_deliveryID NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE walkin_sales.coff_remark='Returned' AND client_coffreturn.resolved = 'No'");
			return $query->result();
			
		}

		public function get_resolved_coffee(){
			$query = $this->db->query("SELECT * FROM client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_client WHERE client_coffreturn.resolved='Yes' ");
			return $query->result();
			
		}
		public function get_resolved_machine(){
			$query = $this->db->query("SELECT a.*, b.*, c.*, d.* FROM contracted_client a JOIN machine b JOIN client_machreturn c JOIN machine_out d ON a.client_id = d.client_id AND d.mach_id = c.mach_id AND c.mach_id = b.mach_id WHERE c.resolved='Yes' ");
			return $query->result();
			
		}
		public function getDetailsCoffee($id){
			$query = $this->db->query("SELECT * FROM client_coffreturn NATURAL JOIN client_delivery NATURAL JOIN contracted_po NATURAL JOIN coffee_blend NATURAL JOIN packaging WHERE client_id='$id' ");
			 return $query->row();
			
		}
		public function getDetailsMachine($id){
			$query = $this->db->query("SELECT * FROM contracted_client NATURAL JOIN client_machreturn INNER JOIN machine ON client_machreturn.mach_id = machine.mach_id WHERE client_id='$id' ");
			 return $query->row();
		}

		public function less_raw_coffee($date, $quantity, $blend_id, $id){
			/* NEEDED QUERY for Section 4 */
			$query = $this->db->query('SELECT c.percentage, c.raw_id, d.package_id, d.package_size, b.sticker_id FROM coffee_blend b JOIN proportions c JOIN packaging d ON b.blend_id = c.blend_id AND b.package_id = d.package_id WHERE c.blend_id ='.$blend_id.';');		
			
			
			

			/* UPDATE of stocks & insert into INV_TRANSACT*/
			$pack_id = $query->row()->package_id;
			$stick_id = $query->row()->sticker_id;
			$this->db->query("UPDATE packaging SET package_stock = package_stock - ".$quantity." WHERE package_id =".$pack_id.";");
			$this->db->query('UPDATE sticker SET sticker_stock = sticker_stock - '.$quantity.' WHERE sticker_id ='.$stick_id.';');
			$data_trans = array(
						'transact_date' => $date,
						'walkin_return' => $id,
			        	'type' => "OUT"
			);
			$this->db->insert('inv_transact', $data_trans);
			$trans_id = $this->db->insert_id();
			
			/* FOR TRANS_RAW */
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

			/* FOR Trans (Machines, Packaging, Stickers..) */
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
			$this->db->query('INSERT INTO trans_mach (trans_id) VALUES ('.$trans_id.')');

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

		public function update_return($id){
			$this->db->query("UPDATE client_coffreturn SET coff_returnQty = '0', resolved = 'Yes' WHERE client_deliveryID = '".$id."';");
			
		}

		public function update_delivery($id){
			$this->db->query("UPDATE client_delivery SET client_delivery.return = 'Received' WHERE client_deliveryID = '".$id."';");
			
		}


		public function update_mach_return($MRID){
			$this->db->query("UPDATE client_machreturn SET client_machreturn.resolved = 'Yes', mach_returnQty = '0' WHERE client_machreturn.client_machReturnID = '".$MRID."';");
			
		}

		public function update_mach_return_rent($c_id){
			$this->db->query("UPDATE machine_out SET machine_out.remarks = 'Received' WHERE client_id = '".$c_id."';");
			
		}

		public function update_less_return_coffee($quantity, $blend_id){
			$this->db->query("UPDATE coffee_blend SET blend_qty = blend_qty - ".$quantity." WHERE blend_id = '".$blend_id."';");
			
		}

		public function less_machine($m_id, $qty){
			$this->db->query("UPDATE machine SET mach_stocks = mach_stocks - ".$qty." WHERE mach_id = '".$m_id."';");
			
		}

		public function update_walkin_sales($id){
			$this->db->query("UPDATE walkin_sales SET coff_remark = 'Received', walkin_returns = '0' WHERE walkin_id = '".$id."';");
			
		}
		
		public function ResolveMachineReturnsA($c_id, $m_id, $date, $remarks, $serial, $qty){
			
			$dataA = array(
				'client_id' => $c_id,
				'mach_id' => $m_id,
				'date' => $date,
				'remarks' => $remarks,
				'mach_serial' => $serial, 
				'mach_qty' => $qty
			);
			
			$this->db->insert('machine_out', $dataA);
		}
		
		public function ResolveMachineReturnsB($MRID, $resolved ){
			
			$dataB = array(
				'resolved' => $resolved,
			);
			
			$this->db->where('client_machReturnID', $MRID);
			$this->db->update('client_machreturn', $dataB);
		}
		
	}

?>