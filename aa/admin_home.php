<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession1'])) {
	header("Location: admin_index.php");
}
$query = $DBcon->query("SELECT * FROM admin_table  WHERE user_id=".$_SESSION['userSession1']);
$userRow=$query->fetch_array();
$DBcon->close();
?>

<html >
<head>
<title>Welcome - <?php echo $userRow['username']; ?></title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">           
		  </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
		  
  
<li>
						<a href="admin_index.php"><img src="images/logo.png" alt=" " /></a>
			</li>	
            <li class="active">
			<a href="admin_home.php">Admin Homepage</a></li>
            <li><a href="home.php" target="_blank">User Homepage</a></li>
<li><a href="view_test.php"> Tests</a></li>
          						
<li><a href="viewusers.php">View users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> 
			<?php echo $userRow['username']; ?>
			</a></li>
            <li><a href="admin_logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
        </div>		
      </div>
    </nav>
						
			<table style="width:100%" align="center" >
  <tr>
    <th style="align">Name</th>
    <th>Email</th> 

  </tr>
  <tr>
    <td><?php echo $userRow['username']; ?></td>
    <td><?php echo $userRow['email']; ?></td> 
  </tr>
</table>		</center>		
	</br></br></br></br></br></br></br>
	<center><b>Name</b> - <label style="color:#FF3366"><?php echo $userRow['username']; ?></label>
		</br></br><b>Email </b>- <label style="color:#FF3366"><u><?php echo $userRow['email']; ?></u></label>
		</br></br><b>Admin id </b>- <label style="color:#FF3366"><?php echo $userRow['user_id']; ?></label></br></br>
		
		</a></center>
	<div class="container">
				    <div class="clearfix"> </div>        	         
		</div>

	</br>
	</br>
	</br>
	</br>
</body>
</html>



