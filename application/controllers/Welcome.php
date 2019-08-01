<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthModel');
    }
    public function index()
    {
        $data = array(
            'page_title' => 'Dashboard'
        );
        $this->load->view('backend/templates/header',$data);
        $this->load->view('backend/index');
        $this->load->view('backend/templates/footer');
    }
}

?>