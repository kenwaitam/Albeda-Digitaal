<?php
class Login extends CI_Controller {
	
		public function __construct() {
			parent::__construct();
			$this->load->model('login_model');
			$this->load->library('loginstate');
		}
	
	public function index() {
	
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
		$data['systitle'] = 'CI Login System';
		$data['successtitle'] = 'Login Success';
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if (isset($_POST["submit"])) {
			if ($this->form_validation->run()) {
				if ($this->login_model->login_query() == 1) {
					$_SESSION['username'] =	'test';
					if (isset($_SESSION['username'])) {
						/*$this->load->view('templates/headerlogin', $data);
						$this->load->view('login/success', $data);
						$this->load->view('templates/footer');*/
						$this->loginstate->logged_in($page = 'home');
					}
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
		$this->load->view('templates/headerlogin', $data);
		$this->load->view('login/index');
		$this->load->view('templates/footer');
	}
	
}
?>