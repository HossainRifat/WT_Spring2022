<!DOCTYPE html>
<?php include "in_nav_bar_profile.php"?>
<?php include "../control/in_process_profile.php"?>

<html lang="en">
<head>
    <title>Profile | BePartner</title>
</head>
<body>
    <hr>
    <h3></h3>
    <table>
        <hr>
        <tr>
            <td><img src="../img/profile_<?php echo $_SESSION["email"]?>.jpg" alt="profile pic" width="200" height="240" align = "right"></td>
            <td></td>
            <td> <h2>Hello,<br><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"]?><br>Owner,<br> <?php echo $_SESSION["oname"]?></h2></td>
        </tr>
        <tr>
            <td>
                <a href="./in_edit_profile.php">Edit profile</a>
            </td>
            <td>
                <a href="../control/in_process_delete.php">Detele Account</a>
            </td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td><h3>Personal Information</h3></td>
        </tr>
        <tr>
            <td>First Name: </td>
            <td><?php echo $_SESSION["firstName"]?></td>
        </tr>
        <tr>
            <td>Last Name: </td>
            <td><?php echo $_SESSION["lastName"]?></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><?php echo $in->decryption($_COOKIE["log"])?></td>
        </tr>
        <tr>
            <td>Date of Birth: </td>
            <td><?php echo $_SESSION["DOB"]?></td>
        </tr>
        <tr>
            <td>Gender: </td>
            <td><?php echo $_SESSION["gender"]?></td>
        </tr>
        <tr>
            <td>Phone Number: </td>
            <td><?php echo $_SESSION["phone"]?></td>
        </tr>
        <tr>
            <td>Personal Address: </td>
            <td><?php echo $_SESSION["pAddress"]?></td>
        </tr>
    </table>
    <hr>
    <table>
        <tr>
            <td><h3>Profational Information</h3></td>
        </tr>
        <tr>
            <td>Organization's Name: </td>
            <td><?php echo $_SESSION["oname"]?></td>
        </tr>
        <tr>
            <td>Organization's License: </td>
            <td><?php echo $_SESSION["linumber"]?></td>
        </tr>
        <tr>
            <td>Tax Identification Number: </td>
            <td><?php echo $_SESSION["tin"]?></td>
        </tr>
        <tr>
            <td>Organization's Address: </td>
            <td><?php echo $_SESSION["oaddress"]?></td>
        </tr>
        <tr>
            <td>Established Date: </td>
            <td><?php echo $_SESSION["edate"]?></td>
        </tr>
        <tr>
            <td>Organization's Email: </td>
            <td><?php echo $_SESSION["oemail"]?></td>
        </tr>
        <tr>
            <td>Organization's Website: </td>
            <td><a href="<?php echo $_SESSION["site"]?>"><?php echo $_SESSION["site"]?></td>
        </tr>
    </table>
</body>
</html>

