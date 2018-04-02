<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
        $this->load->library('session');
        $this->load->model('login_model');  
	}

	function index()
    {
    $this->load->view('login/login');  
    }

    public function validate(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('Login_Model');
        $this->Login_Model->logindata($username,$password);
    }

    public function logout(){
        $this->session->set_userdata('username', FALSE);
        $this->session->sess_destroy();
        redirect('login');
    }
}