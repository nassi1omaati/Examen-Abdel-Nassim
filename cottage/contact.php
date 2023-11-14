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
                <form action="/action_page.php">
                    <label for="fname">Voornaam</label>
                    <input type="text" id="fname" name="firstname" placeholder="Voornaam...">

                    <label for="lname">Achternaam</label>
                    <input type="text" id="lname" name="lastname" placeholder="Achternaam...">

                    <label for="lname">E-mailadres</label>
                    <input type="text" id="lname" name="lastname" placeholder="E-mailadres...">

                    <label for="lname">Telefoonnummer</label>
                    <input type="text" id="lname" name="lastname" placeholder="Telefoonnummer">

                    <label for="country">voornaamwoorden</label>
                    <select id="country" name="country">
                        <option value="australia">Hij/Hem</option>
                        <option value="canada">Zij/Haar</option>
                        <option value="usa">Saddam/Hussein</option>
                    </select>

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