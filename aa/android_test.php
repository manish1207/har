<?php
session_start();
include("android_login.php");
require_once 'dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
$test= $_POST['test'];
$email= $_POST['email'];
$link = mysqli_connect("mysql5016.smarterasp.net", "a22852_manish", "mani9368216811", "db_a22852_manish");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
	$sql = "INSERT INTO test (test_id,user_id,test_i) VALUES ('$test','$a','$email')";
	if(mysqli_query($link, $sql)){
   echo "Booked";
	}
	else{
		echo "Already Booked";
	}
	mysqli_close($link);
}
	?>
