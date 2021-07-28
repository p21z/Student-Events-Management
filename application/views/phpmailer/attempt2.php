<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


  // Include autoload.php file
  require 'vendor/autoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

    try {
        //Server settings
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = '21staltego@gmail.com';
      // Gmail Password
      $mail->Password = 'dondavewin1';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('21staltego@gmail.com');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('mendozamarie0315@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'jadfgdfg';
      $mail->Body = "<h3>Aku</h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thank you! for contacting us, We`ll get back to you soon!</h5>
                </div>';
      echo "nenam";
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
    echo $output;

?>