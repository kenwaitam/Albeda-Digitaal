<?php
/*
 * Created by team4
*/
class Telaatmelden extends CI_Controller {
    public $firstname;
    public $insertion;
    public $lastname;
    public $sudentnumber;
    public $mentor;
    public $reason;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('loginstate');
        $this->load->helper('form');
        $this->load->library('form_validation');

    }

    public function index(){
        $this->load->view('templates/header');
        $this->load->view('project_telaat/formulier_telaat');

        // haal de waardes op
        $this->form_validation->set_rules('firstname', 'Username', 'required');
        $this->form_validation->set_rules('insertion', 'Username', '');
        $this->form_validation->set_rules('lastname', 'Username', 'required');
        $this->form_validation->set_rules('sudentnumber', 'Username', 'required');
        $this->form_validation->set_rules('mentor', 'Username', 'required');
        $this->form_validation->set_rules('reason', 'Username', 'required');

        // kijk of submit bestaat
        if(isset($_POST["submit"])) {
            echo "b";
            if($this->form_validation->run()) {
                echo "t";
            }
        }
    }
}
