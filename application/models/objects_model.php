<?php
class objects_model extends CI_Model {
    protected $table = "objects";
    protected $pk = "object_id";

    public function get_all_objects() {
        return $this->db->get($this->table)->result_array();
    }
     public function delete($object_id) {
        try {
            $this->db->where($this->pk, $object_id);
            $this->db->delete($this->table);
            return $this->db->affected_rows();
        } catch (Exception $e) {
            error_log('Error en Objetos model delete: ' . $e->getMessage());
            return 0;
        }
    }
    public function edit($object_id,$status){
        if(!is_null($object_id)){
            $this->db->where($this->pk,$object_id);
            $this->db->set($this->status,$status);
        }
        $this->db->update($this->tabla);
    }
   

}

?>


