<?php
class Pages extends CI_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->library('loginstate');
	}

public function view()
    {
		$this->loginstate->logged_out();
    }
public function index(){
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar_admin');
    $this->load->view('pages/projectpagina');
    }
public function project_aanmaken(){
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar_admin');
    $this->load->view('pages/projectaanmaken');

    }
public function project_bewerken(){
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar_admin');
    $this->load->view('pages/projectbewerken');
    }
public function admin(){
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar_admin');
    $this->load->view('pages/adminpagina');
    }
public function teLaatOverzicht(){
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar_admin');
    $this->load->view('pages/teLaatOverzicht');
    }
}