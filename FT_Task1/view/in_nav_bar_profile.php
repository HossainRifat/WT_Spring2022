<?php session_start();
if(!isset($_SESSION["oname"])){
  header("location: home.php");
}
?>
<head>
<head></head>
<body>
    <table>
        <tr>
          <th><a href="in_home.php"><img src="../img/page_ icon.png" width="200" height="45"></a></th>
          <th> </th>
          <td><a href="in_home.php"> Home </a></td>
          <!-- <th> </th>
          <th><a href="in_profile.php"> Profile </a></th> -->
          <th> </th>
          <td><a href="./in_my_business.php"> My Business </a></td>
          
          <th> </th>
          <td><a href="./in_entrepreneure.php"> Entrepreneurs </a></td>
          <th> </th>
          <th><a href="in_profile.php"><?php echo $_SESSION["firstName"] ?></a></th>
          <th> </th>
          <td><a href="../control/in_af_login_nav_ logout_process.php">Logout</a></td>
          <th> </th>
          <td><a href=""> Notifications </a></td>
          <th> </th>      
        </tr>
    </table>
</body>
