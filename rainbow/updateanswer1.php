
     <?php
	 
	 

	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
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



	   if ($pincode =='')
{
echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**Please sign in with your pin code!**</b>";
include ("index22.php");
exit();  
}

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$sql9="SELECT * FROM enganswers WHERE pincode='$pincode' && weeks='$weeks'";
$r=mysql_query($sql9) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{

echo "You have previously send your answer to the database.";
exit();
}
else
{
$sql1="INSERT INTO enganswers(answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10, weeks, class, pincode) VALUES ('$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9', '$answer10','$weeks', '$class', '$pincode')";
if (mysql_query($sql1))
{
header ("Location: myperformance1.php");
exit (); 
}
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
      
   