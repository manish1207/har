	<div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=" "/></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						<div class="account">
	            <a href="profile.php"><span></span><?php echo $userRow['username']; ?></div>
							<ul class="login">
						<li><a href="logout.php?logout"><span></span> Logout</a></li>

							</ul>
						<div class="cart"><a href="cart.php"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
<!-- <?php echo $userRow['username']; ?>-->