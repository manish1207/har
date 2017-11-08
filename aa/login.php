<?php
session_start();
require_once 'inc/dbconnect.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: home.php");
	exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($DBcon,$_POST['email']);
      $mypassword = mysqli_real_escape_string($DBcon,$_POST['password']); 
      
      $sql = "SELECT user_id FROM tbl_users WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($DBcon,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      		
      if($count == 1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: index.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'>&nbsp; Invalid Username or Password !</span> 
				</div>";
	}
	$DBcon->close();
	
}
?>
<?php
$pageTitle="HarSATGuru Lab|Login";
?>
<!DOCTYPE html>
<html>
<?php include('inc/head.php'); ?>
<body> 
	<?php include('inc/header.php'); ?>
	<!---->
	<div class="container">
		
      	   <div class="account_grid">
		   				    
			   <div class=" login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>If you have an account with us, please log in.</p>
				<form method="post" >
				  <div>
					<span>Mobile no <label>*</label></span>
					<input type="text" name="email" required> 
				  </div>
				  				     <div class="  register-bottom-grid">
						   

				  <div class="login-left">
					<span>Password <label>*</label></span>
					<input type="password" name="password" required> 
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
					<button type="submit" name="btn-login">Login</button>
			    </form>
			   </div>	</div>
			   
			   <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
			    <div class=" login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with us, you will be able to move through the test booking process faster in your account and more.</p>
				 <a class="acount-btn" href="register.php">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>

<?php include('inc/sub-cat.php');?>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->
	<?php include('inc/footer.php'); ?>
</body>
</html>
