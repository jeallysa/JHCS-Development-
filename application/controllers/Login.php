<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

        $this->load->model('login_model');  
	}

	function index()
    {
        
        $this->load->view('login/login'); 
    }


	function validate()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$is_valid = $this->Login_Model->validate($username, $password);
		
		if($is_valid){

			$get_id = $this->login_model->get_id($username, $password); 

			foreach($get_id as $val)
                { 
                    	$id=$val->user_no;
                     $name = $val->username;                  
                     $password = $val->password;                 
                     $type=$val->u_type;

                     if($type=='admin')
                     {
                        $data = array(
                        'admin_name' =>$name, 
                        'admin_password' => $password,
                        'admin_type'=>$type,
                        'admin_id'=>$id,
                        'is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the Admin datas in session */
                          redirect('adminDashboard');
                     }
                    if($type=='inventory')
                     {
                        
                        $data = array(
                        'inventory_name' =>$name, 
                        'inventory_password' =>$password,
                        'inventory_type'=>$type,
                        'inventory_id'=>$id,
                        'inventory_staff_is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the  staff datas values in session */
                          redirect('inventoryDashboard');
                     }
                     if($type=='sales')
                     {
                        
                        $data = array(
                        'sales_name' =>$name, 
                        'sales_password' =>$password,
                        'inventory_type'=>$type,
                        'inventory_id'=>$id,
                        'inventory_staff_is_logged_in' => true
                        );
                          $this->session->set_userdata($data); /*Here  setting the  staff datas values in session */
                          redirect('salesDashboard');
                     }
                   
                    
            }       

		}
		else // incorrect username or password
        {

          
            $this->session->set_flashdata('msg1', 'Username or Password Incorrect!');
            redirect('login');
        }


	}

    function logout() {
        $this->session->sess_destroy;

        redirect('login');
    }
}