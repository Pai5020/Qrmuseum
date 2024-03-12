<?php
 
include("connection.php");

$uid = $_REQUEST['uid'];
//$uid="1";

$sql = "SELECT * FROM favourites_tbl WHERE uid ='$uid'";
$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) > 0){

	while($row = mysqli_fetch_assoc($result)){
		$sql2 = "Select * from item_tbl WHERE id ='$row[itemid]'";
       $result2 = mysqli_query($con,$sql2);

	    while($roww = mysqli_fetch_assoc($result2))
	     {
	     	$data['data'][] = array('id'=>$row['id'],'itemId'=>$roww['id'],'name'=>$roww['name'],'image' => $roww['image']);
		    
	     }
	     
		}

		echo json_encode($data);


}
else{
	echo "failed";
}

?>