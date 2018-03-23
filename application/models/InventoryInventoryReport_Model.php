<?php

class InventoryInventoryReport_model extends CI_Model {
    
    public function get_coffeein(){
		$count = $this->db->count_all_results('raw_coffee');
<<<<<<< HEAD
		$query_append = "SELECT a.* FROM
                            (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.dr_supplier as dr_no";
=======
		$query_append = "SELECT a.*, b.*, c.*, d.* FROM
							(SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type";
>>>>>>> c9fa05be48c5f3638c8f390044752fa50b294c8f

		for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coff".$i."";
		}
<<<<<<< HEAD
		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id GROUP BY c.trans_id) a WHERE type = 'IN' GROUP BY a.main_id;";
=======
		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c  ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id GROUP BY c.trans_id) a JOIN (SELECT a.trans_id AS main_id, SUM(CASE a.quantity WHEN NULL THEN NULL ELSE a.quantity END) AS packaging FROM trans_pack a JOIN packaging b ON a.package_id = b.package_id GROUP BY a.trans_id) b JOIN (SELECT a.trans_id AS main_id, SUM(CASE a.quantity WHEN NULL THEN NULL ELSE a.quantity END) AS machines FROM trans_mach a JOIN machine b ON a.mach_id = b.mach_id GROUP BY a.trans_id) c JOIN (SELECT a.trans_id AS main_id, SUM(CASE a.quantity WHEN NULL THEN NULL ELSE a.quantity END) AS stickers FROM trans_stick a JOIN sticker b ON a.sticker_id = b.sticker_id GROUP BY a.trans_id) d ON a.main_id = b.main_id AND a.main_id = c.main_id AND a.main_id = d.main_id WHERE type = 'IN' GROUP BY a.main_id;";
>>>>>>> c9fa05be48c5f3638c8f390044752fa50b294c8f

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