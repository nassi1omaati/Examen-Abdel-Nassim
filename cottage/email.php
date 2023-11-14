<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

include "includes/database.php";
include "includes/functions.php";
include "header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pronouns = $_POST['country'];
    $subject = $_POST['subject'];

    // Your database insert code (use prepared statements to prevent SQL injection)

    // $stmt = $conn->prepare("INSERT INTO your_table (firstname, lastname, email, phone, pronouns, subject) VALUES (?, ?, ?, ?, ?, ?)")

          try{  // Create PHPMailer instance
      
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
            $mail->Subject = 'Password Reset Instructions';
            $mail->Body    ="Er is zojuist een aanvraag gedaan door  $firstname $lastname $phone.  </a> om contact op te nemen. Het gaat over:<br> $subject";
        
     
            $mail->send();
        
             if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
             } else {
                echo "Uw bericht is verzonden";   
                header("refresh: 4; url=./index.php");
                exit();
             }

        }
            catch (Exception $e) {
                echo "Mailer Error: " . $mail->ErrorInfo;
        }

        }
    


include "footer.php";
?>
