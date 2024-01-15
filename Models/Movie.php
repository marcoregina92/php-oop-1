<?php
class Movie
{
    public $title;
    public $year;
    public $director;
    public $genre;

    public function __construct($titolo, $anno, $regista, $genere)
    {
        $this->title = $titolo;
        $this->year = $anno;
        $this->director = $regista;
        $this->genre = $genere;

    }

    public function getFullFilms() {
        $result = $this->title . " - " . $this->year . " - " . $this->director . " - " . $this->genre;
        return $result;
    }
}