<?php

use App\Service\PDOService;

include_once __DIR__ . '/vendor/autoload.php';
?>

<?php

$listMovie = new PDOService;

dump($listMovie);

dump($listMovie->findAll());

?>
