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

    public function edit($id_user){
        $data["users"] = $this->users_model->get_users();
        $this->load->view("header");
        $this->load->view('users_view',$data);
        $data["users"] = $this->users_model->get_users($id_user);
        $this->load->view('edit_user_view',$data);
        $this->load->view('footer');
    }

    public function update($user_id){
        $data["user"] = $this->input->post("user");
        $data["salary"] = $this->input->post("salary");
        $data["antiquity"] = $this->input->post("antiquity");
        $this->users_model->update($user_id, $data);
        redirect("users_controller/index");
    }
   



}

?>