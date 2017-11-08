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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['email']; ?></title>

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

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="admin_index.php"><span class="glyphicon glyphicon-user"></span> 
			<?php echo $userRow['username']; ?>
			</a></li>
            <li><a href="admin_logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="left">
<?php
$uname = strip_tags($_POST['test']);
$name = strip_tags($_FILES['uploaded_file']['name']);
$type = strip_tags($_FILES['uploaded_file']['type']);
if(isset($_FILES['uploaded_file'])) {
	if($uname=="")
		echo "Please Enter user id</br>";
	if($name=="" || $name== "application/pdf")
		echo "</br>Please Upload valid file in .pdf format only</br>";
	else{
    if($_FILES['uploaded_file']['error'] == 0) {
        $dbLink = new mysqli('localhost', 'root', '', 'mysqli_login');
        $name = $dbLink->real_escape_string($name);
        $mime = $dbLink->real_escape_string($type);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
		$uname = $dbLink->real_escape_string($uname);
		if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
        $query = "
            INSERT INTO `file_` (
                `name`, `mime`, `size`, `data`, `created`, `user_id`
            )
            VALUES (
                '{$name}', '{$mime}', {$size}, '{$data}', NOW(), '$uname'
            )";
        $result = $dbLink->query($query);
        if($result) {
            echo 'Success! Your file was successfully added!';
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
    $dbLink->close();
}}
else {
    echo 'Error! A file was not sent!';
}
// Echo a link back to the main page
echo "</br>".'<p>Click <a href="file.php">here</a> to go back</p>';
?>
 