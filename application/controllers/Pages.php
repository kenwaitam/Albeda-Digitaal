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
public function projectpagina($page = 'projectpagina'){
    $this->load->view('templates/header');
    $this->load->view('pages/projectpagina');
    }

}