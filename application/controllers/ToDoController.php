<?php

class ToDoController extends CI_Controller {

    public function index() {
        $this->load->view('todo');
    }

    public function addAction() {

        $actionTitle = $this->input->post('action');

        $this->load->model('ToDoModel', 'tdm');

        $this->tdm->addActiondb($actionTitle);

        $this->load->view('todo');
    }

    public function updateView() {

        $id = $this->input->get('id');

        $bagOfValues = array(
            'id' => $id
        );

        $this->load->view('updateTodo', $bagOfValues);
    }

    public function updateAction() {

        $id = $this->input->get('id');

        $actionTitle = $this->input->post('action');

        $this->load->model('ToDoModel', 'tdm');

        $this->tdm->updateActiondb($id, $actionTitle);

        $this->load->helper('url');

        redirect('/ToDoController/allToDoActions');
    }

    public function deleteAction() {

        $id = $this->input->get('id');

        $this->load->model('ToDoModel', 'tdm');

        $this->tdm->deleteActiondb($id);

        $this->load->helper('url');

        redirect('/ToDoController/allToDoActions');
    }

    public function allToDoActions() {

        $this->load->model('ToDoModel', 'tdm');

        $toDoActions = $this->tdm->getAllToDosdb();

        $bagOfValues = array(
            'toDoActions' => $toDoActions
        );

        $this->load->view('todoList', $bagOfValues);
    }

    public function allToDoActionsJSON() {

        $this->load->model('ToDoModel', 'tdm');

        $toDoActions = $this->tdm->getAllToDosdb();

        echo json_encode($toDoActions);
    }

    public function indexJSON() {
        $this->load->view('todoListJSON');
    }

}
