<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: index.php");
}
require_once 'inc/dbconnect.php';
if(isset($_POST['btn-signup'])) 
{

	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	$uage   = strip_tags($_POST['age']);
	$usex   = strip_tags($_POST['sex']);

	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	$uage = $DBcon->real_escape_string($uage);
	$usex = $DBcon->real_escape_string($usex);

	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); 
	
	$check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		$query = "INSERT INTO tbl_users(username,email,password,Sex,Age) VALUES('$uname','$email','$upass','$uage','$usex')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}
		
	} else {
		
		
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";
			
	}
	
	$DBcon->close();
}
?>
<?php
$pageTitle="HarSATGuru Lab|Signup";
?>
<!DOCTYPE html>
<html>
<?php include('inc/head.php'); ?>
<body> 
	<?php include('inc/header.php'); ?>
	<!---->
	<div class="container"> 
			         
		<div class="register">
		  	  <form method="post"> 
				 <div class="  register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					<div class="mation">
						
						<span><b>Full Name </b><label> *</label></span>
						<input type="text" name="username" required> 
					</br></br></br>
						 <span><b>Mobile number </b><label>*</label></span>
						 <input type="text" name="email" required> 
						</br></br></br>
						 <span><b>Age</b> <label>*</label></span>
						 <input type="text" name="age" required> 
						</br></br></br>
						<span><b>Sex </b><label>*</label></span>
						 <input type="radio" name="sex" value="Male" required> <b> Male</b>
						</br>

						 <input type="radio" name="sex" value="Female" required>	<b> Female</b>					 
						
					</div>
					 <div class="clearfix"> </div>
					   
			    </div>
				     <div class="  register-bottom-grid">
						   
							<div class="mation">
								<span>Password <label>*</label></span>
								<input type="password" minlength="8" name="password" required >
						
								</div>
							 </div>
		  
				<div class="clearfix"> </div>
				
				
				<div class="register-but">
					<button type="submit" name="btn-signup">Submit</button>
					   
					   <div class="clearfix"> </div>
				  
				</div>
				</form>
				<?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
</div>
		
<?php include('inc/sub-cat.php');?>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->
	<?php include('inc/footer.php'); ?>
</body>
</html>


