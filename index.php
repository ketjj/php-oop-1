<?php 

require_once __DIR__ . '/Movies.php';

//DEFINE OBJECTS
$movie1 = new Movies("Matrix: Reloaded", "Fantascienza/Azione", "The Wachowskis", 2003, 2.10);
$movie2 = new Movies("Matrix: Reloaded", "Fantascienza/Azione", "The Wachowskis", 1999, 2.35);
$movie3 = new Movies("Return of the Jedi", "Fantascienza/Avventura", "Richard Marquand",1983, 2.45);

$totMovies = [$movie1, $movie2, $movie3];

$movie2->setTitle("Matrix");

// echo "<br>";
// var_dump($movie3);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Oop-1</title>
</head>
<body>
  <div class="container">
    <?php foreach($totMovies as $movie) : ?>
      <div class="mt-5">
      <h3><?php echo $movie->getTitle();?> </h3>
      <div><?php echo "Genere:". ' ' . $movie->getGenre();?></div>
      <div><?php echo "Regia:". ' ' . $movie->getDirector();?></div>
      <div><?php echo "Anno:". ' ' . $movie->getYear();?></div>
      <div><?php echo "Durata:". ' ' . $movie->getDuration(). ' ' ."h";?></div>
    </div>
    <?php endforeach; ?>
  </div>
 

</body>
</html>

