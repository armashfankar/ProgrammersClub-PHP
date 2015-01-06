<?php include 'connection.php' ?>
<html>
<body>
Loading
<?php
session_start();
$q=$_REQUEST["qid"];
$c=$_REQUEST["name"];
$l=$_REQUEST["type"];
$sqli="SELECT questionid,username FROM vote WHERE questionid='$q' AND username='$c'";
$result =mysqli_query($con,$sqli);
$num_results = mysqli_num_rows($result); 
if($num_results > 0)
{
$sqlo="UPDATE vote SET type='$l' WHERE questionid='$q' AND username='$c'";
mysqli_query($con,$sqlo);
}
else
{
$sql="INSERT INTO vote (questionid,username,type) VALUES ('$q','$c','$l')";
mysqli_query($con,$sql);
}
?>

</body>
</html>