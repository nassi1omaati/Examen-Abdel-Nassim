<?php
include "dbconnect.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiqqs</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700&display=swap" rel="stylesheet">
    
</head>

<body>
    <div class="header">

    <div class="container">
    <div class="navbar">
        <div class="logo1">
       <a href="index.php"> <img src="img/Logo1.png" width="250"></a>
        </div>
        <nav>
            <ul>
            <li><a class="category" href="producten.php">Producten</a></li>
            <li><a class="category" href="#">Over ons</a></li>
            <li><a class="category" href="#">Contact</a></li>
            <li><a class="category" href="#">Account</a></li>
            </ul>
        </nav>
        <img src="img/cart.png" width="30px" height="30px">
     </div>
     <div class="row">
        <div class="col-2">
           <h1>Voetbal van de grond af! <br>een nieuwe wereld!</h1> 
           <P>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
           <a href="producten.php"class="button">bekijk collectie</a>
        </div>
        <div class="col-2">
        </div>
            <img id="speler" src="img/voetballer.png">
        </div>
     </div>
    </div>
 </div>

<!-- hier beginnen we aan de footer -->
<div class="footer">
    <div class="container">
        <div class="row">
<div class="footerline">
    <hr>
</div>  
    <div class="footer1">
        <h1>Links</h1>

    <div class="footer2">
    <h1>locatie</h1>
    <ul>
            <li>Osdorpplein</li>
            <li>0612345678</li>
            <li>postcode 1012AB</li>
            <li>Amsterdam</li>
    </ul>
        </div>
        <div class="footer3">
        <a href="index.php"> <img src="img/Logo1.png" width="150"></a>
        </div>
    </div>
 
</body>

   
</html>   