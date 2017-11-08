
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="bootstrap" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<style>
.topright {
    position: absolute;
    top: 50px;
    right: 112px;
    font-size: 15px;
}
.left {
    position: absolute;
    top: 50px;
    left: 128px;
    font-size: 15px;
}
.mid {
    position: absolute;
    top: 50px;
    left: 128px;
    right: 128px;
    font-size: 15px;
}
</style>
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
            <li>
			<a href="admin_home.php">Admin Homepage</a></li>
            <li><a href="home.php">User Homepage</a></li>
<li><a href="view_test.php"> Tests</a></li>
						<li><a  href="viewusers.php">View users</a></li>

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
	<div class="left">


<style>
.button1 {  
    border: none;
    color: grey;
    padding: 10px 12px;
    font-size: 15px;
}
</style> <a href="admin_test.php"
</br></br>
</br></br>
<button  class="button1" type="submit" name="update2">Update Test</button></a>
								
<a href="new_test.php"> <button  class="button1" type="submit" name="update3">Make New Test </button></a>
													
</div></div>
</body>
</html>
