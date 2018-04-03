<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminAddContract_model extends CI_model
{
	function __construct()
	{
		parent::__construct();
	}


	function test_main(){
		echo "Sample function";
	}
    
    function getBlend(){
		$query = $this->db->query("SELECT a.blend_id, a.blend, b.package_type AS pack_type, b.package_size AS pack_size FROM coffee_blend a JOIN packaging b ON a.package_id = b.package_id");
		return $query->result();	
	}
    
     function getBag(){
		$query = $this->db->query("SELECT package_id, package_type FROM jhcs.packaging;");
		return $query->result();	
	}
    
     function getMachine(){
		$query = $this->db->query("SELECT mach_id, brewer FROM jhcs.machine;");
		return $query->result();	
	}	
    
     function getName(){
		$query = $this->db->query("SELECT client_id, client_company FROM jhcs.contracted_client;");
		return $query->result();	
	}
	function getPackage(){
		$query = $this->db->query("SELECT package_id, package_size FROM jhcs.packaging;");
		return $query->result();	
	}
	function getSticker(){
		$query = $this->db->query("SELECT sticker_id, sticker FROM jhcs.sticker;");
		return $query->result();	
	}

	 function insert_data($data){ 
	 	$this->db->insert('contract', $data);
		
         
         echo "<script>alert('You have inserted a new contract!');
		window.location.href='" . base_url() . "adminClients';
		</script>";
	}
	/**
	 function insert_data($data){ 
		$this->db->insert('contract', $data);

         
         echo "<script>alert('You have inserted a new contract!');
		window.location.href='" . base_url() . "adminClients';
		</script>";
	}
	*/
}