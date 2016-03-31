<?php
	class Login_model extends CI_Model {
	
		public function __construct() {
			$this->load->database();
		}
		
		public function login_query() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$query = $this->db->get_where('login', array('loginName' => $username, 'loginPassword' => $password));
			return $query->num_rows();
		}
	}
?>