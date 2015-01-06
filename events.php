


<!DOCTYPE html>
<html lang="en">
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
    <script language="JavaScript" type="text/JavaScript">
function form()  
{  

var fname=document.forms["rform"]["username"].value;
var passid = document.rform.Password.value;
var x=document.forms["rform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");




if (fname==null || fname=="")
  {
  alert("Name must be filled out");
  return false;
  }
  
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
	
	if(passid=="")
	{
		alert("Please Enter Password ");
		return false;
	}
 
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
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="join.php">Join Club</a></li>          
          <li> <a href="login.php">Login</a></li>          
          <li><a href="events.php">Events</a></li>
          <li><a href="home1.php">FORUM</a></li>
        </ul>
 
      </nav>
               <!--SLIDER-->
    <section class="innerpages">
      <div class="grid_12">
        <ul class="breadcrumb clearfix">
 
        </ul>
        <h2>EVENTS</h2>
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
          














<?php
include "head.html";
?>



<div class="block2">
  <div class="container_12"> 
    <!--==============================content================================-->
    <section class="content">
      <div class="wrapper">
        <article class="grid_12 last-col">
       <center>   <div class="hello_box"><U><b>NETWORKING AND WEB DEVELOPMENT WORKSHOPS</u></b></div>
        </article>
      </div><center>
	<h3><b></b></h3>
		<img src="images/workshop1.jpg" height="500" width="900">


</div>

</div>













 <!--==============================footer=================================-->

<?php

include "foot.html";
?>
 
