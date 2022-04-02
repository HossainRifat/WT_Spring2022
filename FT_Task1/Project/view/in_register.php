<?php include "in_nav_bar.php" ?>
<html>
<body>
<hr>
<center>
<form action="" method="post" enctype="multipart/form-data">
<img src="../img/title_logo.png" alt="" height="100" width="100">
<h3>Personal Information 1/3</h3>

<table>
<tr>
<td>First Name:</td>
<td><input type="text" name="fname" value="<?php if(isset($_SESSION["firstName"]))echo $_SESSION["firstName"]?>"></td>
</tr>

<tr>
<td>Last name:</td>
  <td><input type="text" name="lname" value="<?php if(isset($_SESSION["lastName"]))echo $_SESSION["lastName"]?>"></td>
</tr>

<tr>
<td>Date of birth:</td>
<td><input type="date" name="age" value="<?php if(isset($_SESSION["DOB"]))echo $_SESSION["DOB"]?>"></td>
</tr>

<tr>
  <td>Gender:</td>
  <td><input type="radio" name = "gender" value="r1" <?php if(isset($_SESSION["gender"])){if($_SESSION["gender"]=="Male"){echo"checked";}}?>>Male
  <input type="radio" name = "gender" value="r2" <?php if(isset($_SESSION["gender"])){if($_SESSION["gender"]=="Female"){echo"checked";}}?> >Female
  <input type="radio" name = "gender" value="r3" <?php if(isset($_SESSION["gender"])){if($_SESSION["gender"]=="Other"){echo"checked";}}?> >Other</td>
</tr>

<tr>
<td>Phone number:</td>
<td><input type="number" name="phone" placeholder="01993830224" value="<?php if(isset($_SESSION["phone"]))echo $_SESSION["phone"]?>"></td>
</tr>

<tr>
<td>Personal email:</td>
<td><input type="email" name="email" value="<?php if(isset($_SESSION["email"]))echo $_SESSION["email"]?>"></td>
</tr>
<tr>
<td>Personal address:</td>
<td><input type="text" name="pAddress" rows="3" value="<?php if(isset($_SESSION["pAddress"]))echo $_SESSION["pAddress"]?>"></td>
</tr>
<tr>
<td>Add photo:</td>
<td><input type="file" name="myfile"></td>
</tr>
<tr> 
<td><input type="submit" value="Continue" name="next1">
<input type="reset" name="Reset"></td>
</tr>
</table>
<!-- <br>
<input type="submit" value="Continue" name="next1">
<input type="reset" name="Reset"> -->
</center>
</body>
</html>

<?php include "../control/in_process_join1.php"?>