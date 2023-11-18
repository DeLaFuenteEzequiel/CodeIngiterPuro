<?php
class inicio_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("objects_model");
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('inicio_view');
        $this->load->view('footer');
    }
    
}

?>