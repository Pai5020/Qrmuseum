<?php

include("connection.php");

$itemId = $_REQUEST['itemId'];

//$itemId = "1";

 
$res=mysqli_query($con,"SELECT * from item_tbl WHERE id = '$itemId'");

	if(mysqli_num_rows($res)>0){

		while($row = mysqli_fetch_assoc($res))
		{
			$data['data'][]=$row;
		}

		echo json_encode($data);
		
	
	}	
	else{
		echo "Unsucessfull";
	}


mysqli_close($con);

?>