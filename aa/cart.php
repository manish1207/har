<?php
$pageTitle="HarSATGuru Lab|CART";
?>

<?php
session_start();
include_once 'inc/dbconnect.php';
include_once 'inc/test_des_db.php';
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

<body> 
	<!---->
	
	<div class="container">
			<div class="shoes-grid">
<div class="banner-off1">
		<h3><b>CART </b></h3>
	  		</div><div class="col-md-6 con-sed-grid ">
			<center>
			<b>	
	 <table>
	 <tr>
	 <th>


<?php 
if(isset($_POST['deletetest'])) {
$aa = strip_tags($_POST['test']);

$check_test = $conn->query("SELECT test_i FROM test WHERE test_i='$aa'");
	$count=$check_test->num_rows;
	
	if ($count==0) {
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Enter Valid Booking ID !
					</div>";	
}
else
{
$sql = "DELETE FROM test WHERE test_i=$aa";
if ($conn->query($sql) === TRUE) {

 $msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Test Deleted !
					</div>";	 
header("refresh: 0;");
}
$conn->close();
}}
?>

	 <?php
	
$sql=" SELECT a.test_id,a.test_i, b.tests_id, b.test_name, b.test_price
FROM test a, tests b WHERE a.test_id = b.tests_id and a.user_id=$a";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

	
    while($row = $result->fetch_assoc()) {
		
echo "Test Name: " . $row["test_name"].  "<br>";
echo "Test Price:  " . $row["test_price"].  "<br>";
echo "Test ID:  " . $row["test_id"].  "<br>";
echo "Booking ID:  " . $row["test_i"].  "<br>";
echo "</br>";

    }
} else {
    echo "0 results";
}
$conn->close();
	 
?></b>

</th>
</tr>
</table>
	   </center>
								</div>
	  		     	<div> </br></br></br></br></br></br></br></br></br></br></br></br></br>
								<form method="post">
								
						 <span><b>Want to delete any test? Enter test booking id here and submit.</b> <label></label></span>
						 <input type="text" name="test"> 
								<button type="submit" name="deletetest">Submit</button>
								</form>
								</br></br>
								<a href="login.php">
							<span class="on-get">Continue </span>
						   		     	</a></div>
</div>
							
   
				</div>
	   		    <div class="clearfix"> </div>        	         
		</div>
	

	<!---->
	<?php include('inc/footer.php');?>
</body>
</html>
