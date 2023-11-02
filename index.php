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
     <div class="row">
        <div class="col-2">
           <h1>Voetbal van de grond af! <br>een nieuwe wereld!</h1> 
           <P>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry.</P>
           <a href=""class="button">bekijk collectie</a>
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
                <div class="footer-col-1">
                    <h2>Kiqqs</h2>
                    <p>Voetbal van de grond af! een nieuwe wereld!</p>
                </div>
                <div class="footer-col-2">
                    <img src="img/logo1.png">
                    <p>Voetbal van de grond af! een nieuwe wereld!</p>
                </div>
                <div class="footer-col-3">
                    <h2>Kiqqs</h2>
                    <ul>
                       <li>Algemene voorwaarden</li> 
                       <li>Privacy verklaring</li> 
                       <li>Home</li> 
                       <li>producten</li> 
                       <li>over ons</li>
                       <li>contact</li> 
 

                    </ul>
                </div>
            </div>
        </div>
    </div>


</body>

   
</html>   