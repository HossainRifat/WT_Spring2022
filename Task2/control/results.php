<?php
    $fname="";
    $lname ="";
    //$password="";

if(isset($_POST["Submit"])){

    echo"<br><br><h2>Registration Confirmation</h2>";
    $fname = $_POST["fname"];
    if(empty($fname)){
        echo"Enter a valid first name.<br>";
    }
    else{
        echo"Your first name is ".$fname."<br>";
    }
    
    $lname = $_POST["lname"];
    if(empty($lname)){
        echo"Enter a valid last name.<br>";
    }
    else{
        echo"Your last name is ".$lname."<br>";
    }

    $age = $_POST["age"];
    if(empty($age)){
        echo"Enter valid age.<br>";
    }
    else{
        echo"Your age is ".$age."<br>";
    }

    $password = $_POST["pwd"];
    if(empty($password) || strlen($password)<7){
        echo("Password must be more than 7 charecter.<br>");
    }

    if(!isset($_POST["language"]))
    {
        echo"please select a radio button.<br>";
    }
    else{
        if(isset($_POST["language"]) && $_POST["language"] == "r1")
        {
            echo"you have selected junior programmer.<br>";
        }
        if(isset($_POST["language"]) && $_POST["language"] == "r2")
        {
            echo"you have selected senior programmer.<br>";
        }
        if(isset($_POST["language"]) && $_POST["language"] == "r3")
        {
            echo"you have selected project director.<br>";
        }
    }

    if( !isset($_POST["language4"]) && !isset($_POST["language5"]) && !isset($_POST["language6"])){
        echo"please select a checkbok.<br>";
    }
    else{

        if(isset($_POST["language4"])){
            echo"you have selected Java.<br>";
        }
        if(isset($_POST["language5"])){
            echo"you have selected C++.<br>";
        }
        if(isset($_POST["language6"])){
            echo"you have selected PHP.<br>";
        }
    }
    $email = $_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
        echo"invalid mail";
    }




}

?>