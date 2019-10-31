<?php

class ToDoController extends CI_Controller {

    public function index() {
        $this->load->view('todo');
    }

    public function addAction() {

        $actionTitle = $this->input->post('action');

        $this->load->model('ToDoModel', 'tdm');

        $this->tdm->addAction($actionTitle);

        $this->load->view('todo');
    }

    public function allToDoActions() {

        $this->load->model('ToDoModel', 'tdm');

        $toDoActions = $this->tdm->getAllToDos();

        $bagOfValues = array(
            'toDoActions' => $toDoActions
        );

        $this->load->view('todoList', $bagOfValues);
    }

}
