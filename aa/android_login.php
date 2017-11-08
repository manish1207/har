<?php
session_start();
require_once 'dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($DBcon,$_POST['email']);
      $mypassword = mysqli_real_escape_string($DBcon,$_POST['password']); 
      $sql = "SELECT user_id FROM tbl_users WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($DBcon,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1){
$a=email;
}


 if($count == 1) {
       echo "Data Matched";
}else {

 echo "Invalid Username or Password Please Try Again";
}
   }
	
?>

