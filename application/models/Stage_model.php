<?php

class Stage_model extends CI_Model {

    public function stage_exists($id) {

        $sql = "SELECT id FROM stages WHERE id = $id";

        $query = $this->db->query($sql);

        $result = $query->num_rows();

        return ($result == 1 ? TRUE : FALSE);
    }

    public function get_stages($id) {

        $sql = "SELECT
                    stage
                FROM
                    stages
                WHERE
                    id = $id";

        $query = $this->db->query($sql);

        return $query->result();
    }
}