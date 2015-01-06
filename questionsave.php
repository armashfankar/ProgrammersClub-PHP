<?php include 'connection.php' ?>
<html>
<body>
Loading
<?php
session_start();
$name = $_SESSION['s_id'];
$titles=$_SESSION['title'];
$desc=$_SESSION['desc'];
$sqli="SELECT questionid FROM question WHERE title='$titles' AND username='$name' AND description='$desc'";
$result =mysqli_query($con,$sqli);
$rows = mysqli_fetch_array($result);
$sql="UPDATE question SET title='$_GET[title]' WHERE questionid='$rows[questionid]'";
mysqli_query($con,$sql);
$sql="UPDATE question SET description='$_GET[desc]' WHERE questionid='$rows[questionid]'";
mysqli_query($con,$sql);
header('Location:questionshow.php?title='.urlencode($_GET['title']).'&desc='.urlencode($_GET['desc']).'&user='.urlencode($name));
?>
</body>
</html>