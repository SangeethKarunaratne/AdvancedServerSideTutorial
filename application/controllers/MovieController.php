<?php

class MovieController extends CI_Controller {

    public function index() {
        $this->load->view('movies');
    }

    public function search() {

        $movieTitle = $this->input->post('movieTitle');

        $this->load->model('MovieModel', 'mv');

        $moviesFound = $this->mv->getMovie($movieTitle);

        $bagOfValues = array(
            'movies' => $moviesFound
        );

        $this->load->view('movieResults', $bagOfValues);
    }

    public function allMovies() {

        $this->load->model('MovieModel', 'mv');

        $movies = $this->mv->getAllMovies();

        $bagOfValues = array(
            'movies' => $movies
        );

        $this->load->view('allMovies', $bagOfValues);
    }

}
