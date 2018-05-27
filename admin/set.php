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
						<h4 class="title text-center"><marquee><img alt="" src="images/manrunning.gif"> Welcome to the Web browser version of Jozi Computer-Based Test Platform. We also have desktop version and smart phones versions of this interactive application.</marquee></h4>
						
						<!--/recommended_items-->
<div class='benefts'>
<section class="content-2 col-3" id="features1-6" style="background-color: rgb(255, 255, 255);"><p class='style7' align='right'>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 
    <?php
	   	   // username and password sent from form

include ("debase.php");
// username and password sent from form
if ($username='')
{
header ("Location: index.php");
exit();
}
else
{

echo "<p align='center'>"; ?><script language=javascript>
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
echo "<div id='form-content'><form method='post' action='baseline.php' align='center'><table width='400' border='1' align='center'><tr><td align='center'> <label>
        WEEKS
          <select name='weeks' id='lname'>
		  <option> One</option>
            <option> Two</option>
            <option> Three</option>
            <option> Four</option>
            <option> Five</option>
            <option> Six</option>
            <option> Seven</option>
            <option>Eight</option>
            <option> Nine</option>
            <option> Ten</option>         
          </select>
        
        </label></td><td align='center'> <label>
        SUBJECTS<select name='subject' id='lname'>
            <option>English Language</option>
            <option>Mathematics</option>
         
          </select></label></td>
         <td align='center'><label>
        Class
          <select name='class' id='lname'>
            <option> J.S 1</option>
            <option> J.S 2</option>
            <option> J.S 3</option>
            <option> S.S 1</option>
            <option>S.S 2</option>
            <option> S.S 3</option>         
          </select>
        
        </label></td><td align='center'><label>
        Term
          <select name='section' id='lname'>
            <option>First Term</option>
            <option>Second Term</option>
            <option>Third Term</option>><input type='hidden' name='Id' value='1' id='lname'/>
                    
          </select>
        
        </label>
        
        </td><td align='center'> <label><p align='center'>
                   
                   
                   <button style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20'>NEXT STEP</button></p> </label></td></tr></table></form></div>"; ?>





<?php
}
echo "</div>";
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