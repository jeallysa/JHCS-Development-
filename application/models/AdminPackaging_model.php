<?php 

class AdminPackaging_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}

	function getPackaging(){
		$query=$this->db->query("SELECT package_id, package_type, sup_company, package_size, package_reorder, package_limit, package_stock FROM packaging NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('packaging', $data);
	}

    function update($id, $type, $size, $reorder, $stocks, $stocklimit, $sup_id){
		$data = array(
            'package_type' => $type,
            'package_size' => $size,
	        'package_reorder' => $reorder,
	        'package_stock' => $stocks,
	        'package_limit' => $stocklimit,
	        'sup_id' => $sup_id,
		);

		$this->db->where('package_id', $id);
		$this->db->update('packaging', $data);
	}
}
?>