<?php include "./in_nav_bar_profile.php";
include "../control/in_security.php";
//include "../control/in_process_edit_profile.php";

$obj = new inde();
?>


<html>
<body>
<hr>
<center>

<h3>Personal Information</h3>
<hr>
<form action="" method="post" enctype="multipart/form-data">
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
<td><input type="email" name="email" value="<?php if(isset($_SESSION["email"]))echo $obj->decryption($_SESSION["email"])?>"></td>
</tr>
<tr>
<td>Personal address:</td>
<td><input type="text" name="pAddress" value="<?php if(isset($_SESSION["pAddress"]))echo $_SESSION["pAddress"]?>"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="password" name="pwd" value="<?php if(isset($_SESSION["pwd"]))echo $_SESSION["pwd"]?>"></td>
</tr>

</table>

<h3>Profational Information</h3>
<hr>

<table>
<tr>
<td>Organization name:</td>
<td><input type="text" name="oname" value="<?php if(isset($_SESSION["oname"]))echo $_SESSION["oname"]?>"></td>
</tr>

<tr>
<td>Organization license:</td>
  <td><input type="text" name="liname" value="<?php if(isset($_SESSION["linumber"]))echo $_SESSION["linumber"]?>"></td>
</tr>

<tr>
<td>Tax identification number:</td>
  <td><input type="number" name="tin" value="<?php if(isset($_SESSION["tin"]))echo $_SESSION["tin"]?>"></td>
</tr>

<tr>
<td>Organization address:</td>
  <td><input type="text" name="oaddress" value="<?php if(isset($_SESSION["oaddress"]))echo $_SESSION["oaddress"]?>"></td>
</tr>

<tr>
<td>Established date:</td>
<td><input type="date" name="edate" value="<?php if(isset($_SESSION["edate"]))echo $_SESSION["edate"]?>"></td>
</tr>

<!-- <tr>
  <td>Gender:</td>
  <td><input type="radio" name = "gender" value="r1">Male
  <input type="radio" name = "gender" value="r2">Female
  <input type="radio" name = "gender" value="r3">Other</td>
</tr> -->
<tr>
<td>Organization email:</td>
<td><input type="email" name="oemail" value="<?php if(isset($_SESSION["oemail"]))echo $_SESSION["oemail"]?>"></td>
</tr>
<tr>
<td>Organization website:</td>
<td><input type="text" name="site" value="<?php if(isset($_SESSION["site"]))echo $_SESSION["site"]?>" ></td>
</tr>

<!-- <tr>
<td>Add photo:</td>
<td><input type="file" name="myfile"></td>
</tr> -->
<!-- <tr> 
<td><input type="submit" value="Update" name="Update">
<input type="reset" name="Reset"></td>
</tr> -->
</table>
<br>
<input type="submit" value="Continue" name="next1">
<input type="reset" name="Reset">
</center>
</body>
</html>
<?php
include "../control/in_process_edit_profile.php";
?>