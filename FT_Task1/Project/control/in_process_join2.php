<?php
include "../model/in_model.php";

$error = 0;
$oname = 0;
$liname = 0;
$tin = 0;
$site = 0;
$oemail = 0;

$dbobj = new db();
$dbcon=$dbobj->opencon();

if(isset($_POST["previous"])){
    header("location:../view/in_register.php");
}
if(isset($_POST["next1"])){
    //echo"Submit button is clicked.";
    $error = 0;


    if(empty($_POST["oname"])){
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
        if($myData->num_rows > 0){
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
        if($myData->num_rows > 0){
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
        if($myData->num_rows > 0){
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

    $email = $_POST["oemail"];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
        echo"Invalid email<br>";
        $error = 1;
    }
    else{
        // if($oemail == 1){
        //     echo "Organization email already exists.<br>";
        //     $error = 1;
        // }
        $myData=$dbobj->searchData("reg_investor",$dbcon,"oemail",$_POST["oemail"]);
        if($myData->num_rows > 0){
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
        if($myData->num_rows > 0){
            echo "Site already exists.<br>";
            $error = 1;
        }
    }

    if($error == 0){
        $_SESSION["oname"] = $_POST["oname"];
        $_SESSION["linumber"] = $_POST["liname"];
        $_SESSION["tin"] = $_POST["tin"];
        $_SESSION["oaddress"] = $_POST["oaddress"];
        $_SESSION["edate"] = $_POST["edate"];
        $_SESSION["oemail"] = $_POST["oemail"];
        $_SESSION["site"] = $_POST["site"];
        header("location:in_register_3.php");
    }
    else{
        $error = 0;
    }
   

}
?>
