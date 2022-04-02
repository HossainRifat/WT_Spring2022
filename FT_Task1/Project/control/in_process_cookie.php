<?php
session_start();
//$mail = $_COOKIE["log"];

setcookie("autologin",$_SESSION["email"],time()+2*24*60*60,"/","");
//setcookie("log",$mail,time()+2*24*60*60,"/","");
header("location:../view/in_home.php");
?>