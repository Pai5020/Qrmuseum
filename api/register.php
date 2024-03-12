<?php

include("connection.php");

$name = $_POST['name'];
$number = $_POST['number'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql ="INSERT INTO user_tbl (name,number,address,email,password) VALUES ('$name','$number','$address','$email','$password')";

if(mysqli_query($con,$sql)){
	
	echo"success";
}
else{
	
	echo"failed";
}


?>