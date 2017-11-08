<?php
session_start();
include_once 'inc/dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

$DBcon->close();

?>
<?php
$pageTitle="HarSATGuru Lab | Home";
?>
<!DOCTYPE html>
<html>
<?php include('inc/head.php'); ?>
<body> 
	<?php include('inc/head1.php'); ?>
	
		<! -- This head1.php will execute when user will loged in-->

	<div class="container">

<?php include('inc/sub-cat.php');?>
<?php include('inc/home.php'); 
              
?>

	   		    <div class="clearfix"> </div>        	         
		</div>
	
	
	<?php include('inc/footer.php'); ?>
</body></html>
