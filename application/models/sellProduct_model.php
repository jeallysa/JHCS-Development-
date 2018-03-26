<?php 

class sellProduct_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	Public function getSoldCoffee(){
		$query=$this->db->query("SELECT blend_id, walkin_date, blend, package_type, package_size, walkin_qty, blend_price FROM walkin_sales NATURAL JOIN coffee_blend NATURAL JOIN packaging");
		return $query->result();
	}

	Public function getSoldMachine(){
		$query2=$this->db->query("SELECT * FROM machine_out NATURAL JOIN contracted_client NATURAL JOIN machine where status = 'sold' AND remarks='Received'");
		return $query2->result();
	}

	Public function getBlends(){
		$query3=$this->db->query("SELECT * FROM coffee_blend NATURAL JOIN packaging where blend_activation = 1 AND pack_activation = 1");
		return $query3->result();
	}

	Public function getMachine(){
		$query4=$this->db->query("SELECT * FROM machine where mach_activation = 1");
		return $query4->result();
	}

	public function getClient(){
		$query5=$this->db->query("SELECT * FROM contracted_client where client_activation = '1'");
		return $query5->result();
	}



	function record_data($date, $quantity, $blend_id){
		$query = $this->db->query('SELECT c.percentage, c.raw_id, d.package_id, d.package_size FROM coffee_blend b JOIN proportions c JOIN packaging d ON b.blend_id = c.blend_id AND b.package_id = d.package_id WHERE c.blend_id ='.$blend_id.';');		
		$data = array(
			'walkin_date' => $date,
			'walkin_qty' => $quantity,
			'blend_id' => $blend_id
		);

		$this->db->insert('walkin_sales', $data);
		$inserted_id = $this->db->insert_id();

		$ret = $query->row();
		$pack_id = $ret->package_id;
		//$stick_id = $ret->sticker_id;
		$this->db->query('UPDATE packaging SET package_stock = package_stock - '.$quantity.' WHERE package_id ='.$pack_id.';');
		//$this->db->query('UPDATE sticker SET sticker_stock = sticker_stock - '.$quantity.' WHERE sticker_id ='.$sticker_id.';');
		$data_trans = array(
					'transact_date' => $date,
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
		$this->db->insert('trans_pack', $data_pack);
		$this->db->query('INSERT INTO trans_stick (trans_id) VALUES ('.$trans_id.')');
		$this->db->query('INSERT INTO trans_mach (trans_id) VALUES ('.$trans_id.')');

		
	}

	function add_data($data7){ 
		$this->db->insert('machine_out', $data7);
	}

	function insert_dataA($dataA){ 
		$this->db->insert('client_machreturn', $dataA);
	}
	function updateA($return, $id){
		$data2 = array(
	        'remarks' => $return
		);

		$this->db->where('mach_salesID', $id);
		$this->db->update('machine_out', $data2);
	}
}

?>