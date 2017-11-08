<?php
session_start();
include_once 'dbconnect.php';
include_once 'inc/test_des_db.php';

if (!isset($_SESSION['userSession1'])) {
	header("Location: admin_index.php");
}
$query = $DBcon->query("SELECT * FROM admin_table  WHERE user_id=".$_SESSION['userSession1']);
$userRow=$query->fetch_array();
$DBcon->close();
?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['username']; ?></title>

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
<li><a href="view_test.php"> Tests</a></li>
						<li><a  href="viewusers.php">View users</a></li>

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
<form method="post">
						 <span><b>Enter user id to see the booked test details.</b> </span></br></br>
						 <input type="text" name="test"> 
								<button href="patient_test.php" type="submit" name="showtest">Submit</button>
								</form>
</br></br>
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
$c= $row["user_id"];
    }
} else {
    echo "0 results";
}
$conn->close();
	 
?>
					</div>
  <div class="topright">
		
  <?php 
if(isset($_POST['showtest'])) {
$aa = strip_tags($_POST['test']);
if($aa==''){
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Enter User Id First !
					</div>";}
else{

$check_test = $conn->query("SELECT user_id FROM tbl_users WHERE user_id='$aa'");
	$count=$check_test->num_rows;
	
	if ($count==0) {
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Enter Valid User Id !
					</div>";
	}
else{
$sql=" SELECT a.test_id, a.test_i, b.tests_id, b.test_name, b.test_price
FROM test a, tests b WHERE a.test_id = b.test_id and a.user_id=$aa";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
echo "Test Name: " . $row["test_name"].  "<br>";
echo "Test Price:  " . $row["test_price"].  "<br>";
echo "Test ID:  " . $row["test_id"].  "<br>";
echo "BOOKING ID:  " . $row["test_i"].  "<br>";
echo "</br>";
    }
}
 else {
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; User Is Not Booked Any Test Till Now. !
					</div>";}
$conn->close();
}}}
?>
<?php 
if(isset($_POST['deletetest'])) {
$a = strip_tags($_POST['test']);
if($a=='')
{
 $msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Enter User Id First !
					</div>";
}else{

$check_email = $conn->query("SELECT user_id FROM test WHERE test_i=$a");
	$count=$check_email->num_rows;
	if ($count==0) {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Enter Valid User Id!
					</div>";

	} else{
$sql = "DELETE FROM test WHERE test_i=$a ";
if ($conn->query($sql) === TRUE) {
 $msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Done !
					</div>";
	 header("refresh: 2;");}
$conn->close();
}}}
?>
<form method="post">
						 <span><b>Want to delete any test.</b> </span></br>
						 <span><b>Enter Booking id to delete the test .</b> </span></br></br>
						 <input type="text" name="test"> 
								<button  type="submit" name="deletetest">Submit</button>
								</form>
<?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
								
</div>
</body>
</html>




