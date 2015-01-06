<?php include 'connection.php' ?>
<html>
<head>
<title>Programmers</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
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
div.divss
{
    */width:500px;margin:0 auto;*//*Uncomment this line to make the menu center-aligned.*/
    text-align:center;
    font-size:0;
    height: 25px;    
    *position:relative;*top:1px;/*Hacks for IE6 & IE7 */    

}
div.divss a
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
div.divss a:hover, div.divss a.current
{
    background:#E9ECF0;
    line-height: 25px;
    color:#000;
}
</style>



</head>
<body >

<div class="block1 p_bottom_zero">
  <div class="container_12"> 
    <!--==============================header=================================-->
    <header class="homepage">
      <h1><a class="logo" href="index.php"><span class="underline">Programmers Club</a></h1><br><br>
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="join.php">Join Club</a></li>          
          <li> <a href="login.php">Login</a></li>          
          <li><a href="projects.php">Projects</a></li>
          <li><a href="home1.php">FORUM</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </header>
  </div>
</div>
<div class="extra_container">
  <section >
    <div class="fullwidthbanner-container" style="height:450px">
      <div class="fullwidthbanner">
        <ul>
          
          <!-- FADE -->
          <li data-transition="fade">
          
            <img src="images/main.jpg" alt="">
            <div class="caption lft" data-x="700" data-y="70" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="images/prog.jpg" alt="" width="256" /></div>
            
            <div class="caption sfl big_orange_bg" data-x="10" data-y="40" data-speed="600" data-start="2000" data-easing="easeOutExpo">Programmer-An organism</div>
            <div class="caption sfl big_blue_bg" data-x="10" data-y="170" data-speed="600" data-start="2500" data-easing="easeOutExpo">
             That turns
            </div>
            
            <div class="caption sfl big_blue_bg" data-x="10" data-y="240" data-speed="600" data-start="2700" data-easing="easeOutExpo">
            Coffee into
            </div>
            
            <div class="caption sfl big_blue_bg" data-x="10" data-y="310" data-speed="600" data-start="2900" data-easing="easeOutExpo">
              Software!
            </div>
            
          </li>


          <!-- SLIDELEFT -->
          <li data-transition="slideright"> <img src="images/img2.png" alt="" />
           <div class="caption lft" data-x="700" data-y="60" data-speed="900" data-start="900" data-easing="easeOutExpo"><img src="images/responsive.png" alt="" width="256" /></div>
            <div class="caption lfr big_yellow_bg" data-x="10" data-y="50" data-speed="300" data-start="1600" data-easing="easeOutExpo">Before software </div>
            <div class="caption sfl small_white_bg" data-x="10" data-y="200" data-speed="300" data-start="1800" data-easing="easeOutExpo">can be reusable, </div>
            <div class="caption sfr small_white_bg" data-x="10" data-y="250" data-speed="300" data-start="2000" data-easing="easeOutExpo">It first has to be usable.</div>
            <div class="caption sfl small_white_bg" data-x="10" data-y="300" data-speed="300" data-start="2200" data-easing="easeOutExpo">Welcome to Programmers Club!</div>
          
          </li>
          
          <!-- SLIDERIGHT -->
          <li data-transition="slideleft"> <img src="images/img3.jpg" alt="" />
            <div class="caption lft boxshadow" data-x="10" data-y="50" data-speed="900" data-start="1300" data-easing="easeOutExpo">
             
        <iframe src="http://player.vimeo.com/video/4870899?title=0&amp;color=ff5050"  width="630" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
              
            </div>
            <div class="caption lfr big_black_bg" data-x="700" data-y="50" data-speed="300" data-start="1600" data-easing="easeOutExpo">Video Tutorials</div>
            <div class="caption lfb small_black_bg" data-x="700" data-y="130" data-speed="300" data-start="1800" data-easing="easeOutExpo">We are the Programmers <br/></div>
            
            
            <div class="caption lfb" data-x="700" data-y="210" data-speed="300" data-start="1800" data-easing="easeOutExpo"><a href="#" class="button large">We are Everywhere!!</a></div>
            
            
          </li>
          
       
          
          <!-- SLIDEUP -->
          <li data-transition="fade"> <img src="images/img4.jpg" alt="" />
            <div class="caption lft" data-x="520" data-y="20" data-speed="900" data-start="500" data-easing="easeOutBack"><img src="images/clean1.jpg" alt="" height="400" width="450" /></div>
            <div class="caption lfb big_red_bg" data-x="0" data-y="50" data-speed="900" data-start="800" data-easing="easeOutSine">Controlling complexity</div>
            
            <div class="caption lfb big_red_bg" data-x="0" data-y="150" data-speed="1100" data-start="1000" data-easing="easeOutSine">is the essence of</div>
            
            <div class="caption lfb big_red_bg" data-x="0" data-y="250" data-speed="1100" data-start="1200" data-easing="easeOutSine">computer programming.</div>
          </li>
        </ul>
       
      </div>
    </div>	
  </section>
</div>

<?php
session_start();
$name1 = $_GET['user'];
$_SESSION['name']=$name1;
$_SESSION['title']= $_GET['title'];
$_SESSION['desc']= $_GET['desc'];
$qid;
$result = mysqli_query($con,"SELECT questionid FROM question
WHERE title='$_GET[title]' AND description='$_GET[desc]' AND username='$name1'");
while($row = mysqli_fetch_array($result))
  {
  $qid=$row['questionid'];
  }
?>
<?php include 'header.php' ?>
<div class="block2">
<div class="container_12">
<section class="content">
<div class="top">
<br><br><br>
<h1>QUESTION</h1>
<p><h2>You must have an account to comment or answer question</h2></p>
<hr>
<br>
</div>
<div class="question">
<div>
<div style="display: inline-block">
<div id="ldiv">
<h3>Votes</h3>
<?php
$result = mysqli_query($con,"SELECT likes FROM question
WHERE questionid='$qid'");
while($row = mysqli_fetch_array($result))
  {
  echo "<h3 id=like style=font-family:verdana;font-size:30px>".$row['likes']."</h3>";
  }
?>
</div>
</div>
<div style="display: inline-block;position: relative;left: 5px">
<h3 style="font-size:20px"><?php echo $_GET['title']; ?></h3>
</div>
<br>
<hr>
</div>
<div class="hello_box"><?php echo $_GET['desc']; ?></div>
<br><h2 style="position: relative;left: 400px">Posted by: <?php echo $name1; ?></h2>
<hr>
<h2>Comments</h2>
<hr>
<div id="fields">
<?php
$result = mysqli_query($con,"SELECT comment,username FROM comment
WHERE questionid='$qid'");
while($row = mysqli_fetch_array($result))
  {
  echo "<p>".$row['comment']."<br>Posted by :  ".$row['username']."</p><hr>";
  }
?>
</div>
</div>
<div class="answers">
<h1>ANSWERS</h1>
<hr>
<div id="answers">
</div>
</div>
<?php
$count=0;
$result = mysqli_query($con,"SELECT answerid,answers,username FROM answer
WHERE questionid='$qid'");
while($row = mysqli_fetch_array($result))
  {
?>
<div class="answers">
<div>
<div style="display: inline-block">
<?php
echo "<br><h3>Votes</h3>";

$resultss = mysqli_query($con,"SELECT likess FROM answer
WHERE answerid='$row[answerid]'");
$rows = mysqli_fetch_array($resultss);
?>
<div id="divans<?php echo $count; ?>">
<?php
$string = "<h3 id=anslike".$count." style=font-family:verdana;font-size:30px>".$rows['likess']."</h3>";
  echo $string;
?>
</div>
</div>
<div style="display: inline-block;position: relative;left: 5px">
<?php
  echo "<p style=font-family:verdana;font-size:20px>".$row['answers']."</p><p style=font-family:verdana;font-size:15px>Posted by:  ".$row['username']."</p>";
?>
</div>
</div>
<hr>
<h2>Comments</h2>
<hr>
<div id="com<?php echo $count; ?>">
<?php
$resultss = mysqli_query($con,"SELECT comments,username FROM commanswer
WHERE answerid='$row[answerid]'");
while($roww = mysqli_fetch_array($resultss))
  {
  echo "<p>".$roww['comments']."<br>Posted by:".$roww['username']."</p><hr>";
  }
?>
</div>
</div>
<br><br>
<?php
}
?>
<hr>

</section>
</div>
</div>

<!--==============================footer=================================-->

<?php

include "foot.html";
?>