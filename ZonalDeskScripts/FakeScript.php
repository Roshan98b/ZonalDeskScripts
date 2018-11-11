<?php

$dbName = "ZonalDesk";
$mysqlUsername = "admin";
$mysqlPassword = "LXCEACZADQWPUTXZ";
$serverName = "sl-eu-gb-p00.dblayer.com:15556";

$connect = mysqli_connect($serverName,$mysqlUsername,$mysqlPassword,$dbName);

if($connect) {
	echo "Connection successful!";
}
else {
	echo "Connection unsuccessful!";
}



?>