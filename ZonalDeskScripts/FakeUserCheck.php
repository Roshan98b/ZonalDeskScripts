<?php

    require "FakeScript.php";
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    $mysqlQuery = "select * from credentials where EmailID like '$email' or Phone like '$phone';";
    $result = mysqli_query($connect,$mysqlQuery);
    if(mysqli_num_rows($result) > 0) {
        echo "No";
    }
    else{
        echo "Yes";
    }

?>