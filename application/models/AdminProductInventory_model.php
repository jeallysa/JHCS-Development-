<?php 

class AdminProductInventory_model extends CI_MODEL
{
	
	function __construct()
	{
		parent::__construct();
	}
    
    public function security(){
        $username = $this->session->sess_destroy('username');
        if (!empty($username)) {
            $this->session->sess_destroy();
            redirect('login');
        }
    }

	function getProducts(){
		$query=$this->db->query("SELECT sup_company, raw_id, raw_coffee, raw_reorder, raw_limit, sup_company, raw_stock FROM raw_coffee NATURAL JOIN supplier");
		return $query->result();
	}
    
    function getSupplier(){
		$query = $this->db->query("SELECT sup_id, sup_company FROM jhcs.supplier;");
		return $query->result();	
	}
    
    function insert_data($data){ 
		$this->db->insert('raw_coffee', $data);
	}

	function update($id, $name, $reorder, $stocks, $stocklimit, $sup_id){
		$data = array(
	        'raw_coffee' => $name,
	        'raw_reorder' => $reorder,
	        'raw_stock' => $stocks,
	        'raw_limit' => $stocklimit,
	        'sup_id' => $sup_id
		);

		$this->db->where('raw_id', $id);
		$this->db->update('raw_coffee', $data);
	}

}
?>