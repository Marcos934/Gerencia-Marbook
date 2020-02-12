<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AreDeTrabalhoCI extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        session_start();
    }

    public function index() {
        $this->load->model('login_modal');
        $login = $this->login_modal->validarLogin($this->input->post('identificador'), $this->input->post('senha'));

        if (!empty($login)|| $_SESSION['entrada']==TRUE ) {
            $this->load->view('areaDeTrabalho', $login);
            $_SESSION['entrada'] = TRUE;
        } else {
            $this->load->view('login');
            $_SESSION['entrada']=FALSE;
            $_SESSION['loginErro'] = "Identificador ou Senha Inválido!";
            
        }
    }

}
