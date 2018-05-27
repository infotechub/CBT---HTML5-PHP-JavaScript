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
.style4 {font-size: 18px}
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
      
      
             <p>
               <?php
	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];

	   if ($pincode =='')
{
echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**Sign in to access this page!**</b>";
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
// username and password sent from form
@$pincode=$_COOKIE['pincode'];

$sql1="SELECT * FROM subjects WHERE pincode='$pincode'";
$r=mysql_query($sql1) or die ('Error, query failed3');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
@$pincode=$_COOKIE['pincode'];

header ("Location: esubject.php");
exit ();
}

else

{
$sql="SELECT * FROM students WHERE pincode='$pincode'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form
@$username=$_POST['username'];

//while($row<$numrows)
{
$firstname=mysql_result($r,$row,"firstname");
$lastname=mysql_result($r,$row,"lastname");
$class=mysql_result($r,$row,"class");
/*$subject1=mysql_result($r,$row,"subject1");
$subject2=mysql_result($r,$row,"subject2");
$subject3=mysql_result($r,$row,"subject3");
$subject4=mysql_result($r,$row,"subject4");
$subject5=mysql_result($r,$row,"subject5");
$subject6=mysql_result($r,$row,"subject6");
$subject7=mysql_result($r,$row,"subject7");
$subject8=mysql_result($r,$row,"subject8");
$subject9=mysql_result($r,$row,"subject9");
$subject10=mysql_result($r,$row,"subject10");*/
}
}

echo "<p align='center'><b>$firstname $lastname, Welcome to Royal-Rainbow High School e-subject platform</p> <p align='center'> Kindly select the subjects you offers from the list below</p></b>";
echo "</p><p align='center'>
             
             <form id='form2' name='form2' method='post' action='processsubjects.php'>
               <table width='200' border='1'>
                 <tr>
                   <td><label>
                     <div align='center'>
                     <input type='hidden' name='Mathematics' value='yes' />
                   Mathematics</div>
                   </label></td>
                   <td><label>
                     <div align='center'>
                     <input type='hidden' name='English' value='yes' />
                   English Language</div>
                   </label></td>
                  <td><label>
                     <div align='center'>
                     <input type='hidden' name='Computer' value='yes' />
                   Computer Studies</div>
                  </label></td>
                   <td><label>
                     <div align='center'>
                     <input type='hidden' name='Civic' value='yes' />
                   Civic Education</div>
                   </label></td>
                 </tr>
                 <tr>
                  <td><label><div align='center'>
                     <input type='hidden' name='Economics' value='yes' />
                   Economics</div></label></td>
                   <td><label><div align='center'>
                     <input type='hidden' name='Biology' value='yes' />
                   Biology</div></label></td>
				<td><label><div align='center'>
                     <input type='checkbox' name='Agric' value='yes' />
                   Agricultural Science</div></label></td>
                   <td><label><div align='center'>
                     <input type='checkbox' name='Physics' value='yes' />
                   Physics</div></label></td>
                     
                 </tr>
                 <tr>
                   <td><label>
                     <div align='center'>
                     <input name='Government' type='checkbox' id='government' value='yes' />
                   Government</div>
                   </label></td>
                   <td><label>
                     <div align='center'>
                     <input name='Commerce' type='checkbox' id='commerce' value='yes' />
                   Commerce</div>
                   </label></td>
                   <td><label>
                     <div align='center'>
                     <input name='Accounting' type='checkbox' id='accounting' value='yes' />
                   Accounting</div>
                   </label></td>
                   <td><label>
                     <div align='center'>
                     <input name='Chemistry' type='checkbox' id='chemistry' value='yes' />
                   Chemistry</div>
                   </label></td>
                 </tr>
                 <tr>
                   <td><label>
                     <div align='center'>
                     <input name='Marketing' type='checkbox' id='marketing' value='yes' />
                   Marketing</div>
                   </label></td>
                   <td><label>
                     <div align='center'>
                     <input name='Dataprocessing' type='checkbox' id='dataprocessing' value='yes' />
                   Data Processing</div>
                   </label></td>
                   <td><label>
                     <div align='center'>
                     <input name='Geography' type='checkbox' id='geography' value='yes' />
                   Geography</div>
                   </label></td>
                   <td><label>
                     <div align='center'>
                     <input name='Furthermaths' type='checkbox' id='furthermaths' value='yes' />
                   Further Maths</div>
                   </label></td>
                 </tr> <tr>
                   <td><label>
                     <div align='center'>
                     <input type='hidden' name='$firstname' /></div>
                   </label></td>
                   <td><label>
                     <div align='center'>
                    <input type='hidden' name='$lastname' /></div>
                   </label></td>
                   <td><label>
                     <div align='center'>
                     <input type='hidden' name='$pincode' /></div>
                   </label></td>
                 </tr>
               </table><p align='center'>
                   <label></label>
                   <br />
                   <input type='submit' name='Submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' />
                 </p>
    </form></p>";
?>
             
    <p>&nbsp;</p>
             <p>&nbsp;       </p>
             <p align="center"></p>
      <h2>&nbsp;</h2>
  </div>
    <div id="column">
      <div class="holder">
        <ul id="latestnews">
          <li> <img src="images/staff.jpg" alt="products" width="86" height="93" class="imgl" />
            <p><strong><a href="#">E-Library</a></strong></p>
          </li>
          <li>
            <p> COMING SOON! Under construction</p>
          </li>
          <li class="last"> <img src="images/hands.jpg" alt="products" width="86" height="93" class="imgl" />
            <p><strong><a href="#">Electronic Test (e-test) .</a></strong> </p>
          </li>
          <li class="last">
            <p>Our e-subject and e-test platform prepares you ahead for JAMB computer based test (CBT) as well as post UTME.</p>
          </li>
        </ul>
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
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered by:<a href="http://www.jozitek.com">Jozi Global Services</a>
    <p class="fl_right"></p>
   <br class="clear" />
   
  </div>
</div>
</body>
</html>
