<?php include 'connection.php' ?>
<html>
<body>
Loading
<?php
session_start();
$q=$_REQUEST["qid"];
$c=$_REQUEST["comment"];
$u=$_REQUEST["username"];
$sql="INSERT INTO commanswer (answerid,comments,username) VALUES ('$q','$c','$u')";
mysqli_query($con,$sql);
?>

</body>
</html>