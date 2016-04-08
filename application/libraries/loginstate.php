<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginState {
	
	protected $CI;
	
	public function __construct() {
		$this->CI =& get_instance();
	}
	
    public function logged_out($page = 'home') {
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			// Whoops, we don't have a page for that!
				show_404();
			}
		
		$this->CI->load->helper('html');
			
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->CI->load->view('templates/header', $data);
		$this->CI->load->view('pages/'.$page, $data);
		$this->CI->load->view('pages/deelnemers', $data);
		$this->CI->load->view('pages/fotos', $data);
		$this->CI->load->view('pages/videos', $data);
		$this->CI->load->view('pages/contact', $data);
		$this->CI->load->view('templates/footer', $data);
		// $this->load->view('templates/cirkelmenu', $data);
	}
	
	public function logged_in($page = 'home') {
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			// Whoops, we don't have a page for that!
				show_404();
		}

		$this->CI->load->helper('html');

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->CI->load->view('templates/header', $data);
		$this->CI->load->view('pages/'.$page, $data);
		$this->CI->load->view('pages/deelnemers', $data);
		$this->CI->load->view('pages/fotos', $data);
		$this->CI->load->view('pages/videos', $data);
		$this->CI->load->view('pages/documenten', $data);
		$this->CI->load->view('pages/contact', $data);
		$this->CI->load->view('templates/footer', $data);
		// $this->load->view('templates/cirkelmenu', $data);
	}
}