<?php 
//db credentials
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME','reactjscrud');

//connect to the database
function connect(){
	$connect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if(mysqli_connect_errno($connect)){
		die("Failed to connect:".mysqli_connect_error());
	}

	mysqli_set_charset($connect, "utf8");

	return $connect;
}

$con = connect();



 ?>