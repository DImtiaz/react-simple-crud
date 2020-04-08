<?php 
require 'connect.php';

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata)){
	$request = json_decode($postdata);

	print_r($request);

	//sanitize
	$first_name = $request->first_name;
	$last_name = $request->last_name;
	$email = $request->email;

	$sql = "INSERT INTO `students`(`first_name`,`last_name`,`email`) VALUES ('$first_name','$last_name', '$email') ";

	if(mysqli_query($con, $sql)){
		http_response_code(201);
	}
	else{
		http_response_code(422);
	}

}




 ?>