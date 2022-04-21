<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <caption>Registration</caption>
            <tr>
                <td>Name:</td> <td> <input type="text" name="fname" id="fname"></td>
            </tr>
            <tr>
                <td>Age:</td> <td> <input type="text" name="age" id="age"></td>
            </tr>
            <tr>
                <td>Email:</td> <td> <input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Password:</td> <td> <input type="password" name="pass" id="pass"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="submit" id="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php include "../control/process_reg.php" ?>