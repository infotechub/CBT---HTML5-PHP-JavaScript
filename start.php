<?php

include ("debase.php"); 

@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];

if ($pincode == '' )
{
header ("Location: index2.php");
exit();   
}

?><!DOCTYPE html>
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
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript" src="style/js/jquery-1.6.4.min.js"></script>
<script language="javascript">
window.history.forward();
	function noBack() { window.history.forward(); }

window.history.forward(1);
document.attachEvent("onkeydown", my_onkeydown_handler);
function my_onkeydown_handler()
{
switch (event.keyCode)
{
case 116 : // 'F5'
event.returnValue = false;
event.keyCode = 0;
//window.status = "We have disabled F5";
break;
}
} 
document.onmousedown=disableclick;
status="Right Click is not allowed";
function disableclick(e)
{
if(event.button==2)
{
alert(status);
return false;	
}
}

</script>
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

<script>

var bgcolorlist=new Array("#DFDFFF", "#FFFFBF", "#80FF80", "#EAEAFF", "#C9FFA8", "#F7F7F7", "#FFFFFF", "#DDDD00")

document.body.style.background=bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]
</script>
 
<SCRIPT language=JavaScript>
 <!-- 
function Start(page)
 {
 OpenWin = this.open(page, "CtrlWindow","toolbar=No,menubar=No,location=No,scrollbars=No, directories=No, copyhistory=No' resizable=No,status=No,width=800,height=600,left=200,top=250,");
 }


var message = "Not Allowed!";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

document.onmousedown = rtclickcheck;

</SCRIPT>

  <style type="text/css">
<!--
.style1 {
	color: #000000;
	font-size: 12px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
-->
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
        
<!--
.style3 {
	font-size: xx-large;
	font-family: "Bookman Old Style", "Bradley Hand ITC", "Britannic Bold";
	color: #FFFFFF;
}
  </style>
</head>


<section class="engine"><a rel="nofollow" href="http://jozionline.com">Responsive Website Templates</a></section>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <div align="left">
                      <h3><a class="mbr-brand__name" href="http://jozionline.com">
                        <span class="mbr-brand__logo"><img src="assets/images/fav68x74-139.jpg" alt="" align="left" class="mbr-navbar__brand-img mbr-brand__img"></span><span class="mbr-brand__name style1">Royal-Rainbow High School</span> </a> </h3>                   </div>
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



<section class="mbr-section" id="header3-3">
    <div class="mbr-section__container container mbr-section__container--first">
        
    </div>
</section>


<!--recommended_items-->
						
						
						<!--/recommended_items-->
<div class='benefts'>
<section class="content-2 col-3" id="features1-6" style="background-color: rgb(255, 255, 255);"><p class='style7' align='right'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 
    <?php
	   	   // username and password sent from form

include ("debase.php");
// username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];


$sql="SELECT * FROM subjects WHERE pincode='$pincode'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
//Mysql_num_row is counting table row
{
@$firstname=mysql_result($result,$row,"firstname");
@$lastname=mysql_result($result,$row,"lastname");
@$class=mysql_result($result,$row,"class");
@$subject=mysql_result($result,$row,"subject");
@$subject1=mysql_result($result,$row,"subject1");
@$subject2=mysql_result($result,$row,"subject2");
}


echo "<p align='center'><h4 class='title text-center'><marquee><img alt='' src='images/manrunning.gif' width='60' height='80'> Welcome to the Web browser version of Jozi Computer-Based Test Platform. We also have desktop version and smart phones versions of this interactive application.</marquee></h4>"; ?><script language=javascript>
<!--
function greeting() {
Now = new Date()
Hour = Now.getHours();
if (Hour < 5)
msg ="<span style='color: #000000'><font size='3' style='position: relative; top: 0px; left: 2px;'><b><?php echo "$firstname $lastname,"; ?>Can't sleep? Don't worry as we'll keep your company. </b></font></span><br><font size='3' color='006666' style='position: relative; left: 0px; top:-23px;'><b><?php echo "$firstname $lastname,"; ?>Can't sleep? Don't worry as we'll keep your company. </b></font>"
else if(Hour <12)
msg ="<span style='color: #000000'><font size='3' style='position: relative; top: 0px; left: 2px;'><b> <?php echo "$firstname $lastname,"; ?> good Morning! Welcome to Royal Rainbow High School CBT Platform </b></font></span><br><font size='3' color='006666' style='position: relative; left: 0px; top:-23px;'><b><?php echo "$firstname $lastname,"; ?> good Morning! Welcome to Royal Rainbow High School CBT Platform</b></font>"
else if(Hour < 18)
msg ="<span style='color: #000000'><font size='3' style='position: relative; top: 0px; left: 2px;'><b><?php echo "$firstname $lastname,"; ?> good afternoon! Welcome to Royal Rainbow High School CBT Platform </b></font></span><br><font size='3' color='006666' style='position: relative; left: 0px; top:-23px;'><b><?php echo "$firstname $lastname,"; ?> good afternoon! Welcome to Royal Rainbow High School CBT Platform</b></font>"
else if (Hour < 24)
msg ="<span style='color: #000000'><font size='3' style='position: relative; top: 0px; left: 2px;'><b><?php echo "$firstname $lastname,"; ?> good Evening! We hope you have had a pleasant day. <br/> Kindly select any subject you want to attempt and the week from the field below </b></font></span><br><font size='3' color='006666' style='position: relative; left: 0px; top: -23px;'><b> <?php echo "$firstname $lastname,"; ?> good Evening! We hope you have had a pleasant day. <br/> Kindly select any subject you want to attempt and the week from the field below</b></font>"
return( msg )

document.write(greeting())
//-->
</script><?php
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];
if ($subject == 'English Language')
   {
   $duration="8";
   $link="";
   }
   elseif ($subject =='Mathematics')
   {
   $duration="15";
   $link="<FORM NAME='sci-calc'>Jozi CBT Inbuilt Calculator
<TABLE CELLSPACING='0' CELLPADDING='1'>
<TR>
<TD COLSPAN='5' ALIGN='center'><INPUT NAME='display' VALUE='0' SIZE='28' MAXLENGTH='25'></TD>
</TR>
<TR>
<TD ALIGN='center'><INPUT TYPE='button' VALUE=' exp ' ONCLICK='if (checkNum(this.form.display.value)) { exp(this.form) }'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  7  ' ONCLICK='addChar(this.form.display, '7')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  8  ' ONCLICK='addChar(this.form.display, '8')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  9  ' ONCLICK='addChar(this.form.display, '9')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  /  ' ONCLICK='addChar(this.form.display, '/')'></TD>
</TR>
<TR>
<TD ALIGN='center'><INPUT TYPE='button' VALUE=' ln   'ONCLICK='if (checkNum(this.form.display.value)) { ln(this.form) }'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  4  ' ONCLICK='addChar(this.form.display, '4')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  5  ' ONCLICK='addChar(this.form.display, '5')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  6  ' ONCLICK='addChar(this.form.display, '6')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='   *  'ONCLICK='addChar(this.form.display, '*')'></TD>
</TR>
<TR>
<TD ALIGN='center'><INPUT TYPE='button' VALUE=' sqrt ' ONCLICK='if (checkNum(this.form.display.value)) { sqrt(this.form) }'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  1  ' ONCLICK='addChar(this.form.display, '1')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  2  ' ONCLICK='addChar(this.form.display, '2')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  3  ' ONCLICK='addChar(this.form.display, '3')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='   -   ' ONCLICK='addChar(this.form.display, '-')'></TD>
</TR>
<TR>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  sq  ' ONCLICK='if (checkNum(this.form.display.value)) { square(this.form) }'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  0  ' ONCLICK='addChar(this.form.display, '0')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='   .  ' ONCLICK='addChar(this.form.display, '.')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE=' +/- ' ONCLICK='changeSign(this.form.display)'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='   +  ' ONCLICK='addChar(this.form.display, '+')'></TD>
</TR>
<TR>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='  (    ' ONCLICK='addChar(this.form.display, '(')'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='cos' ONCLICK='if (checkNum(this.form.display.value)) { cos(this.form) }'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='sin' ONCLICK='if (checkNum(this.form.display.value)) { sin(this.form) }'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE=' tan' ONCLICK='if (checkNum(this.form.display.value)) { tan(this.form) }'></TD>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='   )   ' ONCLICK='addChar(this.form.display, ')')'></TD>
</TR>
<TR>
<TD ALIGN='center'><INPUT TYPE='button' VALUE='clear' ONCLICK='this.form.display.value = 0 '></TD>
<TD ALIGN='center' COLSPAN='3'><INPUT TYPE='button' VALUE='backspace' ONCLICK='deleteChar(this.form.display)'></TD>
<TD><INPUT TYPE='button' VALUE='enter' NAME='enter' ONCLICK='if (checkNum(this.form.display.value)) { compute(this.form) }'></TD>
</TR>
</TABLE><p align='center'>Powered by: Jozi Global Services - 08073047600</p>
</FORM>";
   }

$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject = '$subject' && class='$class'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
{		
echo "<p align='center'>You have submitted $subject test for week $weeks. Click <a href='esubject.php'><b>here</a></b> to select another test.</p>";
exit();
}
else
{
echo  "<table align='center'><tr><td align='center'>Duration<br/><h4><b> $duration Minutes</b></h4></td><td><h4 align='center'>$subject Computer Based Test</h4><br/><div id='form-content'><form method='post' id='reg-form' align='center'>
         <input name='Id' type='hidden'  value='1' id='lname'/>          
               <p align='center'>
                   <button style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20'>START TEST NOW...</button></form></td><td>
    <form name='cd'>Minutes Left<br/>
<input id='txt' readonly='true' type='text' value='$duration:00' border='0' name='disp'>
</form></td><td>$link
</td></tr></table><hr/>"; ?>
                   <script src="assets/jquery-1.12.4-jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'test.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');	
		});
	});
	
	
	/*
	// submit form using ajax short hand $.post() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.post('submit.php', $(this).serialize() )
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');
		});
		
	});
	*/
	
});


</script>
<SCRIPT type='text/javascript'>	
var mins
var secs;

function cd() {
 	mins = 1 * m("<?php echo"$duration"; ?>"); // change minutes here
 	secs = 0 + s(":00"); // change seconds here (always add an additional second to your total)
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
<?php
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
  <script src="assets/jquery-1.12.4-jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#reg-form2').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'test.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');	
		});
	});
	
	
	/*
	// submit form using ajax short hand $.post() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.post('submit.php', $(this).serialize() )
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');
		});
		
	});
	*/
	
});


</script>

</body>
</html>