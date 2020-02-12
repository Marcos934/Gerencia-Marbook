<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrarLivroCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        session_start();
    }

    public function index() {
        $this->load->model('TelaCadastrarLivro_modal');
        $genero['tipos'] = $this->TelaCadastrarLivro_modal->exibirGenero();



        $this->load->view('includes/barraFixa');
        $this->load->view('funcional/cadastrarLivro', $genero);
        $this->load->view('includes/footer');
    }

}
