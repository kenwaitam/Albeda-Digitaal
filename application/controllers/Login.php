<?php
class Login extends CI_Controller {
	
		public function __construct() {
			parent::__construct();
			$this->load->model('Login_Model');
			$this->load->library('loginstate');
		}
	
	public function index() {
	
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$data['systitle'] = 'Albeda Digitaal Login System';
		$data['successtitle'] = 'Login Success';
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
//		if (isset($_SESSION['username'])) {
////			$this->loginstate->logged_in($page = 'home');
//		}
		
		if(isset($_POST["submit"])) {
			if ($this->form_validation->run()) {
				if ($this->login_model->login_query() == 1) {
					$_SESSION['username'] =	'test';
					if (isset($_SESSION['username'])) {
						$this->loginstate->logged_in($page = 'home');
					}
						/*$this->load->view('templates/headerlogin', $data);
						$this->load->view('login/success', $data);
						$this->load->view('templates/footer');*/
						
					//}
				}
				else {
					$data['statetitle'] = 'Login Failed';
					$this->showForm($data);
				}
			}
			else {
				$data['statetitle'] = 'Login';
				$this->showForm($data);
			}
		}
		else {
			$data['statetitle'] = 'Login';
			$this->showForm($data);
		}
	}
	
	public function showForm($data) {
		//$this->load->view('templates/headerlogin', $data);
		$this->load->view('templates/header');
		$this->load->view('login/index');
	}

	public function login_NFC(){
		$this->load->view('templates/header');
		$this->load->view('login/login_NFC');

		if(isset($_POST['submit'])){
			if ($this->Login_Model->login_NFC() == 1) {
				$_SESSION['username'] =	'test';
				if (isset($_SESSION['username'])) {
					$this->loginstate->logged_in($page = 'home');
				}
				header('location: '.base_url().'pages/view');

			}else{
				echo "Wrong Studentnumber";
			}
		}
	}
	
}
?>