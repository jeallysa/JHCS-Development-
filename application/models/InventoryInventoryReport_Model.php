<?php

class InventoryInventoryReport_model extends CI_Model {
    
    function get_inventoryin(){
		$count = $this->db->count_all_results('raw_coffee');
		$query_append = "SELECT c.transact_date, d.sup_company";

		for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coff".$i."";
		}
		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supplier d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.supplier_id = d.sup_id GROUP BY c.trans_id;";


		$query = $this->db->query($query_append);
		return $query;

	}
    
}

?>