
     <?php
	 
	 include ("debase.php");
	   	   // username and password sent from form
@$username=$_REQUEST['username'];
@$password=$_REQUEST['password'];


	   if ($username =='' || $password=='')
{
header ("Location: index.php");
exit();
}
else
 {
$sql="SELECT * FROM examiners WHERE username = '$username' && password='$password'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
$firstname=mysql_result($result,$row,"firstname");
$lastname=mysql_result($result,$row,"lastname");
//$class=mysql_result($result,$row,"class");
{
// if a row was returned authentication was successful create session and set cookie with username
setcookie ("username", $username, time() + 1200);
setcookie ("firstname", $firstname, time() + 1200);
setcookie ("lastname", $lastname, time() + 1200);
//setcookie ("class", $class, time() + 1200);
//setcookie ("section", $second, time() + 1200);
header ("Location: esubject.php");

exit (); 
}

}
?>
     