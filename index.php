<?php
require __DIR__ . '/Models/Movie.php';

$film = new Movie("Batman" , 2022, "Matt Reeves" , "Azione");
$film->genre .= ", Thriller, Noir";

$film2 = new Movie("Pulp Fiction" , 1994, "Quentin Tarantino" , "Gangster");
$film2->genre .= ", Commedia, Grottesco";


echo "<h1> Film: </h1>";
echo $film->getFullFilms() . "<br>";
echo $film2->getFullFilms();
