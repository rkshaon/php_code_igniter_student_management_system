<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller{
	public function __construct(){
        parent::__construct();
        $this->load->model('m_student');
    }
	public function admin_login(){
		$this->load->view('login');
	}
	public function login(){
		// echo "working";
		// print_r($_POST);
		if(isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && $_POST['password']){
            // echo "Username: " . $_POST['admin_username'];
            // echo "<br>";
            // echo "Password: " . $_POST['admin_password'];
            if($status=$this->m_student->validate($_POST)){
                redirect(base_url());
            } else {
                redirect(base_url());
            }
        }
	}
	public function logout(){
        $newdata = array(
                'user_id' => '',
                'user_name'  =>'',
                'user_email' => '',
                'logged_in' => FALSE,
               );
        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();
        redirect(base_url(), 'refresh');
        // echo "Log out method";
    }
}
?>