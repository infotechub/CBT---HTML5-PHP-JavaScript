<?php

include ("../debase.php"); 

// username and password sent from form
@$pincode=$_COOKIE['pincode'];

 $sql="SELECT * FROM students WHERE pincode = '$pincode'";
 $result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result)  == 0 )
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
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="../assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="../assets/joziwebs/css/style.css">
  <link rel="stylesheet" href="../assets/joziwebs-gallery/style.css">
  <link rel="stylesheet" href="../assets/joziwebs-slider/style.css">
  <link rel="stylesheet" href="../assets/joziwebs/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
 <script type="text/javascript" src="../style/js/jquery-1.6.4.min.js"></script>
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
 
<SCRIPT language=JavaScript>

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
<body onLoad="noBack();" 
	onpageshow="if (event.persisted) noBack();" onUnload="">

<section class="engine"><a rel="nofollow" href="http://jozionline.com">Responsive Website Templates</a></section>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <div align="left">
                      <h3><a class="mbr-brand__name" href="http://jozionline.com">
                        <span class="mbr-brand__logo"><img src="../assets/images/fav68x74-139.jpg" alt="" align="left" class="mbr-navbar__brand-img mbr-brand__img"></span><span class="mbr-brand__name style1">Royal-Rainbow High School</span> </a> </h3>                   </div>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"> 
                         <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="../index.php"><img src="home.jpg" alt="Home Page" longdesc="Home.php" /></a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="../elibrary.php"><img src="elib.png" alt="E-library" longdesc="elibrary.php" /></a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="../eclass.php"><img src="eclass.jpg" alt="E-class" longdesc="eclass.php" /></a></li>  <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="../score.php"><img src="maths.jpg" alt="Maths Score" longdesc="score.php" /></a><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="../logout.php"><img src="logout.jpg" alt="Log Out" longdesc="logout.php" /></a></li></ul></div>
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
						<h4 class="title text-center"><marquee><img alt="" src="dogrunning.gif"> Welcome to the Web browser version of Jozi Computer-Based Test Platform. We also have desktop version and smart phones versions of this interactive application.</marquee></h4>
						
						<!--/recommended_items-->
<div class='benefts'>
<section class="content-2 col-3" id="features1-6" style="background-color: rgb(255, 255, 255);"><p class='style7' align='right'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<SCRIPT LANGUAGE=Javascript>  calendar = new Date();
 day = calendar.getDay();
 month = calendar.getMonth();
 date = calendar.getDate();
 year = calendar.getYear();
 if (year < 1000)
 year+=1900
 cent = parseInt(year/100);
 g = year % 19;
 k = parseInt((cent - 17)/25);
 i = (cent - parseInt(cent/4) - parseInt((cent - k)/3) + 19*g + 15) % 30;
 i = i - parseInt(i/28)*(1 - parseInt(i/28)*parseInt(29/(i+1))*parseInt((21-g)/11));
 j = (year + parseInt(year/4) + i + 2 - cent + parseInt(cent/4)) % 7;
 l = i - j;
 emonth = 3 + parseInt((l + 40)/44);
 edate = l + 28 - 31*parseInt((emonth/4));
 emonth--;
 var dayname = new Array ("Sun.", "Mon.", "Tue.", "Wed.", "Thu.", "Fri.", "Sat.");
 var monthname = 
 new Array ("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec" );
 document.write("");
 document.write(dayname[day] + ", ");
 document.write(monthname[month] + " ");
 if (date< 10) document.write("0" + date + ", ");
         else document.write(date + ", ");
 document.write(year + "    ");
 
 document.write("");
//-->

if (document.all||document.getElementById)
document.write('<span id="worldclock" style="font:bold 16px Arial;"></span><br />')

zone=0;
isitlocal=true;
ampm='';

function updateclock(z){
zone=z.options[z.selectedIndex].value;
isitlocal=(z.options[0].selected)?true:false;
}

function WorldClock(){
now=new Date();
ofst=now.getTimezoneOffset()/60;
secs=now.getSeconds();
sec=-1.57+Math.PI*secs/30;
mins=now.getMinutes();
min=-1.57+Math.PI*mins/30;
hr=(isitlocal)?now.getHours():(now.getHours() + parseInt(ofst)) + parseInt(zone);
hrs=-1.575+Math.PI*hr/6+Math.PI*parseInt(now.getMinutes())/360;
if (hr < 0) hr+=24;
if (hr > 23) hr-=24;
ampm = (hr > 11)?"PM":"AM";
statusampm = ampm.toLowerCase();

hr2 = hr;
if (hr2 == 0) hr2=12;
(hr2 < 13)?hr2:hr2 %= 12;
if (hr2<10) hr2="0"+hr2

var finaltime=hr2+':'+((mins < 10)?"0"+mins:mins)+':'+((secs < 10)?"0"+secs:secs)+' '+statusampm;

if (document.all)
worldclock.innerHTML=finaltime
else if (document.getElementById)
document.getElementById("worldclock").innerHTML=finaltime
else if (document.layers){
document.worldclockns.document.worldclockns2.document.write(finaltime)
document.worldclockns.document.worldclockns2.document.close()
}


setTimeout('WorldClock()',1000);
}

window.onload=WorldClock

 // Easter
 if ((month == emonth) && (date == edate)) document.write("Easter Sunday (Western)   ");
 // January
 if ((month == 0) && (date == 1)) document.write("New Year's Day");
 if ((month == 0) && (date == 15)) document.write("Adults Day (Japan)");
 if ((month == 0) && (date == 27)) document.write("Wolfgang Amadeus Mozart born (1756)");
 if ((month == 0) && (day == 1) && (date > 14) && (date< 22)) document.write("Martin Luther King's Birthday");
 // February
 if ((month == 1) && (date == 2)) document.write("Groundhog Day");
 if ((month == 1) && (date == 8)) document.write("Jules Verne born (1828)");
 if ((month == 1) && (date == 11)) document.write("National Foundation Day (Japan)");
 if ((month == 1) && (date== 12)) document.write("Lincoln's Birthday");
 if((month == 1) && (date == 14)) document.write("St. Valentine's Day");
 if ((month == 1) && (date == 15)) document.write("Galileo Galilei born (1564)");
 if ((month == 1) && (date == 22)) document.write("Washington's Birthday");
 if ((month == 1) && (date == 29)) document.write("Leap Day");
 // March
 if ((month == 2) && (date == 3)) document.write("Girl's Day (Japan)");
 if ((month == 2) && (date == 17)) document.write("St. Patrick's Day");
 if ((month == 2) && (date == 21)) document.write("J.S. Bach born (1685)");
 // April
 if ((month == 3) && (date == 1)) document.write("April Fools' Day");
 if ((month == 3) && (date == 8)) document.write("Buddha born");
 if ((month == 3) && (date == 15) && (day != 0)) document.write("Income Tax Day (USA),   ");
 if ((month == 3) && (date == 16) && (day == 1)) document.write("Income Tax Day (USA) ");
 if ((month == 3) && (date == 15)) document.write("Leonardo da Vinci born (1452)");
 if ((month == 3) && (date == 22)) document.write("Earth Day");
 if ((month == 3) && (date == 29)) document.write("Emperor's Birthday (Japan)");
 if ((month == 3) && (day == 0) && (date > 0) && (date< 8)) document.write("Daylight Savings Time Begins");
 // May
 if ((month == 4) && (date == 1)) document.write("May Day,   Boy's Day (Japan)");
 if ((month == 4) && (date == 2)) document.write("Constitution Day (Japan)");
 if ((month == 4) && (date == 5)) document.write("Cinco de Mayo (Mexico),   Children's Day (Japan)");
 if ((month == 4) && (date == 10)) document.write("My Birthday (Paraguay)");
 if ((month == 4) && (date == 14)) document.write("Independence Day (Paraguay)");
 if ((month == 4) && (day == 0) && (date > 7) && (date< 16)) document.write("Mother's Day");
 if ((month == 4) && (day == 1) && (date > 24)) document.write("Memorial Day");
 // June
 if ((month == 5) && (date == 5)) document.write("Constitution Day (Denmark)");
 if ((month == 5) && (date == 6)) document.write("D-Day (USA)");
 if ((month == 5) && (date == 11)) document.write("Kamehameha (Hawaii)");
 if ((month == 5) && (date == 14)) document.write("FlagDay (USA)");
 if ((month == 5) && (date == 21)) document.write("Summer Solstice");
 if((month == 5) && (date == 24)) document.write("St. Jean Baptiste Day (Canada)");
 if ((month == 5) && (date == 30)) document.write("Independence Day (Zaire)");
 if ((month == 5) && (day == 0) && (date > 15) && (date< 24)) document.write("Father's Day");
 // July
 if ((month == 6) && (date == 1)) document.write("Independence Day (Canada)");
 if ((month == 6) && (date == 4)) document.write("Independence Day (USA)");
 if ((month == 6) && (date == 14)) document.write("Bastille Day (France)");
 // August
 if ((month == 7) && (date == 1)) document.write("Confederation Day (Switzerland)");
 if ((month == 7) && (date == 10)) document.write("Independence Day (Ecuador)");
 if ((month == 7) && (date == 15)) document.write("Independence Day (India)");
 // September
 if ((month == 8) && (date == 7)) document.write("Independence Day (Brazil)");
 if ((month == 8) && (date == 15)) document.write("Respect for the Aged Day (Japan)");
 if ((month == 8) && (date == 16)) document.write("Independence Day (Mexico)");
 if ((month == 8) && (day== 1)&& (date > 0) && (date< 8)) document.write("Labor Day (USA)");
 // October
 if ((month == 9) && (date == 1)) document.write("German Reunufication (1990)");
 if ((month == 9) && (date == 10)) document.write("Health-Sports Day (Japan)");
 if ((month == 9) && (day == 1) && (date > 7) && (date< 16)) document.write("Columbus Day (USA)");
 if ((month == 9) && (day == 0) && (date > 24) && (date< 31)) document.write("Daylight Savings Time Ends");
 if ((month == 9) && (day == 0) && (date == 31)) document.write("Daylight Savings Time Ends<BR>");
 if ((month == 9) && (date == 24)) document.write("United Nations Day");
 if ((month == 9) && (date == 31)) document.write("Halloween");
 // November
 if ((month == 10) && (date == 1)) document.write("All Saints Day");
 if ((month == 10) && (date == 2)) document.write("All Souls Day");
 if ((month == 10) && (date == 3)) document.write("Culture Day (Japan)");
 if ((month == 10) && (date == 11)) document.write("Veteran's Day (USA),    Remembrance Day (Canada)");
 if ((month == 10) && (date ==20)) document.write("Revolution Day (Mexico)");
 if ((month == 10) && (date == 23)) document.write("Labor Thanksgiving Day (Japan)");
 if ((month == 10) && (day == 4) && (date > 23) && (date< 30)) document.write("Thanksgiving (USA)");
 if ((month == 10) && (date == 30) && (day == 4)) document.write("Thanksgiving (USA)");
 // December
 if ((month == 11) && (date == 10)) document.write("Human Rights Day");
 if ((month == 11) && (date == 21)) document.write("Winter Solstice");
 if ((month == 11) && (date == 24)) document.write("Christmas Eve");
 if ((month == 11) && (date == 25)) document.write("Christmas");
 if ((month == 11) && (date == 26)) document.write("Boxing Day");
 if ((month == 11) && (date == 31)) document.write("New Year's Eve");
 document.write("");
//-->

 </SCRIPT> </p>
 
    <?php
	   	   // username and password sent from form

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form
@$pincode=$_COOKIE['pincode'];


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
echo "<p align='center'>"; ?>
<script language=javascript>
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
</script></p>
<?php
include ("../debase.php"); 
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];
$sql9="SELECT * FROM answers WHERE pincode='$pincode' && weeks='$weeks' && section='$section' && subject='$subject'";
$r=mysql_query($sql9) or die ('Error, query failed101');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{ 
echo "    
    <p align='center'>You have completed week $weeks $subject test. Kindly click <a href='esubject.php'>here</a> to select another test.</p>";
}
else
{
header ("Location: start.php");
exit();	
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
//--></script>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Powered by <a href='http://www.jozionline.com'>Jozi Website Templates</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="../faq.php" target="_blank">FAQ</a></p>
            </div>
        </div>
    </div>
</section>
  <script src="../assets/jquery/jquery.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="../assets/jquery-parallax/jquery.parallax.js"></script>
  <script src="../assets/masonry/masonry.pkgd.min.js"></script>
  <script src="../assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="../assets/joziwebs/js/script.js"></script>
  <script src="../assets/joziwebs-gallery/script.js"></script>
  <SCRIPT type="text/javascript">	
var mins
var secs;

function cd() {
 	mins = 1 * m("8"); // change minutes here
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
<script src="../assets/jquery-1.12.4-jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

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
</body>
</html>