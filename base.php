<?php

include ("debase.php"); 

// username and password sent from form
@$pincode=$_COOKIE['pincode'];

 $sql="SELECT * FROM students WHERE pincode = '$pincode'";
 $result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result)  == 0 )
{
header ("Location: index2.php");
exit();  
}

// username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
@$weeks=$_REQUEST['weeks'];
@$class=$_REQUEST['class'];
@$subject=$_REQUEST['subject'];
@$section=$_REQUEST['section'];

$sql="SELECT * FROM questions WHERE weeks='$weeks' && section='second' && subject='$subject' && class='$class'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 0) 
{
echo "<hr/><p align='center'><b>No $subject test for week $weeks. Click <a href='esubject.php'>here</a> to select another test.</b><hr/>";
exit();
}
if ($subject=='English Language');
{
// if a row was returned authentication was successful create session and set cookie with username
setcookie ("weeks", $weeks=$_REQUEST['weeks'], time() + 1200);
setcookie ("subject", $subject=$_REQUEST['subject'], time() + 1200);
setcookie ("section", second, time() + 1200); 
header ("Location: start.php");
exit ();
}


 

?>
    
