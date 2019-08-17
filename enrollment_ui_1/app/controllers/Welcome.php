<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{
	public function __construct(){
        parent::__construct();
        $this->load->model('m_student');
    }
	public function index(){
		$data['student'] = $this->m_student->list_student();
		$this->load->view('header');
		// $this->load->view('dashboard');
		$this->load->view('student_list', $data);
		$this->load->view('footer');
	}
	public function new_student_page(){
		$this->load->view('header');
		$this->load->view('new_student');
		$this->load->view('footer');
	}
	public function new_student(){
		// echo "New Student!";
		// print_r($_POST);
		if($status=$this->m_student->add_student($_POST)){
            redirect(base_url() . 'index.php/welcome/list_student_page');
        } else{
            echo "Failed to insert!";
        }
	}
	public function list_student_page(){
		$data['student'] = $this->m_student->list_student();
		// print_r($data);
		$this->load->view('header');
		$this->load->view('student_list', $data);
		$this->load->view('footer');
	}
	public function student_page(){
		// echo $_GET['id'];
		$data['profile'] = $this->m_student->single_student($_GET['id']);
		$this->load->view('header');
		$this->load->view('student_profile', $data);
		$this->load->view('footer');
	}
	public function update_student_page(){
		// echo $_POST['id'];
		if (isset($_POST['id'])) {
			$id = $_POST['id'];
		} else if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
		$data['profile'] = $this->m_student->single_student($id);
		$this->load->view('header');
		$this->load->view('student_update', $data);
		$this->load->view('footer');
	}
	public function update_student(){
		if (isset($_POST['id'])) {
			if ($status=$this->m_student->update_student($_POST, $_POST['id'])){
				redirect(base_url());
			}
			else echo "Failed to Update Student!";
		}
	}
	public function delete_student(){
		if (isset($_GET['id'])) {
			if ($status=$this->m_student->delete_student($_GET['id'])) {
				redirect(base_url());
			} else echo "Failed to Delete Student Record";
		}
	}
	// search
	public function search(){
		// echo "search page<br>";
		// print_r($_POST);
		if (isset($_POST['search']) && !empty($_POST['search'])) {
			// echo "search field found";
			$data['student']=$this->m_student->search_student($_POST['search']);
			// print_r($data);
			$this->load->view('header');
			$this->load->view('student_list', $data);
			$this->load->view('footer');

		}
	}
}
?>