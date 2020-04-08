<?php 
require 'connect.php';
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
$id = $request->id;

$sql = "DELETE FROM `students` WHERE `id` = '$id' LIMIT 1";

if(mysqli_query($con, $sql)){
	http_response_code(204);
}
else{
	http_response_code(422);
}



 ?>