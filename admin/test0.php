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
   


<?Php
require "config.php";           // All database details will be included here


@$answer1=$_REQUEST['answer1'];
@$answer2=$_REQUEST['answer2'];
@$answer3=$_REQUEST['answer3'];
@$answer4=$_REQUEST['answer4'];
@$answer5=$_REQUEST['answer5'];
@$answer6=$_REQUEST['answer6'];
@$answer7=$_REQUEST['answer7'];
@$answer8=$_REQUEST['answer8'];
@$answer9=$_REQUEST['answer9'];
@$answer10=$_REQUEST['answer10'];
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];

if ($answer1 =='answer1')
{
setcookie ("answer1", $answer1, time() + 1200);
}
if ($answer2 =='answer2')
{
setcookie ("answer2", $answer2, time() + 1200);
exit();
}
if ($answer3 =='answer3')
{
setcookie ("answer3", $answer3, time() + 1200);
exit();
}
if ($answer4 =='answer4')
{
setcookie ("answer4", $answer4, time() + 1200);
exit();
}
if ($answer5 =='answer5')
{
setcookie ("answer5", $answer5, time() + 1200);
exit();
}
if ($answer6 =='answer6')
{
setcookie ("answer6", $answer6, time() + 1200);
exit();
}
if ($answer7 =='answer7')
{
setcookie ("answer7", $answer7, time() + 1200);
exit();
}
if ($answer8 =='answer8')
{
setcookie ("answer8", $answer8, time() + 1200);
exit();
}
if ($answer9 =='answer9')
{
setcookie ("answer9", $answer9, time() + 1200);
exit();
}

@$page_name="test.php"; //  If you use this code with a different page ( or file ) name then change this 
@$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}
$eu = ($start - 0); 
$limit = 1;                                 // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 

$sql="SELECT * FROM answers WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ("query failed111");
$n=mysql_num_rows($r);
if ($n>1)
{
echo "<p align='center'><b>You have completed the $subject task for week $weeks. Kindly click <a href='esubject.php'>here</a>to go back and select another week. Thanks </b></p>";
echo "</section></div></div></div>





";
echo "<section class='mbr-section mbr-section--relative mbr-section--fixed-size' id='footer1-10' style='background-color: rgb(0, 0, 0);'>
    
    <div class='mbr-section__container container'>
        <div class='mbr-footer mbr-footer--wysiwyg row'>
            <div class='col-sm-12'>
                <p class='mbr-footer__copyright'></p><p><script language='JavaScript'>
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('Copyright © '+year+' Royal Rainbow High School - All Rights Reserved');
//--></script>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Powered by <a href='http://www.jozionline.com'>Jozi Website Templates</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href='faq.php' target='_blank'>FAQ</a></p>
            </div>
        </div>
    </div>
</section>
  <script src='assets/jquery/jquery.min.js'></script>
  <script src='assets/bootstrap/js/bootstrap.min.js'></script>
  <script src='https://maps.googleapis.com/maps/api/js'></script>
  <script src='assets/jquery-parallax/jquery.parallax.js'></script>
  <script src='assets/masonry/masonry.pkgd.min.js'></script>
  <script src='assets/imagesloaded/imagesloaded.pkgd.min.js'></script>
  <script src='assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js'></script>
  <script src='assets/joziwebs/js/script.js'></script>
  <script src='assets/joziwebs-gallery/script.js'></script>
</body>
</html>";
	exit();
	}
$sql="SELECT * FROM questions WHERE weeks = '$weeks' && class = '$class' && subject = '$subject' && section='$section'";
$r=mysql_query($sql) or die ("query failed");
$n=mysql_num_rows($r);
if ($n<1)


{
echo "<p align='center'><b>Oops! No Test for this week. Kindly Click <a href='esubject.php'><b>here</a></b> to attempt another week's task or Log out. Thanks.</b></p>";
echo "</section></div></div></div>





";
echo "<section class='mbr-section mbr-section--relative mbr-section--fixed-size' id='footer1-10' style='background-color: rgb(0, 0, 0);'>
    
    <div class='mbr-section__container container'>
        <div class='mbr-footer mbr-footer--wysiwyg row'>
            <div class='col-sm-12'>
                <p class='mbr-footer__copyright'></p><p><script language='JavaScript'>
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('Copyright © '+year+' Royal Rainbow High School - All Rights Reserved');
//--></script>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Powered by <a href='http://www.jozionline.com'>Jozi Website Templates</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href='faq.php' target='_blank'>FAQ</a></p>
            </div>
        </div>
    </div>
</section>
  <script src='assets/jquery/jquery.min.js'></script>
  <script src='assets/bootstrap/js/bootstrap.min.js'></script>
  <script src='https://maps.googleapis.com/maps/api/js'></script>
  <script src='assets/jquery-parallax/jquery.parallax.js'></script>
  <script src='assets/masonry/masonry.pkgd.min.js'></script>
  <script src='assets/imagesloaded/imagesloaded.pkgd.min.js'></script>
  <script src='assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js'></script>
  <script src='assets/joziwebs/js/script.js'></script>
  <script src='assets/joziwebs-gallery/script.js'></script>
</body>
</html>";
	exit();
	}
/////////////// Total number of records in our table. We will use this to break the pages///////
$nume = $dbo->query("select count(id) from questions WHERE weeks = '$weeks' && class = '$class' && subject = '$subject' && section='$section'")->fetchColumn();
/////// The variable nume above will store the total number of records in the table////

/////////// Now let us print the table headers ////////////////


if ($subject =='Mathematics')
{
echo "<form name='cd'>Minutes Left:
<input id='txt' readonly='true' type='text' value='2:00' border='0' name='disp'>
</form> <p align='right'>Click <a href='javascript:void(0);' onClick='javascript:Start ('calculator.php');'>here</a> to make use of in built calculator.</p><form id='' name='form2' method='post' action='$page_name?start=$next' class='register'>";
//echo  "<tr><th>ID</th><th>Name</th><th>Class</th><th>Mark</th></tr>";

////////////// Now let us start executing the query with variables $eu and $limit  set at the top of the page///////////
$query=" SELECT * FROM questions WHERE weeks = '$weeks' && class = '$class' && subject = '$subject' && section='$section' limit $eu, $limit ";

//////////////// Now we will display the returned records in side the rows of the table/////////
foreach ($dbo->query($query) as $row) {
@$m=$i%2; // required for alternate color of rows matching to style class 
@$i=$i+1;   //  increment for alternate color of rows
echo "<form id='' name='form2' method='post' action='$page_name?start=$next' class='register'><p align='center'>$row[instructions]</p><hr/><p align='center'><b>$row[Id].&nbsp; &nbsp; $row[question]</p><p align='center'>a). <input type='radio' name='answer$row[Id]' value='$row[answer]' id='answer' required/>
      $row[answer]&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer$row[Id]' value='$row[fake1]' id='fake1' required/>
      $row[fake1]&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer$row[Id]' value='$row[fake2]' id='fake2' required/>
      $row[fake2]&nbsp;&nbsp</p><p align='right'><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question' /><p align='right'>Question $row[Id] of 10>>></p><br/> </p>
</form>";
}
//echo "</table>";
////////////////////////////// End of displaying the table with records ////////////////////////

/////////////////////////////// 
if($nume > $limit ){ // Let us display bottom links if sufficient records are there for paging

/////////////// Start the bottom links with Prev and next link with page numbers /////////////////
//echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>";
//// if our variable $back is equal to 0 or more then only we will display the link to move back ////////
//if($back >=0) { 
//print "<a href='$page_name?start=$back'><font face='Verdana' size='2'>PREV</font></a>"; 
//} 
//////////////// Let us display the page links at  center. We will not display the current page as a link ///////////
//echo "</td><td align=center width='30%'>";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
//echo " <a href='$page_name?start=$i'><font face='Verdana' size='2'>$l 22</font></a> ";
}
//else { echo "<font face='Verdana' size='4' color=red>$l </font>";
//}        /// Current page is not displayed as link and given font color red
$l=$l+1;
}


//echo "</td><td  align='right' width='30%'>";
///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
if($this1 < $nume) { 
//print "<input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question >>>' />
//</form>";
} 
//echo "</td></tr></table>";

}// end of if checking sufficient records are there to display bottom navigational link. 

    
    
echo "</section></div></div></div>





";
}
if ($subject =='English Language')
{ ?>
<SCRIPT type="text/javascript">	
var mins
var secs;

function cd1() {
 	mins = 1 * m("1"); // change minutes here
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
 	document.cd1.disp.value = dis(mins,secs); // setup additional displays here.
 	if((mins == 0) && (secs == 0)) {
  		window.alert("Time is up. Press OK to continue."); // change timeout message as required
  		window.location = "phaseout.php" // redirects to specified page once timer ends and ok button is pressed
 	} else {
 		cd1 = setTimeout("redo()",1000);
 	}
}

function init() {
  cd1();
}
window.onload = init;

$("input[name=chkEle]").change
(function(e) {
    $("#divEle").toggle();
});
//-->
</SCRIPT>
<?php
	////////////// Now let us start executing the query with variables $eu and $limit  set at the top of the page///////////
$query=" SELECT * FROM questions WHERE weeks = '$weeks' && class = '$class' && subject = '$subject' && section='$section' limit $eu, $limit ";
foreach ($dbo->query($query) as $row) 
@$m=$i%2; // required for alternate color of rows matching to style class 
@$i=$i+1;   //  increment for alternate color of rows

if ($row['Id']==10)
{
	
@$answer1=$_REQUEST['answer$row[Id]'];
/*@$answer2=$_REQUEST['answer2'];
@$answer3=$_REQUEST['answer3'];
@$answer4=$_REQUEST['answer4'];
@$answer5=$_REQUEST['answer5'];
@$answer6=$_REQUEST['answer6'];
@$answer7=$_REQUEST['answer7'];
@$answer8=$_REQUEST['answer8'];
@$answer9=$_REQUEST['answer9'];
@$answer10=$_REQUEST['answer10'];*/
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];

if ($answer1 =='answer$row[Id]')
{
setcookie ("answer1", $answer1, time() + 1200);
exit();
}
if ($answer2 =='answer2')
{
setcookie ("answer2", $answer2, time() + 1200);
exit();
}
if ($answer3 =='answer3')
{
setcookie ("answer3", $answer3, time() + 1200);
exit();
}
if ($answer4 =='answer4')
{
setcookie ("answer4", $answer4, time() + 1200);
exit();
}
if ($answer5 =='answer5')
{
setcookie ("answer5", $answer5, time() + 1200);
exit();
}
if ($answer6 =='answer6')
{
setcookie ("answer6", $answer6, time() + 1200);
exit();
}
if ($answer7 =='answer7')
{
setcookie ("answer7", $answer7, time() + 1200);
exit();
}
if ($answer8 =='answer8')
{
setcookie ("answer8", $answer8, time() + 1200);
exit();
}
if ($answer9 =='answer9')
{
setcookie ("answer9", $answer9, time() + 1200);
exit();
}
echo"<form name='cd1'>Minutes Left:
<input id='txt' readonly='true' type='text' value='1:00' border='0' name='disp'>
</form>Last Question<form id='' name='form2' method='post' action='test1.php' class='register'><p align='center'>$row[instructions]</p><hr/><p align='center'><b>$row[Id].&nbsp; &nbsp; $row[question]</p><p align='center'>a). <input type='radio' name='answer$row[Id]' value='$row[answer]' id='answer' required/>
      $row[answer]&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer$row[Id]' value='$row[fake1]' id='fake1' required/>
      $row[fake1]&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer$row[Id]' value='$row[fake2]' id='fake2' required/>
      $row[fake2]&nbsp;&nbsp</p><p align='right'><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question' /><p align='right'>Question $row[Id] of 10>>></p><br/> </p>
</form>";
}
else
{
@$answer1=$_REQUEST['answer1'];
@$answer2=$_REQUEST['answer2'];
@$answer3=$_REQUEST['answer3'];
@$answer4=$_REQUEST['answer4'];
@$answer5=$_REQUEST['answer5'];
@$answer6=$_REQUEST['answer6'];
@$answer7=$_REQUEST['answer7'];
@$answer8=$_REQUEST['answer8'];
@$answer9=$_REQUEST['answer9'];
@$answer10=$_REQUEST['answer10'];
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];

if ($answer1 =='answer1')
{
setcookie ("answer1", $answer1, time() + 1200);
echo "$answer1";
}
if ($answer2 =='answer2')
{
setcookie ("answer2", $answer2, time() + 1200);
exit();
}
if ($answer3 =='answer3')
{
setcookie ("answer3", $answer3, time() + 1200);
exit();
}
if ($answer4 =='answer4')
{
setcookie ("answer4", $answer4, time() + 1200);
exit();
}
if ($answer5 =='answer5')
{
setcookie ("answer5", $answer5, time() + 1200);
exit();
}
if ($answer6 =='answer6')
{
setcookie ("answer6", $answer6, time() + 1200);
exit();
}
if ($answer7 =='answer7')
{
setcookie ("answer7", $answer7, time() + 1200);
exit();
}
if ($answer8 =='answer8')
{
setcookie ("answer8", $answer8, time() + 1200);
exit();
}
if ($answer9 =='answer9')
{
setcookie ("answer9", $answer9, time() + 1200);
exit();
}
echo "<form name='cd1'>Minutes Left:
<input id='txt' readonly='true' type='text' value='1:00' border='0' name='disp'>
</form><form id='' name='form2' method='post' action='$page_name?start=$next' class='register'><p align='center'>$row[instructions]</p><hr/><p align='center'><b>$row[Id].&nbsp; &nbsp; $row[question]</p><p align='center'>a). <input type='radio' name='answer$row[Id]' value='$row[answer]' id='answer1' required/>
      $row[answer]&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer$row[Id]' value='$row[fake1]' id='fake1' required/>
      $row[fake1]&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer$row[Id]' value='$row[fake2]' id='fake2' required/>
      $row[fake2]&nbsp;&nbsp</p><p align='right'><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question' /><p align='right'>Question $row[Id] of 10>>></p><br/> </p>
</form>";
echo "$pincode, $class, $weeks, $section, $answer2, $answer3";
}
}
//echo "</table>";
////////////////////////////// End of displaying the table with records ////////////////////////

/////////////////////////////// 
if($nume > $limit ){ // Let us display bottom links if sufficient records are there for paging

/////////////// Start the bottom links with Prev and next link with page numbers /////////////////
//echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>";
//// if our variable $back is equal to 0 or more then only we will display the link to move back ////////
//if($back >=0) { 
//print "<a href='$page_name?start=$back'><font face='Verdana' size='2'>PREV</font></a>"; 
//} 
//////////////// Let us display the page links at  center. We will not display the current page as a link ///////////
//echo "</td><td align=center width='30%'>";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
//echo " <a href='$page_name?start=$i'><font face='Verdana' size='2'>$l 22</font></a> ";
}
//else { echo "<font face='Verdana' size='4' color=red>$l </font>";
//}        /// Current page is not displayed as link and given font color red
$l=$l+1;
}


//echo "</td><td  align='right' width='30%'>";
///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
if($this1 < $nume) { 
//print "<input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question >>>' />
//</form>";
} 
//echo "</td></tr></table>";

}// end of if checking sufficient records are there to display bottom navigational link. 

    
    
echo "</section></div></div></div>





";






echo "<section class='mbr-section mbr-section--relative mbr-section--fixed-size' id='footer1-10' style='background-color: rgb(0, 0, 0);'>
    
    <div class='mbr-section__container container'>
        <div class='mbr-footer mbr-footer--wysiwyg row'>
            <div class='col-sm-12'>
                <p class='mbr-footer__copyright'></p><p><script language='JavaScript'>
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('Copyright © '+year+' Royal Rainbow High School - All Rights Reserved');
//--></script>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Powered by <a href='http://www.jozionline.com'>Jozi Website Templates</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href='faq.php' target='_blank'>FAQ</a></p>
            </div>
        </div>
    </div>
</section>
  <script src='assets/jquery/jquery.min.js'></script>
  <script src='assets/bootstrap/js/bootstrap.min.js'></script>
  <script src='https://maps.googleapis.com/maps/api/js'></script>
  <script src='assets/jquery-parallax/jquery.parallax.js'></script>
  <script src='assets/masonry/masonry.pkgd.min.js'></script>
  <script src='assets/imagesloaded/imagesloaded.pkgd.min.js'></script>
  <script src='assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js'></script>
  <script src='assets/joziwebs/js/script.js'></script>
  <script src='assets/joziwebs-gallery/script.js'></script>
</body>
</html>"; ?>