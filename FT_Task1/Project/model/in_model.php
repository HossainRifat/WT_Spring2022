<?php

class db{

    function opencon(){
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bepartner";

        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error){
            echo "could not connect";
        }
        else{
            return $conn;
        }

    }

    function insertJoinData($tname,$email,$pass,$firstName,$lastName,$DOB,$gender,$phone,$pAddress,$oname,$linumber,$tin,$oaddress,$edate,$oemail,$site,$img,$cover,$conn){

        $sql = "INSERT INTO $tname (email,pass,firstname,lastname,DOB,gender,phone,paddress,oname,linumber,tin,oaddress,edate,oemail,site,img,cover)
         VALUES('$email','$pass','$firstName','$lastName','$DOB','$gender','$phone','$pAddress','$oname','$linumber','$tin','$oaddress','$edate','$oemail','$site','$img','')";
        
        if($conn->query($sql)===TRUE){
            echo "Data inserted";
            return TRUE;
        }
        else{
            echo "data cant be inserted".$conn->error;
            return FALSE;
        }

    }

    function fetchData($tablename, $conn, $email){

        $sqlsrt = "SELECT * FROM $tablename WHERE email = '$email'";

        $results = $conn->query($sqlsrt);
        return $results;
    }

    function searchData($tablename, $conn, $key, $data){

        $sqlsrt = "SELECT * FROM $tablename WHERE $key = '$data'";

        $results = $conn->query($sqlsrt);
        return $results;
    }


    function updateData($tname,$email,$pass,$firstName,$lastName,$DOB,$gender,$phone,$pAddress,$oname,$linumber,$tin,$oaddress,$edate,$oemail,$site,$conn,$Memail){

        $sql = "UPDATE $tname SET email = '$email', pass='$pass',firstname='$firstName',lastname='$lastName',DOB='$DOB',gender='$gender',phone='$phone',paddress='$pAddress',oname='$oname',linumber='$linumber',tin='$tin',oaddress='$oaddress',edate='$edate',oemail='$oemail',site='$site' WHERE email = '$Memail'";
        
        if($conn->query($sql)===TRUE){
            echo "Data updated";
            return TRUE;
        }
        else{
            echo "data cant be inserted".$conn->error;
            return FALSE;
        }

    }

    function deleteData($tablename, $conn, $email){

        $sqlsrt = "DELETE FROM $tablename WHERE email = '$email'";

        if($conn->query($sqlsrt)){
            return TRUE;
        }
    }


    function closecon($conn){
        return $conn->close();
    }

}
?>