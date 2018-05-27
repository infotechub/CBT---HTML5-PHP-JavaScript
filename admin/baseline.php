
     <?php
	   	   // username and password sent from form
@$username=$_COOKIE['username'];
@$weeks=$_REQUEST['weeks'];
@$class=$_REQUEST['class'];
@$subject=$_REQUEST['subject'];
@$section=$_REQUEST['section'];
//@$number=$_REQUEST['number'];


	   if ($username =='' && $weeks =='' && $class =='' && $subject =='')
{
header ("Location: index.php");
exit();
}
else
 
 {
include ("debase.php");


@$username=$_COOKIE['username'];
$sql="SELECT * FROM examiners WHERE username = '$username'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
$firstname=mysql_result($result,$row,"firstname");
$lastname=mysql_result($result,$row,"lastname");
//$class=mysql_result($result,$row,"class");


{
// if a row was returned authentication was successful create session and set cookie with username
setcookie ("class", $class, time() + 1200);
setcookie ("weeks", $weeks=$_REQUEST['weeks'], time() + 1200);
setcookie ("subject", $subject=$_REQUEST['subject'], time() + 1200);
setcookie ("section", second, time() + 1200);
header ("Location: setquestions.php");

exit (); 
}

}
?>
     