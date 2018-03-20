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
		$query = $this->db->query("SELECT sample_id, sample_date, sample_type, sample_recipient, package_type, package_size, sticker, coff_returnAction FROM jhcs.sample NATURAL JOIN client_coffreturn NATURAL JOIN packaging INNER JOIN sticker on sample.sticker_id=sticker.sticker_id WHERE coff_returnAction='sample';");
		return $query->result();
	}
	public function get_drnumber(){
		$query = $this->db->query("SELECT client_coffReturnID, client_dr FROM jhcs.client_coffreturn;");
		return $query->result();	
	}
	public function get_packaging(){
		$query = $this->db->query("SELECT package_id, CONCAT(package_type,' ',package_size) AS package FROM jhcs.packaging WHERE pack_activation = '1';");
		return $query->result();	
	}
	public function get_sticker(){
		$query = $this->db->query("SELECT sticker_id, sticker FROM jhcs.sticker WHERE sticker_activation = '1';");
		return $query->result();	
	}
	function insert_data($data){ 
		$this->db->insert('sample', $data);
	}

}
