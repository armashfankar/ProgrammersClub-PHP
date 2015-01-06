<?php
session_start();
?>
<?php include 'connection.php' ?>
<html>
<head>
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
<script>

function validateForm()
{

fDiv = document.getElementById('fields');
 
	field = document.createElement('textarea');
        field.setAttribute('id', 'comment');
	field.setAttribute('name', 'test');
        field.setAttribute('rows', '2');
        field.setAttribute('cols', '100');
	fDiv.appendChild(field);
        document.getElementById('comments').innerHTML="Add comment";
        document.getElementById('comments').onclick=CommentSubmitted;
        document.getElementById("edits").style.visibility="hidden";
}
</script>
</head>
<body>

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
  
          
          <!-- SLIDERIGHT -->
          <li data-transition="slideleft"> <img src="images/img3.jpg" alt="" />
            <div class="caption lft boxshadow" data-x="10" data-y="50" data-speed="900" data-start="1300" data-easing="easeOutExpo">
                   
        <iframe src="http://player.vimeo.com/video/90391803?title=0&amp;color=ff5050"  width="630" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
              
            </div>
            <div class="caption lfr big_black_bg" data-x="700" data-y="50" data-speed="300" data-start="1600" data-easing="easeOutExpo">
Web Technology</div>

            <div class="caption lfb small_black_bg" data-x="700" data-y="130" data-speed="300" data-start="1800" data-easing="easeOutExpo"><a href="html-prog.php">HTML</a><br/></div>
      <div class="caption lfb small_black_bg1" data-x="700" data-y="210"data-speed="300" data-start="1800" data-easing="easeOutExpo">
<a href="php-prog.php">

PHP</a><br/></div>
            
            <div class="caption lfb" data-x="700" data-y="400" data-speed="300" data-start="1800" data-easing="easeOutExpo"><a href="#" class="button large">GET STARTED </a></div>
            
            
          </li>
          
       
          
          <!-- SLIDEUP -->
          <li data-transition="fade"> <img src="images/img4.jpg" alt="" />
            <div class="caption lft" data-x="520" data-y="20" data-speed="900" data-start="500" data-easing="easeOutBack">
  <iframe src="http://player.vimeo.com/video/90394510?title=0&amp;color=ff5050"  width="630" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
</div>
            <div class="caption lfb big_red_bg" data-x="0" data-y="50" data-speed="900" data-start="800" data-easing="easeOutSine">Application Programming</div>
            
            <div class="caption lfb small_black_bg" data-x="30" data-y="130" data-speed="1100" data-start="1000" data-easing="easeOutSine"><a href="c-prog.php">C Programming</div>
            
            <div class="caption lfb small_black_bg" data-x="30" data-y="180" data-speed="1100" data-start="1200" data-easing="easeOutSine"><a href="cplus-prog.php">C++ programming</div>
            
            <div class="caption lfb small_black_bg" data-x="30" data-y="230" data-speed="1100" data-start="1200" data-easing="easeOutSine"><a href="java-prog.php">Java programming</div>
            
            <div class="caption lfb small_black_bg" data-x="30" data-y="280" data-speed="1100" data-start="1200" data-easing="easeOutSine"><a href="python-prog.php">Python programming</div><br>
                     <div class="caption lfb" data-x="0" data-y="400" data-speed="300" data-start="1800" data-easing="easeOutExpo"><a href="#" class="button large">GET STARTED </a></div>
            
            
         
          </li>
        </ul>
       
      </div>
    </div>	
  </section>
</div>

<div class="gap">
<?php
$name = $_SESSION['s_id'];
$url=basename("$_SERVER[HTTP_REFERER]",".php");
if($url=="questionedit")
{
$_SESSION['title']= $_GET["title"];
$_SESSION['desc']= $_GET["desc"];
}
else
{
$_SESSION['title']= $_POST["title"];
$_SESSION['desc']= $_POST["desc"];
$qid;
$sql="INSERT INTO question (title,description,username) VALUES ('$_POST[title]','$_POST[desc]','$name')";
mysqli_query($con,$sql);
}
$result = mysqli_query($con,"SELECT questionid FROM question
WHERE title='$_SESSION[title]' AND description='$_SESSION[desc]' AND username='$name'");
while($row = mysqli_fetch_array($result))
  {
  $qid=$row['questionid'];
  }
?>
<script>
function CommentSubmitted()
{

var Values=document.getElementById('comment').value;
fDiv = document.getElementById('fields');
element = document.getElementById('comment');
fDiv.removeChild(element);
document.getElementById("edits").style.visibility="visible";
document.getElementById('comments').innerHTML="comment";
document.getElementById('comments').onclick=validateForm;
var qid = "<?php echo $qid; ?>";
var name = "<?php echo $name; ?>";
document.getElementById('fields').innerHTML=document.getElementById('fields').innerHTML+"<p>"+Values+"</p><br>Posted by:"+name;
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.open("POST","commentsave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid+"&comment="+Values+"&username="+name);
}
</script>

<div class="block2">
<div class="container_12">
<section class="content">
<div class="divs" id="divss">
<a href="url"><h1>Hi <?php echo $name; ?></h1></a>
</div>


<h2 style="font-size=50px;">Your question is submitted</h2> <br>  <br>
<div class="divbg">
<h1 style="font-size:25px"><?php echo $_SESSION['title']; ?></h1>
<br><br>
<p style="font-family:verdana;font-size:20px"><?php echo $_SESSION['desc']; ?></p>
<br><h2 style="position: relative;left: 400px">Posted by: <?php echo $name; ?></h2>
<?php
$con=mysqli_connect("localhost","root","root","pclub");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT comment,username FROM comment
WHERE questionid='$qid'");
while($row = mysqli_fetch_array($result))
  {
  echo "<p>"+$row['comment']+"<br>Posted by:"+$row['username']+"</p>";
  }
?>
<div id="fields">
</div>
<button id="edits" onclick=window.location.replace("questionedit.php")>Edit</button>
<div style="display: inline-block;position: relative;left: 40px">
<button id="comments" onclick="return validateForm();">Comment</button>
</div>
<div style="position: relative;left: 200px">
<h1 style="font-family:verdana"><a href="aftersigned.php">Back to Home</a></h1>
</div>
</div>
</section>
</div>
</div>

<!--==============================footer=================================-->

<?php

include "foot.html";
?>