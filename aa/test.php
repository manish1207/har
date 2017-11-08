<?php
session_start();
include_once 'inc/dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index	.php");

}
$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();
?>
<?php
$pageTitle="HarSATGuru Lab|All Tests";
?>

<!DOCTYPE html>
<html>
<?php include('inc/head.php'); ?>
<?php include('inc/head1.php'); ?>
		
<body> 
	<!---->
	<div class="container">
			<div class="shoes-grid">
</br>
</br>
     <div class="shoes-grid-left">
			<a href="advance.php">	
				<div class="col-md-6 con-sed-grid ">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>ADVANCE TEST PACKAGE</h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div>
					</a>
								
	
	<a href="basic.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top ">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>BASIC TEST PACKAGE</h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
					</div>
					</a>
					
					
						<div class="clearfix"> </div>
						</br>
	   		     <div class="shoes-grid-left">
			<a href="serological.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>SEROLOGICAL TEST PACKAGE 	</h4>
		   		     		</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>						
						</div>		
						<div class="clearfix"> </div>
						
	   		     	</div>
					</a>
					
					
					
	   		     	<a href="biological.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>BIOLOGICAL TEST PACKAGE</h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div>
					</a>
						<div class="clearfix"> </div>
						</br>
						
						
						
						
				<div class="shoes-grid-left">
			<a href="haemotology.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
				
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>HAEMOTOLOGY TEST  	</h4>
		   		     		</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>						
						</div>		
						<div class="clearfix"> </div>
						
	   		     	</div>
					</a>
					
					
	   		     	<a href="lipid.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>LIPID PROFILE </br>TEST </h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div></div>
					</a>
						<div class="clearfix"> </div>
						</br>
						
			<a href="bee.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>BIO, ENZYMES, ELECTROLYTES
</h4>
		   		     		</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>						
						</div>		
						<div class="clearfix"> </div>
						
	   		     	</div>
					</a>
					
					
			     	<a href="cardiac.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>CARDIAC PROFILE </br>TEST </h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div>
					</a>
						<div class="clearfix"> </div>
						</br>
						
			<a href="liver.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>LIVER PROFILE </br>TEST</h4>
		   		     		</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>						
						</div>		
						<div class="clearfix"> </div>
						
	   		     	</div>
					</a>
					

				 	<a href="harmone.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>HORMONE LEVEL</br>TEST </h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div>
					</a>
				<div class="clearfix"> </div>
		    </br>	 			<a href="thyroid.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>THYROID</br>PROFILE
</h4>
		   		     		</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>						
						</div>		
						<div class="clearfix"> </div>
						
	   		     	</div>
					</a>
					

<a href="dangue.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>DANGUE </br>TEST </h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div>
					</a>   						<div class="clearfix"> </div>
		    </br>	 	<a href="typhoid.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>TYPHOID</br>TEST
</h4>
		   		     		</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>						
						</div>		
						<div class="clearfix"> </div>
						</div></div>
					</a>
				 <a href="blood.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>BLOOD GROUP</br>TEST </h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div>
					</a>   						<div class="clearfix"> </div>
		    </br>	 <a href="sugar.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>SUGAR</br>TEST
</h4>
		   		     		</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>						
						</div>		
						<div class="clearfix"> </div>
						</div>
					</a>				<a href="bloodcount.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>BLOOD COUNT</br>TEST </h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div>
					</a>		<div class="clearfix"> </div>
		    </br>	 
			<a href="kidney.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>KIDNEY</br>TEST
</h4>
		   		     		</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>						
						</div>		
						<div class="clearfix"> </div>
						</div>
					</a>
			<a href="urea.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>BLOOD UREA</br>TEST </h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div>
					</a>	<div class="clearfix"> </div>
		    </br>	<a href="factor.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>RA FACTOR AND WIDAL TEST</h4>
		   		     		</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>						
						</div>		
						<div class="clearfix"> </div>
						</div></div>
					</a>
							<a href="iron.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>IRON STUDIES</br>TEST </h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div>
					</a>	<div class="clearfix"> </div>
		    </br>
					<a href="hemogram.php">				 
	   		     	<div class="col-md-6 con-sed-grid">
					
	   		     		<div class=" elit-grid"> 
						
		   		     		<h4>HEMOGRAM</br>TEST
</h4>
		   		     		</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>						
						</div>		
						<div class="clearfix"> </div>
						</div>
					</a>

	<a href="product.php">	
	   		     	<div class="col-md-6 con-sed-grid sed-left-top">
	   		     		<div class=" elit-grid"> 
		   		     		<h4>HbA1c</br>TEST </h4>
								</br>
							<p>KNOW MORE</p>
							<span class="on-get">GET NOW</span>
						</div>		
						<div class="clearfix"> </div>
	   		     	</div>
					</a>	<div class="clearfix"> </div>
		    </br>					</div>
			  
<?php include('inc/sub-cat.php');?>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->
	<?php include('inc/footer.php'); ?>
</body>
</html>
