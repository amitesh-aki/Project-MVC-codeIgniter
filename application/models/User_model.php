<?php

class User_model extends CI_Model {

    public function user_exists($id) {

        $query = $this->db->query("SELECT id FROM users WHERE id = $id");

        $result = $query->num_rows();

        return ($result == 1 ? TRUE : FALSE);
    }

    public function get_user_details($id) {

        $query = $this->db->query("SELECT A.name, A.email, A.address, A.phone, C.type, B.name AS CREATED_BY FROM users AS A LEFT JOIN users AS B ON A.created_by = B.id JOIN user_types AS C ON C.id = A.user_type_id WHERE A.id = $id");

        return $query->result();
    }

    public function insert_user_details($data) {

        $query = $this->db->insert('users', $data);
    }
}