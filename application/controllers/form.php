<?php
/*
 * Created by team4
*/
class Form extends CI_Controller {
    public $firstname;
    public $insertion;
    public $lastname;
    public $studentnumber;
    public $mentor;
    public $reason;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');

    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('pages/form');

        // haal de waardes op
        $this->form_validation->set_rules('firstname', 'Username', 'required');
        $this->form_validation->set_rules('insertion', 'Username', '');
        $this->form_validation->set_rules('lastname', 'Username', 'required');
        $this->form_validation->set_rules('studentnumber', 'Username', 'required');
        $this->form_validation->set_rules('mentor', 'Username', 'required');
        $this->form_validation->set_rules('reason', 'Username', 'required');
        
    }
}
