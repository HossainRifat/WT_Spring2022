<?php
include "../model/in_model.php";

$db = new db();
$con = $db->opencon();

if(isset($_POST["submit"])){
    if($db->insertJoinData("test",$con,$_POST["fname"],$_POST["age"],$_POST["email"],$_POST["pass"])){
        echo "Data inserted.";
        header("location:../view/viewData.php");
    }
    else{
        echo "error";
    }
}

?>