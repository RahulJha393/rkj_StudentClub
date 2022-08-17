<?php

$username = "root";
$password = "";
$server = "localhost";
$db = 'dyna';

$con=mysqli_connect($server,$username,$password,$db);

if($con){
	?>

	 <!-- <script>alert("Connection succsesful");</script> -->
	<?php
}else{
	// echo "not connected";
	die("No connection".mysqli_connect_error());
}
?>
