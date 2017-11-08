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
  <p> patient type  <input type="radio" name="radio" value="walk-in" align="center"> walk-in
  <input type="radio" name="radio" value="network">network </p>
</form>

</div>
<table style="width:100%">
  <tr>
    <th>patient information</th>

  </tr>
</table>
<table style="width:100%">
  
  <tr>
    <td>
  Name: <input type="text" name="username" maxlength="10"><br>

</td>
    <td>
  User id: <input type="text" name="user" maxlength="10"><br>

</td>

    <td>
  Sex: <input type="text" name="sex" maxlength="10"><br>

</td>
    <td>
Age: <input type="text" name="age" maxlength="10"><br>

</td>

</tr>

<tr>
    <td>
  Test ID: <select style="width:50%">
  <option value="1001">1001</option>
  <option value="1002">1002</option>
  <option value="1003">1003</option>
  <option value="1004">1004</option>
  <option value="1005">1005</option>
  <option value="1006">1006</option>
  <option value="1007">1007</option>
  <option value="1008">1008</option>
  <option value="1009">1009</option>
  <option value="1010">1010</option>
  <option value="1011">1011</option>
  <option value="1012">1012</option>
</select>
</td>
    
    <td>
Test Price: <input type="text" name="price" maxlength="20"><br>

</td>
<td>
Time : <input type="text" name="time" maxlength="20"><br>

</td>

</body>
</html>
