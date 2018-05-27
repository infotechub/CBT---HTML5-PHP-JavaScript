<?php

include ("debase.php");

@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$number=$_COOKIE['number'];
/*$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
$n=mysql_num_rows($r);
if ($n<1)


{
echo "<p align='center'><b>$number Oops! No Test for this week. Kindly Click <a href='esubject.php'><b>here</a></b> to attempt another week's task or Log out. Thanks.</b></p>";
	exit();
	}
	$sql="SELECT * FROM mathanswers WHERE pincode = '$pincode' && weeks = '$weeks'";
$r=mysql_query($sql) or die ("query failed");
$n=mysql_num_rows($r);
if ($n>1)
{
echo "<p align='center'><b>You have completed the task for week $weeks. Kindly click <a href='esubject.php'>here</a>to go back and select another week. Thanks </b></p>";
	exit();
	}
else
{
header ("Location: test.php");
exit();
}*/

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
  
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script language="javascript">
$(document).ready(function()
{
	$("#login_form").submit(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgbox").removeClass().addClass('messagebox').text('Validating....').fadeIn(1000);
		//check if the username exists or not from ajax
		$.post("securelogin.php",{ username:$('#username').val(),password:$('#password').val(),rand:Math.random() } ,function(data)
        {
		  if(data=='yes') //if correct login detail
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Logging in.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
			  	 //redirect to secure page
				 document.location='etest.php';
			  });
			  
			});
		  }
		  else 
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Your login detail is incorrect...').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
				
        });
 		return false; //not to post the  form physically
	});
	//now call the ajax also focus move from 
	$("#password").blur(function()
	{
		$("#login_form").trigger('submit');
	});
});
</script><SCRIPT type="text/javascript">
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
 	mins = 1 * m("12"); // change minutes here
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


</div><div class='benefts'><div class="recommended_items"><!--recommended_items-->
						<h4 class="title text-center"><marquee><img alt="" src="images/manrunning.gif"> Welcome to the Web browser version of Jozi Computer-Based Test Platform. We also have desktop version and smart phones versions of this interactive application.</marquee></h4>
						
						<!--/recommended_items-->
<div class='benefts'>
<section class="content-2 col-3" id="features1-6" style="background-color: rgb(255, 255, 255);">
   <form name="cd">Minutes Left:
<input id="txt" readonly="true" type="text" value="12:00" border="0" name="disp">
</form>

<?php
	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$number=$_COOKIE['number'];

include ("debase.php");

/*$sql="SELECT * FROM mathanswers WHERE pincode = '$pincode' && weeks = '$weeks'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");

{		
echo "You have completed week $weeks task. Click <a href='esubject.php'><b>here</a></b> to proceed with another week's task. ";
exit();
}*/

00
/*$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)
@$instructions=mysql_result($r,$row,"instructions");
@$instruction1=mysql_result($r,$row,"instruction1");
@$question1=mysql_result($r,$row,"question1");
@$question2=mysql_result($r,$row,"question2");
@$question3=mysql_result($r,$row,"question3");
@$question4=mysql_result($r,$row,"question4");
@$question5=mysql_result($r,$row,"question5");
@$question6=mysql_result($r,$row,"question6");
@$question7=mysql_result($r,$row,"question7");
@$question8=mysql_result($r,$row,"question8");
@$question9=mysql_result($r,$row,"question9");
@$question10=mysql_result($r,$row,"question10");
@$answer1=mysql_result($r,$row,"answer1");
@$answer2=mysql_result($r,$row,"answer2");
@$answer3=mysql_result($r,$row,"answer3");
@$answer4=mysql_result($r,$row,"answer4");
@$answer5=mysql_result($r,$row,"answer5");
@$answer6=mysql_result($r,$row,"answer6");
@$answer7=mysql_result($r,$row,"answer7");
@$answer8=mysql_result($r,$row,"answer8");
@$answer9=mysql_result($r,$row,"answer9");
@$answer10=mysql_result($r,$row,"answer10");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
@$fake3=mysql_result($r,$row,"fake3");
@$fake4=mysql_result($r,$row,"fake4");
@$fake5=mysql_result($r,$row,"fake5");
@$fake6=mysql_result($r,$row,"fake6");
@$fake7=mysql_result($r,$row,"fake7");
@$fake8=mysql_result($r,$row,"fake8");
@$fake9=mysql_result($r,$row,"fake9");
@$fake10=mysql_result($r,$row,"fake10");
@$fake11=mysql_result($r,$row,"fake11");
@$fake12=mysql_result($r,$row,"fake12");
@$fake13=mysql_result($r,$row,"fake13");
@$fake14=mysql_result($r,$row,"fake14");
@$fake15=mysql_result($r,$row,"fake15");
@$fake16=mysql_result($r,$row,"fake16");
@$fake17=mysql_result($r,$row,"fake17");
@$fake18=mysql_result($r,$row,"fake18");
@$fake19=mysql_result($r,$row,"fake19");
@$fake20=mysql_result($r,$row,"fake20");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");



// if a row was returned authentication was successful create session and set cookie with username
echo "<p align='center'><u><b>$class Computer Based Test (CBT) for Mathematics, week $weeks <br/>You have only 12 minutes to complete the following questions.</b></u></p><br/><br/>"; 

echo " <p align='center'>Instructions:  $instructions</p><form id='form2' name='form2' method='post' action='updateanswer.php' class='register'>
               
                 <hr/><p align='center'>1. &nbsp;&nbsp;&nbsp;<b>$question1</b>
     <p>
      <input type='radio' name='answer1' value='$answer1' />
      $answer1</p><p>
      <input type='radio' name='answer1' value='$fake1' />
      $fake1</p><p>
      <input type='radio' name='answer1' value='$fake2' />
      $fake2<hr/></p>
	  <p align='center'>2. &nbsp;&nbsp;&nbsp;<b>$question2</b><p>
      <input type='radio' name='answer2' value='$fake3' />
      $fake3</p><p>
      <input type='radio' name='answer2' value='$fake4' />
      $fake4</p><p>
      <input type='radio' name='answer2' value='$answer2' />
      $answer2<hr/>
    </p>
       <p align='center'>3. &nbsp;&nbsp;&nbsp;<b>$question3</b>
     <p>
      <input type='radio' name='answer3' value='$fake5' />
      $fake5</p><p>
      <input type='radio' name='answer3' value='$fake6' />
      $fake6</p><p>
      <input type='radio' name='answer3' value='$answer3' />
      $answer3<hr/></p>
   <p>4. &nbsp;&nbsp;&nbsp;<b>$question4</b></p>
     <p>
      <input type='radio' name='answer4' value='$fake7' />
      $fake7</p>
    
    <p>
      <input type='radio' name='answer4' value='$fake8' />
      $fake8</p><p>
      <input type='radio' name='answer4' value='$answer4' />
      $answer4<hr/></p>
   <p align='center'>5. &nbsp;&nbsp;&nbsp;<b>$question5</b></p>
     <p>
      <input type='radio' name='answer5' value='$fake9' />
      $fake9</p>
    
    <p>
      <input type='radio' name='answer5' value='$fake10' />
      $fake10</p><p>
      <input type='radio' name='answer5' value='$answer5' />
      $answer5<hr/></p>
    <p align='center'>6. &nbsp;&nbsp;&nbsp;<b>$question6</b></p>
     <p>
      <input type='radio' name='answer6' value='$answer6' />
      $answer6</p>
    
    <p>
      <input type='radio' name='answer6' value='$fake11' />
      $fake11</p><p>
      <input type='radio' name='answer6' value='$fake12' />
      $fake12<hr/></p>
     <p>7. &nbsp;&nbsp;&nbsp;<b>$question7</b></p>
     <p>
      <input type='radio' name='answer7' value='$fake13' />
      $fake13</p>
    
    <p>
      <input type='radio' name='answer7' value='$fake14' />
      $fake14</p><p>
      <input type='radio' name='answer7' value='$answer7' />
      $answer7<hr/></p>
    
     
        <p>8. &nbsp;&nbsp;&nbsp;<b>$question8</b></p>
     <p>
      <input type='radio' name='answer8' value='$fake15' />
      $fake15</p>
    
    <p>
      <input type='radio' name='answer8' value='$fake16' />
      $fake5</p><p>
      <input type='radio' name='answer8' value='$answer8' />
      $answer8<hr/></p>
    
     
        <p>9. &nbsp;&nbsp;&nbsp;<b>$question9</b></p>
     <p>
      <input type='radio' name='answer9' value='$fake17' />
      $fake5</p><p>
      <input type='radio' name='answer9' value='$answer9' />
      $answer9</p>
    <p>
      <input type='radio' name='answer9' value='$fake18' />
      $fake18<hr/></p>
     <p>10. &nbsp;&nbsp;&nbsp;<b>$question10</b></p>
     <p>
      <input type='radio' name='answer10' value='$fake19' />
      $fake19</p>
    
    <p>
      <input type='radio' name='answer10' value='$fake20' />
      $fake20</p><p>
      <input type='radio' name='answer10' value='$answer10' />
      $answer10<hr/></p>
    
     
        <p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form>  
               ";
} */

?><FORM NAME="sci-calc">In built scientific calculator
<TABLE CELLSPACING="0" CELLPADDING="1">
<TR>
<TD COLSPAN="5" ALIGN="center"><INPUT NAME="display" VALUE="0" SIZE="28" MAXLENGTH="25"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" exp " ONCLICK="if (checkNum(this.form.display.value)) { exp(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  7  " ONCLICK="addChar(this.form.display, '7')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  8  " ONCLICK="addChar(this.form.display, '8')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  9  " ONCLICK="addChar(this.form.display, '9')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   /   " ONCLICK="addChar(this.form.display, '/')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   ln   " ONCLICK="if (checkNum(this.form.display.value)) { ln(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  4  " ONCLICK="addChar(this.form.display, '4')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  5  " ONCLICK="addChar(this.form.display, '5')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  6  " ONCLICK="addChar(this.form.display, '6')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   *   " ONCLICK="addChar(this.form.display, '*')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" sqrt " ONCLICK="if (checkNum(this.form.display.value)) { sqrt(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  1  " ONCLICK="addChar(this.form.display, '1')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  2  " ONCLICK="addChar(this.form.display, '2')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  3  " ONCLICK="addChar(this.form.display, '3')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   -   " ONCLICK="addChar(this.form.display, '-')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  sq  " ONCLICK="if (checkNum(this.form.display.value)) { square(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="  0  " ONCLICK="addChar(this.form.display, '0')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   .  " ONCLICK="addChar(this.form.display, '.')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" +/- " ONCLICK="changeSign(this.form.display)"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   +  " ONCLICK="addChar(this.form.display, '+')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="    (    " ONCLICK="addChar(this.form.display, '(')"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="cos" ONCLICK="if (checkNum(this.form.display.value)) { cos(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" sin" ONCLICK="if (checkNum(this.form.display.value)) { sin(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE=" tan" ONCLICK="if (checkNum(this.form.display.value)) { tan(this.form) }"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="   )   " ONCLICK="addChar(this.form.display, ')')"></TD>
</TR>
<TR>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="clear" ONCLICK="this.form.display.value = 0 "></TD>
<TD ALIGN="center" COLSPAN="3"><INPUT TYPE="button" VALUE="backspace" ONCLICK="deleteChar(this.form.display)"></TD>
<TD ALIGN="center"><INPUT TYPE="button" VALUE="enter" NAME="enter" ONCLICK="if (checkNum(this.form.display.value)) { compute(this.form) }"></TD>
</TR>
</TABLE>
</FORM>

    
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