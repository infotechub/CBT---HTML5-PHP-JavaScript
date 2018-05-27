<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/joziwebs/css/style.css">
  <link rel="stylesheet" href="assets/joziwebs-gallery/style.css">
  <link rel="stylesheet" href="assets/joziwebs-slider/style.css">
  <link rel="stylesheet" href="assets/joziwebs/css/mbr-additional.css" type="text/css">
  
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript" src="style/js/jquery-1.6.4.min.js"></script>
 <script language="javascript">
$(document).ready(function() {
$('#myForm').on('submit', function(event) {

$.ajax({
url:'test2.php', // target file
data: $(this).serialize(), //translate data structure
type: 'POST',

error: function(data) {
$("#error").show(). fadeOut (5000); //===show error message====
}, 
success: function(data){

console.log(data);
$("#success").show(); //show success message==
}

});
event.preventDefault(); // To avoid page refresh and fire the event "click"
});
});
</script>
<SCRIPT type="text/javascript">
<!--
$("input[name=chkEle]").change
(function(e) {
    $("#divEle").toggle();
});

pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){

$("#answer1").change(function() { 

var usr = $("#answer1").val();

if(usr.length >= 0)
{
$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "answer1="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#answer1").removeClass('object_error'); // if necessary
		$("#answer1").addClass("object_ok");
		$(this).html('<font color="green">Congrats, Correct Answer!<img src="tick.gif" align="absmiddle"></font>');
	}  
	else  
	{  
		$("#answer1").removeClass('object_ok'); // if necessary
		$("#answer1").addClass("object_error");
		$(this).html('<font color="red">Oops, Wrong Answer!<img src="tick.gif" align="absmiddle"></font>');
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#status").html('Answer should have at least <strong>1</strong> characters.');
	$("#answer1").removeClass('object_ok'); // if necessary
	$("#answer1").addClass("object_error");
	}

});

});

var mins
var secs;

function cd() {
 	mins = 1 * m("2"); // change minutes here
 	secs = 0 + s(":01"); // change seconds here (always add an additional second to your total)
 	redo();
}

function m(obj) {
 	for(var i = 0; i < obj.length; i++) {
  		if(obj.substring(i, i + 1) == ":")
  		break;
 	}
 	return(obj.substring(0, i));
}

function s(obj) {
 	for(var i = 0; i < obj.length; i++) {
  		if(obj.substring(i, i + 1) == ":")
  		break;
 	}
 	return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
 	var disp;
 	if(mins <= 9) {
  		disp = " 0";
 	} else {
  		disp = " ";
 	}
 	disp += mins + ":";
 	if(secs <= 9) {
  		disp += "0" + secs;
 	} else {
  		disp += secs;
 	}
 	return(disp);
}

function redo() {
 	secs--;
 	if(secs == -1) {
  		secs = 59;
  		mins--;
 	}
 	document.cd.disp.value = dis(mins,secs); // setup additional displays here.
 	if((mins == 0) && (secs == 0)) {
  		window.alert("Time is up. Press OK to continue."); // change timeout message as required
  		window.location = "phaseout.php" // redirects to specified page once timer ends and ok button is pressed
 	} else {
 		cd = setTimeout("redo()",1000);
 	}
}

function init() {
  cd();
}
window.onload = init;

$("input[name=chkEle]").change
(function(e) {
    $("#divEle").toggle();
});
//-->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
function addChar(input, character) {
	if(input.value == null || input.value == "0")
		input.value = character
	else
		input.value += character
}

function cos(form) {
	form.display.value = Math.cos(form.display.value);
}

function sin(form) {
	form.display.value = Math.sin(form.display.value);
}

function tan(form) {
	form.display.value = Math.tan(form.display.value);
}

function sqrt(form) {
	form.display.value = Math.sqrt(form.display.value);
}

function ln(form) {
	form.display.value = Math.log(form.display.value);
}

function exp(form) {
	form.display.value = Math.exp(form.display.value);
}

function deleteChar(input) {
	input.value = input.value.substring(0, input.value.length - 1)
}

function changeSign(input) {
	if(input.value.substring(0, 1) == "-")
		input.value = input.value.substring(1, input.value.length)
	else
		input.value = "-" + input.value
}

function compute(form) {
	form.display.value = eval(form.display.value)
}

function square(form) {
	form.display.value = eval(form.display.value) * eval(form.display.value)
}

function checkNum(str) {
	for (var i = 0; i < str.length; i++) {
		var ch = str.substring(i, i+1)
		if (ch < "0" || ch > "9") {
			if (ch != "/" && ch != "*" && ch != "+" && ch != "-" && ch != "."
				&& ch != "(" && ch!= ")") {
				alert("invalid entry!")
				return false
				}
			}
		}
		return true
}
</SCRIPT>
  <style type="text/css">
<!--
.style1 {
	color: #000000;
	font-size: 12px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
--><style type="text/css">
<!--
.style5 {
	font-size: 14px;
	font-weight: bold;
}
.style7 {font-size: 12px}
-->#txt {
  border:none;
  font-family:verdana;
  font-size:16pt;
  font-weight:bold;
  border-right-color:#FFFFFF
}
<!--
.style3 {
	font-size: xx-large;
	font-family: "Bookman Old Style", "Bradley Hand ITC", "Britannic Bold";
	color: #FFFFFF;
}
-->

        
  </style>
</head>
<body>
<section class="engine"><a rel="nofollow" href="http://jozionline.com">Responsive Website Templates</a></section>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <div align="left">
                      <h4><a class="mbr-brand__name" href="http://jozionline.com">
                        <span class="mbr-brand__logo"><img src="assets/images/fav68x74-139.jpg" alt="" align="left" class="mbr-navbar__brand-img mbr-brand__img"></span><span class="mbr-brand__name style1">Royal-Rainbow High School</span> </a> </h4>                 ...excellence in all things                    </div>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"> 
                           <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="index.php"><img src="images/home.jpg" alt="Home Page" longdesc="Home.php" /></a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="elibrary.php"><img src="images/elib.png" alt="E-library" longdesc="elibrary.php" /></a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="eclass.php"><img src="images/eclass.jpg" alt="E-class" longdesc="eclass.php" /></a></li>  <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="score.php"><img src="images/maths.jpg" alt="Maths Score" longdesc="score.php" /></a><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="logout.php"><img src="images/logout.jpg" alt="Log Out" longdesc="logout.php" /></a></li></ul></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<div class='benefts'>
<section class="mbr-section" id="header3-3">
    <div class="mbr-section__container container mbr-section__container--first">
        
    </div>
</section>


</div><div class='benefts'><div class="recommended_items"><?php
include ("debase.php");
@$pincode=$_COOKIE['pincode'];
@$pincode=$_COOKIE['pincode'];
if ($pincode =='')
{
header ("Location: home.php");
exit();
}
?>
<!--recommended_items-->
						<h4 class="title text-center"><marquee><img alt="" src="images/manrunning.gif"> Welcome to the Web browser version of Jozi Computer-Based Test Platform. We also have desktop version and smart phones versions of this interactive application.</marquee></h4>
						
						<!--/recommended_items-->
<div class='benefts'>
<section class="content-2 col-3" id="features1-6" style="background-color: rgb(255, 255, 255);">
   <form name="cd">Minutes Left:
<input id="txt" readonly="true" type="text" value="2:00" border="0" name="disp">
</form> <p align='right'>Click <a href='javascript:void(0);' onClick='javascript:Start ('calculator.php');'>here</a> to make use of in built calculator.</p>


<?php
include ("debase.php");


@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$number=$_COOKIE['number'];
@$ans10=$_COOKIE['ans10'];
@$ans1=$_COOKIE['ans1'];
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$number1=$_REQUEST['number1'];
@$ans1=$_REQUEST['ans1'];

if ($ans1 =='ans1')
{
setcookie ("ans1", $ans1, time() + 1200);
$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
$n=mysql_num_rows($r);
if ($n>0)
@$instructions=mysql_result($r,$row,"instructions");
@$question2=mysql_result($r,$row,"question2");
@$answer2=mysql_result($r,$row,"answer2");
@$fake3=mysql_result($r,$row,"fake3");
@$fake4=mysql_result($r,$row,"fake4");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");

@$number1=$_COOKIE['number1'];
@$number2=$_COOKIE['number2'];
@$number3=$_COOKIE['number3'];
@$number4=$_COOKIE['number4'];
@$number5=$_COOKIE['number5'];
@$number6=$_COOKIE['number6'];
@$number7=$_COOKIE['number7'];
@$number8=$_COOKIE['number8'];
@$number9=$_COOKIE['number9'];
@$number10=$_COOKIE['number10'];

{
 echo "<div id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>2). &nbsp;&nbsp;&nbsp;<b>$question2</b></p>
     <p align='center'>
      a). <input type='radio' name='ans2' value='$answer2' />
      $answer2 &nbsp;&nbsp,</p><p align='center'>
     b). <input type='radio' name='ans2' value='$fake3' />
      $fake3 &nbsp;&nbsp,</p><p align='center'>
      c). <input type='radio' name='ans2' value='$fake4' />
      $fake4<hr/><br><input type='hidden' name='number2' value='2' /></p><p align='center'>
                   <button id='Submit' type='button'>Next Question>>>></button></p></div>";
	  exit();
}
if ($number2 =='2')
{
 echo "<div id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>3. &nbsp;&nbsp;&nbsp;<b>$question3</b></p>
     <p align='center'>
      (a) <input type='radio' name='ans3' value='$answer3' />
      $ans1 &nbsp;&nbsp,</p><p align='center'>
     (b) <input type='radio' name='ans3' value='$fake5' />
      $fake5 &nbsp;&nbsp,</p><p align='center'>
      (c) <input type='radio' name='ans3' value='$fake6' />
      $fake6<hr/><br><input type='hidden' name='number3' value='3' /></p><p align='center'>
                   <button id='Submit' type='button'>Next Question>>>></button></p></div>";
	  exit();
}
if ($number3 =='3')
{
 echo "<div id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>4). &nbsp;&nbsp;&nbsp;<b>$question4</b>
     </p><p align='center'>
      a). <input type='radio' name='ans4' value='$answer4' />
      $answer4 &nbsp;&nbsp,</p><p align='center'>
     b). <input type='radio' name='ans4' value='$fake7' />
      $fake7 &nbsp;&nbsp,</p><p align='center'>
      c). <input type='radio' name='ans4' value='$fake8' />
      $fake8<hr/><br><input type='hidden' name='number4' value='4' /></p><p align='center'>
                   <button id='Submit' type='button'>Next Question>>>></button></p></div>";
	  exit();
}
if ($number4 =='4')
{
 echo "<div id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>5). &nbsp;&nbsp;&nbsp;<b>$question5</b></p>
     <p align='center'>
      a). <input type='radio' name='ans5' value='$answer5' />
      $answer5 &nbsp;&nbsp,</p><p align='center'>
     b). <input type='radio' name='ans5' value='$fake9' />
      $fake9 &nbsp;&nbsp,</p><p align='center'>
      c). <input type='radio' name='ans5' value='$fake10' />
      $fake10<hr/><br><input type='hidden' name='number5' value='5' /></p><p align='center'>
                  <button id='Submit' type='button'>Next Question>>>></button></p></div>";
	  exit();
}
if ($number5 =='5')
{
echo "<div id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>6). &nbsp;&nbsp;&nbsp;<b>$question6</b></p>
     <p align='center'>
      a). <input type='radio' name='ans6' value='$answer6' />
      $answer6 &nbsp;&nbsp,</p><p align='center'>
     b). <input type='radio' name='ans6' value='$fake11' />
      $fake11 &nbsp;&nbsp,</p><p align='center'>
      c). <input type='radio' name='ans6' value='$fake12' />
      $fake12<hr/><br><input type='hidden' name='number6' value='6' /></p><p align='center'>
                  <button id='Submit' type='button'>Next Question>>>></button></p></div>";
	  exit();
}
if ($number6 =='6')
{
echo "<div id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>7). &nbsp;&nbsp;&nbsp;<b>$question7</b></p>
     <p align='center'>
      a). <input type='radio' name='ans7' value='$answer7' />
      $answer7 &nbsp;&nbsp,</p><p align='center'>
     b). <input type='radio' name='ans7' value='$fake13' />
      $fake13 &nbsp;&nbsp,</p><p align='center'>
      c). <input type='radio' name='ans7' value='$fake14' />
      $fake14<hr/><br><input type='hidden' name='number7' value='7' /></p><p align='center'>
                   <button id='Submit' type='button'>Next Question>>>></button></p></div>";
	  exit();
}
if ($number7 =='7')
{
echo "<div id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>8). &nbsp;&nbsp;&nbsp;<b>$question8</b></p>
     <p align='center'>
      a). <input type='radio' name='ans8' value='$answer8' />
      $answer8 &nbsp;&nbsp,</p><p align='center'>
     b). <input type='radio' name='ans8' value='$fake15' />
      $fake15 &nbsp;&nbsp,</p><p align='center'>
      c). <input type='radio' name='ans8' value='$fake16' />
      $fake16<hr/><br><input type='hidden' name='number8' value='8' /></p><p align='center'>
                  <button id='Submit' type='button'>Next Question>>>></button></p></div>";
	  exit();
}
if ($number8 =='8')
{
echo "<div id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>9). &nbsp;&nbsp;&nbsp;<b>$question9</b></p>
     <p align='center'>
      a). <input type='radio' name='ans9' value='$answer9' />
      $answer9 &nbsp;&nbsp,</p><p align='center'>
     b). <input type='radio' name='ans9' value='$fake17' />
      $fake17 &nbsp;&nbsp,</p><p align='center'>
      c). <input type='radio' name='ans9' value='$fake18' />
      $fake18<hr/><br><input type='hidden' name='number9' value='9' /></p><p align='center'>
                   <button id='Submit' type='button'>Next Question>>>></button></p></div>";
	  exit();
}
if ($number9 =='9')
{
echo "<div id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>10). &nbsp;&nbsp;&nbsp;<b>$question10</b></p>
     <p align='center'>
      a). <input type='radio' name='ans10' value='$answer10' />
      $answer10 &nbsp;&nbsp,</p><p align='center'>
     b). <input type='radio' name='ans10' value='$fake19' />
      $fake19 &nbsp;&nbsp,</p><p align='center'>
      c). <input type='radio' name='ans10' value='$fake20' />
      $fake20<hr/><br><input type='hidden' name='number10' value='10' /></p><p align='center'>
                   <button id='Submit' type='button'>Next Question>>>></button></p></div>";
	  exit();
}
if ($number10 =='10')
{
$sql1="INSERT INTO mathanswers(ans1, ans2, ans3, ans4, ans5, ans6, ans7, ans8, ans9, ans10, weeks, class, pincode) VALUES ('$ans1', '$ans2', '$ans3', '$ans4', '$ans5', '$ans6', '$ans7', '$ans8', '$ans9', '$ans10','$weeks', '$class', '$pincode')";
if (mysql_query($sql1))
{
header ("Location: myperformance1.php");
exit (); 
}
}
}
?>

    
</section></div>





<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-10" style="background-color: rgb(0, 0, 0);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p><script language="JavaScript">
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('Copyright © '+year+' Royal Rainbow High School - All Rights Reserved');
//--></script>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Powered by <a href='http://www.jozionline.com'>Jozi Website Templates</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="faq.php" target="_blank">FAQ</a></p>
            </div>
        </div>
    </div>
</section>
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="assets/jquery-parallax/jquery.parallax.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/joziwebs/js/script.js"></script>
  <script src="assets/joziwebs-gallery/script.js"></script>
</body>
</html>