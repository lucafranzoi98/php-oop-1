<?php
include './models/movie.php';

$Avatar = new Movie("Avatar", "Lorem Ipsum", 2012, "Fantasy");
$Matrix = new Movie("Matrix", "Dolor Sit Amet", 1998, "Fantascientific");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <title>OOP 1</title>
</head>
<body class="bg-dark text-white mt-3">

   <div class="mb-3">
      <?php foreach ($Avatar as $value) : ?>
         <div class=""><?= $value ?></div>
      <?php endforeach ?>
   </div>

   <div>
      <?php foreach ($Matrix as $value) : ?>
         <div><?= $value ?></div>
      <?php endforeach ?>
   </div>
</body>
</html>