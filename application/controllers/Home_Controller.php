<?php

class Home_Controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index(){
		$this->load->view('index');
	}

	function admin(){
		$this->load->view('admin');
	}
}