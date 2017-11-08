<?php
$pageTitle="HarSATGuru Lab|Blood Urea Test";
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
<body> <?php


$sql = "INSERT INTO test (test_id,user_id,test_i) VALUES ('1018',$a,'1018$a')";
if(mysqli_query($link, $sql)){
    echo "Blood Urea Test has been booked successfully";
} else{
    echo "				Already Booked";
}
mysqli_close($link);
?></br></br></br>
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
</script></br>
</br></br>
<img src="img\loading.gif"/>
</center>
</body>
</html> 	



