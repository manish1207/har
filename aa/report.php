<?php
$pageTitle="HarSATGuru Lab | Report Download";
?>
<?php
session_start();
include_once 'inc/dbconnect.php';
$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$q=$_SESSION['userSession'];
$userRow=$query->fetch_array();
$DBcon->close();
?>
<!DOCTYPE html>
<html>
<?php include('inc/head.php'); ?>
<?php include('inc/head1.php'); ?>
</br></br></br>
<body> <center>
<?php
// Connect to the database
$dbLink = new mysqli('mysql5016.smarterasp.net', 'a22852_manish', 'mani9368216811', 'db_a22852_manish');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}
 
// Query for a list of all existing files
$sql = " SELECT id, name, mime, size, created, user_id
FROM file_ WHERE user_id=$q";
$result = $dbLink->query($sql);
// Check if it was successfull
if($result) {
    // Make sure there are some files in there
    if($result->num_rows == 0) {
        echo '<p><b>No Report is uploaded for you till now.</br> We will upload it soon when your test is done.</b></p>';
    }
    else {
        // Print the top of a table
        echo '<table width="100%">
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Type</b></td>
                    <td><b>Size (bytes)</b></td>
                    <td><b>Uploaded On</b></td>
                    <td><b>Download</b></td>
                </tr>';
 
        // Print each file
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td>{$row['name']}</td>
                    <td>{$row['mime']}</td>
                    <td>{$row['size']}</td>
                    <td>{$row['created']}</td>
                    <td><a href='admin/view.php?id={$row['id']}'>Download</a></td>
                </tr>";
        }
 
        // Close table
        echo '</table>';
    }
 
    // Free the result
    $result->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo "<pre>{$dbLink->error}</pre>";
}
 
// Close the mysql connection
$dbLink->close();
?></center>
</body>
</html>

