<?php

class Leads extends CI_Controller {

    public function read_lead($id) {

        if(!is_numeric($id)) {

            echo "Entered ID is not numeric. Please enter a valid ID.";
            return;
        }

        $this->load->model('Lead_model');

        $leadExists = $this->Lead_model->lead_exists($id);

        if(!$leadExists) {

            echo "Entered Lead's ID does not exist. Please enter a valid ID.";
            return;
        }

        $data['leads'] = $this->Lead_model->get_lead_details($id);

        $this->load->view('leads/read', $data);
    }
}

?>