<?php
class inicio_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("objects_model");
    }

    public function index() {
        $data["objects"] = $this->objects_model->get_all_objects();
        $this->load->view('header');
        $this->load->view('inicio_view',$data);
        $this->load->view('footer');
    }
    
}

?>