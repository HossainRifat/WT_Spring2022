<?php 
session_start();
if(isset($_SESSION["pwd"])){
    header("location:in_home.php");
}
?>
<head>
<title>BePartner  </title> 
<head></head>
<body>
    <table>
        <tr>

          <th><a href="home.php"><img src="../img/page_ icon.png" width="200" height="45"></a></th>
          <th> </th>
          <th><a href="home.php"> Home </a></th>
          <th> </th>
          <th><a href="about.php"> About </a></th>
          <th> </th>
          <th><a href="blog.php"> Blog </a></th>
          <th> </th>
          <th><a href="contact.php"> Contact </a></th>
          <!-- <th> </th>
          <th><a href="home.php"> Become an Investor </a></th> -->
          <th> </th>
          <th><a href="in_login.php"> Sing In </a></th>
          <th> </th>
          
    
        </tr>
       
    </table>
</body>