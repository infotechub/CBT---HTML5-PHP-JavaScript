<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Rainbow High School</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" /><!-- Homepage Specific Elements -->
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tabs.setup.js"></script>
<!-- End Homepage Specific Elements -->
<style type="text/css">
<!--
.style5 {
	font-size: 14px;
	font-weight: bold;
}
.style7 {font-size: 12px}
-->
</style>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1 align="justify"><img src="images/logo1.jpg" alt="logo" width="123" height="92" align="left" /><span class="bold"> Royal Rainbow High School</span></h1>
      <p align="right"> ...sound education foundation </p>
    </div>
    <div class="footbox">
      <div align="right"><a href="mybase.php"><strong>EXAMINERS LOG IN HERE</strong></a></div>
      
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="#">starter</a></li>
        <li><a href="#">E-library</a></li>
        <li><a href="#">E-Subject</a></li>
		<li><a href="score.php">Score</a></li>
		<li><a href="correction.php">Correction</a></li>
        <li class="last"><a href="logout.php">Log Out</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
 
     
    <!-- ###### -->
    <table width="200" border="0">
      <tr>
        <td><img src="images/demo/1.jpg" alt="welcome" width="250" height="100" /></td>
        <td><img src="images/demo/2.jpg" alt="welcome" width="250" height="100" /></td>
        <td><img src="images/demo/3.jpg" alt="welcome" width="250" height="100" /></td>
        <td><img src="images/demo/4.jpg" alt="welcome" width="250" height="100" /></td>
        <td><img src="images/demo/5.jpg" alt="welcome" width="250" height="100" /></td>
      </tr>
    </table>
  <p align="center"></p>
</div>
  
  <!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="container">
    <div id="content">
     <?php
	   	   // username and password sent from form
//@$firstname=$_COOKIE['firstname'];
//@$lastname=$_COOKIE['lastname'];
//@$username=$_COOKIE['username'];
@$pincode=$_REQUEST['pincode'];
@$subject=$_REQUEST['subject'];
@$weeks=$_REQUEST['weeks'];

	   if ($pincode =='' && $class =='' && $subject =='')
{
echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**Sign in to access this page!**</b>";
{
include ("index22.php");
exit();  
}
}
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form



$sql="SELECT * FROM students WHERE pincode='$pincode'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
//Mysql_num_row is counting table row
{
@$firstname=mysql_result($result,$row,"firstname");
@$lastname=mysql_result($result,$row,"lastname");
@$address1=mysql_result($result,$row,"address1");
@$city=mysql_result($result,$row,"city");
@$state=mysql_result($result,$row,"state");
@$country=mysql_result($result,$row,"country");
@$username=mysql_result($result,$row,"username");
@$class=mysql_result($result,$row,"class");
@$section=mysql_result($result,$row,"section");
@$year=date("Y");

echo "<p align='center'><u>Student's Scoresheet for <b>$subject</b> Computer-Based Test (CBT) for $class</u></p><br/><table width='200' border='1'>
  <tr>
    <td>Full Name</td>
    <td align='center'>$firstname&nbsp;$lastname</td>
  </tr>
  <tr>
    <td>Class</td>
    <td align='center'>$class </td>
  </tr>
  <tr>
    <td>Subject</td>
    <td align='center'>$subject Computer-Based Test (CBT)</td>
  </tr>
  <tr>
    <td>Term</td>
    <td align='center'>$section, 2015/2016 Session</td>
  </tr>
  <tr>
    <td>School</td>
    <td align='center'>Royal-Rainbow High School, Agodo-Egbe, Lagos</td>
  </tr>
</table><hr/><hr/>"; 
						
						}
						
	echo "<table width='200' border='1'>
	<tr>
    <td>WEEKS</td><td align='center'>MARKS OBTAINABLE</td>
    <td align='center'>MARKS OBTAINED</td>
	<td align='center'>DATE OF TEST</td>
  </tr>";
  $sql="SELECT * FROM $subject WHERE pincode='$pincode'";
$result=mysql_query($sql) or die('Error, insert query failed');
$row=0;
$numrows=mysql_num_rows($result);

while($row<$numrows)
{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$weeks=mysql_result($result,$row,"weeks");
@$score=mysql_result($result,$row,"score");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");
$today=date("Y-m-d");
$obtainable1 = $row * 10;
$obtainable = $obtainable1 + 10;
 echo " <tr>
    <td>$weeks</td><td align='center'>10</td>
    <td align='center'>$score</td>
	<td align='center'>$date</td>
  </tr>";
  
  $row++; 
						
						}
						//$sql="SELECT sum(score) as total FROM students WHERE pincode='$pincode'";
//$result=mysql_query($sql) or die ("query failed12");
//if (mysql_num_rows ($result) == 1)
   $query="SELECT * FROM $subject WHERE pincode='$pincode'";
$query_run=mysql_query($query) or die('Error, insert query failed');

$total = 0;
while ($num = mysql_fetch_assoc($query_run))
$total += $num['score'];
  echo "<tr>
    <td>TOTAL SCORE</td>
    <td align='center'><b>$obtainable</b></td><td align='center'><b>$total</b></td><td align='center'>Scores Computed on: $today</td>
  </tr>
</table><p align='center'>* Total Marks Obtainable Per Week = 10 Marks</p><p ><form align='right'><input type='button' value='Print This Result Sheet' onClick='window.print()' /></form></p><p align='right'>Printed on: $today</p>";		

?>
     
      <h2>&nbsp;</h2>
    </div>
    <div id="column">
      <div class="holder"><p align='center'><b>How Students Scores or performance are calculated</b><hr /></p><br/><br/><br/>
        <p align='center'> * Each week has a total marks obtainable of 10 marks</p><p align='center'> * Total Marks obtainable equals marks obtainable per week multiply by total numbers of weeks</p>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col6">
  <div id="footer">
    <div id="login">
      <p>&nbsp;</p>
      <p></p>
    </div>
    
    
    <div class="footbox">
      <ul>
        <li></li>
        <li class="last"><a href="#"></a></li>
      </ul>
    </div><div class="footbox">
      <ul>
        <li></li>
        <li class="last"><a href="#"></a></li>
      </ul>
    </div><div class="footbox"><div></div>
      <ul><li class="last"><a href="#"></a></li>
      </ul>
    </div><div class="footbox"><div></div>
      <ul><li class="last"><a href="#"></a></li>
      </ul>
    </div><div class="footbox"><div></div>
      <ul><li class="last"><a href="#"></a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col7">
  <div id="copyright"><p align="center">&nbsp;&nbsp;<script language="JavaScript">
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('Copyright © '+year+' Royal Rainbow High School - All Rights Reserved');
//--></script>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered by:<a href="http://www.jozitek.com">Jozi Global Services(08073047600)</a>
    <p class="fl_right"></p>
   <br class="clear" />
   
  </div>
</div>
</body>
</html>
