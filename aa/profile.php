<?php
$pageTitle="HarSATGuru Lab|Home";
?>

<?php
session_start();
include_once 'inc/dbconnect.php';

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();
?>
<!DOCTYPE html>
<html>
<?php include('inc/head.php'); ?>
<?php include('inc/head1.php'); ?>

<body> 
				<!--	<center>	
			<table style="width:100%" align="center" >
  <tr>
    <th style="align">Name</th>
    <th>Email</th> 

  </tr>
  <tr>
    <td><?php echo $userRow['username']; ?></td>
    <td><?php echo $userRow['email']; ?></td> 
  </tr>
</table>		</center>		-->
	<!----></br></br></br></br>
	<center><b>Name</b> - <label style="color:#FF3366"><?php echo $userRow['username']; ?></label></br></br>
		
			<b> Age : </b> <label style="color:#FF3366"><?php echo $userRow['age']; ?></label></br></br>
		<b> Sex  :</b> <label style="color:#FF3366"><?php echo $userRow['sex']; ?></label>
		</br></br><b>Email </b>- <label style="color:#FF3366"><u><?php echo $userRow['email']; ?></u></label></br></br>
	
		<a href="report.php"><span class="on-get">Download Report</span>
		</a></center>
	<div class="container">
				    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->
	<?php include('inc/footer.php'); ?>
</body>
</html>
