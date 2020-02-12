<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EfetivarCadastroCI extends CI_Controller {

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
        $this->load->model('EfetivarCadastro_modal');
        $this->EfetivarCadastro_modal->InserirCadastro($id, $qnt, $nome, $genero, $autor, $Descri);


        $arquivo = $_FILES['arquivo']['name'];
        $altura = 869;
        $largura = 575;
        $imagem_temporaria = imagecreatefromjpeg($_FILES['arquivo']['tmp_name']);
        $largura_Original = imagesx($imagem_temporaria);
        $altura_Original = imagesy($imagem_temporaria);
        $nova_largura = $largura ? $largura : floor(($largura_Original / $altura_Original) * $altura);
        $nova_altura = $altura ? $altura : floor(($altura_Original / $largura_Original) * $largura);
        $imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
        imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_Original, $altura_Original);
        $identificador = $this->EfetivarCadastro_modal->idImg($nome, $genero);
        foreach ($identificador as $identifica) {}
        $caminho = ("C:/Users/Mulinari/Desktop/Aula CETAM/");
        $extensao = pathinfo($_FILES['arquivo']['name']);
        $extensao = "." . $extensao['extension'];
        $imagem = $identifica->idLivro . $extensao;
        imagejpeg($imagem_redimensionada, $caminho . '' . $imagem);


        $this->EfetivarCadastro_modal->inserirPreco($identifica->idLivro, $preco);

//echo $arquivo;
// "/home/marbookc/public_html/testeci/cimb/assets/img_livros/" 


        $_SESSION['cadastroOk'] = "Último livro Cadastrado <br> Titulo: $nome , Autor: $autor , Qnt: $qnt , Preço: $preco , id: $identifica->idLivro  ";
        $this->load->view('includes/barraFixa');
        $this->load->view('funcional/feedBackCadastro');
        $this->load->view('includes/footer');
    }

}
