<?php include 'connection.php' ?>
<html>
<body>
Loading
<?php
session_start();
$q=$_REQUEST["qid"];
$sql="UPDATE question SET likes=likes-1 WHERE questionid='$q'";
mysqli_query($con,$sql);
?>

</body>
</html>