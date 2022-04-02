<?php
include "../model/in_model.php";
$dbobj = new db();
$dbcon=$dbobj->opencon();
$catagory = "";
$eflag = 0;
$pflag = 0;
// $dbobj = new db();
// $dbcon=$dbobj->opencon();
// $obj = new inde();

if(isset($_POST["next1"])){
    echo"Submit button is clicked.<br>";
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
    if(strlen($_POST["phone"])==11 || strlen($_POST["phone"])==10){
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
        if($myData->num_rows > 0 && $_SESSION["phone"] != $_POST["phone"]){
            echo "Phone already exixts.<br>";
            $error = 1;
        }
    }
    else{
        echo "Invalid Phone.<br>";
        echo $_POST["phone"];
    }

    $email = $_POST["email"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
        echo"Invalid email<br>";
        $error = 1;
    }
    else{

        $email=$obj->encryption($_POST["email"]);
        $myData=$dbobj->searchData("reg_investor",$dbcon,"email",$email);
        if($myData->num_rows > 0 && $_SESSION["email"] != $email){
            echo "Email already exixts.<br>";
            $error = 1;
        }
    }
    
    if(empty($_POST["pAddress"])){
        echo"Invalid address.<br>";
        $error = 1;
    }

    
    // $ext =  pathinfo($_FILES["myfile"]["name"],PATHINFO_EXTENSION);
    // $loc = pathinfo($_FILES["myfile"]["name"]);
    // if($ext == "jpg"){

    //     $_SESSION["img"] = $_FILES["myfile"];

    //     //$_SESSION["img"] = file_get_contents($_FILES["myfile"]["tmp_name"]);
        
    //         // if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../img/".$fname.".".$ext)){
       
    //         //     echo"file uploaded.SIze:".$_FILES["myfile"]["name"];
    //         // }
    //         // else{
    //         //     echo"Error Photo.<br>";
    //         //     $error = 1;
    //         // }
       
        
    // }
    // else{
    //     echo "Only jpg file acceptable.";
    //     $error = 1;
    // }

    if(empty( $_POST["oname"])){
        echo"Invalid organization name.<br>";
        $error = 1;
    }
    else{
        // $data = file_get_contents("../file/in_join_info.json");
        // $readData = json_decode($data);
        // foreach($readData as $myobject)
        // {
	    //     foreach($myobject as $key=>$value)
        //     {
		//         if($key == "oname" && $value == $_POST["oname"]){
        //             $oname = 1;
        //         }
        //         if($key == "linumber" && $value == $_POST["liname"]){
        //             $liname = 1;
        //         }
        //         if($key == "tin" && $value == $_POST["tin"]){
        //             $tin = 1;
        //         }
        //         if($key == "oemail" && $value == $_POST["oemail"]){
        //             $oemail = 1;
        //         }
        //         if($key == "site" && $value == $_POST["site"]){
        //             $site = 1;
        //         }

	    //     }
    
        // }
        // if($oname == 1){
        //     echo "Organization already exixts.<br>";
        //     $error = 1;
        // }
        $myData=$dbobj->searchData("reg_investor",$dbcon,"oname",$_POST["oname"]);
        if($myData->num_rows > 0 && $_SESSION["oname"] != $_POST["oname"]){
            echo "Organization already exixts.<br>";
            $error = 1;
        }
    }
    
    $lname = $_POST["liname"];
    if(empty($lname)){
        echo"Invalid organization license.<br>";
        $error = 1;
    }
    else{
        // if($liname == 1){
        //     echo "License number already exists.<br>";
        //     $error = 1;
        // }
        $myData=$dbobj->searchData("reg_investor",$dbcon,"linumber",$_POST["liname"]);
        if($myData->num_rows > 0 && $_SESSION["linumber"] != $_POST["liname"]){
            echo "License number already exists.<br>";
            $error = 1;
        }
    }

    $age = $_POST["tin"];
    if(empty($age)){
        echo"Invalid tax identification number.<br>";
        $error = 1;
    }
    else{
        // if($tin == 1){
        //     echo "TIN already exists.<br>";
        //     $error = 1;
        // }
        $myData=$dbobj->searchData("reg_investor",$dbcon,"tin",$_POST["tin"]);
        if($myData->num_rows > 0 && $_SESSION["tin"] != $_POST["tin"]){
            echo "T.I.N already exists.<br>";
            $error = 1;
        }
    }

    
    if(empty($_POST["oaddress"])){
        echo("Invalid organization address.<br>");
        $error = 1;
    }

    if(empty($_POST["edate"])){
        echo("Invalid date.<br>");
        $error = 1;
    }

    $oemail = $_POST["oemail"];
    if(empty($oemail) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$oemail)){
        echo"Invalid email<br>";
        $error = 1;
    }
    else{
        // if($oemail == 1){
        //     echo "Organization email already exists.<br>";
        //     $error = 1;
        // }
        $myData=$dbobj->searchData("reg_investor",$dbcon,"oemail",$_POST["oemail"]);
        if($myData->num_rows > 0 && $_SESSION["oemail"] != $_POST["oemail"]){
            echo "Organization email already exists.<br>";
            $error = 1;
        }
    }
    
    if(empty($_POST["site"])){
        echo"Invalid website.<br>";
        $error = 1;
    }

    else{
        // if($site == 1){
        //     echo "Site already exists.<br>";
        //     $error = 1;
        // }
        
        $myData=$dbobj->searchData("reg_investor",$dbcon,"site",$_POST["site"]);
        if($myData->num_rows > 0 && $_SESSION["site"] != $_POST["site"]){
            echo "Site already exists.<br>";
            $error = 1;
        }
    }
    

    if($error == 0){
        
        $_SESSION["lastName"] = $_POST["lname"];
        $_SESSION["firstName"] = $_POST["fname"];
        $_SESSION["DOB"] = $_POST["age"];
        $_SESSION["gender"] = $catagory;
        $_SESSION["phone"] = $_POST["phone"];
        
        $_SESSION["pAddress"] = $_POST["pAddress"];
        $_SESSION["oname"] = $_POST["oname"];
        $_SESSION["linumber"] = $_POST["liname"];
        $_SESSION["tin"] = $_POST["tin"];
        $_SESSION["oaddress"] = $_POST["oaddress"];
        $_SESSION["edate"] = $_POST["edate"];
        $_SESSION["oemail"] = $_POST["oemail"];
        $_SESSION["site"] = $_POST["site"];
        $result=$dbobj->updateData("reg_investor",$email,$_SESSION["pwd"],$_SESSION["firstName"],$_SESSION["lastName"],$_SESSION["DOB"],$_SESSION["gender"],$_SESSION["phone"],$_SESSION["pAddress"],$_SESSION["oname"],$_SESSION["linumber"],$_SESSION["tin"],$_SESSION["oaddress"],$_SESSION["edate"],$_SESSION["oemail"],$_SESSION["site"],$dbcon,$_SESSION["email"]);
        if($result){
            echo "Updated.<br>";
            $_SESSION["email"] = $email;
            if(isset($_COOKIE["autologin"])){
                setcookie("autologin",$email,time()+2*24*60*60,"/","");
            }
            setcookie("log",$email,time()+2*24*60*60,"/","");
            header("location:../view/in_profile.php");
        }
        echo $email;
        //echo "No error";
    }
    else{
        $error = 0;
    }
    $dbobj->closecon($dbcon);
    
}
?>