<?php
$servername = "localhost";
$username = "root";
$password = "";
$DBname = "BloodDonationSystem";

$con = mysqli_connect($servername,$username,$password,$DBname);

if(!($con)){
	die("Connection failed: ".mysqli_connect_error());
	exit();
}


?>