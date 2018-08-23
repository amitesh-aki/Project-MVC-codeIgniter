<?php

class Document_model extends CI_Model {

    public function document_exists($id) {

        $sql = "SELECT id FROM documents WHERE id = $id";

        $query = $this->db->query($sql);

        $result = $query->num_rows();

        return ($result == 1 ? TRUE : FALSE);
    }

    public function get_documents($id) {

        $sql = "SELECT
                    A.title,
                    B.stage,
                    C.type,
                    D.name AS LEAD,
                    E.name AS CREATED_BY,
                    F.name AS ASSIGNED_TO,
                    G.name AS APPROVED_BY,
                    A.estimated_date,
                    A.delivery_date
                FROM
                    documents AS A
                JOIN stages AS B
                    ON B.id = A.stage_id
                JOIN document_types AS C
                    ON C.id = A.document_type_id
                JOIN leads AS D
                    ON D.id = A.lead_id
                JOIN users AS E
                    ON E.id = A.created_by
                JOIN users AS F
                    ON F.id = A.assigned_to
                JOIN users AS G
                    ON G.id = A.approved_by
                WHERE
                    A.id = $id";

        $query = $this->db->query($sql);

        return $query->result();
    }
}