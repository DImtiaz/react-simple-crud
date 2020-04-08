<?php 
require 'connect.php';

$postdata = file_get_contents("php://input");

if(isset($postdata) && !empty($postdata)){
	$request = json_decode($postdata);


	$id = $_GET['id'];
	$first_name = $request->first_name;
	$last_name = $request->last_name;
	$email = $request->email;

	$sql = "UPDATE `students` SET `first_name` = '$first_name', `last_name` = '$last_name', `email` = '$email' WHERE `id` = '$id' LIMIT 1";

	if(mysqli_query($con, $sql)){
		http_response_code(204);
	}
	else{
		return http_response_code(422);
	}


}





 ?>