<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$to = $_POST['email'];
$OTP = $_POST['OTP'];

$mail = new PHPMailer;

$subject  = 'OTP for ZonalDesk Registration';
$message  = "Your OTP for registration is:- $OTP <br>Please do not share it with anyone.<br>OTP will expire in 30mins.<br> <br>Please do not reply to this email as it is automatically generated.";

$mail->isSMTP(); 
$mail->SMTPDebug = 0; 
$mail->Host = "smtp.gmail.com";
$mail->Username = "aaroncoc0010@gmail.com";                 
$mail->Password = "biztime12";
$mail->setFrom('aaroncoc0010@gmail.com');  
$mail->Port =  587; 
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
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