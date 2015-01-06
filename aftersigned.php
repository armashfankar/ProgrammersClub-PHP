<?php include 'connection.php' ?>
<html>
<head>
<title>Programmers</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="icon" href="images/t.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/home-slider01.js"></script>
<script type="text/javascript" src="js/home-slider02.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/html5shiv.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
   	<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
    <![endif]-->
<style>
div.divs a
{
    display: inline-block;
    padding: 0 20px;
    margin-right:1px; /* It specifies the distance between each tab */
    background-image: url("pink.jpg");
    color:Black;
    text-decoration:none;
    font: normal 12px Arial;
    line-height: 24px;
    border:1px solid #CAD0DB;
    border-bottom:0;
    color:Black;
    vertical-align:top;/*ChangeSet#2*/
    text-decoration:none;
}
div.divss a
{
    display: inline-block;
    padding: 0 20px;
    margin-right:1px; /* It specifies the distance between each tab */
    background-image: url("yellow.jpg");
    color:Black;
    text-decoration:none;
    font: normal 12px Arial;
    line-height: 24px;
    border:1px solid #CAD0DB;
    border-bottom:0;
    color:Black;
    vertical-align:top;/*ChangeSet#2*/
    text-decoration:none;
}
div.divss a:hover, div.divss a.current
{
    background:#E9ECF0;
    line-height: 25px;
    color:#000;
}
</style>
</head>
<body>
<?php
session_start();
$name = $_SESSION['s_id'];
?>
<div class="block1 p_bottom_zero">
  <div class="container_12"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <h1><a class="logo" href="index.php"><span class="underline">Programmers Club</a></h1><br><br>
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="home.php">Home</a></li>
          <li><a href="aftersigned.php">Forum</a></li>
          </li><li> <a href="events2.php">Events</a>
		  
          <li> <a href="logout.php">Logout</a>
            
          </li>
   
        </ul>
      </nav>
       <!--SLIDER-->
    <section class="innerpages">
      <div class="grid_12">
        <ul class="breadcrumb clearfix">
 
        </ul>
        <h2>FORUM</h2>
      </div>
    </section>
      <div class="clear"></div>
    </header>
  </div>
</div>

    <!--SLIDER_END--> 
      <div class="clear"></div>
    </header>
  </div>
</div>
<div class="extra_container">
  <section >
    <div class="fullwidthbanner-container" style="height:450px">
      <div class="fullwidthbanner">
        <ul>
          
        
<div class="block2">
<div class="container_12">
<section class="content">
<div class="divs" id="divss">
<a href="url"><h1>Hi <?php echo $name; ?></h1></a>
</div>
<div class="divss" style="position: relative;margin-left: 400px">
<a href="question.php"><h1>ASK QUESTION</h1></a>
<a href="aftersigned.php"><h1>MOST VOTED</h1></a>
<a href="unanswered.php"><h1>UNANSWERED</h1></a>
<a href="asked.php"><h1>ASKED QUESTION</h1></a>
</div>

<div class="divbg">
<?php
$result = mysqli_query($con,"SELECT * FROM question order by likes desc");
while($row = mysqli_fetch_array($result))
  {
?>
<div>
<div style="display: inline-block">
<div style="display: inline-block">
<?php
$result1 = mysqli_query($con,"SELECT count(answerid) FROM answer WHERE questionid='$row[questionid]'");
$rows = mysqli_fetch_array($result1);
echo "<h2>Votes</h2>";
?>
<div>
<?php
echo "<h3>".$row['likes']."</h3>";
?>
</div>
</div>
<div style="display: inline-block;position: relative;left: 40px">
<?php
echo "<h2>Answered</h2>";
?>
<div>
<?php
echo "<h3>".$rows['count(answerid)']."</h3>";
?>
</div>
</div>
<div style="display: inline-block;position: relative;left: 60px">
<?php
echo "<h2>Views</h2>";
?>
<div>
<?php
echo "<h3>".$row['views']."</h3>";
?>
</div>
</div>
</div>
<div style="display: inline-block;position: relative;left: 80px">
<?php
  echo "<a href=questionshow.php?title=".urlencode($row['title'])."&desc=".urlencode($row['description'])."&user=".urlencode($row['username'])."><div class='hello_box'>".$row['title']."</a></div>";
  echo "<h2 style=position: relative;left: 800px; font-size:20px;>Posted by : ".$row['username']."</h2>";
?>
</div>
</div>
<hr>
<?php
  }
?>
</div>
</section>
</div>
</div>

<!--==============================footer=================================-->

<?php

include "foot.html";
?>
