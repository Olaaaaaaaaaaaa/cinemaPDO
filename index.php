<?php
include_once __DIR__ . '/component/header.php';

use App\Models\Actor;
use App\Models\Movie;
use App\Repository\ActorRepository;
use App\Service\PDOService;
use App\Repository\MovieRepository;

?>

<?php

$actor = new Actor();
$actor->setFirstName("Oui");
$actor->setLastName("Non");

$joker = new Movie();
$joker->addActor($actor);

$movie = new MovieRepository();



dump($movie->findOneById(5));


// foreach ($dataMovie->findAll() as $key => $value) {
//     $newMovie = new Movie();
//     $newMovie->setName($value['name_movie']);
//     $newMovie->setReleaseDate(new DateTime($value['release_date_movie']));

//     $listMovie[] = $newMovie;
// }

?>

<h1>Mes films</h1>
<ul>

</ul>