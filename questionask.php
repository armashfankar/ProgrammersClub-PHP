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
<script>
function validateForm()
{
if(document.getElementById('checkbox').checked)
{
 window.location.replace("question.php");
}
}
</script>
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
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="join.php">Join Club</a></li>          
          <li> <a href="login.php">Login</a></li>          
          <li><a href="projects.php">Projects</a></li>
          <li><a href="questionask.php">FORUM</a></li>
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



<div class="divs" id="divss">
<a href="url"><h1>Hi <?php echo $name; ?></h1></a>
</div>


<div id="content" style="background-color:#F5F5DC">
<h1>How to Ask</h1>
<p style="font-family:verdana;font-size:20px">Welcome to Study Cafe!

We’d love to help you, but the reality is that not every question gets answered. To improve your chances, here are some tips:<br>

Search, and research

Have you thoroughly searched for an answer before asking your question? Sharing your research helps everyone. 
Tell us what is your problem regarding your academic studies like any subject or any concept  
This demonstrates that you’ve taken the time to try to help yourself, it saves us from reiterating obvious answers, and
 above all, it helps you get a more specific and relevant answer!</p>
<h2>Be on Topic</h2>
<p style="font-family:verdana;font-size:20px">
Our community is defined by a specific set of topics in the help center; please stick to those topics and 
avoid asking for irrrelevant or offtopic question</p>
<h2>Be specific</h2>

<p style="font-family:verdana;font-size:20px">If you ask a vague question, you’ll get a vague answer. But if you give us details and context, we can provide a useful, relevant answer.</p>

<h2>Make it relevant to others</h2>

<p style="font-family:verdana;font-size:20px">We like to help as many people at a time as we can. Make it clear how your question is relevant to more people than just you,
 and more of us will be interested in your question and willing to look into it.</p>

<h2>Keep an open mind</h2>

<p style="font-family:verdana;font-size:20px">The answer to your question may not always be the one you wanted, but that doesn’t mean it is wrong. A conclusive answer isn’t always possible. When in doubt, ask people to cite their sources, or to explain how/where they learned something. Even if we don’t agree with you, or 
tell you exactly what you wanted to hear, remember: we’re just trying to help.</p>

<label><input type="checkbox" id="checkbox" value="value">   thanks, I will keep these tips in mind when asking</label><br>
<div style="position: relative;left: 400px">
<button onclick="validateForm()">Proceed</button>
</div>
</div>

<!--==============================footer=================================-->

<?php

include "foot.html";
?>