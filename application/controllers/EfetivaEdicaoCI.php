<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EfetivaEdicaoCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        session_start();
    }

    public function index() {

        $id = $_POST['id'];
        $qnt = $_POST['qnt'];
        $nome = $_POST['nome'];
        $genero = $_POST['genero'];
        $preco = $_POST['preco'];
        $autor = $_POST['autor'];
        $Descri = $_POST['descri'];

        $this->load->model('EfetivarEdicao_modal');
        $this->EfetivarEdicao_modal->editar($id, $qnt, $nome, $genero, $preco ,$autor, $Descri );


        $this->load->view('includes/barraFixa');
        echo 'Tudo numa boa';
        $this->load->view('includes/footer');
    }

}
