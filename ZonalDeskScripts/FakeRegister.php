<?php

    require "FakeScript.php";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $mysqlQuery1 = "select * from credentials where EmailID like '$email' or Phone like '$phone';";
    $result1 = mysqli_query($connect,$mysqlQuery1);

    if(mysqli_num_rows($result1) > 0) {
        echo "Email ID or Phone number is already registered!";
    }

    else{
        $mySQLQuery2 = "insert into credentials(Name,Phone,EmailID,Password) values('$name','$phone','$email','$password');";
        $result2 = mysqli_query($connect,$mySQLQuery2);
        //echo "Registration Successful!";
        if($result2){
            echo "Registration Successful!";
        }
        else
            echo "Database Error: Registration failed!";
    }
?>