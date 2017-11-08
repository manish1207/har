<?php
session_start();
require_once 'inc/dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: login.php");
	exit;
}

?>
<?php
$pageTitle="HarSATGuru Lab | Home";
?>
<!DOCTYPE html>
<html>
<?php include('inc/head.php'); ?>
<body> 
	<?php include('inc/header.php'); ?>
	<!---->
		<div class="container">

<?php include('inc/sub-cat.php');?>
<?php include('inc/home.php'); ?>

	   		    <div class="clearfix"> </div>        	         
		</div>
<!---->
	<?php include('inc/footer.php'); ?>
</body>
</html>