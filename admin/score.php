<?php

session_start();
@$username=$_SESSION['username'];
@$product_code=$_SESSION['product_code'];

include ("debase.php");

@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];




	   if ($pincode =='')
{
header ("Location: home.php");
exit ();
}

$ip=$_SERVER['REMOTE_ADDR'];
$sql="SELECT * FROM visitors WHERE ip='$ip'";
$r=mysql_query($sql) or die ('Error, query failed3');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0);
{
$sql="DELETE FROM visitors WHERE ip='$ip'";
$result=mysql_query($sql);
if($result);
} 

// username and password sent from form
$ip=$_SERVER['REMOTE_ADDR'];
$page='engscore';
$checkforbanned="SELECT ip from ipbans where ip='$ip'";
$checkforbanned2=mysql_query($checkforbanned) or die ("Could not check for banned IPS");
if (mysql_num_rows ($checkforbanned2)>0)
//IP is in the banned list
{
Print "I can't grant you access because your IP has been blacklisted";
exit();
}
else
{
$page='engscore';
$thedate=date("u");//grab date and time of post
$Insertmessage="INSERT into visitors (ip, page) values ('$ip', '$page')";
mysql_query($Insertmessage) or die ("Could not Insert IP");

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
  <link rel="stylesheet" type="text/css" href="style/component.css" />
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
</script>

  <style type="text/css">
<!--
.style1 {
	color: #000000;
	font-size: 12px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
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
                      <h3><a class="mbr-brand__name" href="http://jozionline.com">
                        <span class="mbr-brand__logo"><img src="assets/images/fav68x74-139.jpg" alt="" align="left" class="mbr-navbar__brand-img mbr-brand__img"></span><span class="mbr-brand__name style1">Royal-Rainbow High School</span> </a> </h3>                        ...excellence in all things                    </div>
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


</div><div class='benefts'><marquee><img alt="" src="images/200.gif">Catch me if you can...</marquee> <div class="recommended_items"><!--recommended_items-->
						<!--/recommended_items-->
<div class='benefts'>
<section class="content-2 col-3" id="features1-6" style="background-color: rgb(255, 255, 255);">
   <?php
	 
	 

	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];
include ("debase.php");
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



?>
<p align='center'><script language=javascript>
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
msg ="<span style='color: #000000'><font size='3' style='position: relative; top: 0px; left: 2px;'><b><?php echo "$firstname $lastname,"; ?> good Evening! We hope you have had a pleasant day. <br/> Kindly select any subject you want to attempt and the week from the field below </b></font></span><br><font size='3' color='006666' style='position: relative; left: 0px; top: -45px;'><b> <?php echo "$firstname $lastname,"; ?> good Evening! We hope you have had a pleasant day. <br/> Kindly select any subject you want to attempt and the week from the field below</b></font>"
return( msg )
}
document.write(greeting())
//-->
</script>
<?php
echo  "<p align='center'>Kindly select any subject from the drop down menu below.</p><form id='form' name='form2' method='post' action='ebase2.php' p align='center'>
              <br>Select any subject and the week from the form below and click the button '<b>NEXT STEP</b>' to proceed.<br/>I will log you out and prevent you from accessing the CBT platform for 24 hours if you stay on this page for one (1) minute.<hr/><table width='400' border='1' align='center'><tr><td align='center'> <label>
        SUBJECTS<br/> <select name='subject' id='lname'>
            <option>$subject1</option>
            <option>$subject2</option>
         
          </select>
         
        </label></td><td align='center'> <label><p align='center'>
                   <label></label>
                   
                   <button style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20'>Check Your Score</button></form></p> </label></td></tr></table>
                  
               <hr/>";

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