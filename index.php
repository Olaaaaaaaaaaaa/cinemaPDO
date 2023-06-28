<?php
include_once __DIR__ . '/component/header.php';

use App\Models\Actor;
use App\Models\Movie;
use App\Repository\ActorRepository;
use App\Service\PDOService;
use App\Repository\MovieRepository;

?>

<?php

$actorRepository = new ActorRepository();

$move = new MovieRepository();

$date = new DateTime();
$date->setDate(2006, 02, 06);

$cars = new MovieRepository();
$cars = $cars->findOneById(13);

$jane = $actorRepository->findOneById(2);
$robert = $actorRepository->findOneById(8);
$sophia = $actorRepository->findOneById(5);

$fast = $move->findOneById(5);


$cars->addActor($jane);
$cars->addActor($robert);
$cars->addActor($sophia);

dump($cars);
// $move->addActorsToMovie($cars);

// $move->deleteMovie($fast);

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