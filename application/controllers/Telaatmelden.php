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
    public $error_message;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('loginstate');
        $this->load->helper('form');
        $this->load->library('form_validation');
            if(isset($_POST['submit']))
                $this->setPostValues();
                $this->makeLateReport();
    }
    private function makeLateReport(){
         // haal de waardes op
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('insertion', 'Insertion', '');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('studentnumber', 'studentnumber', 'required');
        $this->form_validation->set_rules('mentor', 'Mentor', 'required');
        $this->form_validation->set_rules('reason', 'Reason', 'required');
             if($this->form_validation->run())
                //volgende stap: waardes ophalen
             else
                $this->error_message = "Sommige waardes konden niet worden opgehaald.";
    }
    private function setPostValues(){
            $this->firstname = $this->input->post('firstname');
            $this->insertion = $this->input->post('insertion');
            $this->lastname = $this->input->post('lastname');
            $this->sudentnumber = $this->input->post('studentnumber');
            $this->mentor = $this->input->post('mentor');
            $this->reason = $this->input->post('reason');
    }
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('project_telaat/formulier_telaat');
    }
}
