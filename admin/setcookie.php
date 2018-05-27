
<?php
include ("debase.php");          // All database details will be included here

if ($number =='' || $pincode=='')
{
echo "You can't access this page without logging in with your pin code.";
exit();
}
@$number=$_REQUEST['number'];
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

if ($number =='1')
{
setcookie ("number", $number, time() + 1200);
setcookie ("answer1", $answer1, time() + 1200);
}
if ($number =='2')
{
setcookie ("number", $number, time() + 1200);
setcookie ("answer2", $answer2, time() + 1200);
exit();
}
if ($number =='3')
{
setcookie ("number", $number, time() + 1200);
setcookie ("answer3", $answer3, time() + 1200);
exit();
}
if ($number =='4')
{
setcookie ("number", $number, time() + 1200);
setcookie ("answer4", $answer4, time() + 1200);
exit();
}
if ($number =='5')
{
setcookie ("number", $number, time() + 1200);
setcookie ("answer5", $answer5, time() + 1200);
exit();
}
if ($number =='6')
{
setcookie ("number", $number, time() + 1200);
setcookie ("answer6", $answer6, time() + 1200);
exit();
}
if ($number =='7')
{
setcookie ("number", $number, time() + 1200);
setcookie ("answer7", $answer7, time() + 1200);
exit();
}
if ($number =='8')
{
setcookie ("number", $number, time() + 1200);
setcookie ("answer8", $answer8, time() + 1200);
exit();
}
if ($number =='9')
{
setcookie ("number", $number, time() + 1200);
setcookie ("answer9", $answer9, time() + 1200);
exit();
}
if ($number =='10')
{
setcookie ("number", $number, time() + 1200);
setcookie ("answer10", $answer10, time() + 1200);
$sql1="INSERT INTO answers(answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10, weeks, class, pincode, section) VALUES ('$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9', '$answer10','$weeks', '$class', '$pincode', '$section')";
if (mysql_query($sql1))
{
header ("Location: myperformance1.php");
exit (); 
}
}


	?>