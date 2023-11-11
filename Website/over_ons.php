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
        <li><a class="category" href="over_ons.php">Over ons</a></li>
        <li><a class="category" href="contact.php">Contact</a></li>
        <li><a class="category" href="#">Account</a></li>
        </ul>
    </nav>
    <a href="cart.php"><img src="img/cart.png"  width="30px" height="30px" ></a>
 </div>
 <section class="over-ons">
    <div class="over">
    <img src="img/over_ons.png" class="foto">
      <div class="text">
        <h2>Over ons</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus ad sed harum itaque ullam enim quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero atque amet corporis! Soluta illum facere consequuntur magni. 
             Ullam dolorem repudiandae cumque voluptate consequatur consectetur, eos provident necessitatibus reiciendis corrupti!</p>
        <div class="data">
        <a href="contact.php" class="button_over">Contacteren</a>
        </div>
      </div>
    </div>
  </section>
        
    </div>
 </div>
</div>
</div>

<!-- hier beginnen we aan de footer -->
<footer id="footer-main">
  <div class="footer-grid">
        <section class="footer-1">
          <h4>Diensten</h4>
            <a class="category" href="producten.php">Producten</a>
            <br>
            <a class="category" href="over_ons.php">Over ons </a>
            <br>
            <a class="category" href="#">Account</a>
            <br> 
            <a class="category" href="contact.php">Contact</a>
        </section>

       <section class="footer-2">
          <a href="index.php"> <img src="img/Logo1.png" width="150"></a>
        </section>

       <section class="footer-3">
         <h4>Informatie </h4>
           <a>Osdorpplein</a>
           <a>0612345678</a>
           <a>1012AB Amsterdam</a>
           <a>kiqqs@gmail.com</a>

       </section>

       
   </div>
  
</footer>
 
</body>

   
</html>   