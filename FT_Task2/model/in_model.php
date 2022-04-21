<?php

class db{

    function opencon(){
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test";

        $conn = new mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error){
            echo "could not connect";
        }
        else{
            return $conn;
        }

    }

    function insertJoinData($tname,$conn,$name,$age,$email,$pass){

        $sql = "INSERT INTO $tname (name,age,email,password) VALUES('$name','$age','$email','$pass')";
        
        if($conn->query($sql)===TRUE){
            return TRUE;
        }
        else{
            echo " ".$conn->error;
            return FALSE;
        }

    }

    function fetchData($tablename, $conn){

        $sqlsrt = "SELECT * FROM $tablename";
        $results = $conn->query($sqlsrt);
        return $results;
    }

    function closecon($conn){
        return $conn->close();
    }

}
?>