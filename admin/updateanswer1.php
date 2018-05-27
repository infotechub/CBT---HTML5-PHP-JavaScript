 <?php
	 
	include ("debase.php"); 

	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$number1=$_REQUEST['number1'];
@$number2=$_REQUEST['number2'];
@$number3=$_REQUEST['number3'];
@$number4=$_REQUEST['number4'];
@$number5=$_REQUEST['number5'];
@$number6=$_REQUEST['number6'];
@$number7=$_REQUEST['number7'];
@$number8=$_REQUEST['number8'];
@$number9=$_REQUEST['number9'];
@$number10=$_REQUEST['number10'];
@$ans1=$_REQUEST['ans1'];
@$ans2=$_REQUEST['ans2'];
@$ans3=$_REQUEST['ans3'];
@$ans4=$_REQUEST['ans4'];
@$ans5=$_REQUEST['ans5'];
@$ans6=$_REQUEST['ans6'];
@$ans7=$_REQUEST['ans7'];
@$ans8=$_REQUEST['ans8'];
@$ans9=$_REQUEST['ans9'];
@$ans10=$_REQUEST['ans10'];


if ($number1 =='0')
{
$number1 = 0 + 1;
setcookie ("number1", $number1, time() + 1200);
setcookie ("ans1", $ans1, time() + 1200);
header ("Location: test.php");
exit();
}
elseif ($number1 =='1')
{
$number2 = $number1 + 1;
setcookie ("number2", $number2, time() + 1200);
setcookie ("ans2", $ans2, time() + 1200);
header ("Location: test.php");
exit();
}
elseif ($number2 =='2')
{
$number3 = 2 + 1;
setcookie ("number3", $number3, time() + 1200);
setcookie ("ans3", $ans3, time() + 1200);
header ("Location: test.php");
exit();
}
elseif ($number3 =='3')
{
$number4 = 3 + 1;
setcookie ("number4", $number4, time() + 1200);
setcookie ("ans4", $ans4, time() + 1200);
header ("Location: test.php");
exit();
}
elseif ($number5 =='5')
{
$number5 = 4 + 1;
setcookie ("number5", $number5, time() + 1200);
setcookie ("ans5", $ans5, time() + 1200);
header ("Location: test.php");
exit();
}
elseif ($number6 =='6')
{
$number6 = 5 + 1;
setcookie ("number6", $number6, time() + 1200);
setcookie ("ans6", $ans6, time() + 1200);
header ("Location: test.php");
exit();
}
elseif ($number7 =='7')
{
$number7 = 6 + 1;
setcookie ("number7", $number7, time() + 1200);
setcookie ("ans7", $ans7, time() + 1200);
header ("Location: test.php");
exit();
}
elseif ($number8 =='8')
{
$number8 = 7 + 1;
setcookie ("number8", $number8, time() + 1200);
setcookie ("ans8", $ans8, time() + 1200);
header ("Location: test.php");
exit();
}
elseif ($number9 =='9')
{
$number9 = 8 + 1;
setcookie ("number9", $number9, time() + 1200);
setcookie ("ans9", $ans9, time() + 1200);
header ("Location: test.php");
exit();
}
elseif ($number10 =='10')
{
$number10 = 9 + 1;
setcookie ("number10", $number10, time() + 1200);
setcookie ("ans10", $ans10, time() + 1200);
header ("Location: test.php");
exit();
}
/*if ($answer1 =='answer1')

$sql9="SELECT * FROM mathanswers WHERE pincode='$pincode' && answer1='$answer1' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n=0)
{
$sql1 = "UPDATE mathanswers SET  answer1 ='$answer1' WHERE pincode = '$pincode' && weeks = '$weeks'";
if (!mysql_query($sql1))
header ("Location: Mathematics2.php");
exit (); 
}
else
{
header ("Location: Mathematics2.php");
exit (); 
}
if ($answer2 =='answer2')

$sql9="SELECT * FROM mathanswers WHERE pincode='$pincode' && answer2='$answer2' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n=0)
{
$sql1 = "UPDATE mathanswers SET  answer2 ='$answer2' WHERE pincode = '$pincode' && weeks = '$weeks'";
if (!mysql_query($sql1))
header ("Location: Mathematics3.php");
exit (); 
}
else
{
header ("Location: Mathematics3.php");
exit (); 
}
if ($answer3 =='answer3')

$sql9="SELECT * FROM mathanswers WHERE pincode='$pincode' && answer3='$answer3' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n=0)
{
$sql1 = "UPDATE mathanswers SET  answer3 ='$answer3' WHERE pincode = '$pincode' && weeks = '$weeks'";
if (!mysql_query($sql1))
header ("Location: Mathematics4.php");
exit (); 
}
else
{
header ("Location: Mathematics4.php");
exit (); 
}
if ($answer4 =='answer4')

$sql9="SELECT * FROM mathanswers WHERE pincode='$pincode' && answer4='$answer4' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n=0)
{
$sql1 = "UPDATE mathanswers SET  answer4 ='$answer4' WHERE pincode = '$pincode' && weeks = '$weeks'";
if (!mysql_query($sql1))
header ("Location: Mathematics5.php");
exit (); 
}
else
{
header ("Location: Mathematics5.php");
exit (); 
}
if ($answer5 =='answer5')

$sql9="SELECT * FROM mathanswers WHERE pincode='$pincode' && answer5 ='$answer5' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n=0)
{
$sql1 = "UPDATE mathanswers SET  answer5 ='$answer5' WHERE pincode = '$pincode' && weeks = '$weeks'";
if (!mysql_query($sql1))
header ("Location: Mathematics6.php");
exit (); 
}
else
{
header ("Location: Mathematics6.php");
exit (); 
}
if ($answer6 =='answer6')

$sql9="SELECT * FROM mathanswers WHERE pincode='$pincode' && answer6 ='$answer6' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n=0)
{
$sql1 = "UPDATE mathanswers SET  answer6 ='$answer6' WHERE pincode = '$pincode' && weeks = '$weeks'";
if (!mysql_query($sql1))
header ("Location: Mathematics7.php");
exit (); 
}
else
{
header ("Location: Mathematics7.php");
exit (); 
}
if ($answer7 =='answer7')

$sql9="SELECT * FROM mathanswers WHERE pincode='$pincode' && answer6 ='$answer6' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n=0)
{
$sql1 = "UPDATE mathanswers SET  answer7 ='$answer7' WHERE pincode = '$pincode' && weeks = '$weeks'";
if (!mysql_query($sql1))
header ("Location: Mathematics8.php");
exit (); 
}
else
{
header ("Location: Mathematics8.php");
exit (); 
}
if ($answer8 =='answer8')

$sql9="SELECT * FROM mathanswers WHERE pincode='$pincode' && answer8 ='$answer8' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n=0)
{
$sql1 = "UPDATE mathanswers SET  answer8 ='$answer8' WHERE pincode = '$pincode' && weeks = '$weeks'";
if (!mysql_query($sql1))
header ("Location: Mathematics9.php");
exit (); 
}
else
{
header ("Location: Mathematics9.php");
exit (); 
}
if ($answer9 =='answer9')

$sql9="SELECT * FROM mathanswers WHERE pincode='$pincode' && answer9 ='$answer9' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n=0)
{
$sql1 = "UPDATE mathanswers SET  answer9 ='$answer9' WHERE pincode = '$pincode' && weeks = '$weeks'";
if (!mysql_query($sql1))
header ("Location: Mathematics10.php");
exit (); 
}
else
{
header ("Location: Mathematics10.php");
exit (); 
}
if ($answer10 =='answer10')

$sql9="SELECT * FROM mathanswers WHERE pincode='$pincode' && answer10 ='$answer10' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n=0)
{
$sql1 = "UPDATE mathanswers SET  answer10 ='$answer10' WHERE pincode = '$pincode' && weeks = '$weeks'";
if (!mysql_query($sql1))
header ("Location: myperformance.php");
exit (); 
}
else
{
header ("Location: myperformance.php");
exit (); 
}*/
?>
      
   