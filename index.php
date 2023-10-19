<?php
define('ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
require_once ROOT . DS . 'db.php';
require_once ROOT . DS . 'classes' . DS . 'movie.php';
require_once ROOT . DS . 'models' . DS . 'avatar.php';
require_once ROOT . DS . 'models' . DS . 'matrix.php';

array_push($movies, $avatar, $matrix);

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>OOP 1</title>
</head>

<body class="bg-dark text-white mt-3 m-auto">

   <div class="container d-flex">

      <?php foreach ($movies as $movie) : ?>
         <div class="col p-3">
            <div class="card">
               <div class="card-body">
                  <h5 class="card-title"><?= $movie->title ?></h5>
                  <p class="card-text"><?= $movie->description ?></p>
                  <p class="card-text"><?= $movie->year ?></p>
                  <p class="card-text"><?= $movie->genre ?></p>
                  <p class="card-text">This movie has <?= $movie->getAgeMovie() ?> years</p>
               </div>
            </div>
         </div>
      <?php endforeach ?>
   </div>


</body>

</html>