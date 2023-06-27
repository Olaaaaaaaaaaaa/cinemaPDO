<?php
include_once __DIR__ . '/component/header.php';

use App\Service\PDOService;
use App\Repository\MovieRepository;

?>

<?php

$dataMovie = new PDOService;
$test = new MovieRepository;
// $listMovie = [];

dump($dataMovie);

dump($test->findFirst());

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