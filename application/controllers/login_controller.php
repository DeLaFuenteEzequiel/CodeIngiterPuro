<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

    public function __construct(){
        parent :: __construct();
        $this->load->model("users_model");
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('login_view');
        $this->load->view('footer');
    }
}
