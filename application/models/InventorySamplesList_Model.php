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
		$query = $this->db->query("SELECT sample_id, sample_date, sample_type, sample_recipient, package_type, package_size, sticker FROM jhcs.sample NATURAL JOIN client_coffreturn NATURAL JOIN packaging INNER JOIN sticker on sample.sticker_id=sticker.sticker_id;");
		return $query;
	}

}
