<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '21staltego@gmail.com';                     //SMTP username
    $mail->Password   = 'testing123Q!';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('21staltego@gmail.com', 'Student Events Management');
    $mail->addAddress($_SESSION['email']);     //Add a recipient

    $body ="<div style='background-color: #f5f5f5; width: 80%; margin: 20px; color: #000'><h2 style='padding: 20px; color: #000'>Hello!</h2><strong  style='padding-left: 20px; color: #000'>Your new password is:</strong><h1 style='padding-left: 20px; padding-bottom: 40px;'>".$_SESSION['new_pass']."</h1></p></div>";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'CHANGE PASSWORD!';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
