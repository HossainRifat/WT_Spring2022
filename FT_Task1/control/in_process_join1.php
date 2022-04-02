<?php
include "in_security.php";
include "../model/in_model.php";
$catagory = "";
$eflag = 0;
$pflag = 0;
$dbobj = new db();
$dbcon=$dbobj->opencon();

if(isset($_POST["next1"])){
    //echo"Submit button is clicked.";
    $error = 0;

    $fname = $_POST["fname"];
    if(empty($fname)){
        echo"Invalid first name.<br>";
        $error = 1;
    }
    
    $lname = $_POST["lname"];
    if(empty($lname)){
        echo"Invalid last name.<br>";
        $error = 1;
    }

    $age = $_POST["age"];
    if(empty($age)){
        echo"Invalid age.<br>";
        $error = 1;
    }

    if(!isset($_POST["gender"]))
    {
        echo "Invalid gender.<br>";
        $error = 1;
    }
    else{
        if(isset($_POST["gender"]) && $_POST["gender"] == "r1")
        {
            $catagory = "Male";
        }
        if(isset($_POST["gender"]) && $_POST["gender"] == "r2")
        {
            $catagory = "Female";
        }
        if(isset($_POST["gender"]) && $_POST["gender"] == "r3")
        {
            $catagory = "Other";
        }
        
    }

    // $ph = 0;
    // $ph = strlen($_POST["phone"]);
    // if(!$ph==11){
    //     echo("Invalid phone.<br>");
    //     $error = 1;
    //     echo "h1";
    // }
    if(strlen($_POST["phone"])==11){
        //echo "h2".$ph;
        // $eflag = 0;
        // $pflag = 0;
        // $data = file_get_contents("../file/in_join_info.json");
        // $readData = json_decode($data);
        // foreach($readData as $myobject)
        // {
	    //     foreach($myobject as $key=>$value)
        //     {
		//         if($key == "email" && $value == $_POST["email"]){
        //             $eflag = 1;
        //         }
        //         if($key == "phone" && $value == $_POST["phone"]){
        //             $pflag = 1;
        //         }

	    //     }
    
        // }
        // if($pflag == 1){
        //     echo "Phone already exixts.<br>";
        //     $error = 1;
        // }
        $myData=$dbobj->searchData("reg_investor",$dbcon,"phone",$_POST["phone"]);
        if($myData->num_rows > 0){
            echo "Phone already exixts.<br>";
            $error = 1;
        }
    }
    else{
        echo "Invalid Phone.<br>";
    }

    $email = $_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
        echo"Invalid email<br>";
        $error = 1;
    }
    else{
        $obj = new inde();
        $email=$obj->encryption($_POST["email"]);
        $myData=$dbobj->searchData("reg_investor",$dbcon,"email",$email);
        if($myData->num_rows > 0){
            echo "Email already exixts.<br>";
            $error = 1;
        }
    }
    
    if(empty($_POST["pAddress"])){
        echo"Invalid address.<br>";
        $error = 1;
    }

    
    $ext =  pathinfo($_FILES["myfile"]["name"],PATHINFO_EXTENSION);
    $loc = pathinfo($_FILES["myfile"]["name"]);
    if($ext == "jpg"){

        $_SESSION["img"] = $_FILES["myfile"];

        //$_SESSION["img"] = file_get_contents($_FILES["myfile"]["tmp_name"]);
        
            // if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../img/".$fname.".".$ext)){
       
            //     echo"file uploaded.SIze:".$_FILES["myfile"]["name"];
            // }
            // else{
            //     echo"Error Photo.<br>";
            //     $error = 1;
            // }
       
        
    }
    else{
        echo "Only jpg file acceptable.";
        $error = 1;
    }
    

    if($error == 0){
        
        $_SESSION["lastName"] = $_POST["lname"];
        $_SESSION["firstName"] = $_POST["fname"];
        $_SESSION["DOB"] = $_POST["age"];
        $_SESSION["gender"] = $catagory;
        $_SESSION["phone"] = $_POST["phone"];
        $_SESSION["email"] = $email;
        $_SESSION["pAddress"] = $_POST["pAddress"];
        header("location:in_register_2.php");
    }
    else{
        $error = 0;
    }

}
?>