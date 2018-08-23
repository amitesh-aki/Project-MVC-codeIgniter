<?php

class Documents extends CI_Controller {

    public function read_document($id) {

        if(!is_numeric($id)) {

            echo "Entered ID is not numeric. Please enter a valid ID.";
            return;
        }

        $this->load->model('Document_model');

        $documentExists = $this->Document_model->document_exists($id);

        if(!$documentExists) {

            echo "Given document does not exist. Please provide a valid document.";
            return;
        }

        $data['documents'] = $this->Document_model->get_documents($id);

        $this->load->view('documents/read', $data);
    }
}
?>