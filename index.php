<?php

require_once __DIR__ . "/database.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>NBA</title>
</head>
<body>

 <header>
   
 </header>

 <?php
 foreach($matches as $match){ ?>

    <div class="match-container">
    <div class="text-team">
      <h3> <?php echo $match['home_team']['city'] . ' ' . $match['home_team']['nickname'] ?> </h3>
    </div>
    <div class="logo-team">
      <img src= "img/<?php echo $match['home_team']['logo']?>" alt="logo">
    </div>
    <div class="match-result">
      <h2> <?php echo $match['home_team']['score']?> </h2>
      <div class="match-info">
        <h4> <?php echo $match['arena']?> </h4>
        <p> <?php echo $match['city']?></p>
      </div>
      <h2><?php echo $match['away_team']['score']?></h2>
    </div>
    <div class="logo-team">
    <img src= "img/<?php echo $match['away_team']['logo']?>" alt="logo">
    </div>
    <div class="text-team">
      <h3> <?php echo $match['home_team']['city'] . ' ' . $match['home_team']['nickname'] ?> </h3>
    </div>
 </div>

 <?php } ?>



  

</body>
</html>