<?php

class Admin_Inventory_Report_Model extends CI_Model {
    
    public function get_coffeein(){
		$count = $this->db->count_all_results('raw_coffee');
        $qcount = $this->db->query("SELECT * FROM raw_coffee;");
		$query_append = "SELECT a.* FROM
                            (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.po_supplier as po_no, 'Company' as supplier";

		foreach ($qcount->result() AS $row){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $row->raw_id ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffin". $row->raw_id ."";
		}

		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supp_delivery d JOIN supp_po e JOIN supplier f ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_supplier = d.supp_delivery_id AND d.supp_po_id = e.supp_po_id AND e.supp_id = f.sup_id GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)=month(now()) GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.client_returnID, '(Client Return)' as supplier";

        foreach ($qcount->result() AS $row){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $row->raw_id ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffin". $row->raw_id ."";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)=month(now()) GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.walkin_return, '(Walk-In Return)' as supplier";

        foreach ($qcount->result() AS $row){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $row->raw_id ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffin". $row->raw_id ."";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)=month(now()) GROUP BY a.main_id;";

		$query = $this->db->query($query_append);
		return $query;

	}
    
    public function get_coffeeinWithP($sdf){
		$count = $this->db->count_all_results('raw_coffee');
        $qcount = $this->db->query("SELECT * FROM raw_coffee;");
		$query_append = "SELECT a.* FROM
                            (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.po_supplier as po_no, 'Company' as supplier";

		foreach ($qcount->result() AS $row){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $row->raw_id ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffin". $row->raw_id ."";
		}

		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supp_delivery d JOIN supp_po e JOIN supplier f ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_supplier = d.supp_delivery_id AND d.supp_po_id = e.supp_po_id AND e.supp_id = f.sup_id GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)='".$sdf."' GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.client_returnID, '(Client Return)' as supplier";

        foreach ($qcount->result() AS $row){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $row->raw_id ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffin". $row->raw_id ."";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)='".$sdf."' GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.type AS type, c.transact_date AS transact_date, c.walkin_return, '(Walk-In Return)' as supplier";

        foreach ($qcount->result() AS $row){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $row->raw_id ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffin". $row->raw_id ."";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id GROUP BY c.trans_id) a WHERE type = 'IN' and month(transact_date)='".$sdf."' GROUP BY a.main_id;";

		$query = $this->db->query($query_append);
		return $query;

	}
    
    public function get_coffeeout(){
		$count = $this->db->count_all_results('raw_coffee');
		$query_append = "SELECT a.* FROM
                            (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.po_client as dr_no, e.client_company as client";

		for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffout".$i."";
		}
        
		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id GROUP BY c.trans_id) a WHERE type = 'OUT' and month(transact_date)=month(now()) GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.sales_inv AS po_no, 'Walk-in' AS client";
        
        for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE 
                                    WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffout".$i."";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id GROUP BY c.trans_id) a WHERE type = 'OUT' AND MONTH(transact_date)=month(now()) GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.company_returnID, '(Company Return)' as client";
        
        for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE 
                                    WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffout".$i."";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN company_returns d ON c.company_returnID = d.company_returnID GROUP BY c.trans_id) a WHERE type = 'OUT' AND MONTH(transact_date)=month(now()) GROUP BY a.main_id "  ;

		$query = $this->db->query($query_append);
		return $query;

	}
    
    public function get_coffeeoutWithP($sdf){
				$count = $this->db->count_all_results('raw_coffee');
		$query_append = "SELECT a.* FROM
                            (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.po_client as dr_no, e.client_company as client";

		for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE
							        WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffout".$i."";
		}
        
		$query_append .= " FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id GROUP BY c.trans_id) a WHERE type = 'OUT' and month(transact_date)='".$sdf."' GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.sales_inv AS po_no, 'Walk-in' AS client";
        
        for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE 
                                    WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffout".$i."";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id GROUP BY c.trans_id) a WHERE type = 'OUT' AND MONTH(transact_date)='".$sdf."' GROUP BY a.main_id UNION SELECT a.* FROM (SELECT c.trans_id AS main_id, c.transact_date AS transact_date, c.type AS type, c.company_returnID, '(Company Return)' as client";
        
        for ($i = 0; $i <= $count; $i++){
			$query_append .= ", SUM(CASE 
                                    WHEN b.raw_coffeeid = '". $i ."' THEN b.quantity
							        ELSE NULL
							    END) AS coffout".$i."";
		}
        
        $query_append .= " FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN company_returns d ON c.company_returnID = d.company_returnID GROUP BY c.trans_id) a WHERE type = 'OUT' AND MONTH(transact_date)='".$sdf."' GROUP BY a.main_id "  ;

		$query = $this->db->query($query_append);
		return $query;

	}
    
/*    public function get_packagein(){
        
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
    }*/
}

?>