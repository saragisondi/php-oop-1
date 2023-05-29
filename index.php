<?php

require_once __DIR__ . '/models/Movie.php';



$movies = [
new Movie('Harry Potter e la pietra filosofale', 'hp1.jpg', 'Chris Columbus', 'David Heyman', 'Steven Kloves', 'John Williams', 'Warner Bros.','2001','160 min'),

new Movie('Harry Potter e la camera dei segreti', 'hp2.jpg', 'Chris Columbus', 'David Heyman', 'Steven Kloves', 'John Williams', 'Warner Bros.','2002','174 min' ),

new Movie('Harry Potter e il prigioniero di azkaban', 'hp3.jpg', 'Chris Columbus', 'David Heyman', 'Steven Kloves', 'John Williams', 'Warner Bros.','2004','141 min'),

new Movie('Harry Potter e il calice di fuoco', 'hp4.jpg', 'Chris Columbus', 'David Heyman', 'Steven Kloves', 'John Williams', 'Warner Bros.','2005','157 min' ),

new Movie('Harry Potter e l ordine della fenice', 'hp5.jpg', 'Chris Columbus', 'David Heyman', 'Steven Kloves', 'John Williams', 'Warner Bros.','2007','137 min'),

new Movie('Harry Potter e il principe mezzosangue', 'hp6.webp', 'Chris Columbus', 'David Heyman', 'Steven Kloves', 'John Williams', 'Warner Bros.','2009','153 min' ),

new Movie('Harry Potter e i doni della morte: Parte I', 'hp7.webp', 'Chris Columbus', 'David Heyman', 'Steven Kloves', 'John Williams', 'Warner Bros.','2010','146 min'),

new Movie('Harry Potter e  e i doni della morte: Parte II', 'hp8.webp', 'Chris Columbus', 'David Heyman', 'Steven Kloves', 'John Williams', 'Warner Bros.','2011','130 min' )
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

<div class="container-cards">
  <?php foreach ($movies as $movie): ?>
  <div class="card">
    
    <div class="container-text">
      <h1><?php echo $movie -> get_title()?></h1>
    </div>
    
    <div class="container-img">
      <img src="<?php echo $movie -> get_image() ?>" alt="copertina film">
    </div>
    
    <ul>
      <li><?php echo 'Regia:'. ' ' . $movie -> directing ?></li>
      <li><?php echo 'Produzione:'. ' ' . $movie -> direction ?></li>
      <li><?php echo 'Sceneggiatura:'. ' ' . $movie -> production ?></li>
      <li><?php echo 'Musiche:'. ' ' . $movie -> musics ?></li>
      <li><?php echo 'Distribuito da:'. ' ' . $movie -> distribution ?></li>
      <li><?php echo 'Rilascio:'. ' ' . $movie -> release ?></li>
      <li><?php echo 'Durata:'. ' ' . $movie -> duration ?></li>
    </ul>
    
  </div>
  <?php endforeach; ?>

</div>

</body>
</html>