<?php
session_start();
if(!isset($_SESSION["name"])){
    header("location: login.php");
}
?>
<html>
<body>

<h2>welcome to product page</h2>
<?php echo "hello " .$_SESSION["name"]."<br>";?>
Go to <a href="../control/logout.php"> Logout.<br></a>
Go to <a href="profile.php"> profile page.<br></a>
</body>
</html>