<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class AlterarItens_modal extends CI_Model {

  

public function exibirTudo() {
       $query =  $this->db->query("select * from DetalhesGeral;");     
        return $query->result();

}

   

}
