<?php

$dbName = "customercredentials";
$mysqlUsername = "root";
$mysqlPassword = "";
$serverName = "localhost";

$connect = mysqli_connect($serverName,$mysqlUsername,$mysqlPassword,$dbName);

/*if($connect) {
	echo "Connection successful!";
}
else {
	echo "Connection unsuccessful!";
}
*/


?>