<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TelaCadastrarLivro_modal extends CI_Model {

    public function exibirGenero() {

        $query = $this->db->query("SELECT * FROM GENERO;");
        return $query->result();
    }



}
