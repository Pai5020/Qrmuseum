<?php

include("connection.php");

$uid = $_POST['uid'];
$name = $_POST['name'];
$number = $_POST['number'];
$address = $_POST['address'];
$email = $_POST['email'];


$sql = "UPDATE user_tbl SET name='$name', number='$number',address='$address',
email='$email' WHERE id='$uid'";

//echo $sql;
        
 if(mysqli_query($con,$sql)){
    echo "Successfully Updated";
}else{
	echo"Failed to Update Profile";
}

?>