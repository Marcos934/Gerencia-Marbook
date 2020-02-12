<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Instru_AltItensVendaCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        session_start();
    }

    public function index() {

        
        $this->load->view('includes/barraFixa');
        $this->load->view('funcional/Inst_alterarItens');
        $this->load->view('includes/footer');
        
        
    }

}
