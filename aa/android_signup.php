<?php

include 'dbconfig.php';

 $con = mysqli_connect($servername,$username,$password,$dbname);
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $hashed_password = password_hash($password, PASSWORD_DEFAULT); 
 $check_email = $con->query("SELECT email FROM tb1_user WHERE email='$email'");
	$count=$check_email->num_rows;
	if ($count==0) {
$Sql_Query = "insert into tb1_user (name,email,password) values ('$name','$email','$password')";
 if(mysqli_query($con,$Sql_Query)){
 echo 'Data Inserted Successfully';
 }
 else{
 
 echo 'Try Again';
 
 }}
 mysqli_close($con);
?>
