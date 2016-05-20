<?php
	class Login_model extends CI_Model {
	
		public function __construct() {
			$this->load->database();
		}
		
		public function login_query() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($username == 'test' && $password == 'test') {
				return 1;
			}
		}

		public function login_NFC(){
			$studentcode = $this->input->post('nfc_id');
			$query = $this->db->get_where('users', array('leerlingnummer' => $studentcode));
			return $query->num_rows();

		}
			/*$query = $this->db->get_where('login', array('loginName' => $username, 'loginPassword' => $password));
			return $query->num_rows();*/
	}
?>