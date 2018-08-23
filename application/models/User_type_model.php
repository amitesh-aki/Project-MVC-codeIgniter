<?php

class User_type_model extends CI_Model {

    public function user_type_exists($id) {

        $query = $this->db->query("SELECT id FROM user_types WHERE id = $id");

        $result = $query->num_rows();

        return ($result == 1 ? TRUE : FALSE);
    }

    public function get_user_types($id) {

        $query = $this->db->query("SELECT type FROM user_types WHERE id = $id");

        return $query->result();
    }
}

?>