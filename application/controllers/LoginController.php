<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
    public function _construct(){
        parent::_construct();
    }

    function login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
       
        $user_id = $this->Common_model->get_users($email, $password);

        if($user_id){
            $user_data = array(
                'user_id'=> $user_id,
                'email'=>$email,
                'logged_in'=>true
            );
       
        
            $this->session->set_userdata($user_data);
            session_write_close();
            redirect('AdminController/index');
         
        }
        else{

            $data['error'] = "Wrong Email or Password"; 
            $this->load->view("pages/login", $data);
        }
    }

    function logout(){
        
        $this->session->sess_destroy();
        redirect('Pages/index', 'refresh');
    }
    
    
}
