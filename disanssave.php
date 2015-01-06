<?php include 'connection.php' ?>
<html>
<body>
Loading
<?php
session_start();
$q=$_REQUEST["qid"];
$sql="UPDATE answer SET likess=likess-1 WHERE answerid='$q'";
mysqli_query($con,$sql);
?>

</body>
</html>