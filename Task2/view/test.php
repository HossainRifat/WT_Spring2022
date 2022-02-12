<!DOCTYPE html>
<html>
<body>

<h2>Registration Form23</h2>

<form action="" method="post">
<table>
<tr>
<td>First Name:</td>
<td><input type="text" name="fname"></td>
</tr>

<tr>
<td>Last name:</td>
  <td><input type="text" name="lname"></td>
</tr>

<tr>
<td>Age:</td>
<td><input type="number" name="age"></td>
</tr>

<tr>
  <td>Designation:</td>
  <td><input type="radio" name = "language" value="r1">Junior Programmer
  <input type="radio" name = "language" value="r2">Senior Programmer
  <input type="radio" name = "language" value="r3">Project Director</td>
</tr>
<tr>
  <td>Preferred language:</td>
  <td><input type="checkbox" name="language4">Java
  <input type="checkbox" name="language5">C++
  <input type="checkbox" name="language6">PHP</td>
</tr>
<tr>
<td>Email:</td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
<td>Please Choose a file</td>
<td><input type="file" name="myfile"></td>
</tr>
<tr> 
<td><input type="submit" name="Submit">
<input type="reset" name="Reset"></td>
</tr>
</table>
</body>
</html>

<?php
include "../control/results.php";
?>
  

