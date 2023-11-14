<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="wachtwoord" placeholder="Wachtwoord">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="login" name="submit">
            </div>
        </form>
    </div>
</body>

</html>

<?php
include 'includes/database.php';
include 'includes/functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ontvang de ingevoerde gegevens van het formulier
    $email = $_POST["email"];
    $password = $_POST["wachtwoord"];

    // echo($password);

    // Haal gebruikersgegevens op uit de database
    $sql = "SELECT wachtwoord FROM gebruiker WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (password_verify($password, $user["wachtwoord"])) {
        header("Location: ./index.php"); // Stuur gebruiker naar welkomstpagina of een andere beveiligde pagina
        exit();
    } else {
        echo "Ongeldige e-mail of wachtwoord.";
    }
}
?>