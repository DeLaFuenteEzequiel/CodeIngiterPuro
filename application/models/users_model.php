<?php
class users_model extends CI_Model {
    protected $table = "users";
    protected $pk = "user_id";
    protected $user="user";
    protected $pass="password";

    public function create($data = array()) {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function get_all_users() {
        return $this->db->get($this->table)->result_array();
    }

    public function delete($user_id) {
        try {
            $this->db->where($this->pk, $user_id);
            $this->db->delete($this->table);
            return $this->db->affected_rows();
        } catch (Exception $e) {
            error_log('Error en UsersModel->delete: ' . $e->getMessage());
            return 0;
        }
    }

    public function update($user_id, $data) {
        try {
            $this->db->where($this->pk, $user_id);
            $this->db->update($this->table, $data);
            return $this->db->affected_rows();
        } catch (Exception $e) {
            error_log('Error en UsersModel->update: ' . $e->getMessage());
            return 0;
        }
    }

   /* public function validate_login($user=null,$password=null) {
        $this->db->select("*");
        $this->db->where("user", $user);
        $this->db->where("password",$password );
        $this->db->limit(1);
        $res = $this->db->get($this->table);
        error_log("taaca");
        if ($res->num_rows() > 0) {
            return $res->row_array();
        } else {
            return false;
        }
    }*/

    public function validate_login($user=null,$password=null){
        if(!is_null($user)){
            if(!is_null($password)){
                $this->db->where($this->user,$user);
                $this->db->where($this->password,$password);
                $this->db->limit(1);
                $this->db->get($this->tabla)->row_array();
                if ($this->db->affected_rows()){
                    return true;
                }
            }
        }
        return false;
    }
}

