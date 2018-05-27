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
       <li class="active"><a href="data.php">Students' Data</a></li>
		<li><a href="scoresheet.php">Score sheet</a></li>
		<li><a href="result.php">Students Result</a></li>
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
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
@$username=$_COOKIE['username'];
@$subjects=$_COOKIE['subjects'];

	   if ($username =='')
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
$db_name="cbt";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form
@$username=$_COOKIE['username'];


$sql="SELECT * FROM examiners WHERE username='$username'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
// username and password sent from form

//Mysql_num_row is counting table row
{
@$firstname=mysql_result($r,$row,"firstname");
@$lastname=mysql_result($r,$row,"lastname");
@$username=mysql_result($r,$row,"username");
}

echo  "<p class='style7' align='center'><br><u><b>$username</b>, Kindly click any of the classes below</b></u></br></p>";
echo  "<p align='center'><a href='1.php?section=JSS 1'>J.S.S 1</a>   ||  <a href='1.php?section=JSS 2'>J.S.S 2</a>  ||  <a href='1.php?section=JSS 3'>J.S.S 3 </a>|| <a href='2.php?section=SS 1 SCIENCE'>S.S.1 SCIENCE</a>  || <a href='2.php?section=SS 2 SCIENCE'>S.S.2 SCIENCE</a>  || <a href='2.php?section=SS 3 SCIENCE'>S.S.3 SCIENCE</a> <br/><a href='3.php?section=SS 1 ART'>S.S.1 SOCIAL SCIENCE</a>  || <a href='3.php?section=SS 2 ART'>S.S.2 SOCIAL SCIENCE</a>  || <a href='3.php?section=SS 3 ART'>S.S.3 SOCIAL SCIENCE</a></p>";
?>
      <p align="center">&nbsp;</p>
      <h2>&nbsp;</h2>
    </div>
    <div id="column">
      <div class="holder">
        <ul id="latestnews">
          <li> 
            <p><br/><b>Procedures for Checking Students Results No 1</b></p>
          </li>
          <li>
            <p> ** Select The class from the left-side of your screen **</p>
          </li>
          
          <li class="last">
            <p>** Select the subject you want to check **</p>
          </li>
		  <li class="last">
            <p>** Then click on proceed **</p>
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
