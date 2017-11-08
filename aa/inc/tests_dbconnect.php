<?php
$link = mysqli_connect("localhost", "root", "", "mysqli_login");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
