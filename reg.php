<?php
$host="localhost";
$user="root";
$pass="root";
$con = mysql_connect("$host","$user","$pass");


if (!$con)
  {

echo "Error in DBConnect() = " . mysql_get_last_message();
  die('Could not connect: ' . mysql_error());

  }



mysql_select_db("pclub", $con);
if ($_POST['Password'])
{
$encnew = $_POST['Password'];
$sql="INSERT INTO user (username,Password,email,class) 
VALUES
('$_POST[username]',password('$encnew'),'$_POST[email]','$_POST[class]')"; 
}

if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
header('Location:login.php');
mysql_close($con)
?> 
