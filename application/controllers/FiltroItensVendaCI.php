<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FiltroItensVendaCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        session_start();
    }

    public function index() {
        $this->load->model('AlterarItensVenda_modal');

        $ordem = $_POST['ordem'];
        $resultado = $_POST['busca'];
        $filtro = $_POST['filtro'];
         function removerEspacos($str) {
                $inicio = ltrim($str);
                $fim = rtrim($inicio);
                return $fim;
            }
        $busca = removerEspacos($resultado);
        
        if(empty($busca)){            
            $tudo['tudo'] = $this->AlterarItensVenda_modal->exibirTudoPorOrdem($filtro,$ordem);            
        }else{
           $tudo['tudo'] = $this->AlterarItensVenda_modal->exibirTudoPorOrdemPesquisa($busca,$filtro,$ordem);
        }

        
       

        $this->load->model('TelaCadastrarLivro_modal');
        $tudo['tipos'] = $this->TelaCadastrarLivro_modal->exibirGenero();

        $this->load->view('includes/barraFixa');        
        $this->load->view('funcional/filtro_alterarItens', $tudo);
        
        $this->load->view('includes/footer');
    }

}
