<?php include 'connection.php' ?>
<html>
<body>
Loading
<?php
session_start();
$name = $_SESSION['s_id'];
$titles=$_SESSION['ans'];
$desc=$_SESSION['ansid'];
$sql="UPDATE answer SET answers='$_GET[answer]' WHERE answerid='$desc'";
mysqli_query($con,$sql);
header('Location:questionshow.php?title='.urlencode($_SESSION['title']).'&desc='.urlencode($_SESSION['desc']).'&user='.urlencode($_SESSION['name']));
?>
</body>
</html>