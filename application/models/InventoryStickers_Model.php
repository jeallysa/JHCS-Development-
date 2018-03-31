<?php

class InventoryStickers_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function retrieveSticker(){
      $query = $this->db->query("SELECT * FROM jhcs.sticker NATURAL JOIN supplier WHERE sticker_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }

	function update($stickerid, $count, $discrepancy, $remarks){
		$data = array(
	        
	        'sticker_physcount' => $count,
	        'sticker_remarks' => $remarks,
	        'sticker_discrepancy' => $discrepancy
	        
		);

		$this->db->where('sticker_id', $stickerid);
		$this->db->update('sticker', $data);
	}

}
