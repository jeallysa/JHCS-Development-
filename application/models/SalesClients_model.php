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
		public function addClientPO($date, $quantity, $id, $blend_id){
			$query = $this->db->query('SELECT c.percentage, c.raw_id, d.package_id, d.package_size, b.sticker_id FROM coffee_blend b JOIN proportions c JOIN packaging d ON b.blend_id = c.blend_id AND b.package_id = d.package_id WHERE c.blend_id ='.$blend_id.';');
			foreach($query->result() AS $row){
				$raw_guide = $row->raw_id;
			    $percentage = $row->percentage;
			    $package = $row->package_size;
				$stock = $this->db->query("SELECT * FROM raw_coffee WHERE raw_id = '".$raw_guide."';")->row()->raw_stock;
				$taker = round($quantity*($package*($percentage * 0.01)));
				if ($stock < $taker){
					echo '<script> alert("Maximum order exceeded from the number of stocks! Transaction halted."); </script>';
					return;
				}else{
					echo '<script> alert("Purchase order added."); </script>';
					
					$data = array(
						'contractPO_date' => $date,
						'client_id' => $id,
						'contractPO_qty' => $quantity,
						'blend_id' => $blend_id
					);
					$this->db->insert('contracted_po', $data);
					return $this->db->insert_id();
					
					
				}
			}			
			
		}

		public function stockDecrease($date, $quantity, $blend_id, $po_id){
			/* NEEDED QUERY for Section 4 */
			$query = $this->db->query('SELECT c.percentage, c.raw_id, d.package_id, d.package_size, b.sticker_id FROM coffee_blend b JOIN proportions c JOIN packaging d ON b.blend_id = c.blend_id AND b.package_id = d.package_id WHERE c.blend_id ='.$blend_id.';');		
			
			
			/* validation of stock if less or not */
			foreach($query->result() AS $row){
				$raw_guide = $row->raw_id;
			    $percentage = $row->percentage;
			    $package = $row->package_size;
				$stock = $this->db->query("SELECT * FROM raw_coffee WHERE raw_id = '".$raw_guide."';")->row()->raw_stock;
				$taker = round($quantity*($package*($percentage * 0.01)));
				if ($stock < $taker){
					return;
				}
			}
			

			/* UPDATE of stocks & insert into INV_TRANSACT*/
			$pack_id = $query->row()->package_id;
			$stick_id = $query->row()->sticker_id;
			$this->db->query("UPDATE packaging SET package_stock = package_stock - ".$quantity." WHERE package_id =".$pack_id.";");
			$this->db->query('UPDATE sticker SET sticker_stock = sticker_stock - '.$quantity.' WHERE sticker_id ='.$stick_id.';');
			$this->db->query('UPDATE coffee_blend SET blend_qty = blend_qty + '.$quantity.' WHERE blend_id ='.$blend_id.';');
			$data_trans = array(
						'transact_date' => $date,
						'po_client' => $po_id,
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
		
		public function getBalances($id){
			$query = $this->db->query("SELECT * FROM client_delivery NATURAL JOIN contracted_po WHERE payment_remarks='unpaid'");
			return $query->result();
		}
	}

?>