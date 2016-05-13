<?php
class Pages extends CI_Controller{
	
	public function __construct() {
		parent::__construct();
		$this->load->library('loginstate');
        $this->load->library('form_validation');

        $this->load->helper('form');

        $this->form_validation->set_rules('projectnaam', 'Projectnaam', 'required');
        $this->form_validation->set_rules('projectbeschrijving', 'Projectbeschrijving', 'required');

	}

public function view()
    {
		$this->loginstate->logged_out();
    }
public function index(){
    $this->load->view('templates/header');
    $this->load->view('pages/projectpagina');
    }
public function project_aanmaken(){
    if ($this->form_validation->run() === FALSE)
        {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('pages/projectaanmaken');
        }else
        {
        $this->project_model->set_project();
        $this->load->view('errors/success');
     }
    }
public function project_bewerken(){
    if ($this->form_validation->run() === FALSE)
        {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar_admin');
        $this->load->view('pages/projectbewerken');

        }
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