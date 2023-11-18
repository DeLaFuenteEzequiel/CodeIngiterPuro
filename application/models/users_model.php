<?php
class users_model extends CI_Model {
    protected $table = "users";
    protected $pk = "id_user";
    

   public function validate_login($user,$password) {
        $this->db->select("*");
        $this->db->where("user", $user);
        $this->db->where("password",$password );
        $this->db->limit(1);
        $res = $this->db->get($this->table);
        if ($res->num_rows() > 0) {
            return $res->row_array();
        } else {
            return false;
        }
    }

    public function get_users($user_id=null) {
        if(!is_null($user_id)){
            $this->db->where($this->pk,$user_id);
            $this->db->limit(1);
            return $this->db->get($this->table)->row_array();
        }
        return $this->db->get($this->table)->result_array();
    }

    public function delete($user_id) {
        try {
            $this->db->where($this->pk, $user_id);
            $this->db->delete($this->table);
            return $this->db->affected_rows();
        } catch (Exception $e) {
            error_log('Error en Users model delete: ' . $e->getMessage());
            return 0;
        }
    }

    public function update($user_id=null, $data=array()){
        $this->db->where($this->pk, $user_id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    public function create($data = array()) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

}
?>

