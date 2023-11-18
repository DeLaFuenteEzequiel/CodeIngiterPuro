<?php
class objects_model extends CI_Model {
    protected $table = "objects";
    protected $pk = "object_id";
   
    public function delete($id){
        if(!is_null($id)){
            $this->db->where($this->pk,$id);
            $this->db->delete($this->table);
        }
    }
    public function edit($id,$status){
        if(!is_null($id)){
            $this->db->where($this->pk,$id);
            $this->db->set($this->status,$status);
        }
        $this->db->update($this->tabla);
    }
    public function show($id){
        if(!is_null($id)){
            $this->db->where($this->pk,$id);
            $this->db->limit(1);
            return $this->db->get($this->tabla)->row_array();
        }
        return $this->db->get($this->tabla)->result_array();
    }
}

?>


