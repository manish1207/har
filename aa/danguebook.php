<?php
$pageTitle="HarSATGuru Lab|Dangue Test";
?>
<?php
  ?>
<?php
session_start();
include_once 'inc/dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index	.php");

}
$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$a=$_SESSION['userSession'];
$userRow=$query->fetch_array();
$DBcon->close();
?>

<!DOCTYPE html>
<html>
<center>
<?php include('inc/head.php'); ?>
<?php include('inc/head1.php'); ?>
<b></br>
</br>
<?php include('inc/head.php');?>
<body> <?php
$link = mysqli_connect("mysql5016.smarterasp.net", "a22852_manish", "mani9368216811", "db_a22852_manish");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO test (test_id,user_id,test_i) VALUES ('1012',$a,'1012$a')";
if(mysqli_query($link, $sql)){
    echo "Dangue Test has been booked successfully";
} 
else{
    echo "				Already Booked";
	echo "</br>";echo "</br>";
}

mysqli_close($link);
?></br></br></br></br>

	Window will be  automatically  close after  <span id="count">10</span> seconds...

<script type="text/javascript">
window.onload = function(){
(function(){
  var counter = 10;

  setInterval(function() {
    counter--;
    if (counter >= 0) {
      span = document.getElementById("count");
      span.innerHTML = counter;
    }
    // Display 'counter' wherever you want to display it.
    if (counter === 0) {
window.close();    
	}

  }, 1000);

})();

}
</script></b></br></br>
<img src="img\loading.gif"/></center>
</body>
</html> 	

