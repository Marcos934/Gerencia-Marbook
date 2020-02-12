<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EfetivarCadastro_modal extends CI_Model {

    public function InserirCadastro($id, $qnt, $nome, $genero, $autor, $Descri) {

        $this->db->query("call cadastrarLivro('$id',$qnt,'$nome',$genero,'$autor','$Descri')");
    }

    public function idImg($nome, $genero) {
        $query = $this->db->query("select idLivro from LIVRO where LIVRO.Nome = '$nome' and LIVRO.Genero = $genero");
        return $query->result();
    }

    public function inserirPreco($idLivro, $preco) {
        $this->db->query("INSERT INTO `marbookc_marbookDate`.`VENDA` (`idVENDA`, `idLivro`, `VEN_Num_Cadastro`, `Preco`) VALUES ('default', $idLivro, '002', $preco)");
    }

   

}
