<?php
include "includes/database.php";
include "includes/functions.php";
include "header.php";
// include "menu-1.php";
// include 'style.css'; 
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
    <h3 class="form">Contact Form</h3>

    <div class="container">
        <form action="./email.php" method="post">
            <label for="fname">Voornaam</label>
            <input type="text" id="fname" name="firstname" placeholder="Voornaam...">

            <label for="lname">Achternaam</label>
            <input type="text" id="lname" name="lastname" placeholder="Achternaam...">

            <label for="lname">E-mailadres</label>
            <input type="text" id="lname" name="email" placeholder="E-mailadres...">

            <label for="lname">Telefoonnummer</label>
            <input type="text" id="lname" name="phone" placeholder="Telefoonnummer">

            <label for="country">voornaamwoorden</label>
            <select id="country" name="country">
                <option value="australia">Hij/Hem</option>
                <option value="canada">Zij/Haar</option>
                <option value="usa">Saddam/Hussein</option>
            </select>
            <div class="center">
                <h1 id="captchaHeading">
                    Captcha Validator Using HTML, CSS and JavaScript
                </h1>

                <div id="captchaBackground">
                    <canvas id="captcha">captcha text</canvas>
                    <input id="textBox" type="text" name="text">

                    <div id="buttons">
                        <input id="submitButton" type="submit">
                        <button id="refreshButton" type="submit">Refresh</button>
                    </div>

                    <span id="output"></span>
                </div>
            </div>

            <script src="script.js"></script>
            <label for="subject">Onderwerp</label>
            <textarea id="subject" name="subject" placeholder="..." style="height:100px"></textarea>

            <input type="submit" value="Verzenden">
        </form>
    </div>

    </div>
    <?php
    include "footer.php";

    ?>


</body>


</html>