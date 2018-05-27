<?php
/*@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];
$sql="SELECT * FROM answer1 WHERE pincode= '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1220');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
header ("Location: score.php");
exit();	
}*/
?>

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
  <link rel="stylesheet" type="text/css" href="style/component.css" />
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
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
                        <span class="mbr-brand__logo"><img src="assets/images/fav68x74-139.jpg" alt="" align="left" class="mbr-navbar__brand-img mbr-brand__img"></span><span class="mbr-brand__name style1">Royal-Rainbow High School</span> </a> </h3> </div>
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
	 
	 
include ("debase.php");
	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];

	   if ($pincode =='')
	   
	   {
echo "<p align='center'>You must click <a href='index2.php'>here</a> to login with your pincode to access this page.</p></section></div></div></div><section class='mbr-section mbr-section--relative mbr-section--fixed-size' id='footer1-10' style='background-color: rgb(0, 0, 0);'>
    
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
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];
@$answer1=$_COOKIE['answer1'];
@$answer2=$_COOKIE['answer2'];
@$answer3=$_COOKIE['answer3'];
@$answer4=$_COOKIE['answer4'];
@$answer5=$_COOKIE['answer5'];
@$answer6=$_COOKIE['answer6'];
@$answer7=$_COOKIE['answer7'];
@$answer8=$_COOKIE['answer8'];
@$answer9=$_COOKIE['answer9'];
@$answer10=$_COOKIE['answer10'];
{
$sql1="INSERT INTO answers1(answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10, weeks, class, pincode, section, subject) VALUES ('$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9', '$answer10','$weeks', '$class', '$pincode', '$section', '$subject')";
if (mysql_query($sql1))
{
$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed11');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$answer1=mysql_result($r,$row,"answer1");



echo "<p align='center'><table class='' >
					<p align='center'><b>Week $weeks scores for $subject Computer Based Test For $class</b></p><br/><table class=''>
						<thead><tr>
							<th>
Questions</th><th>Your Answer</th>
    <th >Server Response</th>
	<th align='center'>Remarks</th>
  </tr>
					</thead> <tbody><tr>
    <th> 1.</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$answer1</td>"; 
		
$sql="SELECT * FROM questions WHERE Id= '1' && weeks = '$weeks' && answer = '$answer1' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed122');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{		
echo "<td align='center'><img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wrong Answer</td>
  </tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td align='center'><img src='images/right.jpeg' alt='correct' width='13' height='22' align='centre' /></td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct Answer</td>
  </tr>";
}		
		
}
$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed11');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$answer2=mysql_result($r,$row,"answer2");
echo "
                  <tr>
    <th> 2.</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$answer2</td>"; 

$sql="SELECT * FROM questions WHERE Id= '2' && weeks = '$weeks' && answer = '$answer2' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed123');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{		
echo "<td align='center'><img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wrong Answer</td>
  </tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td align='center'><img src='images/right.jpeg' alt='correct' width='13' height='22' align='centre' /></td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct Answer</td>
  </tr>";
}		
		
}
$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed11');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$answer3=mysql_result($r,$row,"answer3");
echo "
                  <tr>
    <th> 3.</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$answer3</td>"; 

$sql="SELECT * FROM questions WHERE Id= '3' && weeks = '$weeks' && answer = '$answer3' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed124');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)
{
		
echo "<td align='center'><img src='images/wrong.png' alt='wrong' width='13' height='22' align='center' /></td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wrong Answer</td>
  </tr>";		
}
else 
{
$sql="INSERT INTO ans(pincode, status, weeks, subject, section, class) VALUES ('$pincode', 'correct', '$weeks', '$subject', '$section', '$class')";
if (mysql_query($sql))
{
echo "<td align='center'><img src='images/right.jpeg' alt='correct' width='13' height='22' align='centre' /></td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Correct Answer</td>
  </tr>";
}		
		
}
$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed11');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$answer4=mysql_result($r,$row,"answer4");
echo "
                  <tr>
    <th> 4.</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$answer4</td>"; 

$sql="SELECT * FROM questions WHERE Id= '4' && weeks = '$weeks' && answer = '$answer4' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed125');
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
$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed11');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$answer5=mysql_result($r,$row,"answer5");
echo "
                  <tr>
    <th> 5.</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$answer5</td>"; 

$sql="SELECT * FROM questions WHERE Id= '5' && weeks = '$weeks' && answer = '$answer5' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed126');
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
$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed11');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$answer6=mysql_result($r,$row,"answer6");
echo "
                  <tr>
    <th> 6.</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$answer6</td>"; 

$sql="SELECT * FROM questions WHERE Id= '6' &&  weeks = '$weeks' && answer = '$answer6' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed127');
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
$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed11');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$answer7=mysql_result($r,$row,"answer7");
echo "
                 <tr>
    <th> 7.</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$answer7</td>"; 

$sql="SELECT * FROM questions WHERE Id= '7' && weeks = '$weeks' && answer = '$answer7' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed128');
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
$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed11');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$answer8=mysql_result($r,$row,"answer8");
echo "
                  <tr>
    <th> 8.</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$answer8</td>"; 

$sql="SELECT * FROM questions WHERE Id= '8' && weeks = '$weeks' && answer = '$answer8' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed129');
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
$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed11');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$answer9=mysql_result($r,$row,"answer9");
echo "
                  <tr>
    <th> 9.</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$answer9</td>"; 

$sql="SELECT * FROM questions WHERE Id= '9' && weeks = '$weeks' && answer = '$answer9' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed130');
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
$sql="SELECT * FROM answers1 WHERE pincode = '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed11');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$answer10=mysql_result($r,$row,"answer10");
echo "
                  <tr>
    <th> 10.</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$answer10</td>"; 

$sql="SELECT * FROM questions WHERE Id= '10' && weeks='$weeks' && answer='$answer10' && subject='$subject' && class='$class'";
$r=mysql_query($sql) or die ('Error, query failed131');
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
echo "<td> <img src='images/right.jpeg' alt='correct' width='13' height='22' align='center' /></td><td>Correct Answer</td></tr>";
}				
}
}
}
}
$check_pincode_sql = "select count(*) from ans where pincode='$pincode' && weeks='$weeks' && status='correct' && class='$class' && section='$section'";
$row = mysql_fetch_array(mysql_query($check_pincode_sql));
$pincode_count = $row[0];
if ($pincode_count >= 8)
   {
   $rank="A1";
   }
   elseif ($pincode_count <=7.9 and $pincode_count >6.9)
   {
   $rank="B2";
   }
   elseif ($pincode_count <=6.9 and $pincode_count >5.9)
   {
   $rank="B3";
   }
   elseif ($pincode_count <= 5.9 and $pincode_count >4.9)
   {
   $rank="C4";
   }
   elseif ($pincode_count <=4.9 and $pincode_count >3.9)
   {
   $rank="D7";
   }
   else
   {
   $rank="F9";
   }
   
if ($rank == 'A1')
   {
   $grade="Distintion Performance";
   }
   elseif ($rank == 'B2')
   {
    $grade="Great Performance";
   }
   elseif ($rank == 'B3')
   {
   $grade="Good Performance";
   }
   elseif ($rank == 'C4')
   {
   $grade="Your Performance is Above Average";
   }
   elseif ($rank == 'D7')
   {
   $grade="Below Average";
   }
   else
   {
   $grade="Poor Performance";
   }
   if (mysql_query($check_pincode_sql))
   {
$sql="INSERT INTO test(pincode, score, weeks, class, section, subject) VALUES ('$pincode', '$pincode_count', '$weeks', '$class', '$section', '$subject')";
   }
if (mysql_query($sql))
{
echo "<thead><tr>
							<th>
MARKS OBTAINABLE</th><th>YOUR SCORE</th>
    <th>YOUR GRADE</th>
	<th align='center'>REMARKS</th>
  </tr>
					</thead><tbody><tr>
    <td align='center'> 10 </td><td align='center'>$pincode_count</td><td align='center'> $rank </td><td align='center'>$grade</td></tr></tbody>
				</table><p align='center'><b>View your total score by clicking <b><a href='outcome.php'>here</a></b></p></table></p>";
}

/*$sql="SELECT * FROM test WHERE pincode= '$pincode' && weeks = '$weeks' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1221');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n==0)*/		

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