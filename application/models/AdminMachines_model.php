<?php 

class AdminMachines_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getMachines(){
		$query=$this->db->query("SELECT mach_id, mach_serial, brewer, brewer_type, mach_price, mach_reorder, mach_limit, sup_company, mach_stocks FROM machine NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('machine', $data);
	}

	function update($id, $serial, $brewer, $type, $price, $reorder, $limit, $stock_level, $sup_id){
		$data = array(
	        'mach_serial' => $serial,
	        'brewer' => $brewer,
	        'brewer_type' => $type,
	        'mach_price' => $price,
	        'mach_reorder' => $reorder,
	        'mach_limit' => $limit,
	        'mach_stocks' => $stock_level,
	        'sup_id' => $sup_id	        
		);

		$this->db->where('mach_id', $id);
		$this->db->update('machine', $data);
	}
}
?>