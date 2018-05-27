<?php

session_start();
@$username=$_SESSION['username'];
@$product_code=$_SESSION['product_code'];

include ("debase.php");

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
$page='mypage';
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
$page='mypage';
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
                      
                        <span class="mbr-brand__logo"><img src="assets/images/fav68x74-139.jpg" alt="" align="left" class="mbr-navbar__brand-img mbr-brand__img"></span></div>
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
						<!--/recommended_items-->
<div class='benefts'>
<section class="content-2 col-3" id="features1-6" style="background-color: rgb(255, 255, 255);">
    <?php
	   	   // username and password sent from form
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
@$username=$_COOKIE['username'];
@$subjects=$_COOKIE['subjects'];

	   if ($username =='' && $firstname =='' && $lastname=='')
{
echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**Sign in to access this page!**</b>";
{
include ("index22.php");
exit();  
}
}
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form
@$username=$_COOKIE['username'];


$sql="SELECT * FROM examiners WHERE username='$username'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
// username and password sent from form

//Mysql_num_row is counting table row
{
@$firstname=mysql_result($r,$row,"firstname");
@$lastname=mysql_result($r,$row,"lastname");
@$subject=mysql_result($r,$row,"subject");


echo  "<p class='style7' align='center'><br><b>$firstname $lastname, Kindly select any week, class and subject you want to examine from the field below</b><hr/>";
echo  "<p align='center'>
             
             <p align='center'><b>ENTER QUESTIONS AND ANSWERS FOR EACH CLASS BELOW.<hr/><p align='center'><form id='form2' name='form2' method='post' action='setquestions.php'>
              <table width='800' border='0' align='center'><tr><td align='center'> <label>
        <div align='center'> WEEKS
          <select name='weeks'>
            <option> TWO</option>
            <option> THREE</option>
            <option> FOUR</option>
            <option> FIVE</option>
            <option> SIX</option>
            <option> SEVEN</option>
            <option>EIGHT</option>
            <option> NINE</option>
            <option> TEN</option>
            <option> EXAM</option>
            
          </select>
        </div>
        </label></td><td> <label>
        <div align='center'>Class
          <select name='class'>
            <option> J.S 1</option>
            <option> J.S 2</option>
            <option> J.S 3</option>
            <option> S.S 1</option>
            <option> S.S 2</option>
            <option> S.S 3</option>
          </select>
        </div>
        </label></td><td> <label>
        <div align='center'>Subjects<select name='subject'>
            <option>Mathematics</option>
			<option>English Language</option>
         
          </select>
         
        </div>
        </label></td></tr></table><br/><br/>
                  <table width='600' border='0' align='center'>
    <tr>
      <td><label>Questions
          <textarea name='question1' placeholder='question no 1' value='' required></textarea>
      </label></td>
      <td><label>Right Option
          <textarea name='answer1' value='' placeholder='Option A' required></textarea>
      </label></td>
      <td><label>False Option 1 
          <textarea name='fake1' value='' placeholder='Option B' required></textarea>
      </label></td>
      <td><label>False Option 2
          <textarea name='fake2' value='' placeholder='Option C' required></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
          <textarea name='question2' placeholder='question no 2' value='' required></textarea>
      </label></td>
      <td><label>
          <textarea name='answer2' value='' placeholder='Option A' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake3' value='' placeholder='Option B' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake4' value='' placeholder='Option C' required></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
          <textarea name='question3' placeholder='question no 3' value='' required></textarea>
      </label></td>
      <td><label>
          <textarea name='answer3' value='' placeholder='Option A' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake5' value='' placeholder='Option B' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake6' value='' placeholder='Option C' required></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
          <textarea name='question4' placeholder='question no 4' value='' required></textarea>
      </label></td>
      <td><label>
          <textarea name='answer4' value='' placeholder='Option A' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake7' value='' placeholder='Option B' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake8' value='' placeholder='Option C' required></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
          <textarea name='question5' placeholder='question no 5' value='' required></textarea>
      </label></td>
      <td><label>
          <textarea name='answer5' value='' placeholder='Option A' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake9' value='' placeholder='Option B' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake10' value='' placeholder='Option C' required></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
          <textarea name='question6' placeholder='question no 6' value='' required></textarea>
      </label></td>
      <td><label>
          <textarea name='answer6' value='' placeholder='Option A' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake11' value='' placeholder='Option B' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake12' value='' placeholder='Option C' required></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
          <textarea name='question7' placeholder='question no 7' value='' required></textarea>
      </label></td>
      <td><label>
          <textarea name='answer7' value='' placeholder='Option A' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake13' value='' placeholder='Option B' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake14' value='' placeholder='Option C' required></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
          <textarea name='question8' placeholder='question no 8' value='' required></textarea>
      </label></td>
      <td><label>
          <textarea name='answer8' value='' placeholder='Option A' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake15' value='' placeholder='Option B' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake16' value='' placeholder='Option C' required></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
          <textarea name='question9' placeholder='question no 9' value='' required></textarea>
      </label></td>
      <td><label>
          <textarea name='answer9' value='' placeholder='Option A' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake17' value='' placeholder='Option B' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake18' value='' placeholder='Option C' required></textarea>
      </label></td>
    </tr>
    <tr>
      <td><label>
          <textarea name='question10' placeholder='question no 10' value='' required></textarea>
      </label></td>
      <td><label>
          <textarea name='answer10' value='' placeholder='Option A' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake19' value='' placeholder='Option B' required></textarea>
      </label></td>
      <td><label>
          <textarea name='fake20' value='' placeholder='Option C' required></textarea>
      </label></td>
    </tr>
  </table><p align='center'>
                   <label></label>
                 
                   <input type='submit' name='Submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Get Started' /></p></form></p>";

}
else
{
echo "Ouch, there is an error. Please try again!!!";
}

?>
    
</section></div></div></div>





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