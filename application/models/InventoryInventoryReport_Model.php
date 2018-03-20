<?php

class InventoryInventoryReport_model extends CI_Model {
    
    function get_inventoryin(){
		$count = $this->db->count_all_results('raw_coffee');
		$query_append = "SELECT a.*, b.*, c.*, d.* FROM
							(SELECT c.trans_id AS main_id, c.transact_date AS transact_date, d.sup_company AS sup_company";

		for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coff".$i."";
		}
		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supplier d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.supplier_id = d.sup_id GROUP BY c.trans_id) a JOIN (SELECT a.trans_id AS main_id, SUM(CASE a.quantity WHEN NULL THEN NULL ELSE a.quantity END) AS packaging FROM trans_pack a JOIN packaging b ON a.package_id = b.package_id GROUP BY a.trans_id) b JOIN (SELECT a.trans_id AS main_id, SUM(CASE a.quantity WHEN NULL THEN NULL ELSE a.quantity END) AS machines FROM trans_mach a JOIN machine b ON a.mach_id = b.mach_id GROUP BY a.trans_id) c JOIN (SELECT a.trans_id AS main_id, SUM(CASE a.quantity WHEN NULL THEN NULL ELSE a.quantity END) AS stickers FROM trans_stick a JOIN sticker b ON a.sticker_id = b.sticker_id GROUP BY a.trans_id) d ON a.main_id = b.main_id AND a.main_id = c.main_id AND a.main_id = d.main_id GROUP BY a.main_id;";

		$query = $this->db->query($query_append);
		return $query;

	}
    
}

?>