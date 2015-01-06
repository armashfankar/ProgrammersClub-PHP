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
$sql="UPDATE question SET title='$_POST[title]' WHERE questionid='$rows[questionid]'";
mysqli_query($con,$sql);
$sql="UPDATE question SET description='$_POST[desc]' WHERE questionid='$rows[questionid]'";
mysqli_query($con,$sql);
header('Location:questiondisplay.php?title='.urlencode($_POST['title']).'&desc='.urlencode($_POST['desc']));
?>
</body>
</html>