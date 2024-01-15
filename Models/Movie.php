<?php
class Movie
{
    public $titolo;
    public $anno;
    public $regista;
    public $genere;

    public function getFullFilms() {
        $result = $this->titolo . " - " . $this->anno . " - " . $this->regista . " - " . $this->genere;
        return $result;
    }
}