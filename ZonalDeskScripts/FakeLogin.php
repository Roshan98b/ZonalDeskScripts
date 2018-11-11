<?php

require "FakeScript.php";
$EmailID = $_POST["emailID"];//"noobick@gmail.com";
$Password = $_POST["passWord"];//"rubick";
$mysqlQuery = "select UserType from credentials where EmailID like '$EmailID' and Password like '$Password';";
$result = mysqli_query($connect,$mysqlQuery);

if(mysqli_num_rows($result) > 0) {
	//echo "Login Success!";
	//$result=mysqli_store_result($connect);
	$row = mysqli_fetch_row($result);
	echo $row[0];

}
else {
	echo "Login Unsuccessful.";
}

?>