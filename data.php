<?php

include_once("Connection.php");
$phone=$_GET['phone'];
$query="SELECT * FROM data where phone='{$phone}'";

$result = mysqli_query($conn, $query);
while(($row = mysqli_fetch_assoc($result)) == true){
	$data[]=$row;
}
echo json_encode($data);


	
?>
