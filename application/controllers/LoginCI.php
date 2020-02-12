<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        session_start();
    }

    public function index() {
        $_SESSION['entrada'] = FALSE;
        session_destroy();
        $this->load->view('login');
    }

}
