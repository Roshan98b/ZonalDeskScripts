<?php
//$to       = 'tm747177@gmail.com';
require 'vendor/autoload.php';

$to = $_POST["email"];
$OTP = $_POST["OTP"];

$mail = new PHPMailer;

$subject  = 'OTP for ZonalDesk Registration';
$message  = "Your OTP for registration is:- $OTP <br>Please do not share it with anyone.<br>OTP will expire in 30mins.<br> <br>Please do not reply to this email as it is automatically generated.";

$mail->From = "roshan98b@gmail.com";
$mail->FromName = "Roshan Badrinath";

//To address and name
$mail->addAddress($to); //Recipient name is optional

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $message;

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}


?>