<?php
//de include om connectie te maken met de database
include 'includes/database.php';
include 'includes/functions.php';
//functions.php

//de header van je HTML pagina
include "header.php"; 
//filter.php
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kiqqs</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="header">

    <div class="container">
      <div class="navbar">
        <div class="logo1">
        </div>
      <div class="row">
        <div class="col-2">
          <h1>Voetbal van de grond af! <br>een nieuwe wereld!</h1>
          <P>Sinds 2022 levert kiqqs kwaliteit.</P>
          <a href="service.php" class="button">Onze services</a>
        </div>
        <div class="col-2">
        </div>
        <img id="veld" src="images/voetbalveld.png">

        <img id="veld" src="images/voetbalveld.png">
      </div>
    </div>
  </div>
  </div>
  <?php
 include "footer.php";
?>


</body>


</html>