<?php
	class Login_model extends CI_Model {
	
		public function __construct() {
			$this->load->database();
		}
		
		public function login_query() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($password == 'test' && $password == 'test') {
				return 1;
				$_SESSION['username'] =	'test';
			}
		}	
			/*$query = $this->db->get_where('login', array('loginName' => $username, 'loginPassword' => $password));
			return $query->num_rows();*/
			
			public function checkSession(){
				return isset($_SESSION['username']);
			}
	}
?>