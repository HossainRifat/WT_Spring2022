<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" onsubmit="regValid()">
        <table>
            <caption>Registration</caption>
            <tr>
                <td>Name:</td> <td> <input type="text" name="fname" id="fname" onkeypress="validName()"></td>
                <td><p id="namemsg"></p></td>
            </tr>
            <tr>
                <td>Age:</td> <td> <input type="text" name="age" id="age" onkeypress="validage()"></td>
                <td><p id="agemsg"></p></td>
            </tr>
            <tr>
                <td>Email:</td> <td> <input type="text" name="email" id="email" onkeypress="validemail()"></td>
                <td><p id="emailmsg"></p></td>
            </tr>
            <tr>
                <td>Password:</td> <td> <input type="password" name="pass" id="pass" onkeydown="validpass()"></td>
                <td><p id="passmsg"></p></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit" name="submit" id="submit"></td>
                <td><p id="passmsg"></p></td>
            </tr>
        </table>
    </form>
    <script src="../js/valid.js"></script>
</body>
</html>
<?php include "../control/process_reg.php" ?>