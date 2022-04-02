<?php include "in_login_nav_bar.php";
// if(isset($_SESSION["oname"])){
//     header("location:../view/in_home.php");
// }
?>
<html>
    <head><title>Login | BePartner</title></head>
<body>
<hr>
<center>
<img src="../img/title_logo.png" alt="" height="100" width="100">
<h3>Login</h3>

<form action="" method="post" enctype="multipart/form-data">

<table>
<tr>
<td>Email:</td>
</tr>
<tr>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>Password:</td>
</tr>
<tr>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
    <td>
        <input type="checkbox" name = "remember"> Remember me.
    </td>
</tr>

<td><input type="submit" value="Submit" name="submit">

<input type="reset" name="Reset"></td>
</tr>
</table>
<?php include "../control/in_process_login.php"?>
</center>
</body>
</html>


