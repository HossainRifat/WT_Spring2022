<!DOCTYPE html>
<html>
<body>

<h2>Registration Form</h2>

<form action="" method="post" enctype="multipart/form-data">

<table>
<tr>
<td>First Name:</td>
<td><input type="text" name="fname"></td>
</tr>

<tr>
<td>Last name:</td>
  <td><input type="text" name="lname"></td>
</tr>

<tr>
<td>Age:</td>
<td><input type="number" name="age"></td>
</tr>

<tr>
  <td>Designation:</td>
  <td><input type="radio" name = "language" value="r1">Junior Programmer
  <input type="radio" name = "language" value="r2">Senior Programmer
  <input type="radio" name = "language" value="r3">Project Director</td>
</tr>
<tr>
  <td>Preferred language:</td>
  <td><input type="checkbox" name="language4">Java
  <input type="checkbox" name="language5">C++
  <input type="checkbox" name="language6">PHP</td>
</tr>
<tr>
<td>Email:</td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
<td>Please Choose a file</td>
<td><input type="file" name="myfile"></td>
</tr>
<tr> 
<td><input type="submit" name="Submit">
<input type="reset" name="Reset"></td>
</tr>
</table>
</body>
</html>

<?php
/*$myfile = fopen("newfile.txt","w") or die("unable to open file!");
$text = "jane Doe\n";
fwrite($myfile, $text);
$text = "jone doe";
fwrite($myfile, $text);
fclose($myfile);


$simplexml= new SimpleXMLElement('<?xml 
version="1.0"?><books/>');
$book1= $simplexml->addChild('book');
$book1->addChild("Booktitle", "The Wandering Oz");
$book1->addChild("PublicationDate", 2007);
$book2= $simplexml->addChild('book');
$book2->addChild("Booktitle", "The Roaming Fox");
$book2->addChild("PublicationDate", 2009); 
file_put_contents('books.xml', $simplexml->asXML());
*/

require "../control/results.php";
?>
  

