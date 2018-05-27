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
$page='myperformance2';
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
$page='myperformance2';
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
                      <h3><a class="mbr-brand__name" href="http://jozionline.com">
                        <span class="mbr-brand__logo"><img src="assets/images/fav68x74-139.jpg" alt="" align="left" class="mbr-navbar__brand-img mbr-brand__img"></span><span class="mbr-brand__name style1">Royal-Rainbow High School</span> </a> </h3>                                     ...excellence in all things                    </div>
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
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];





	   if ($pincode =='')
	   
	   {
header ("Location: index2.php");
exit();
}

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


$sql9="SELECT * FROM test WHERE pincode='$pincode' && weeks='$weeks' && section='$section' && subject='$subject'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
echo "You have previously send your answer to the database.";
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
else
{
$sql="SELECT * FROM answers WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

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


echo "<p align='center'><b>Week $weeks scores for $subject Computer Based Test For $class</b></p><br/><table width='600' border='1' align='center'><tr><td> 
        S/N</td><td> 
        Your Answer</td><td> Server Response</td><td>Remarks</td></tr>
                  <tr><td> 1.</td>
                  <td> 
        $answer1</td>"; 
		
		$sql="SELECT * FROM questions WHERE weeks = '$weeks' && answer1 = '$answer1' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td> <img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td></td><td>Wrong Answer</td></tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='centre' /></td><td>Correct Answer</td>";
}		
		
}
echo "
                  <tr><td> 2.</td>
                  <td> 
        $answer2</td>"; 

$sql="SELECT * FROM questions WHERE weeks = '$weeks' && answer2 = '$answer2' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td> <img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td></td><td>Wrong Answer</td></tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='center' /></td><td>Correct Answer</td>";
}		
		
}
echo "
                  <tr><td> 3.</td>
                  <td> 
        $answer3</td>"; 

$sql="SELECT * FROM questions WHERE weeks = '$weeks' && answer3 = '$answer3' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td> <img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td></td><td>Wrong Answer</td></tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='center' /></td><td>Correct Answer</td>";
}		
		
}
echo "
                  <tr><td> 4.</td>
                  <td> 
        $answer4</td>"; 

$sql="SELECT * FROM questions WHERE weeks = '$weeks' && answer4 = '$answer4' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td> <img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td></td><td>Wrong Answer</td></tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='center' /></td><td>Correct Answer</td>";
}		
		
}
echo "
                  <tr><td> 5.</td>
                  <td> 
        $answer5</td>"; 

$sql="SELECT * FROM questions WHERE weeks = '$weeks' && answer5 = '$answer5' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td> <img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td></td><td>Wrong Answer</td></tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='center' /></td><td>Correct Answer</td>";
}		
		
}
echo "
                  <tr><td> 6.</td>
                  <td> 
        $answer6</td>"; 

$sql="SELECT * FROM questions WHERE weeks = '$weeks' && answer6 = '$answer6' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td> <img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td></td><td>Wrong Answer</td></tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='center' /></td><td>Correct Answer</td>";
}		
		
}
echo "
                  <tr><td> 7.</td>
                  <td> 
        $answer7</td>"; 

$sql="SELECT * FROM questions WHERE weeks = '$weeks' && answer7 = '$answer7' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td> <img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td></td><td>Wrong Answer</td></tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='center' /></td><td>Correct Answer</td>";
}		
		
}
echo "
                  <tr><td> 8.</td>
                  <td> 
        $answer8</td>"; 

$sql="SELECT * FROM questions WHERE weeks = '$weeks' && answer8 = '$answer8' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td> <img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td></td><td>Wrong Answer</td></tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='center' /></td><td>Correct Answer</td>";
}		
		
}
echo "
                  <tr><td> 9.</td>
                  <td> 
        $answer9</td>"; 

$sql="SELECT * FROM questions WHERE weeks = '$weeks' && answer9 = '$answer9' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td> <img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td></td><td>Wrong Answer</td></tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='center' /></td><td>Correct Answer</td>";
}		
		
}
echo "
                  <tr><td> 10.</td>
                  <td> 
        $answer10</td>"; 

$sql="SELECT * FROM questions WHERE weeks = '$weeks' && answer10 = '$answer10' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td> <img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td></td><td>Wrong Answer</td></tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='center' /></td><td>Correct Answer</td>";
}		
		
}
}

$check_pincode_sql = "select count(*) from ans where pincode='$pincode' && weeks='$weeks' && status='correct' && class='$class' && section='$section'";
$row = mysql_fetch_array(mysql_query($check_pincode_sql));
$pincode_count = $row[0];

echo "<p align='center'><b>You scored $pincode_count Out of 10 Marks</b>. View your total score by clicking <b><a href='score.php'>here</a></b></p></table>";

$sql="INSERT INTO test(pincode, score, weeks, class, section, subject) VALUES ('$pincode', '$pincode_count', '$weeks', '$class', '$section', '$subject')";
if (mysql_query($sql))
?>
</section></div>



<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts2-9" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row">
            <div class="col-sm-6">
                <figure class="mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg">
                    <div class="mbr-figure__map mbr-figure__map--short mbr-google-map">
                        <p class="mbr-google-map__marker" data-coordinates="40.748384,-73.9854792"></p>
                    </div>
                </figure>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                        <p class="mbr-contacts__text"><strong>CONTACT ADDRESS</strong><br>Royal-Rainbow High School

<br/>15/16 Agbolade Street, <br/>Cele Bus Stop or Hostel Bus Stop,
<br/>Agodo-Egbe, Lagos State<br/>Nigeria                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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