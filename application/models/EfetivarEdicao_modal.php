<?php


defined('BASEPATH') OR exit('No direct script access allowed');


class EfetivarEdicao_modal extends CI_Model {

  


public function editar($id, $qnt, $nome, $genero, $preco ,$autor, $Descri ) {
   $this->db->query("call marbookc_marbookDate.EditarLivro($id, $qnt, '$nome',  $genero, $preco, '$autor', '$Descri')");     
     

}

   

}
