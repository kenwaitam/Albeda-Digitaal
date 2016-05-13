<?php class Logout extends CI_Controller {
		
		public function destroySession(){
			session_start();
			session_destroy();
			redirect('/pages/view/');
		}			
		
}