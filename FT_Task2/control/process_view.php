<?php 
include "../model/in_model.php";

$db = new db();
$con = $db->opencon();

if(isset($_POST["view"])){
    $mydata=$db->fetchData("test",$con);
    if($mydata->num_rows > 0){
        echo "<table>";
    echo"<tr><td>Name</td><td>Age</td><td>Email</td><td>Password</td>";
        while($row=$mydata->fetch_assoc()){
            echo"<tr>"; 
            echo"<td>".$row["name"]."</td>";
            echo"<td>".$row["age"]."</td>";
            echo"<td>".$row["email"]."</td>";
            echo"<td>".$row["password"]."</td>";
            echo"</tr>";
        }
        echo"</table>";
    }
}

if(isset($_POST["back"])){
    header("location:../view/registration.php");
}


?>