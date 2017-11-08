<?php
session_start();
include_once 'dbconnect.php';
include_once 'inc/test_des_db.php';

if (!isset($_SESSION['userSession1'])) {
	header("Location: index.php");
}
$query = $DBcon->query("SELECT * FROM admin_table  WHERE user_id=".$_SESSION['userSession1']);
$userRow=$query->fetch_array();
$DBcon->close();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HSG Lab | Admin Panel | Upload Report</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="bootstrap" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<style>
.topright {
    position: absolute;
    top: 100px;
    right: 112px;
    font-size: 15px;
}
.left {
    position: absolute;
    top: 100px;
    left: 128px;
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
						<li><a  href="viewusers.php">View users</a></li>
<li><a  href="view_test.php">Test</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_home.php"><span class="glyphicon glyphicon-user"></span> 
			<?php echo $userRow['username']; ?>
			</a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="left">
	
  <?php
$sql=" SELECT * FROM tbl_users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

echo "User Name: " ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"  . $row["username"].  "<br>";
echo "Email:  " ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["email"].  "<br>";
echo "User Id:  " 	."&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["user_id"].  "<br>";
echo "</br>";
    }
} else {
    echo "0 results";
}
$conn->close();
	 
?>
					</div>
  <div class="topright">
		
  
		
  <?php 
if(isset($_POST['uploaded_file'])) {
include_once 'upload.php';
}
	?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="uploaded_file"><br>
         <span><b>Enter User id.</b> </span></br></br>
						 <input type="text" name="test"> 
								<button  type="submit" name="uploaded_file" >Submit</button>

    
</br>    
</br>    
        <button href="list_files.php"formaction="list_files.php">See all files</button>
 </form>   							
</div>
</body>
</html>

