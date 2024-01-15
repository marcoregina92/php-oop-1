<?php
require __DIR__ . '/Models/Movie.php';

$film = new Movie();
$film->titolo = "Batman";
$film->anno = "2020";
$film->regista = "Martin Scorsese";
$film->genere = "Avventura";


echo $film->getFullFilms();
