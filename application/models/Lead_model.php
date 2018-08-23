<?php

class Lead_model extends CI_Model {

    public function lead_exists($id) {

        $sql = "SELECT id FROM leads WHERE id = $id";

        $query = $this->db->query($sql);

        $result = $query->num_rows();

        return ($result == 1 ? TRUE : FALSE);
    }

    public function get_lead_details($id) {

        $sql = "SELECT
                    A.name,
                    A.email,
                    A.phone,
                    A.address,
                    B.name AS CREATED_BY
                FROM
                    leads AS A
                JOIN
                    users AS B
                ON
                    A.created_by = B.id
                WHERE
                    A.id = $id";

        $query = $this->db->query($sql);

        return $query->result();
    }
}

?>