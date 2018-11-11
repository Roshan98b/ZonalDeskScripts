<?php
//$to       = 'tm747177@gmail.com';
$to = $_POST["email"];
$OTP = $_POST["OTP"];

$subject  = 'OTP for ZonalDesk Registration';
$message  = "Your OTP for registration is:- $OTP <br>Please do not share it with anyone.<br>OTP will expire in 30mins.<br> <br>Please do not reply to this email as it is automatically generated.";
$headers  = 'From: [ZonalDeskBot' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($to, $subject, $message, $headers))
    echo "OTP has been sent to your email address.Please enter OTP(valid for 30 minutes)";
else
    echo "Error:Email not sent";
?>