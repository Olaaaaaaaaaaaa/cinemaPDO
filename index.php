<?php
include_once __DIR__ . '/component/header.php';

use App\Repository\ActorRepository;
use App\Service\PDOService;
use App\Repository\MovieRepository;

?>

<?php

$dataMovie = new PDOService;
$test = new ActorRepository;
// $listMovie = [];

dump($dataMovie);

dump($test->findFirst());

dump($test->findAllMovie());

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