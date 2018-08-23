<?php

class Users extends CI_Controller {

    public function read_user($id) {

        if(!is_numeric($id)) {

            echo "Entered ID is not numeric. Please enter a valid ID.";
            return;
        }

        $this->load->model('User_model');

        $userExists = $this->User_model->user_exists($id);

        if(!$userExists) {

            echo "Entered ID does not exist. Please enter a valid ID.";
            return;
        }

        $data['users'] = $this->User_model->get_user_details($id);

        $this->load->view('users/read', $data);
    }

    public function create_user() {

        $this->User_model->insert_user_details();

    }
}