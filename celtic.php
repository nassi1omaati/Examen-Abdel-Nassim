<?php
include "dbconnect.php"
?>
<script src="index.js"></script>


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
        <img src="img/Logo1.png" width="250">
        </div>
        <nav>
            <ul>
            <li><a class="category" href="producten.php">Producten</a></li>
            <li><a class="category" href="#">over ons</a></li>
            <li><a class="category" href="#">contact</a></li>
            <li><a class="category" href="#">account</a></li>
            </ul>
        </nav>
        <img src="img/cart.png" width="30px" height="30px">
     </div>
   
            
        </div>
     </div>
    </div>
 </div>
 
 <div class="slideshow-container">
  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
    <img src="img/celtic1.avif" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
    <img src="img/celtic2.avif" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="img/celtic3.avif" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>




</body>

   
</html>   