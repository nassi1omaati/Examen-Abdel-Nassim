<?php
include "dbconnect.php";
session_start(); // Start or resume the session
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
            <li><a class="category" href="#">over ons</a></li>
            <li><a class="category" href="contact.php">contact</a></li>
            <li><a class="category" href="#">account</a></li>
            </ul>
        </nav>
        <a href="cart.php"><img src="img/cart.png"  width="30px" height="30px" ></a>
     </div>
   
            
        </div>
     </div>
    </div>
 </div>
 
 <div class="slideshow-container">
  <!-- Full-width images with number and caption text -->
  <div class="mySlides" style="display: block;">
    <div class="numbertext">1 / 3</div>
    <img src="img/celtic1.avif" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
    <img src="img/celtic2.avif" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="img/celtic3.avif" style="width:100%">
  </div>

  <!-- Next and previous buttons - keep them for navigation if needed -->
  <a class="prev" onclick="plusSlides(-1)" style="background-color:gray">&#10094; </a>
  <a class="next" onclick="plusSlides(1)"style="background-color:gray">&#10095;</a>
</div>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
</head>
<body>
    <h2>Product Listing</h2>

    <?php
    // Mock product details
    $product1 = array("id" => 1, "name" => "Celtic FC Thuisshirt", "price" => 49.99);
    $product2 = array("id" => 2, "name" => "Another Product", "price" => 29.99);

    $products = array($product1, $product2);

    foreach ($products as $product) {
        echo '<div>';
        echo '<h3>' . $product['name'] . '</h3>';
        echo '<p>Price: $' . $product['price'] . '</p>';
        echo '<form action="cart.php" method="post">';
        echo '<input type="hidden" name="product_id" value="' . $product['id'] . '">';
        echo '<input type="submit" value="Add to Cart">';
        echo '</form>';
        echo '</div>';
    }
    ?>
</body>
</html>



<div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            beschrijving
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
          EEN OPVALLEND CELTIC FC THUISSHIRT DAT JOUW PASSIE WEERSPIEGELT, GEMAAKT MET GERECYCLED MATERIAAL.
De hoofdingang van Celtic Park, gekroond met dat kenmerkende glas-in-loodraam, heeft in de loop der jaren vele Celtic FC-legendes in 'het paradijs' verwelkomd. Tegenwoordig is dat bijzondere glaswerk binnen in het stadion te vinden, en vormt het de inspiratie voor het design van de strepen op dit adidas thuisshirt. Het shirt houdt je comfortabel met vochtafvoerend AEROREADY en zet met een geborduurde badge en een Celtic-logo je voetbalpassie in de schijnwerpers.

Dit met 100% gerecyclede materialen gemaakte product vertegenwoordigt slechts één van onze oplossingen om te helpen een einde te maken aan plastic afval.
            
            </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            sociaal-cultureel
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"> </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            sociaaleconomisch
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"> </div>
        </div>
      </div>
    </div>
    



</body>

   
</html>   