<?php



if(isSet($_POST['username']))
{
$username = $_POST['username'];

$dbHost = 'localhost'; // usually localhost
$dbUsername = 'root';
$dbPassword = '';
$dbDatabase = 'fxdairy';

$db = mysql_connect($dbHost, $dbUsername, $dbPassword) or die ("Unable to connect to Database Server.");
mysql_select_db ($dbDatabase, $db) or die ("Could not select database.");

$sql_check = mysql_query("select * from users where username='".$username."'") or die(mysql_error());

if(mysql_num_rows($sql_check))
{
echo '<font color="red"><STRONG>'.$username.'</STRONG> is already in use.</font>';
}
else
{
echo 'OK';
}

}

?>