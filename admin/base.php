
     <?php
	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_REQUEST['weeks'];
@$class=$_REQUEST['class'];
@$subject=$_REQUEST['subject'];
@$section=$_REQUEST['section'];
//@$number=$_REQUEST['number'];


	   if ($pincode =='' && $weeks =='' && $class =='' && $subject =='')
{
header ("Location: home.php");
exit();
}
else
 
 {
include ("debase.php");


@$pincode=$_COOKIE['pincode'];
$sql="SELECT * FROM students WHERE pincode = '$pincode'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
$firstname=mysql_result($result,$row,"firstname");
$lastname=mysql_result($result,$row,"lastname");
$class=mysql_result($result,$row,"class");


{
// if a row was returned authentication was successful create session and set cookie with username
setcookie ("pincode", $pincode, time() + 1200);
setcookie ("firstname", $firstname, time() + 1200);
setcookie ("lastname", $lastname, time() + 1200);
setcookie ("class", $class, time() + 1200);
setcookie ("weeks", $weeks=$_REQUEST['weeks'], time() + 1200);
setcookie ("subject", $subject=$_REQUEST['subject'], time() + 1200);
setcookie ("section", second, time() + 1200);
header ("Location: start.php");

exit (); 
}

}
?>
     