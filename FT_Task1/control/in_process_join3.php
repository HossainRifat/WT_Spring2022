<?php
include "../model/in_model.php";
include "in_security.php";
$error = 0;
if(isset($_POST["previous"])){
   header("location:in_register_2.php");
}
if(isset($_POST["submit"])){
    $password = $_POST["pwd"];
    if(empty($password) || strlen($password)<7){
        echo("Password must at least 8 character.<br>");
    }
    else{
        if($password == $_POST["pwd2"]){
            if(!isset($_POST["box1"])){
                echo "Check box must be selected.<br>";
            }
            else{
                
                $sobj = new inde();
                
                $_SESSION["pwd"] = $sobj->encryption($password);
                // $email= $_SESSION["email"];
                // $firstName= $_SESSION["firstName"];
                // $lastName= $_SESSION["lastName"];
                // $DOB = $_SESSION["DOB"];
                // $gender = $_SESSION["gender"];
                // $phone = $_SESSION["phone"];
                // $email = $_SESSION["email"];
                // $pAddress = $_SESSION["pAddress"];

                // $oname = $_SESSION["oname"];
                // $linumber = $_SESSION["linumber"];
                // $tin = $_SESSION["tin"];
                // $oaddress = $_SESSION["oaddress"];
                // $edate = $_SESSION["edate"];
                // $oemail = $_SESSION["oemail"];
                // $site = $_SESSION["site"];

                $dbobj = new db();
                $condb = $dbobj->opencon();
                $inserted = $dbobj->insertJoinData("reg_investor",$_SESSION["email"],$_SESSION["pwd"],$_SESSION["firstName"],$_SESSION["lastName"],$_SESSION["DOB"],$_SESSION["gender"],$_SESSION["phone"],$_SESSION["pAddress"],$_SESSION["oname"],$_SESSION["linumber"],$_SESSION["tin"],$_SESSION["oaddress"],$_SESSION["edate"],$_SESSION["oemail"],$_SESSION["site"],$_SESSION["img"],"",$condb);
                $dbobj->closecon($condb);
                
                if($inserted){
                    header("location:../view/in_home.php");
                    setcookie("log",$_SESSION["email"],time()+2*24*60*60,"/","");
                }
                else{
                    echo "something went wrong<br>";
                }
            }
                
        }
        else{
            echo"Password did not match.<br>";
        }
    }
}
else{
    $error = 0;
}

?>