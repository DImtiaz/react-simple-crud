<?php 
require 'connect.php';
error_reporting(E_ERROR);
$students = [];
$sql = "SELECT * FROM `students`";

if($result = mysqli_query($con, $sql)){
	$cr = 0;
	while($row = mysqli_fetch_assoc($result)){
		$students[$cr]['id'] = $row['id'];
		$students[$cr]['first_name'] = $row['first_name'];
		$students[$cr]['last_name'] = $row['last_name'];
		$students[$cr]['email'] = $row['email'];
		$cr++;
	}

	echo json_encode($students);

}
else{
	http_response_code(404);
}












 ?>