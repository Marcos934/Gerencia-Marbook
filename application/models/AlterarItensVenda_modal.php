<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class AlterarItensVenda_modal extends CI_Model {

  

public function exibirTudoPorOrdem($filtro,$ordem) {
       $query =  $this->db->query("select * from DetalhesGeral order by $filtro $ordem;");     
        return $query->result();
}

public function exibirTudoPorOrdemPesquisa($busca,$filtro,$ordem) {
       $query =  $this->db->query("select * from DetalhesGeral where $filtro like '%$busca%'   order by $filtro $ordem;");     
        return $query->result();
}


   

}
