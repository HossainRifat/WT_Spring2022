<?php
session_start();

if(isset($_POST["Submit"])){
    if($_POST["name"] == "abc" && $_POST["pwd"] == "123"){
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["pass"] = $_POST["pwd"];
        header("location: ../view/profile.php");
    }
    else{
        echo"Incorrect username or password.<br>";
    }
}
?>