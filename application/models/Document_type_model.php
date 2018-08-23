<?php

class Document_type_model extends CI_Model {

    public function document_type_exists($id) {

        $sql = "SELECT id FROM document_types WHERE id = $id";

        $query = $this->db->query($sql);

        $result = $query->num_rows();

        return ($result == 1 ? TRUE : FALSE);
    }

    public function get_document_types($id) {

        $sql = "SELECT
                    type
                FROM
                    document_types
                WHERE
                    id = $id";

        $query = $this->db->query($sql);

        return $query->result();
    }
}

?>