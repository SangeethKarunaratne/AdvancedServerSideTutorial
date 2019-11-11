<?php

class SessionController extends CI_Controller {

    public function index() {

        $this->load->library('session');

        $session_id = $this->session->session_id;

        $bagOfValues = array(
            'session_id' => $session_id
        );

        $this->load->view('session', $bagOfValues);
    }

    public function setSessionData() {

        $userName = $this->input->post('userName');

        $this->load->library('session');

        $session_id = $this->session->session_id;

        $newdata = array(
            'user_name' => $userName,
            'logged_in' => TRUE,
            'session_id' => $session_id
        );

        $this->session->set_userdata('sessionData', $newdata);

        $this->load->helper('url');

        redirect('/SessionController/index');
    }

    public function viewSessionData() {

        $this->load->library('session');

        $sessionData = $this->session->userdata('sessionData');
        //$sessionData = $this->session->sessionData

        $bagOfValues = array(
            'sessionData' => $sessionData
        );

        $this->load->view('sessionData', $bagOfValues);
    }

    public function removeSessionData() {

        $this->load->library('session');

        $this->session->unset_userdata('sessionData');

        $this->load->helper('url');

        redirect('/SessionController/index');
    }

}
