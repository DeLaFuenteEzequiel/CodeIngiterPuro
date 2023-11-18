<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_controller extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("users_model");
    }

    public function index() {
        $data["users"] = $this->users_model->get_users();
        $this->load->view('header');
        $this->load->view('users_view',$data);
        $this->load->view('footer');
    }

    public function delete($id_user=null){	
	    $this->users_model->delete($id_user);	
		redirect("users_controller/index");
	}

}

?>