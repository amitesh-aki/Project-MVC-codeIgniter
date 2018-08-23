<?php

class User_types extends CI_Controller {

    public function read_user_types($id) {

        if(!is_numeric($id)) {

            echo "Entered ID is not numeric. Please enter a valid ID.";
            return;
        }

        $this->load->model('User_type_model');

        $userTypeExists = $this->User_type_model->user_type_exists($id);

        if(!$userTypeExists) {

            echo "Given user type does not exist. Please submit a valid user type.";
            return;
        }

        $data['user_types'] = $this->User_type_model->get_user_types($id);

        $this->load->view('user_types/read', $data);

    }
}

?>