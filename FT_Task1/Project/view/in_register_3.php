<?php include "in_nav_bar.php" ?>
<html>
<body>
<hr>
<center>
<img src="../img/title_logo.png" alt="" height="100" width="100">
<h3>Almost There 3/3</h3>

<form action="" method="post">

<table>
<tr>
<td>Password:</td>
<td><input type="password" name="pwd"></td>
</tr>

<tr>
<td>Confirm password:</td>
  <td><input type="password" name="pwd2"></td>
</tr>

<tr>
  <td></td>
  <td><input type="checkbox" name="box1">I am agreed with
  <a href=""> terms and conditions.</a>
</td>
</tr>

<tr> 
<td><input type="submit" value="Previous" name = "previous">
<input type="submit" value="Submit" name="submit">
<input type="reset" name="Reset"></td>
</tr>
</table>
</center>
</body>
</html>

<?php include "../control/in_process_join3.php"?>