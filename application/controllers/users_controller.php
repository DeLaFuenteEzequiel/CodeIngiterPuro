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
   
    public function show($user_id){
		
			$data["user"] = $this->users_model->get_users($user_id);			
			$this->load->view('header');
			$this->load->view('user_detail_view',$data);
			$this->load->view('footer');			
	}

    public function create() {
        $this->load->view('header');
        $this->load->view('create_user_view');
        $this->load->view('footer');
    }

    public function insert_user() {
        
        $this->form_validation->set_rules('user', 'Nombre de Usuario', 'required');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');
        $this->form_validation->set_rules('antiquity', 'Antiguedad', 'required');
        $this->form_validation->set_rules('salary', 'Salario', 'required');
        $this->form_validation->set_message('required', 'El campo %s es obligatorio.');

        if ($this->form_validation->run() == false) {
            $this->create();
        } else {
            $data = array(
                'user' => $this->input->post('user'),
                'password' => $this->input->post('password'),
                'antiquity' => $this->input->post('antiquity'),
                'salary' => $this->input->post('salary')
            );

            $this->users_model->create($data);
            redirect("users_controller/index");
        }
    }


}

?>