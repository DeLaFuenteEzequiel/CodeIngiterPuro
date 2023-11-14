<?php
class inicio extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('cabecera');
        $this->load->view('navbar');
        $this->load->view('usuarios');
        $this->load->view('pie');
    }

    public function crear_usuario() {
        $this->load->view('cabecera');
        $this->load->view('navbar');
        $this->load->view('crear_usuario');
        $this->load->view('pie');
    }
    
}