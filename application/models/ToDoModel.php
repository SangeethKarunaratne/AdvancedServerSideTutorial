<?php

class ToDoModel extends CI_Model {

    function addAction($ActionTitle) {

        $UserId = "Id0001";

        $conn = mysqli_connect('localhost', 'root', '', '6cosc005w');

        mysqli_query($conn, "INSERT INTO `ToDoActions`(`UserId`,`ActionTitle`) VALUES ('" . $UserId . "','" . $ActionTitle . "')");
    }

    function getAllToDos() {

        $todoActionsFound = array();

        $conn = mysqli_connect('localhost', 'root', '', '6cosc005w');

        $res = mysqli_query($conn, "select * from ToDoActions");
        while (($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) != NULL) {
            $todoActionsFound[] = new ToDo(
                    $row['Id'], $row['UserId'], $row['ActionTitle']
            );
        }

        return $todoActionsFound;
    }

    function addActiondb($ActionTitle) {

        $UserId = "Id0002";

        $this->load->database();

        $data = array('UserId' => $UserId,
            'ActionTitle' => $ActionTitle);

        $this->db->insert('ToDoActions', $data);
    }

    function updateActiondb($id, $ActionTitle) {

        $this->load->database();

        $data = array('ActionTitle' => $ActionTitle);

        $this->db->where('id', $id);

        $this->db->update('ToDoActions', $data);
    }

    function deleteActiondb($id) {

        $this->load->database();

        $this->db->where('id', $id);

        $this->db->delete('ToDoActions');
    }

    function getAllToDosdb() {

        $todoActionsFound = array();

        $this->load->database();

        $res = $this->db->get('ToDoActions');

        foreach ($res->result() as $row) {
            $todoActionsFound[] = new ToDo($row->Id, $row->UserId, $row->ActionTitle);
        }

        return $todoActionsFound;
    }

}

class ToDo {

    public $Id;
    public $UserId;
    public $ActionTitle;

    function __construct($Id, $UserId, $ActionTitle) {
        $this->Id = $Id;
        $this->UserId = $UserId;
        $this->ActionTitle = $ActionTitle;
    }

    function getId() {
        return $this->Id;
    }

    function getUserId() {
        return $this->UserId;
    }

    function getActionTitle() {
        return $this->ActionTitle;
    }

}

?>