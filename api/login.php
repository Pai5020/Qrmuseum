<?php

include("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];


$sql ="Select * from user_tbl where email ='$email' and password ='$password'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result);
	$data[] = array('id' => $row['id']);
	echo json_encode($data);
}
else{
	echo "failed";
}
?>