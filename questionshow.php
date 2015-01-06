<?php
session_start();
?>
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
<script>
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
function CommentSubmitted()
{

var Values=document.getElementById('comment').value;
fDiv = document.getElementById('fields');
element = document.getElementById('comment');
fDiv.removeChild(element);
document.getElementById('comments').innerHTML="comment";
document.getElementById('comments').onclick=validateForm;
var qid = "<?php echo $qid; ?>";
var name = "<?php echo $name; ?>";
document.getElementById('fields').innerHTML=document.getElementById('fields').innerHTML+"<p>"+Values+"<br>Posted by : "+name+"</p>";
xmlhttp.open("POST","commentsave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid+"&comment="+Values+"&username="+name);
}
function validateanswer()
{

var Values=document.getElementById('answ').value;
var name = "<?php echo $name; ?>"
document.getElementById('answers').innerHTML=document.getElementById('answers').innerHTML+"<p style=font-family:verdana;font-size:30px>"+Values+"</p>Posted by:  "+name+"<hr>";
var qid = "<?php echo $qid; ?>";
xmlhttp.open("POST","answersave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid+"&answer="+Values+"&username="+name);
}
function likes1()
{
var Values=document.getElementById('like').innerHTML;
Values++;
fDiv = document.getElementById('ldiv');
element = document.getElementById('like');
fDiv.removeChild(element);
var qid = "<?php echo $qid; ?>";
var name = "<?php echo $name; ?>";
document.getElementById('ldiv').innerHTML="<p id=update style=font-family:verdana;font-size:30px>"+Values+"</p>";
document.getElementById('liked').innerHTML="<p style=font-family:verdana;font-size:20px>You voted for this question</p>";
 var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "UnVote");
    element.setAttribute("id", "button3");
    element.setAttribute("onclick", "decrease()");
    document.getElementById('liked').appendChild(element);
xmlhttp.open("POST","likesave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid);
xmlhttp.open("POST","votesave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid+"&name="+name+"&type=voted");
}
function dislikes1()
{
var Values=document.getElementById('like').innerHTML;
Values--;
fDiv = document.getElementById('ldiv');
element = document.getElementById('like');
fDiv.removeChild(element);
var qid = "<?php echo $qid; ?>";
var name = "<?php echo $name; ?>";
document.getElementById('ldiv').innerHTML="<p id=update style=font-family:verdana;font-size:30px>"+Values+"</p>";
document.getElementById('liked').innerHTML="<p style=font-family:verdana;font-size:20px>You unvoted for this question</p>";
var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "Vote");
    element.setAttribute("id", "button4");
    element.setAttribute("onclick", "increase()");
    document.getElementById('liked').appendChild(element);
xmlhttp.open("POST","dislikesave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid);
xmlhttp.open("POST","votesave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid+"&name="+name+"&type=unvoted");
}
function likes()
{
var Values=document.getElementById('like').innerHTML;
Values++;
fDiv = document.getElementById('ldiv');
element = document.getElementById('like');
fDiv.removeChild(element);
var qid = "<?php echo $qid; ?>";
var name = "<?php echo $name; ?>";
document.getElementById('ldiv').innerHTML="<p id=update style=font-family:verdana;font-size:30px>"+Values+"</p>";
document.getElementById('liked').innerHTML="<p style=font-family:verdana;font-size:20px>You voted for this question</p>";
document.getElementById('lincr').style.visibility="hidden";
document.getElementById('dincr').style.visibility="hidden";
 var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "UnVote");
    element.setAttribute("id", "button3");
    element.setAttribute("onclick", "decrease()");
    document.getElementById('liked').appendChild(element);
xmlhttp.open("POST","likesave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid);
xmlhttp.open("POST","votesave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid+"&name="+name+"&type=voted");
}
function dislikes()
{
var Values=document.getElementById('like').innerHTML;
Values--;
fDiv = document.getElementById('ldiv');
element = document.getElementById('like');
fDiv.removeChild(element);
var qid = "<?php echo $qid; ?>";
var name = "<?php echo $name; ?>";
document.getElementById('ldiv').innerHTML="<p id=update style=font-family:verdana;font-size:30px>"+Values+"</p>";
document.getElementById('liked').innerHTML="<p style=font-family:verdana;font-size:20px>You unvoted for this question</p>";
document.getElementById('lincr').style.visibility="hidden";
document.getElementById('dincr').style.visibility="hidden";
var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "Vote");
    element.setAttribute("id", "button4");
    element.setAttribute("onclick", "increase()");
    document.getElementById('liked').appendChild(element);
xmlhttp.open("POST","dislikesave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid);
xmlhttp.open("POST","votesave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid+"&name="+name+"&type=unvoted");
}
function decrease()
{
var Values=document.getElementById('update').innerHTML;
Values--;
document.getElementById('update').innerHTML=Values;
document.getElementById('liked').innerHTML="<p id=update style=font-family:verdana;font-size:20px>You unvoted for this question</p>";
var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "Vote");
    element.setAttribute("id", "button5");
    element.setAttribute("onclick", "increase()");
    document.getElementById('liked').appendChild(element);
var qid = "<?php echo $qid; ?>";
var name = "<?php echo $name; ?>";
xmlhttp.open("POST","dislikesave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid);
xmlhttp.open("POST","votesave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid+"&name="+name+"&type=unvoted");
}
function increase()
{
var Values=document.getElementById('update').innerHTML;
Values++;
document.getElementById('update').innerHTML=Values;
document.getElementById('liked').innerHTML="<p id=update style=font-family:verdana;font-size:20px>You voted for this question</p>";
var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "UnVote");
    element.setAttribute("id", "button6");
    element.setAttribute("onclick", "decrease()");
    document.getElementById('liked').appendChild(element);
var qid = "<?php echo $qid; ?>";
var name = "<?php echo $name; ?>";
xmlhttp.open("POST","likesave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid);
xmlhttp.open("POST","votesave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+qid+"&name="+name+"&type=voted");
}
function CommentsSubmitted(c,a,b)
{

var Values=document.getElementById('commentss').value;
fDiv = document.getElementById(a);
element = document.getElementById('commentss');
fDiv.removeChild(element);
document.getElementById(b).innerHTML="comment";
document.getElementById(b).onclick=function(){validatesForm(c,a,b)};
var qid = c;
var name = "<?php echo $name; ?>"; 
document.getElementById(a).innerHTML=document.getElementById(a).innerHTML+"<p>"+Values+"<br>Posted by : "+name+"</p>";
xmlhttp.open("POST","comanssave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+c+"&comment="+Values+"&username="+name);
}
</script>

<div class="block2">
<div class="container_12">
<section class="content">
<div class="divs" id="divss">
<a href="url"><h1>Hi <?php echo $name; ?></h1></a>
</div>
<div class="divss" style="position: relative;margin-left: 500px">
<a href="question.php"><h1>ASK QUETION</h1></a>
</div>


<div class="top">
<h1 style="font-size:30px" >QUESTION</h1>
<hr>
<br>
</div>
<div class="question">
<div>
<div style="display: inline-block">
<?php
$sql="SELECT username,type FROM vote WHERE questionid='$qid' AND username='$name'";
$result =mysqli_query($con,$sql);
$rows = mysqli_fetch_array($result);
$num_results = mysqli_num_rows($result);
if($num_results > 0)
{

}
else
{ 
echo "<img id=lincr src=thumbsup.jpg width=40 height=40 onclick=likes();>";
}
?>

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
<div style="display: inline-block;position: relative;left: 40px">
<h1 style="font-size:25px"><?php echo $_GET['title']; ?></h1>
</div>
<br>
<?php
if($num_results < 1)
{
echo "<img id=dincr src=thumbsdown.jpg width=40 height=40 onclick=dislikes();>";
}
?>
<hr>
</div>
<p style="font-family:verdana;font-size:20px"><?php echo $_GET['desc']; ?></p>
<br><h2 style="position: relative;left: 400px">Posted by: <?php echo $name1; ?></h2>
<hr>
<div id="liked">
<?php
if($num_results > 0)
{
echo "<p style=font-family:verdana;font-size:20px>You ".$rows['type']." for this question</p>";
if($rows['type']=="voted")
{
echo "<input id=unvotes type=button value=UnVote onclick=dislikes1();>";
}
else
{
echo "<input id=votes type=button value=Vote onclick=likes1();>";
}
}
?>
</div>
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
<div style="display: inline-block">
<button id="comments" onclick="return validateForm();">Comment</button>
</div>
<?php
if($name==$name1)
{
echo "<button id=edit onclick=window.location.replace('question2edit.php')>Edit</button>";
}
else
{
$sql="SELECT questionid,username FROM viewed WHERE questionid='$qid' AND username='$name'";
$result =mysqli_query($con,$sql);
$num_results = mysqli_num_rows($result); 
if($num_results > 0)
{
}
else
{
$sqli="INSERT INTO viewed (questionid,username) VALUES ('$qid','$name')";
mysqli_query($con,$sqli);
$sql="UPDATE question SET views=views+1 WHERE questionid='$qid'";
mysqli_query($con,$sql);
}
}
?>
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
<?php
$count++;
$sql1="SELECT username,type FROM voanswer WHERE answerid='$row[answerid]' AND username='$name'";
$results =mysqli_query($con,$sql1);
$rows1 = mysqli_fetch_array($results);
$num_results = mysqli_num_rows($results);
if($num_results > 0)
{

}
else
{ 
$string = "<br><br><img id=ansimgl".$count." src=thumbsup.jpg width=40 height=40 onclick=likeans(".json_encode($row['answerid']).",".json_encode($name).",'".json_encode($count)."','divans".json_encode($count)."','ansimgl".json_encode($count)."','ansimgdl".json_encode($count)."','anslike".json_encode($count)."');>"; 
echo $string;
}
?>

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
<div style="display: inline-block;position: relative;left: 40px">
<?php
  echo "<p style=font-family:verdana;font-size:20px>".$row['answers']."</p><p style=font-family:verdana;font-size:15px>Posted by:  ".$row['username']."</p>";
?>
</div>
</div>
<?php
if($num_results < 1)
{
echo "<img id=ansimgdl".$count." src=thumbsdown.jpg width=40 height=40 onclick=dislikeans(".json_encode($row['answerid']).",".json_encode($name).",'".json_encode($count)."','divans".json_encode($count)."','ansimgl".json_encode($count)."','ansimgdl".json_encode($count)."','anslike".json_encode($count)."');>";
}
?>
<div id="<?php echo $count; ?>">
<?php
if($num_results > 0)
{
echo "<p style=font-family:verdana;font-size:20px>You ".$rows1['type']." for this answer</p>";
if($rows1['type']=="voted")
{
echo "<input id=unvotes type=button value=UnVote onclick=dislikeanss1('divans".json_encode($count)."','".json_encode($count)."',".json_encode($row['answerid']).",".json_encode($name).",'anslike".json_encode($count)."');>";
}
else
{
echo "<input id=votes type=button value=Vote onclick=likeanss1('divans".json_encode($count)."','".json_encode($count)."',".json_encode($row['answerid']).",".json_encode($name).",'anslike".json_encode($count)."');>";
}
}
?>
</div>
<hr>
<h2>Comments</h2>
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
<button id="commentans<?php echo $count; ?>" onclick="validatesForm(<?php echo $row['answerid']; ?>,'com<?php echo json_encode($count); ?>','commentans<?php echo json_encode($count); ?>');">Comment</button>
<hr>
<?php
if($name==$row['username'])
{
$_SESSION['ans']= $row['answers'];
$_SESSION['ansid']= $row['answerid'];
echo "<button id=edit onclick=window.location.replace('ansedit.php')>Edit</button>";
}
?>
</div>
<div class="gap">
<br><br>
</div>
<?php
  }
?>
<div class="ans">
<?php
if($name==$name1)
{
}
else
{
echo "<h1>YOUR ANSWER</h1>";
?>
<div>
<?php
echo "<textarea id=answ rows=10 cols=100></textarea>";
?>
</div>
<div style="position: relative;left: 40px">
<button id="answer" onclick="return validateanswer();">Post Answer</button>;
<?php
}
?>
</div>
</div>
<script>
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
function validatesForm(c,a,b)
{

fDiv = document.getElementById(a);
 
	field = document.createElement('textarea');
        field.setAttribute('id', 'commentss');
	field.setAttribute('name', 'test');
        field.setAttribute('rows', '2');
        field.setAttribute('cols', '100');
	fDiv.appendChild(field);
        document.getElementById(b).innerHTML="Add comment";
       document.getElementById(b).onclick=function(){CommentsSubmitted(c,a,b)};
}
function likeanss1(p,a,ans,use,ltext)
{
var Values=document.getElementById(ltext).innerHTML;
Values++;
fDiv = document.getElementById(p);
element = document.getElementById(ltext);
fDiv.removeChild(element);
var qid = ans;
var name = use;
document.getElementById(p).innerHTML="<p id=update"+a+" style=font-family:verdana;font-size:30px>"+Values+"</p>";
document.getElementById(a).innerHTML="<p style=font-family:verdana;font-size:20px>You voted for this question</p>";
 var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "UnVote");
    element.setAttribute("id", "butto");
    element.addEventListener('click', function(){
    decreasea("update"+a,a,ans,use);});
    document.getElementById(a).appendChild(element);
xmlhttp.open("POST","lanssave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans);
xmlhttp.open("POST","ansvosave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans+"&name="+use+"&type=voted");
}
function dislikeanss1(p,a,ans,use,ltext)
{
var Values=document.getElementById(ltext).innerHTML;
Values--;
fDiv = document.getElementById(p);
element = document.getElementById(ltext);
fDiv.removeChild(element);
var qid = ans;
var name = use;
document.getElementById(p).innerHTML="<p id=update"+a+" style=font-family:verdana;font-size:30px>"+Values+"</p>";
document.getElementById(a).innerHTML="<p style=font-family:verdana;font-size:20px>You unvoted for this question</p>";
var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "Vote");
    element.setAttribute("id", "butt");
    element.addEventListener('click', function(){
    increasea("update"+a,a,ans,use);});
    document.getElementById(a).appendChild(element);
xmlhttp.open("POST","disanssave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans);
xmlhttp.open("POST","ansvosave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans+"&name="+use+"&type=unvoted");
}
function likeans(ans,use,c,t,limg,dimg,ltext)
{
l=ltext;
var Values=document.getElementById(ltext).innerHTML;
Values++;
fDiv = document.getElementById(t);
element = document.getElementById(ltext);
fDiv.removeChild(element);
var aid = ans;
var name = use;
document.getElementById(t).innerHTML="<p id=update"+c+" style=font-family:verdana;font-size:30px>"+Values+"</p>";
document.getElementById(c).innerHTML="<p style=font-family:verdana;font-size:20px>You voted for this answer</p>";
document.getElementById(limg).style.visibility="hidden";
document.getElementById(dimg).style.visibility="hidden";
 var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "UnVote");
    element.setAttribute("id", "button0");
    element.addEventListener('click', function(){
    decreasea("update"+c,c,ans,use);});
    document.getElementById(c).appendChild(element);
xmlhttp.open("POST","lanssave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans);
xmlhttp.open("POST","ansvosave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans+"&name="+use+"&type=voted");
}
function dislikeans(ans,use,c,t,limg,dimg,ltext)
{
var Values=document.getElementById(ltext).innerHTML;
Values--;
fDiv = document.getElementById(t);
element = document.getElementById(ltext);
fDiv.removeChild(element);
var aid = ans;
var name = use;
document.getElementById(t).innerHTML="<p id=update"+c+" style=font-family:verdana;font-size:30px>"+Values+"</p>";
document.getElementById(c).innerHTML="<p style=font-family:verdana;font-size:20px>You unvoted for this answer</p>";
document.getElementById(limg).style.visibility="hidden";
document.getElementById(dimg).style.visibility="hidden";
 var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "Vote");
    element.setAttribute("id", "button9");
    element.addEventListener('click', function(){
    increasea("update"+c,c,ans,use);});
    document.getElementById(c).appendChild(element);
xmlhttp.open("POST","disanssave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans);
xmlhttp.open("POST","ansvosave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans+"&name="+use+"&type=voted");
}
function decreasea(id,div,ans,use)
{
var Values=document.getElementById(id).innerHTML;
Values--;
document.getElementById(id).innerHTML=Values;
document.getElementById(div).innerHTML="<p id="+id+" style=font-family:verdana;font-size:20px>You unvoted for this question</p>";
var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "Vote");
    element.setAttribute("id", "button8");
    element.addEventListener('click', function(){
    increasea(id,div,ans,use);});
    document.getElementById(div).appendChild(element);
var qid = ans;
var name = use;
xmlhttp.open("POST","disanssave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans);
xmlhttp.open("POST","ansvosave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans+"&name="+use+"&type=unvoted");
}
function increasea(id,div,ans,use)
{
var Values=document.getElementById(id).innerHTML;
Values++;
document.getElementById(id).innerHTML=Values;
document.getElementById(div).innerHTML="<p id="+id+" style=font-family:verdana;font-size:20px>You voted for this question</p>";
var element = document.createElement("input");
    element.setAttribute("type", "button");
    element.setAttribute("value", "UnVote");
    element.setAttribute("id", "button-");
    element.addEventListener('click', function(){
    decreasea(id,div,ans,use);});
    document.getElementById(div).appendChild(element);
var qid = ans;
var name = use;
xmlhttp.open("POST","lanssave.php",false);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans);
xmlhttp.open("POST","ansvosave.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("qid="+ans+"&name="+use+"&type=voted");
}
</script>
</section>
</div>
</div>

<!--==============================footer=================================-->

<?php

include "foot.html";
?>