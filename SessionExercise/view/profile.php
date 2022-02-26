<?php
session_start();
if(!isset($_SESSION["name"])){
    header("location: login.php");
}
?>
<html>
<body>

<h2>welcome to profile</h2>
<?php echo "hello " .$_SESSION["name"]."<br>";?>
Go to <a href="../control/logout.php"> Logout.<br></a>
Go to <a href="product.php"> product page.<br></a>
</body>
</html>

