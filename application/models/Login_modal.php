<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_modal extends CI_Model {

    public function validarLogin($identificador, $senha) {
       
         $query = $this->db->query("SELECT * FROM marbookc_marbookDate.GERENTE WHERE Num_Cadastro = '$identificador' AND Senha = '$senha' LIMIT 1");
       // echo var_dump($query);
        return $query->result();
    }

}
