<?php

class Stages extends CI_Controller {

    public function read_stage($id) {

        if(!is_numeric($id)) {

            echo "Entered ID is not numeric. Please enter a valid ID.";
            return;
        }

        $this->load->model('Stage_model');

        $stageExists = $this->Stage_model->stage_exists($id);

        if(!$stageExists) {

            echo "Given stage does not exist. Please provide a valid stage.";
            return;
        }

        $data['stages'] = $this->Stage_model->get_stages($id);

        $this->load->view('stages/read', $data);
    }
}
?>