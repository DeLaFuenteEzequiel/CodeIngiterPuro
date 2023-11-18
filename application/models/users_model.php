<?php
class users_model extends CI_Model {
    protected $table = "users";
    protected $pk = "user_id";
  

   public function validate_login($user,$password) {
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
    }
}
?>

