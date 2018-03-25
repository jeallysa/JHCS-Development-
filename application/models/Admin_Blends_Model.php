<?php

class Admin_Blends_Model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}

	function fetch_data_eb(){
		$qcount = $this->db->query('SELECT * FROM raw_coffee');
		$query_append = "SELECT c.blend_id AS main_id, c.blend_type AS type, c.blend,";

		foreach ($qcount->result() as $row){
			$query_append .= " SUM(CASE
							        WHEN b.raw_id = '". $row->raw_id ."' THEN b.percentage
							        ELSE NULL
							    END) AS per".$row->raw_id.",";
		}
		$query_append .= " d.package_size, d.package_type, c.blend_price FROM raw_coffee a JOIN proportions b JOIN coffee_blend c NATURAL JOIN packaging d ON a.raw_id = b.raw_id AND b.blend_id = c.blend_id WHERE c.blend_type = 'Existing' AND a.raw_activation = 1 GROUP BY c.blend_id;";


		$query = $this->db->query($query_append);
		return $query;

	}

	function edit_page($id){
		$qcount = $this->db->query('SELECT * FROM raw_coffee');
		$query_append = "SELECT c.blend_id AS main_id, c.blend_type AS type, c.blend AS blend,";

		foreach($qcount->result() as $row){
			$query_append .= " SUM(CASE
							        WHEN b.raw_id = '". $row->raw_id ."' THEN b.percentage
							        ELSE NULL
							    END) AS per".$row->raw_id.",";
		}
		$query_append .= " d.package_size, d.package_type, c.blend_price FROM raw_coffee a JOIN proportions b JOIN coffee_blend c NATURAL JOIN packaging d ON a.raw_id = b.raw_id AND b.blend_id = c.blend_id WHERE c.blend_id='".$id."' AND a.raw_activation = 1 GROUP BY c.blend_id;";


		$query = $this->db->query($query_append);
		return $query;

	}

	
	function fetch_data_cb(){
		$qcount = $this->db->query('SELECT * FROM raw_coffee');
		$query_append = "SELECT c.blend_id AS main_id, c.blend_type AS type, c.blend,";

		foreach ($qcount->result() as $row){
			$query_append .= " SUM(CASE
							        WHEN b.raw_id = '". $row->raw_id ."' THEN b.percentage
							        ELSE NULL
							    END) AS per".$row->raw_id.",";
		}
		$query_append .= " d.package_size, d.package_type, c.blend_price FROM raw_coffee a JOIN proportions b JOIN coffee_blend c NATURAL JOIN packaging d ON a.raw_id = b.raw_id AND b.blend_id = c.blend_id WHERE c.blend_type = 'Client' AND a.raw_activation = 1 GROUP BY c.blend_id;";


		$query = $this->db->query($query_append);
		return $query;

	}



}
