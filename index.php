<?php include 'datab.php'?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP_Basket_AR</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">

      <?php
      foreach ($arrayGiocatori as $key => $value) {
        ?>
        <div class="player">
          <h2> <?php echo "CODICE GIOCATORE: " . $value["codiceGiocatore"]; ?> </h2>
          <h3> <?php echo "PUNTI FATTI: " . $value["puntiFatti"]; ?> </h3>
          <h3> <?php echo "RIMBALZI: " . $value["rimbalzi"]; ?> </h3>
          <h3> <?php echo "FALLI: " . $value["falli"]; ?> </h3>
          <h3> <?php echo "TIRI DA 2 PUNTI: " . $value["tiri2"]; ?> </h3>
          <h3> <?php echo "TIRI DA 3 PUNTI: " . $value["tiri3"]; ?> </h3>
        </div> <?php
      }
      ?>
    </div>
  </body>
</html>
