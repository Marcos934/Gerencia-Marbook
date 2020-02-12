<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AlterarItensVendaCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        session_start();
    }

    public function index() {
        $this->load->model('AlterarItens_modal');
        $tudo['tudo'] = $this->AlterarItens_modal->exibirTudo();
        $this->load->model('TelaCadastrarLivro_modal');
         $tudo['tipos'] = $this->TelaCadastrarLivro_modal->exibirGenero();
        
        $this->load->view('includes/barraFixa');
        $this->load->view('funcional/alterarItens',$tudo);
        $this->load->view('includes/footer');
        
        
    }

}
