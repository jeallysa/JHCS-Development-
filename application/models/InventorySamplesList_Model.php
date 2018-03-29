<?php

class InventorySamplesList_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->query("SELECT client_dr, sample_date, sample_type, sample_recipient, packaging.name AS packagingName, packaging.type AS packagingType, sticker.name AS stickerName FROM sample NATURAL JOIN client_coffreturn NATURAL JOIN packaging INNER JOIN sticker on sample.sticker_id=sticker.sticker_id WHERE coff_returnAction='sample';");
		return $query->result();
	}
	function fetch_data2(){
		$query = $this->db->query("SELECT sample_date, sample_type, sample_recipient, packaging.name AS packagingName, packaging.type AS packagingType, sticker.name AS stickerName FROM sample NATURAL JOIN packaging INNER JOIN sticker on sample.sticker_id=sticker.sticker_id WHERE client_coffReturnID IS NULL;");
		return $query->result();
	}
	public function get_drnumber(){
		$query = $this->db->query("SELECT * FROM client_coffreturn INNER JOIN client_delivery ON client_coffreturn.client_deliveryID = client_delivery.client_deliveryID WHERE lower(coff_returnAction) = 'sample';");
		return $query->result();	
	}
	public function get_packaging(){
		$query = $this->db->query("SELECT package_id, CONCAT(name,' ',type) AS package FROM packaging WHERE pack_activation = '1';");
		return $query->result();	
	}
	public function get_sticker(){
		$query = $this->db->query("SELECT * FROM sticker WHERE sticker_activation = '1';");
		return $query->result();	
	}
	function insert_data($data){ 
		$this->db->insert('sample', $data);
	}

}
