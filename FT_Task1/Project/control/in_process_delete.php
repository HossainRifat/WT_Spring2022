<?php
include "../model/in_model.php";

$dbobj = new db();
$con = $dbobj->opencon();
if($dbobj->deleteData("reg_investor", $con, $_COOKIE["log"])){
    header("location: in_af_login_nav_ logout_process.php");
}
else{
    echo "something went wrong";
}


?>