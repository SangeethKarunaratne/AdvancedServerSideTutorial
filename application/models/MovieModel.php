<?php

class MovieModel extends CI_Model {

    function getMovie($movieTitle) {

        $moviesFound = array();

        $conn = mysqli_connect('localhost', 'root', '', '6cosc005w');

        $res = mysqli_query($conn, "select * from Movies where Title ='" . $movieTitle . "'");
        while (($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) != NULL) {
            $moviesFound[] = new Movie(
                    $row['Id'], $row['Title'], $row['Director'], $row['Genre'], $row['IMDBrating'], $row['ReleaseYear']
            );
        }

        return $moviesFound;
    }

    function getAllMovies() {

        $moviesFound = array();

        $conn = mysqli_connect('localhost', 'root', '', '6cosc005w');

        $res = mysqli_query($conn, "select * from Movies");
        while (($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) != NULL) {
            $moviesFound[] = new Movie(
                    $row['Id'], $row['Title'], $row['Director'], $row['Genre'], $row['IMDBrating'], $row['ReleaseYear']
            );
        }

        return $moviesFound;
    }

}

class Movie {

    public $id;
    public $Title;
    public $Director;
    public $Genre;
    public $IMDBrating;
    public $ReleaseYear;

    function __construct($id, $Title, $Director, $Genre, $IMDBrating, $ReleaseYear) {
        $this->id = $id;
        $this->Title = $Title;
        $this->Director = $Director;
        $this->Genre = $Genre;
        $this->IMDBrating = $IMDBrating;
        $this->ReleaseYear = $ReleaseYear;
    }

    function getTitle() {
        return $this->Title;
    }

    function getDirector() {
        return $this->Director;
    }

    function getGenre() {
        return $this->Genre;
    }

    function getIMDBrating() {
        return $this->IMDBrating;
    }

    function getReleaseYear() {
        return $this->ReleaseYear;
    }

    function getId() {
        return $this->id;
    }

}

?>