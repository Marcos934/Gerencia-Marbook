<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EfetivarExclusao_modal extends CI_Model {

    public function excluir($id) {
        $this->db->query("call deletarLivro($id)");
    }

    public function capId() {
        $query = $this->db->query("select max(LIVRO.idLivro) as idLivro  from LIVRO");
        return $query->result();
    }

    public function atualizaId($iden) {
        $this->db->query("ALTER TABLE marbookc_marbookDate.ESTOQUE AUTO_INCREMENT = $iden");
        $this->db->query("ALTER TABLE marbookc_marbookDate.LIVRO   AUTO_INCREMENT = $iden");
        $this->db->query("ALTER TABLE marbookc_marbookDate.VENDA   AUTO_INCREMENT = $iden");
    }

}
