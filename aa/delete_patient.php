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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

<link rel="bootstrap" href="style.css" type="text/css" />
<link rel="bootstrap" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
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
            <li><a href="home.php" target="_blank">User Homepage</a></li>
			<li class="active"><a  href="viewusers.php">View Patient</a></li>
<li><a href="view_test.php"> Tests</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> 
			<?php echo $userRow['username']; ?>
			</a></li>
            <li><a href="admin_logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
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
<form method="post">
						 <span><b>Want to delete any user? Enter user id here and submit.</b> </span></br></br>
						 <input type="text" name="userid"> 
								<button href="patient_test.php" type="submit" name="deleteuser">Submit</button>
								</form>
<?php 
if(isset($_POST['deleteuser'])) {
$a = strip_tags($_POST['userid']);
if($a=='')
{
$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Enter User ID First. 
				</div>";
}
else 
{
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$check_patient = $conn->query("SELECT user_id FROM tbl_users WHERE user_id='$a'");
	$count=$check_patient->num_rows;
	
	if ($count==0) {

$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Enter Valid User ID !
					</div>";

}
else
{
$sql = "DELETE FROM tbl_users WHERE user_id=$a";
if ($conn->query($sql) === TRUE) {
$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Patient Deleted !
					</div>"; header("refresh: 2;");

}
else
{
$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'>&nbsp; Error !</span> 
				</div>";
}
$conn->close();
}}}
?>
   <?php
		if(isset($msg)){
			echo $msg;
		}
		?>
</div></div></div>
								</body>
</html>





