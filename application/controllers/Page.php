<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Danny
 * Date: 11/03/2016
 * Time: 11:09
 */
class Page extends CI_Controller
{
    public function index()
    {
        $this->load->view('page');
    }

}