
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class inicio_controller extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model("objects_model");
    }

    public function index() {
        $data["objects"] = $this->objects_model->get_object();
        $this->load->view('header');
        $this->load->view('inicio_view',$data);
        $this->load->view('footer');
    }

	public function show($object_id){
		if(!is_null($object_id)){
			$data["object"] = $this->objects_model->get_object($object_id);
			if($data["object"]["status"]==1){
				$this->load->view('header');
				$this->load->view('detalles_view',$data);
				$this->load->view('footer');
			}else{
				$this->load->view('header');
				$this->load->view('sinstock_view');
				$this->load->view('footer');
			}
			
		}else{
			redirect("inicio_controller/index");
		}	
	}
	public function status($object_id,$status){
		if(!is_null($object_id)){
			if($status==0){
				$set=1;
			}else{
				$set=0;
			}
			$data["object"] = $this->objects_model->edit($object_id,$set);
				
		}
		redirect("inicio_controller/index");
	}
	public function delete($object_id=null){	
	    $this->objects_model->delete($object_id);	
		redirect("inicio_controller/index");
	}
}