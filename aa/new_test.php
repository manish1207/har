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
head>
<title>Welcome - <?php echo $userRow['username']; ?></title>

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
	<div class="mid">

</br></br>
<?php 
if(isset($_POST['show'])) {
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
    echo '<td align="center">'. $row["tests_id"].  '</td>';
    echo '<td align="center">'. $row["test_desc"].  '</td>';
    echo '<td align="center">'. $row["test_price"].  '</td>'.'</br>';

echo '	</tr>
</table>';
    }
} else {
    echo "0 results";
}
$conn->close();
}	 
?>
					</div>
  <div class="topright">
<div class="topright">


<?php 
if(isset($_POST['new'])) {
$ti = strip_tags($_POST['testid']);
$tn = strip_tags($_POST['testname']);
$tp = strip_tags($_POST['testprice']);
$td = strip_tags($_POST['testdesc']);
if($ti=='' || $tn=='' || $tp== '' || $td=='')
{
echo "Enter all the values first";
}
else{
$sql= "INSERT INTO tests(test_id,test_name,test_price,test_desc) VALUES('$ti','$tn','$tp','$td')";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
}}
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
					
						 <input type="text" name="testid" placeholder="Enter Test ID"> 
						</br></br>
						 <input type="text" name="testname" placeholder="Enter Test Name"> 
						</br>
						</br>
						<input type="text" name="testdesc" placeholder="Enter Test Description"> 
						</br>
						
						</br>
					<input type="text" name="testprice" placeholder="Enter Test Price"> 
					</br></br>
<button  class="button1" type="submit" name="new">Make New Test</button></br></br>
							<button  class="button1" type="submit" name="show">Show All Tests</button>
							
								</form>
								
</div></div>
</body>
</html>
								</form>
								
</div></div>
</body>
</html>
