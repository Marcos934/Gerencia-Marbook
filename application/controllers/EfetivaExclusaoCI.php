<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EfetivaExclusaoCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        session_start();
    }

    public function index() {

       $this->load->model('EfetivarExclusao_modal');
       $this->EfetivarExclusao_modal->excluir($this->input->post('id'));
        $capId = $this->EfetivarExclusao_modal->capId();
        foreach ($capId as $value) {}
        $this->EfetivarExclusao_modal->atualizaId($value->idLivro);
        



        $this->load->view('includes/barraFixa');
        echo '<br><br><br>Tudo numa boa';
        $this->load->view('includes/footer');
    }

}
