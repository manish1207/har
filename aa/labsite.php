<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<div style="background-color:black;color:white;padding:20px;">
<form action="">
  <p> patient type  <input type="radio" name="gender" value="walk-in" align="center"> walk-in
  <input type="radio" name="gender" value="network">network </p>
  
</form>

</div>
<table style="width:100%">
  <tr>
    <th>patient information</th>
    <th>current batch code:</th> 
    <th>outstanding as previous day</th>
  </tr>
</table>
<table style="width:100%">
  
  <tr>
    <td><form action="/action_page.php">
  mobile no: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
    <td><form action="/action_page.php">
  title: <input type="select" name="title" maxlength="10"><br>
</form></td>
     <td><form action="/action_page.php">
  first name: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
  </tr>
  <tr>
      <td><form action="/action_page.php">
  middle name: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
      <td><form action="/action_page.php">
  last name: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
    <td><form action="/action_page.php">
  Birthday:
  <input type="date" name="bday">
</form>
</td>
  </tr>
  <tr>
   <td><form action="/action_page.php">
  age: <input type="text" name="usrname" maxlength="2]">
</form></td>
    <td><form action="/action_page.php">
  rcc: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
     <td><form action="/action_page.php">
  city: <input type="text" name="usrname" maxlength="10"><br>
</form>
  </tr> 
</br>
<tr>
    <td><form action="/action_page.php">
  address: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
    <td><form action="/action_page.php">
  invoice account: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
    <td><form action="/action_page.php">
  bar code: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
  </tr> 

<tr>
    <td>sex: <select>
  <option value="male">male</option>
  <option value="female">female</option>
  <option value="other">other</option>
</select></td>
     <td>processing lab: <select>
  <option value="s23">s23</option>
  <option value="s24">s24</option>
  <option value="s25">s25</option>
</select></td>
    <td><form action="/action_page.php">
  pln: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
  </tr> 
</br>
<tr>
    <td><form action="/action_page.php" method="get">
  home collection: <input type="checkbox" name="vehicle" value="home coollection"><br>
</form></td>
  </tr> 


</form>

<table style="width:100%">
  <tr>
    <th><b>REFERRING DOCTOR</th>
  </tr>
<br>
</table>
<div style="background-color:black;color:white;padding:20px;">
<form action="">
  <p>   <input type="radio" name="gender" value="walk-in" align="center"> registered doctor
  <input type="radio" name="gender" value="network">new doctor </p>
</form>
<form action="/action_page.php">
  suggestion: <input type="text" name="usrname" maxlength="10"><br>

</div>
<br>
<table style="width:100%">
  <tr>
    <th><b>TEST DETAIL</th>
  </tr>
<br>
</table>
<table style="width:100%">
  
  <tr>
    <th>SL No.</th>
    <th>test code</th>
     <th>test name</th>
      <th>amount</th>
       <td>processing lab: <select>
  <option value="s23">cash</option>
  <option value="s24">credit card</option>
  <option value="s25">paytm</option>
</select></td>
  </tr>
  <tr>
      <td><form action="/action_page.php">
  middle name: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
      <td><form action="/action_page.php">
  last name: <input type="text" name="usrname" maxlength="10"><br>
</form></td>
    <td><form action="/action_page.php">
  Birthday:
  <input type="date" name="bday">
</form>
</td>
  </tr>

</body>
</html>
