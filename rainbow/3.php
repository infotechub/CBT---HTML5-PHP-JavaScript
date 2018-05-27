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
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
<!-- End Homepage Specific Elements -->
<style type="text/css">
<!--
.style4 {font-size: 18px}
-->
table {
	   background: #c2cadd;
	   border-collapse: separated;
	   
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
        <li class="active"><a href="#">School Website</a></li>
        <li><a href="#">E-library</a></li>
        <li><a href="#">E-Subject</a></li>
		<li><a href="register.php">Register</a></li>
        <li class="last"><a href="contact.php">Contact Us</a></li>
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
  <div id="container1">
    <div id="content1">
      <h2 align="center" class="bold">STUDENTS' SCORESHEET  </h2>
      <p align="center" class="style4"> Note: MT:- Mid Term Test  || EX:- Exam Scores  || TL:- Total <br/> To view students report sheets, kindly click on the green link under the RESULT LINK</p>
             <?php 

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="cbt";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
@$class=$_REQUEST['class'];


echo "<table class=''>
					<thead>
						<tr>
							<th>FULL NAMES</th><th>MATHEMATICS</th>
    <th>ENGLISH</th>
    <th>COMPUTER</th>
    <th>CIVIC EDU.</th>
    <th>ACCOUNTING</th>
    <th>GOVERNMENT</th>
    <th>CRK</th>
	<th>MARKETING</th>
    <th>ENGLISH LITERATURE</th>
    <th>BIOLOGY</th>
    <th>COMMERCE</th>
    <th>ECONOMICS</th>
	<th>YORUBA</th>
    <th>E-MATHS</th>
    <th>E-ENG</th>
    <th>MARKS OBTAINABLE</th>
    <th>MARKS OBTAINED</th>
    <th>AVERAGE</th>
	<th>RESULT LINK</th>
    </tr>
					</thead> <tbody>
						<tr>
							<th></th>
    
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
    <td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
	<td>MT&nbsp;&nbsp;&nbsp;&nbsp;EX&nbsp;&nbsp;&nbsp;&nbsp;TL</td>
	<td></td>
	<td></td>
    <td align='center'>%</td>
	<td></td>
  </tr>";
  
  $sql="SELECT * FROM studentsrecord WHERE class='3'";
$result=mysql_query($sql) or die('Error, insert query failed');
$row=0;
$numrows=mysql_num_rows($result);
while($row<$numrows)
{
@$pincode=mysql_result($result,$row,"pincode");
@$firstname=mysql_result($result,$row,"firstname");
@$lastname=mysql_result($result,$row,"lastname");
@$test1=mysql_result($result,$row,"test1");
@$exam1=mysql_result($result,$row,"exam1");
@$test2=mysql_result($result,$row,"test2");
@$exam2=mysql_result($result,$row,"exam2");
@$test3=mysql_result($result,$row,"test3");
@$exam3=mysql_result($result,$row,"exam3");
@$test4=mysql_result($result,$row,"test4");
@$exam4=mysql_result($result,$row,"exam4");
@$test5=mysql_result($result,$row,"test5");
@$exam5=mysql_result($result,$row,"exam5");
@$test6=mysql_result($result,$row,"test6");
@$exam6=mysql_result($result,$row,"exam6");
@$test7=mysql_result($result,$row,"test7");
@$exam7=mysql_result($result,$row,"exam7");
@$test8=mysql_result($result,$row,"test8");
@$exam8=mysql_result($result,$row,"exam8");
@$test9=mysql_result($result,$row,"test9");
@$exam9=mysql_result($result,$row,"exam9");
@$test10=mysql_result($result,$row,"test10");
@$exam10=mysql_result($result,$row,"exam10");
@$test11=mysql_result($result,$row,"test11");
@$exam11=mysql_result($result,$row,"exam11");
@$test12=mysql_result($result,$row,"test12");
@$exam12=mysql_result($result,$row,"exam12");
@$test13=mysql_result($result,$row,"test13");
@$exam13=mysql_result($result,$row,"exam13");
@$test14=mysql_result($result,$row,"test14");
@$exam14=mysql_result($result,$row,"exam14");
@$test15=mysql_result($result,$row,"test15");
@$exam15=mysql_result($result,$row,"exam15");
@$test16=mysql_result($result,$row,"test16");
@$exam16=mysql_result($result,$row,"exam16");
@$test17=mysql_result($result,$row,"test17");
@$exam17=mysql_result($result,$row,"exam17");
@$gdeed=mysql_result($result,$row,"gdeed");
@$bdeed=mysql_result($result,$row,"bdeed");
@$comment=mysql_result($result,$row,"comment");
@$totalsubjects=mysql_result($result,$row,"totalsubjects");
@$tcomment=mysql_result($result,$row,"tcomment");
$total1 = $test1 + $exam1;
$total2 = $test2 + $exam2;
$total3 = $test3 + $exam3;
$total4 = $test4 + $exam4;
$total5 = $test5 + $exam5;
$total6 = $test6 + $exam6;
$total7 = $test7 + $exam7;
$total8 = $test8 + $exam8;
$total9 = $test9 + $exam9;
$total10 = $test10 + $exam10;
$total11 = $test11 + $exam11;
$total12 = $test12 + $exam12;
$total13 = $test13 + $exam13;
$total14 = $test14 + $exam14;
$total15 = $test15 + $exam15;
$total16 = $test16 + $exam16;
$total17 = $test17 + $exam17;
$total = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12 + $total13 + $total14 + $total15 + $total16 + $total17;
$average= round($total/$totalsubjects, 3);
$obtainable= 100*$totalsubjects;

  echo "<tr>
							<th>$firstname $lastname</th>
    <td>$test1&nbsp;&nbsp;&nbsp;&nbsp;$exam1&nbsp;&nbsp;&nbsp;&nbsp;$total1</td>
    <td>$test2&nbsp;&nbsp;&nbsp;&nbsp;$exam2&nbsp;&nbsp;&nbsp;&nbsp;$total2</td>
    <td>$test3&nbsp;&nbsp;&nbsp;&nbsp;$exam3&nbsp;&nbsp;&nbsp;&nbsp;$total3</td>
    <td>$test4&nbsp;&nbsp;&nbsp;&nbsp;$exam4&nbsp;&nbsp;&nbsp;&nbsp;$total4</td>
    <td>$test5&nbsp;&nbsp;&nbsp;&nbsp;$exam5&nbsp;&nbsp;&nbsp;&nbsp;$total5</td>
    <td>$test6&nbsp;&nbsp;&nbsp;&nbsp;$exam6&nbsp;&nbsp;&nbsp;&nbsp;$total6</td>
    <td>$test7&nbsp;&nbsp;&nbsp;&nbsp;$exam7&nbsp;&nbsp;&nbsp;&nbsp;$total7</td>
    <td>$test8&nbsp;&nbsp;&nbsp;&nbsp;$exam8&nbsp;&nbsp;&nbsp;&nbsp;$total8</td>
    <td>$test9&nbsp;&nbsp;&nbsp;&nbsp;$exam9&nbsp;&nbsp;&nbsp;&nbsp;$total9</td>
    <td>$test10&nbsp;&nbsp;&nbsp;&nbsp;$exam10&nbsp;&nbsp;&nbsp;&nbsp;$total10</td>
    <td>$test11&nbsp;&nbsp;&nbsp;&nbsp;$exam11&nbsp;&nbsp;&nbsp;&nbsp;$total11</td>
    <td>$test12&nbsp;&nbsp;&nbsp;&nbsp;$exam12&nbsp;&nbsp;&nbsp;&nbsp;$total12</td>
    <td>$test13&nbsp;&nbsp;&nbsp;&nbsp;$exam13&nbsp;&nbsp;&nbsp;&nbsp;$total13</td>
    <td>$test14&nbsp;&nbsp;&nbsp;&nbsp;$exam14&nbsp;&nbsp;&nbsp;&nbsp;$total14</td>
	<td>$test15&nbsp;&nbsp;&nbsp;&nbsp;$exam15&nbsp;&nbsp;&nbsp;&nbsp;$total15</td>
	<td>$obtainable</td>
	<td>$total</td>
    <td>$average</td>
	<td><a href='art.php?pincode=$pincode'>Details Here</td>
  </tr>";
  $row++; 
						
						}
echo "</tbody></table>";

?>
<p>&nbsp;</p>
<p align="center"></p>
      
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
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered by:<a href="http://www.jozitek.com">Jozi Global Services</a>
    <p class="fl_right"></p>
   <br class="clear" />
   
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
</body>
</html>
