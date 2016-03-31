<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginState {

        public function logged_in($page = 'home')
        {
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}

			$this->load->helper('html');

			$data['title'] = ucfirst($page); // Capitalize the first letter

			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('pages/deelnemers', $data);
			$this->load->view('pages/fotos', $data);
			$this->load->view('pages/videos', $data);
			$this->load->view('pages/documenten', $data);
			$this->load->view('pages/contact', $data);
			$this->load->view('templates/footer', $data);
			// $this->load->view('templates/cirkelmenu', $data);
		}
		
		public function logged_out($page = 'home') {
			
			if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
			{
				// Whoops, we don't have a page for that!
				show_404();
			}

			$this->load->helper('html');

			$data['title'] = ucfirst($page); // Capitalize the first letter

			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('pages/deelnemers', $data);
			$this->load->view('pages/fotos', $data);
			$this->load->view('pages/videos', $data);
			$this->load->view('pages/contact', $data);
			$this->load->view('templates/footer', $data);
			// $this->load->view('templates/cirkelmenu', $data);
			
		}
}