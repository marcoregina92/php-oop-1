<?php
require __DIR__ . '/Models/Movie.php';

$film = new Movie("Batman" , 2020, "Martin Scorsese" , "Avventura");


echo $film->getFullFilms();
