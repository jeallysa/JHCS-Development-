<?php

class InventoryMachines_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function retrieveMachine(){
      $query = $this->db->query("SELECT * FROM jhcs.machine NATURAL JOIN supplier WHERE mach_activation = '1';");
            
      if($query->num_rows() > 0){
          return $query-> result();
      }else
          return NULL;
  }


      function update($machid, $count, $discrepancy, $remarks, $invdate){
      	

		$data = array(
	        
	        'mach_physcount' => $count,
	        'mach_remarks' => $remarks,
	        'mach_discrepancy' => $discrepancy,
	        'inventory_date' => $invdate
	        
		);

		$this->db->where('mach_id', $machid);
		$this->db->update('machine', $data);


	}

}