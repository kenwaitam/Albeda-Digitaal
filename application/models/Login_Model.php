<?php
	class Login_model extends CI_Model {
	
		public function __construct() {
			$this->load->database();
		}
		
		public function login_query() {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$admin = DB::table('role_user')->where([
				['role_id', '=', 1],
				['user_id', '=', $user->id],

				$this->db->where('name', $username);
				$this->db->where('password', $password);
				$this->db->join('user_role', '.id = .id');

			if ($username == 'test' && $password == 'test') {
				return 1;
			}
		}

		public function login_NFC(){
			$studentcode = $this->input->post('nfc_id');
			$query = $this->db->get_where('students', array('studentnumber' => $studentcode));
			return $query->num_rows();

		}
			/*$query = $this->db->get_where('login', array('loginName' => $username, 'loginPassword' => $password));
			return $query->num_rows();*/
	}
?>