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
?>

<html >
<head>
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
						<li><a  href="viewusers.php">View users</a></li>
<li><a href="view_test.php"> Tests</a></li>

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

</br></br>
  <?php
  
$sql=" SELECT * FROM tests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
echo '<table width="70%" >';
  echo '<tr>';
  echo '  <th  style="width:15% ">Test Name</th>';
 echo '   <th style="width:5%">Test id</th> ';
 echo '   <th style="width:30%">Test Description</th>  ';
echo '	<th style="width:15%">Test Price </th>';
echo '  </tr>';
 echo ' <tr>';
    echo '<td align="center">'. $row["test_name"].  '</td>';
    echo '<td align="center">'. $row["test_id"].  '</td>';
    echo '<td align="center">'. $row["test_desc"].  '</td>';
    echo '<td align="center">'. $row["test_price"].  '</td>'.'</br>';

echo '	</tr>
</table>';
    }
}
$conn->close();
	 
?>
					</div>
  <div class="topright">
<div class="topright">


<?php 
if(isset($_POST['update'])) {
$aa = strip_tags($_POST['test']);
$ab = strip_tags($_POST['test1']);

if($aa==''||$ab=='')
{
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Enter Both Vaues !"."</div>";

}
else
{
	$check_test = $conn->query("SELECT test_id FROM tests WHERE tests_id='$test_id'");
	$count=$check_email->num_rows;
	if ($count==0) {
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Enter Valid Tests ID !
					</div>";	
}
else {
$sql = "UPDATE tests SET test_price=$ab WHERE test_id=$aa";

if ($conn->query($sql) === TRUE) {
 $msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Price Updated !
					</div>";
}
 else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while registering !". $conn->error.
					"</div>";

    echo "Error updating record: " . $conn->error;
}
$conn->close();
}}}
?>

<?php 
if(isset($_POST['update1'])) {
$aa = strip_tags($_POST['test']);
$ab = strip_tags($_POST['test1']);

if($aa==''||$ab=='')
{
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Enter Both Vaues !"."</div>";

}
else
{
$check_test = $conn->query("SELECT test_id FROM tests WHERE tests_id='$test_id'");
	$count=$check_email->num_rows;
	if ($count==0) {
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Enter Valid Tests ID !
					</div>";	
}
else
{
$sql = "UPDATE tests SET test_desc='$ab' WHERE test_id=$aa";

if ($conn->query($sql) === TRUE) {
 $msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Price Updated !
					</div>";
}
 else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while registering !". $conn->error.
					"</div>";

    echo "Error updating record: " . $conn->error;
}
$conn->close();
}}}
?>

<?php 
if(isset($_POST['update2'])) {
$aa = strip_tags($_POST['test']);
$ab = strip_tags($_POST['test1']);

if($aa==''||$ab=='')
{
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Enter Both Vaues !"."</div>";

}
else
{
$check_test = $conn->query("SELECT test_id FROM tests WHERE tests_id='$test_id'");
	$count=$check_email->num_rows;
	if ($count==0) {
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Enter Valid Tests ID !
					</div>";	
}
else
{
$sql = "UPDATE tests SET test_name='$ab' WHERE test_id=$aa";

if ($conn->query($sql) === TRUE) {
 $msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Price Updated !
					</div>";
}
 else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while registering !". $conn->error.
					"</div>";
    echo "Error updating record: " . $conn->error;
}
$conn->close();
}}}
?>

<?php 
if(isset($_POST['update3'])) {

$aa = strip_tags($_POST['test']);
$ab = strip_tags($_POST['test1']);

if($aa==''||$ab=='')
{
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Enter Both Vaues !"."</div>";

}
else
{
$check_test = $conn->query("SELECT test_id FROM tests WHERE tests_id='$test_id'");
	$count=$check_email->num_rows;
	if ($count==0) {
$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Please Enter Valid Tests ID !
					</div>";	
}
else
{
$sql = "UPDATE tests SET test_id=$ab WHERE test_id=$aa";

if ($conn->query($sql) === TRUE) {
 $msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Price Updated !
					</div>";
}
 else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Error while registering !". $conn->error.
					"</div>";

    echo "Error updating record: " . $conn->error;
}
$conn->close();
}}}
?>
<style>
.button1 {  
    border: none;
    color: grey;
    padding: 10px 12px;
    font-size: 15px;
}
</style>
<form method="post">


						 <span><b>Want to update any value?</b> </span></br>
						 <span><b>Enter Details.</b> </span></br></br>
					
						 <input type="text" name="test" placeholder="Enter Test ID"> 
						</br></br>
						 <input type="text" name="test1" placeholder="Enter new Value	"> 
						</br>
						</br>
						
						<button  class="button1" type="submit" name="update">Update Price    </button>
							</br></br>	<button class="button1" type="submit" name="update1">Update Description</button>
								</br></br><button  class="button1" type="submit" name="update2">Update Name</button>
								</br></br><button  class="button1" type="submit" name="update3">Update ID </button>
								
								</form>
								</br></br></br>	<?php
		if (isset($msg)) {
			echo $msg;
		}
		?>
</div></div>

</body>
</html>



