 <?php 
 mysql_connect("localhost", "root", "","mysqli_login")  
 $data = mysql_query("SELECT * FROM tb1_users") 
 or die(mysql_error()); 
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 Print "<table border cellpadding=3>"; 
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<th>Name:</th> <td>".$info['Name'] . "</td> "; 
 Print "<th>Username:</th> <td>".$info['Email'] . " </td></tr>"; 
 } 
 Print "</table>"; 
 ?> 