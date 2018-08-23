<?php

class Document_types extends CI_Controller {

    public function read_document_type($id) {

        if(!is_numeric($id)) {

            echo "Entered ID is not numeric. Please enter a valid ID.";
            return;
        }

        $this->load->model('Document_type_model');

        $documentTypeExists = $this->Document_type_model->document_type_exists($id);

        if(!$documentTypeExists) {

            echo "Given document type does not exist. Please enter a valid document type.";
            return;
        }

        $data['document_types'] = $this->Document_type_model->get_document_types($id);

        $this->load->view('document_types/read', $data);
    }
}
?>