<?php
/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 15/04/2016
 * Time: 10:17
 */

class telaat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('loginstate');
        $this->load->helper('form');
        $this->load->library('form_validation');

    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('telaat_view');
    }
}
