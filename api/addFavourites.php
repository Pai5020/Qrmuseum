<?php

include("connection.php");

$uid = $_POST['uid'];
$itemId = $_POST['itemID'];

$sql ="INSERT INTO favourites_tbl (uid,itemid) VALUES ('$uid','$itemId')";

if(mysqli_query($con,$sql)){
	
	echo"success";
}
else{
	
	echo"failed";
}


?>