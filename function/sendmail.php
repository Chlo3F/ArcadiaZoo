<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'password.php';

if(isset($_POST['submitContact']))
{
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['email'];


//Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();  
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
   
    $mail->Username   = '$email_address';                     //SMTP username
    $mail->Password   = '$email_password';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            // ENCRYPTION_SMTPS 465 Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('$email_address', 'Arcadia Zoo');
    $mail->addAddress('$email_address', 'Arcadia Zoo');
     
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nouveau message - Arcadia Zoo Form';
    $mail->Body    = '<h3>Nouveau message!</h3>
    <h4>Subject: '.$subject.' </h4>
    <h4>Message:'.$message.' </h4>
    <h4>Email: '.$email.'</h4>
    ';
    

    if($mail->send())
    {
        $_SESSION['status'] ="Merci de nous avoir contacté - Arcadia Zoo";
        header("Location: {$_SERVER["HTTP_REFERER"]}");
        exit(0);
    }
    else{
        $_SESSION['status'] ="Votre message n'a pas pu être envoyé. Mailer Error: {$mail->ErrorInfo}";
        header("Location: {$_SERVER["HTTP_REFERER"]}");
        exit(0);
    }
    

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
} else {
header('Location: ../pages/contact.php');
exit(0);
}