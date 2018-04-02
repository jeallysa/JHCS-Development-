<?php

class Admin_SalesReport_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data(){
		$query = $this->db->query("SELECT a.client_dr, a.client_invoice, a.client_deliverDate, d.client_company, c.blend, e.package_type, e.package_size, b.contractPO_qty, c.blend_price, (b.contractPO_qty*c.blend_price) AS total_amount FROM client_delivery a JOIN contracted_po b JOIN coffee_blend c NATURAL JOIN packaging e JOIN contracted_client d ON a.contractPO_id = b.contractPO_id AND b.blend_id = c.blend_id AND b.client_id = d.client_id;");
		return $query;

	}

}