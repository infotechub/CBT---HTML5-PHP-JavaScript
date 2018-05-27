<?php 
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
@$username=$_POST['username'];
@$password=$_POST['password'];
{
 $sql="SELECT * FROM examiners WHERE username = '$username' && password = '$password'";
 $result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
$firstname=mysql_result($result,$row,"firstname");
$lastname=mysql_result($result,$row,"lastname");
$subject=mysql_result($result,$row,"subject");

{// if a row was returned authentication was successful create session and set cookie with username
setcookie ("username", $username, time() + 1200);
setcookie ("firstname", $firstname, time() + 1200);
setcookie ("lastname", $lastname, time() + 1200);
setcookie ("subject", $subject, time() + 1200);
header ("Location: mypage.php");
exit (); 
}

}
?>