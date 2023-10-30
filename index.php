<?php
include "dbconnect.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vapor FC</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>


    <header>
        <h2></h2>
        <a class="logo" href="index.php">Vapor FC</a> 
        <a class="category" href="kicksen.html">Voetbalschoenen</a>
        <a class="category" href="#">Categorie 2</a>
        <a class="category" href="#">Categorie 3</a>
        <a class="category" href="#">Categorie 4</a>
        <a class="category" href="#">Categorie 5</a>
        <a class="category" href="#">Categorie 6</a>
        
    </header>

    <footer>
        <a class="category1" href="#">&#9990; </a>
        <a class="category1" href="#">&#9993;</a>
        <a class="category1" href="https://youtu.be/39XR4EXFz5Y?si=62oOaapedi_ytya8">&#9906; 3</a>
        <a class="category1" href="#">Categorie 4</a>
    </footer>
</body>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img_nature_wide.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
</html>