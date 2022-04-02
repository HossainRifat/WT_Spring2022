<?php
echo "hello";
setcookie("log","", time() - 3600,"/","");
if(isset($_COOKIE["autologin"])){
setcookie("autologin","", time() - 3600,"/","");
}
session_start();
if(session_destroy()){
    
    header("location:../view/home.php");
}
?>