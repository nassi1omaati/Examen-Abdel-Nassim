<?php session_start(); // Start or resume the session ?>
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
        <li><a class="category" href="over_ons.php">over ons</a></li>
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
 <?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
</head>
<body>
    <h2>Shopping Cart</h2>

    <?php
    // Check if the product is added to the cart
    if (isset($_POST['product_id'])) {
        $productId = $_POST['product_id'];

        // Check if the product is already in the cart
        if (!isset($_SESSION['cart'][$productId])) {
            // If not, add it to the cart with a quantity of 1
            $_SESSION['cart'][$productId] = array("id" => $productId, "quantity" => 1);
        } else {
            // If already in the cart, increase the quantity
            $_SESSION['cart'][$productId]['quantity']++;
        }
    }

    // Display the items in the cart
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            echo '<div>';
            echo '<p>Product ID: ' . $item['id'] . '</p>';
            echo '<p>Quantity: ' . $item['quantity'] . '</p>';
            echo '</div>';
        }
    } else {
        echo '<p>Your cart is empty.</p>';
    }
    ?>

    <p><a href="producten.php">Back to Products</a></p>
</body>
</html>
