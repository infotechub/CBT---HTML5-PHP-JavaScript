<?php



if(isSet($_POST['answer1']))
{
$answer1 = $_POST['answer1'];
@$class=$_COOKIE['class'];
@$weeks=$_COOKIE['weeks'];
@$pincode=$_COOKIE['pincode'];

$dbHost = 'localhost'; // usually localhost
$dbUsername = 'root';
$dbPassword = '';
$dbDatabase = 'rainbow';

$db = mysql_connect($dbHost, $dbUsername, $dbPassword) or die ("Unable to connect to Database Server.");
mysql_select_db ($dbDatabase, $db) or die ("Could not select database.");



$sql="SELECT * FROM mathanswers WHERE answer1 = '$answer1' && weeks='$weeks' && class = '$class'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)

{
echo 'OK';
}
else
{
echo 'Oops';
}
}

?>