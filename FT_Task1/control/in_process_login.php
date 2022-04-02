<?php
include "../model/in_model.php";
include "in_security.php";
session_start();
if(isset($_SESSION["oname"])){
    header("location:../view/in_home.php");
}
// if(!empty($_SESSION["pwd"])){
//     session_destroy();
//     session_start();
// }
$flag = 1;
if(isset($_POST["submit"])){
    $mydb = new db();
    $in = new inde();
    $mail=$in->encryption($_POST["email"]);
    $pass=$in->encryption($_POST["pwd"]);
    $conobj=$mydb->opencon();
    $mydata=$mydb->fetchData("reg_investor",$conobj,$mail);
    if($mydata->num_rows > 0){
        $row = $mydata->fetch_assoc();
        if($row["pass"]==$pass){
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["pwd"] = $pass;
                    $_SESSION["firstName"] = $row["firstname"];
                    $_SESSION["lastName"] = $row["lastname"];
                    $_SESSION["DOB"] = $row["DOB"];
                    $_SESSION["gender"] = $row["gender"];
                    $_SESSION["phone"] = $row["phone"];
                    $_SESSION["pAddress"] = $row["paddress"];
                    
                    $_SESSION["oname"] = $row["oname"];
                    $_SESSION["linumber"] = $row["linumber"];
                    $_SESSION["tin"] = $row["tin"];
                    $_SESSION["oaddress"] = $row["oaddress"];
                    $_SESSION["edate"] = $row["edate"];
                    $_SESSION["oemail"] = $row["oemail"];
                    $_SESSION["site"] = $row["site"];
                    if(isset($_POST["remember"])){
                                //session_start();
                                    setcookie("autologin",$_SESSION["email"],time()+2*24*60*60,"/","");
                                }
                                header("location:../view/in_home.php");
                                //header("location:../control/in_process_cookie.php");
                                // setcookie("autologin",$_POST["email"],time()+2*24*60*60);
                                setcookie("log",$_SESSION["email"],time()+2*24*60*60,"/","");
                            
        }
        else{
            echo "Incorrect Password";
        }
        
    }
    else{
        echo "Incorrect email";
    }
    


    // $data = file_get_contents("../file/in_join_info.json");
    //     $readData = json_decode($data,true);

    //     foreach($readData as $myobject)
    //     {   
    //         if($myobject["email"] == $_POST["email"]){
                
    //             if($myobject["password"] == $_POST["pwd"]){
    //                 $flag = 0;
    //                 // setcookie("autologin",$_POST["email"],time()+2*24*60*60);

    //                 $_SESSION["email"] = $_POST["email"];
    //                 $_SESSION["pwd"] = $_POST["pwd"];
    //                 $_SESSION["firstName"] = $myobject["firstName"];
    //                 $_SESSION["lastName"] = $myobject["lastName"];
    //                 $_SESSION["DOB"] = $myobject["DOB"];
    //                 $_SESSION["gender"] = $myobject["gender"];
    //                 $_SESSION["phone"] = $myobject["phone"];
    //                 $_SESSION["pAddress"] = $myobject["pAddress"];
                    
    //                 $_SESSION["oname"] = $myobject["oname"];
    //                 $_SESSION["linumber"] = $myobject["linumber"];
    //                 $_SESSION["tin"] = $myobject["tin"];
    //                 $_SESSION["oaddress"] = $myobject["oaddress"];
    //                 $_SESSION["edate"] = $myobject["edate"];
    //                 $_SESSION["oemail"] = $myobject["oemail"];
    //                 $_SESSION["site"] = $myobject["site"];
    //                 break;
    //             }
    //             else{
    //                 $flag = 1;
    //             }
    //         }
	//         // foreach($myobject as $key=>$value)
    //         // {
	// 	    //     if($key == "email" && $value == $_POST["email"]){
    //         //         $eflag = 0;
    //         //     }
    //         //     if($key == "password" && $value == $_POST["pwd"]){
    //         //         $pflag = 0;
    //         //     }
    //         //     else if($key == "password" && $eflag == 0){
    //         //         $eflag = 1;
    //         //         $pflag = 1;
    //         //     }

	//         // }
    
    //     }
        
        
    //     if($flag == 1){
    //         echo "Incorrect email or password.<br>";
    //     }
    //     else if($flag == 0){
    //         if(isset($_POST["remember"])){
    //             //session_start();
    //             setcookie("autologin",$_SESSION["email"],time()+2*24*60*60,"/","");
    //         }
    //         header("location:../view/in_home.php");
    //         //header("location:../control/in_process_cookie.php");
    //         // setcookie("autologin",$_POST["email"],time()+2*24*60*60);
    //     }
    
}

?>