<?php

class InventoryInventoryReport_model extends CI_Model {
    
    public function get_coffeein(){
		$count = $this->db->count_all_results('raw_coffee');
		$query_append = "SELECT a.* FROM
                            (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.dr_supplier as dr_no";

		for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coff".$i."";
		}
		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id GROUP BY c.trans_id) a WHERE type = 'IN' GROUP BY a.main_id;";

		$query = $this->db->query($query_append);
		return $query;

	}
    public function get_packagein(){
        
        $query = $this->db->query("SELECT supp_delivery_id, date_received, sup_company, qty, 
        SUBSTRING_INDEX(SUBSTRING_INDEX(item, ' ', 1), ' ', -1) as bag,
	    SUBSTRING_INDEX(SUBSTRING_INDEX(item, ' ', 3), ' ', -1) as size
        FROM supp_delivery JOIN supp_po_ordered on supp_delivery.supp_po_ordered_id = supp_po_ordered.supp_po_ordered_id JOIN supp_po on supp_po_ordered.supp_po_id = supp_po.supp_po_id JOIN supplier on supp_po.supp_id = supplier.sup_id WHERE type = 'packaging'");
        return $query->result();
    }
    public function get_stickerin(){
        
        $query = $this->db->query("SELECT supp_delivery_id, date_received, sup_company, item as sticker, qty
        FROM supp_delivery JOIN supp_po_ordered on supp_delivery.supp_po_ordered_id = supp_po_ordered.supp_po_ordered_id JOIN supp_po on supp_po_ordered.supp_po_id = supp_po.supp_po_id JOIN supplier on supp_po.supp_id = supplier.sup_id WHERE type = 'sticker'");
        return $query->result();
    }
    public function get_machinein(){
        
        $query = $this->db->query("SELECT supp_delivery_id, date_received, sup_company, item as machine, qty
        FROM supp_delivery JOIN supp_po_ordered on supp_delivery.supp_po_ordered_id = supp_po_ordered.supp_po_ordered_id JOIN supp_po on supp_po_ordered.supp_po_id = supp_po.supp_po_id JOIN supplier on supp_po.supp_id = supplier.sup_id WHERE type = 'machine'");
        return $query->result();
    }
}

?>