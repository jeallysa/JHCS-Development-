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

	function fetch_data(){
		$count = $this->db->count_all_results('raw_coffee');
		$query_append = "SELECT c.blend,";

		for ($i = 0; $i <= $count; $i++){
			$query_append .= " SUM(CASE
							        WHEN b.raw_id = '". $i ."' THEN b.percentage
							        ELSE NULL
							    END) AS per".$i.",";
		}
		$query_append .= " c.size, c.bag, c.blend_price FROM raw_coffee a JOIN proportions b JOIN coffee_blend c ON a.raw_id = b.raw_id AND b.blend_id = c.blend_id GROUP BY c.blend_id;";


		$query = $this->db->query($query_append);
		return $query;

	}

}
