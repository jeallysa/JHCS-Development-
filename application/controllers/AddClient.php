<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class AddClient extends CI_Controller
	{
		public function __construct(){
			parent::__construct();

			$this->load->model('addclient_model');  
		}
		
		public function insertClient()
		{ 
			$client = $this->input->post('client');
			$address = $this->input->post('address');
			$first_name = $this->input->post('cpfname');
			$last_name = $this->input->post('cplname');
			$position = $this->input->post('position');
			$email = $this->input->post('email');
			$tel_number = $this->input->post('tel_number');
			$cli_type = $this->input->post('cli_type');


			$this->addclient_model->add_data($client, $address, $first_name, $last_name, $position, $email, $tel_number, $cli_type);
			
			
			
		}

	}
?>