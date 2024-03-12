<?php

include("connection.php");

$itemId = $_POST['itemId'];

$del ="DELETE  FROM favourites_tbl WHERE id='$itemId'";

if(mysqli_query($con,$del)){
	
	echo"success";
}
else{
	
	echo"failed";
}


?>