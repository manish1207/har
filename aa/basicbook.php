<?php
$pageTitle="HarSATGuru Lab|Basic Test Package";
?>
<?php
 
 ?>
<?php
session_start();
include_once 'inc/dbconnect.php';
include_once 'inc/tests_dbconnect.php';
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
<?php include('inc/head.php'); ?>
<?php include('inc/head1.php'); ?>
<center>
<b></br>
</br>
<?php include('inc/head.php');?>
<body> 
<?php
$sql = "INSERT INTO test (test_id,user_id,test_i) VALUES ('1002',$a,'1002$a')";
if(mysqli_query($link, $sql)){
    echo "Basic Test Package has been booked successfully";
} 
else{
    echo "				Already Booked";
	echo "</br>";echo "</br>";
}

mysqli_close($link);
?></br></br></br></br>

	Window will be  automatically  close after  <span id="count">5</span> seconds...

<script type="text/javascript">
window.onload = function(){
(function(){
  var counter = 5;

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
<img src="img\loading.gif"/>
</center>
</body>
</html>

