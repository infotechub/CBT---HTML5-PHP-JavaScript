<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Rainbow High School</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" /><!-- Homepage Specific Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
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
 	mins = 1 * m("15"); // change minutes here
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


<!-- End Homepage Specific Elements -->
<style type="text/css">
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

.register-title {
  width: 270px;
  line-height: 43px;
  margin: 50px auto 20px;
  font-size: 19px;
  font-weight: 500;
  color: white;
  color: rgba(255, 255, 255, 0.95);
  text-align: center;
  text-shadow: 0 1px rgba(0, 0, 0, 0.3);
  background: #d7604b;
  border-radius: 3px;
  background-image: -webkit-linear-gradient(top, #dc745e, #d45742);
  background-image: -moz-linear-gradient(top, #dc745e, #d45742);
  background-image: -o-linear-gradient(top, #dc745e, #d45742);
  background-image: linear-gradient(to bottom, #dc745e, #d45742);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
}

.register {
  margin: 0 auto;
  width: 630px;
  padding: 20px;
  background: #ffffff;
  border-radius: 3px;
  -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
}

input {
  font-family: inherit;
  font-size: inherit;
  color: inherit;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.register-input {
  display: block;
  width: 100%;
  height: 38px;
  margin-top: 2px;
  font-weight: 500;
  background: none;
  border: 0;
  border-bottom: 1px solid #d8d8d8;
}
.register-input:focus {
  border-color: #1e9ce6;
  outline: 0;
}

.register-button {
  display: block;
  width: 100%;
  height: 42px;
  margin-top: 25px;
  font-size: 16px;
  font-weight: bold;
  color: #494d59;
  text-align: center;
  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
  background: #fcfcfc;
  border: 1px solid;
  border-color: #d8d8d8 #d1d1d1 #c3c3c3;
  border-radius: 2px;
  cursor: pointer;
  background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
  background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
  background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
  background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
  -webkit-box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
  box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
}
.register-button:active {
  background: #eee;
  border-color: #c3c3c3 #d1d1d1 #d8d8d8;
  background-image: -webkit-linear-gradient(top, #eeeeee, #fcfcfc);
  background-image: -moz-linear-gradient(top, #eeeeee, #fcfcfc);
  background-image: -o-linear-gradient(top, #eeeeee, #fcfcfc);
  background-image: linear-gradient(to bottom, #eeeeee, #fcfcfc);
  -webkit-box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
}
.register-button:focus {
  outline: 0;
}

.register-switch {
  height: 32px;
  margin-bottom: 15px;
  padding: 4px;
  background: #6db244;
  border-radius: 2px;
  background-image: -webkit-linear-gradient(top, #60a83a, #7dbe52);
  background-image: -moz-linear-gradient(top, #60a83a, #7dbe52);
  background-image: -o-linear-gradient(top, #60a83a, #7dbe52);
  background-image: linear-gradient(to bottom, #60a83a, #7dbe52);
  -webkit-box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 1px 0 rgba(0, 0, 0, 0.02), inset -1px 0 rgba(0, 0, 0, 0.02);
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 1px 0 rgba(0, 0, 0, 0.02), inset -1px 0 rgba(0, 0, 0, 0.02);
}

.register-switch-input {
  display: none;
}

.register-switch-label {
  float: left;
  width: 50%;
  line-height: 32px;
  color: white;
  text-align: center;
  text-shadow: 0 -1px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}
.register-switch-input:checked + .register-switch-label {
  font-weight: 500;
  color: #434248;
  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
  background: white;
  border-radius: 2px;
  background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
  background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
  background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
  background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.1);
}

:-moz-placeholder {
  color: #aaa;
  font-weight: 300;
}

::-moz-placeholder {
  color: #aaa;
  font-weight: 300;
  opacity: 1;
}

::-webkit-input-placeholder {
  color: #aaa;
  font-weight: 300;
}

:-ms-input-placeholder {
  color: #aaa;
  font-weight: 300;
}

::-moz-focus-inner {
  border: 0;
  padding: 0;
}


-->
        </style>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1 align="justify"><img src="images/logo1.jpg" alt="logo" width="123" height="92" align="left" /><span class="bold"> Royal Rainbow High School</span></h1>
      <p align="right"> ...sound education foundation </p>
    </div>
    <div class="footbox">
      <div align="right"><a href="mybase.php"><strong>EXAMINERS LOG IN HERE</strong></a></div>
      
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="#">starter</a></li>
        <li><a href="#">E-library</a></li>
        <li><a href="#">E-Subject</a></li>
		<li><a href="score.php">Score</a></li>
		<li><a href="correction.php">Correction</a></li>
        <li class="last"><a href="logout.php">Log Out</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
 
     
    <!-- ###### -->
    <table width="200" border="0">
      <tr>
        <td><img src="images/demo/1.jpg" alt="welcome" width="250" height="100" /></td>
        <td><img src="images/demo/2.jpg" alt="welcome" width="250" height="100" /></td>
        <td><img src="images/demo/3.jpg" alt="welcome" width="250" height="100" /></td>
        <td><img src="images/demo/4.jpg" alt="welcome" width="250" height="100" /></td>
        <td><img src="images/demo/5.jpg" alt="welcome" width="250" height="100" /></td>
      </tr>
    </table>
  <p align="center"></p>
</div>
  
  <!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="container">
    <div id="content1">

<form name="cd">Minutes Left:
<input id="txt" readonly="true" type="text" value="15:00" border="0" name="disp">
</form>
     <?php
	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];




	 

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM enganswers WHERE pincode = '$pincode' && weeks = '$weeks'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
		
echo "You have submitted week $weeks task. Click <a href='logout.php'><b>here</a></b> to proceed. ";		
}
else 

{
$sql="SELECT * FROM englishquestions WHERE weeks = '$weeks' && class = '$class'";
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
echo "<p align='center'><u><b>$class Computer Based Test (CBT) for Mathematics, week $weeks <br/>You have only 15 minutes to complete the following questions.</b></u></p><br/><br/>"; 

echo " <p align='center'>Instructions:  $instructions</p><form id='form2' name='form2' method='post' action='updateanswer1.php' class='register'>
               
                 <p align='center'>1. &nbsp;&nbsp;&nbsp;<b>$question1</b>
     <p class='contact-input' align='center'>&nbsp;&nbsp;&nbsp;
      <input type='radio' name='answer1' value='$answer1' />
      $answer1
      <input type='radio' name='answer1' value='$fake1' />
      $fake1
      <input type='radio' name='answer1' value='$fake2' />
      $fake2
    </p>
     
        <label> <div align='center'>2. &nbsp;&nbsp;&nbsp;<b>$question2</b></label>
     <p class='contact-input'><label>
      <input type='radio' name='answer2' value='$fake3' />
      $fake3</label>
    
    <label>
      <input type='radio' name='answer2' value='$fake4' />
      $fake4</label><label>
      <input type='radio' name='answer2' value='$answer2' />
      $answer2</label>
    
    </p>
     
       <label> <div align='center'>3. &nbsp;&nbsp;&nbsp;<b>$question3</b></label>
     <p class='contact-input'><label>
      <input type='radio' name='answer3' value='$fake5' />
      $fake5</label>
    
    <label>
      <input type='radio' name='answer3' value='$fake6' />
      $fake6</label><label>
      <input type='radio' name='answer3' value='$answer3' />
      $answer3</label>
   
    </p>
     
        <label> <div align='center'>4. &nbsp;&nbsp;&nbsp;<b>$question4</b></label>
     <p class='contact-input'><label>
      <input type='radio' name='answer4' value='$fake7' />
      $fake7</label>
    
    <label>
      <input type='radio' name='answer4' value='$fake8' />
      $fake8</label><label>
      <input type='radio' name='answer4' value='$answer4' />
      $answer4</label>
    </p>
     
        <label> <div align='center'>5. &nbsp;&nbsp;&nbsp;<b>$question5</b></label>
     <p class='contact-input'><label>
      <input type='radio' name='answer5' value='$fake9' />
      $fake9</label>
    
    <label>
      <input type='radio' name='answer5' value='$fake10' />
      $fake10</label><label>
      <input type='radio' name='answer5' value='$answer5' />
      $answer5</label>
    </p>
     <label> <div align='center'>6. &nbsp;&nbsp;&nbsp;<b>$question6</b></label>
     <p class='contact-input'><label>
      <input type='radio' name='answer6' value='$answer6' />
      $answer6</label>
    
    <label>
      <input type='radio' name='answer6' value='$fake11' />
      $fake11</label><label>
      <input type='radio' name='answer6' value='$fake12' />
      $fake12</label>
    
    </p>
     
       <label> <div align='center'>7. &nbsp;&nbsp;&nbsp;<b>$question7</b></label>
     <p class='contact-input'><label>
      <input type='radio' name='answer6' value='$fake13' />
      $fake13</label>
    
    <label>
      <input type='radio' name='answer7' value='$fake14' />
      $fake14</label><label>
      <input type='radio' name='answer7' value='$answer7' />
      $answer7</label>
    </p>
     
        <label> <div align='center'>8. &nbsp;&nbsp;&nbsp;<b>$question8</b></label>
     <p class='contact-input'><label>
      <input type='radio' name='answer8' value='$fake15' />
      $fake15</label>
    
    <label>
      <input type='radio' name='answer8' value='$fake16' />
      $fake5</label><label>
      <input type='radio' name='answer8' value='$answer8' />
      $answer8</label>
    </p>
     
        <label> <div align='center'>9. &nbsp;&nbsp;&nbsp;<b>$question9</b></label>
     <p class='contact-input'><label>
      <input type='radio' name='answer9' value='$fake17' />
      $fake5</label><label>
      <input type='radio' name='answer9' value='$answer9' />
      $answer9</label>
    <label>
      <input type='radio' name='answer9' value='$fake18' />
      $fake18</label>
    </p>
     
        <label> <div align='center'>10. &nbsp;&nbsp;&nbsp;<b>$question10</b></label>
     <p class='contact-input'><label>
      <input type='radio' name='answer10' value='$fake19' />
      $fake19</label>
    
    <label>
      <input type='radio' name='answer10' value='$fake20' />
      $fake20</label><label>
      <input type='radio' name='answer10' value='$answer10' />
      $answer10</label>
    </p>
     
        <p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form>  
               ";
} 

?>
     </div></div></div>
<div class="wrapper col6">
  <div id="footer">
    <div id="login">
      <p>&nbsp;</p>
      <p></p>
    </div>
    
    
    <div class="footbox">
      <ul>
        <li></li>
        <li class="last"><a href="#"></a></li>
      </ul>
    </div><div class="footbox">
      <ul>
        <li></li>
        <li class="last"><a href="#"></a></li>
      </ul>
    </div><div class="footbox"><div></div>
      <ul><li class="last"><a href="#"></a></li>
      </ul>
    </div><div class="footbox"><div></div>
      <ul><li class="last"><a href="#"></a></li>
      </ul>
    </div><div class="footbox"><div></div>
      <ul><li class="last"><a href="#"></a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col7">
  <div id="copyright"><p align="center">&nbsp;&nbsp;<script language="JavaScript">
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('Copyright © '+year+' Royal Rainbow High School - All Rights Reserved');
//--></script>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered by:<a href="http://www.jozitek.com">Jozi Global Services</a>
    <p class="fl_right"></p>
   <br class="clear" />
   
  </div>
</div>
</body>
</html>
