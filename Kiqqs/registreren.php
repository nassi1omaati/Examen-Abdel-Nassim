
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <style>
        /* Add some basic styling for a more appealing form */
        body {
            font-family: Arial, sans-serif;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="registreren.php" method="post">
        <label for="naam">Naam:</label>
        <input type="text" name="naam" required>

        <label for="achternaam">Achternaam:</label>
        <input type="text" name="achternaam" required>

        <?php if(isset($error_message)): ?>
            <div style="color: red;"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" name="wachtwoord" required>

        <label for="telefoon">Telefoon:</label>
        <input type="number" name="telefoon" required>

        <!-- True or false radio button for accepting email commercials -->
        <label for="accept_commercials">Accepteer e-mail commercials:</label>
        <input type="radio" name="accept_commercials" value="1" required> Ja
        <input type="radio" name="accept_commercials" value="0" required> Nee

        <input type="submit" value="Registreren">
    </form>
</body>
</html>

<?php
include('./includes/database.php');
include "includes/functions.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);
    $telefoon = $_POST['telefoon'];
    

    $emailNum = "SELECT * FROM gebruiker WHERE email = '$email'";

    $getEmailNum = getData($emailNum, 'fetch');

    if ($getEmailNum){
       die("email is al ingebruik");
    }
            try {
                // Gebruik de PDO-verbinding uit de database.php-file
                $sql = "INSERT INTO gebruiker (naam, achternaam, email, wachtwoord, telefoon) 
                VALUES (:naam, :achternaam, :email, :wachtwoord, :telefoon)";
        
                $stmt = $conn->prepare($sql); // $conn is de PDO-verbinding uit de database.php-file
                $stmt->bindParam(':naam', $naam);
                $stmt->bindParam(':achternaam', $achternaam);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':wachtwoord', $wachtwoord);
                $stmt->bindParam(':telefoon', $telefoon);
                $stmt->execute();
                echo "Registratie succesvol!";
            }catch (PDOException $e) {
                echo "Fout bij registratie: " . $e->getMessage(); // Geeft de algemene foutmelding van PDO terug. catch zet je achter try 
            }
        
        $mail = new PHPMailer(true);
 
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Port = 2525;
        $mail->Username = '9099e086121c95'; // Replace with your Mailtrap username
        $mail->Password = '871ba33a0a5aab'; // Replace with your Mailtrap password
        // Recipients
        $mail->setFrom('infokiqqs@gmail.com', 'Your Name');
        $mail->addAddress($email); // Add recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Uw accout is aangemaakt';
        $mail->Body    ="Welkom  $naam $achternaam wij zijn blij uw al lid te hebben.";
    
 
        $mail->send();
    
         if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
            echo "Uw bericht is verzonden";   
            header("refresh: 1; url=./index.php");
            exit();
         }
}
?>