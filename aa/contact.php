<?php
session_start();

require_once 'inc/dbconnect.php';

if(isset($_POST['Send'])) {
	
	$uname = strip_tags($_POST['name']);
	$uemail = strip_tags($_POST['email']);
	$mssg = strip_tags($_POST['msg']);
	
	$uname = $DBcon->real_escape_string($uname);
	$uemail = $DBcon->real_escape_string($uemail);
	$mssg = $DBcon->real_escape_string($mssg);
		
	
		$query = "INSERT INTO contact_us(username,email,msg) VALUES('$uname','$uemail','$mssg')";

		if ($DBcon->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'>&nbsp; successfully Sent !</span> 
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'>&nbsp; error while registering !</span> 
					</div>";
		}
		
	
	
	$DBcon->close();
}
?>
<?php
$pageTitle="HarSATGuru Lab|Contact us";
?>
<!DOCTYPE html>
<html>
<?php include('inc/head.php'); ?>
<body> 
	<?php include('inc/header.php'); ?>
	<!---->
	<div class="container">
		
			<!---->
		 <div class="main"> 
         <div class="reservation_top">          
            	<div class=" contact_right">
            		<h3>Contact Form</h3>
            		<div class="contact-form">
							<form method="post">
								<input type="text" class="textbox" value="Name" name="name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}" required>
								<input type="text" class="textbox" value="Email" name="email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}" required>
								<textarea value="Message" onFocus="this.value= '';" name="msg" onBlur="if (this.value == '') {this.value = 'Message';}" required>Message</textarea>
								<button type="submit" name="Send">Send</button> 
								<div class="clearfix"> </div>
							</form>
							
						</div>
           	<?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
            	</div>
            </div>
           </div>


<?php include('inc/sub-cat.php');?>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->
	<?php include('inc/footer.php');?>
</body>
</html>
