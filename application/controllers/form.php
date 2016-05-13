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
    public $error_message;
    private $print = false;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
            if(isset($_POST['submit'])){
                $this->setPostValues();
                $this->makeLateReport();
            }
    }
    private function makeLateReport(){
         // haal de waardes op
        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('insertion', 'Insertion', '');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('studentnumber', 'studentnumber', 'required');
        $this->form_validation->set_rules('mentor', 'Mentor', 'required');
        $this->form_validation->set_rules('reason', 'Reason', 'required');
             if($this->form_validation->run()){
                //volgende stap: waardes ophalen.
                 $this->print = true;

             }else{
                $this->error_message = "Sommige waardes zijn niet juist ingevuld.";
             }
    }
    private function setPostValues(){
            $this->firstname = set_value('firstname');
            $this->insertion = set_value('insertion');
            $this->lastname = set_value('lastname');
            $this->studentnumber = set_value('studentnumber');
            $this->mentor = set_value('mentor');
            $this->reason = set_value('reason');
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

        if(!$this->print){
            $this->load->view('project_telaat/formulier_telaat');
        }else{
            $this->load->view('project_telaat/print_formulier');
        }
    }
}
