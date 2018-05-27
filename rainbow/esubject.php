<?php

include ("debase.php"); 

// username and password sent from form
@$pincode=$_POST['pincode'];

 $sql="SELECT * FROM students WHERE pincode = '$pincode'";
 $result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result)  == 1 )

{// if a row was returned authentication was successful create session and set cookie with username
setcookie ("pincode", $pincode, time() + 1200);
}
else
{
header ("Location: index2.php");
exit();  
}


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

  
  <!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="container">
    <div id="content">
<?php
	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$subjects=$_POST['subjects'];

	   if ($pincode =='')

{
include ("home.php");
exit();  
}

include ("debase.php");
// username and password sent from form
@$pincode=$_COOKIE['pincode'];


$sql="SELECT * FROM subjects WHERE pincode='$pincode'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
//Mysql_num_row is counting table row
{
@$firstname=mysql_result($result,$row,"firstname");
@$lastname=mysql_result($result,$row,"lastname");
@$class=mysql_result($result,$row,"class");
@$subject=mysql_result($result,$row,"subject");
@$subject1=mysql_result($result,$row,"subject1");
@$subject2=mysql_result($result,$row,"subject2");
 
echo "<p align='center'>"; ?><script language=javascript>
<!--
function greeting() {
Now = new Date()
Hour = Now.getHours();
if (Hour < 5)
msg ="<span style='color: #000000'><font size='3' style='position: relative; top: 0px; left: 2px;'><b><?php echo "$firstname $lastname,"; ?>Can't sleep? Don't worry as we'll keep your company. </b></font></span><br><font size='3' color='006666' style='position: relative; left: 0px; top:-23px;'><b><?php echo "$firstname $lastname,"; ?>Can't sleep? Don't worry as we'll keep your company. </b></font>"
else if(Hour <12)
msg ="<span style='color: #000000'><font size='3' style='position: relative; top: 0px; left: 2px;'><b> <?php echo "$firstname $lastname,"; ?> good Morning! Welcome to Royal Rainbow High School CBT Platform </b></font></span><br><font size='3' color='006666' style='position: relative; left: 0px; top:-23px;'><b><?php echo "$firstname $lastname,"; ?> good Morning! Welcome to Royal Rainbow High School CBT Platform</b></font>"
else if(Hour < 18)
msg ="<span style='color: #000000'><font size='3' style='position: relative; top: 0px; left: 2px;'><b><?php echo "$firstname $lastname,"; ?> good afternoon! Welcome to Royal Rainbow High School CBT Platform </b></font></span><br><font size='3' color='006666' style='position: relative; left: 0px; top:-32px;'><b><?php echo "$firstname $lastname,"; ?> good afternoon! Welcome to Royal Rainbow High School CBT Platform</b></font>"
else if (Hour < 24)
msg ="<span style='color: #000000'><font size='3' style='position: relative; top: 0px; left: 2px;'><b><?php echo "$firstname $lastname,"; ?> good Evening! We hope you have had a pleasant day. <br/> Kindly select any subject you want to attempt and the week from the field below </b></font></span><br><font size='3' color='006666' style='position: relative; left: 0px; top: -23px;'><b> <?php echo "$firstname $lastname,"; ?> good Evening! We hope you have had a pleasant day. <br/> Kindly select any subject you want to attempt and the week from the field below</b></font>"
return( msg )
}
document.write(greeting())
//-->
</script>

<?php
echo  "<form id='form2' name='form2' method='post' action='base.php' p align='center'>
              <br><table width='600' border='0' align='center'><tr><td align='center'> <label>
        <div align='center'>WEEKS
          <select name='weeks'>
            <option> FOUR</option>
            <option> FIVE</option>
            <option> SIX</option>
            <option> SEVEN</option>
            <option>EIGHT</option>
            <option> NINE</option>
            <option> TEN</option>
            <option> EXAM</option>
            
          </select>
        </div>
        </label></td><td align='center'> <label>
        <div align='center'>Class
          <select name='class'>
            <option>$class</option>
          </select>
        </div>
        </label></td><td align='center'> <label>
        <div align='center'>Subject <select name='subject'>
            <option>$subject1</option>
            <option>$subject2</option>
         
          </select>
         <input name='class' type='hidden' id='class' value='$class' />
        </div>
        </label></td></tr></table>
                  <label>
                     <div align='center'>
                     <input type='hidden' name='pincode' value='$pincode'/></div>
                   </label>
               <p align='center'>
                   <label></label>
                   
                   <input type='submit' name='Submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 60' value='START NOW!' onClick='goNewWin()' /></form><hr/>";

}
else
{
echo "<p align='center'>Oop!, I can't find your pincode in my database. Kindly click <a href='index.php'>here</a> and sign in with correct pincode.!!!</p></p>";
}

?>
      <p align="center">&nbsp;</p>
      <h2>&nbsp;</h2>
    </div>
    <div id="column">
      <div class="holder">
        <ul id="latestnews">
          <li> <a href='mathscore.php'><img src="images/maths.jpeg" alt="marks" width="126" height="103" class="imgl" /></a>
            
          </li>
         
          <li class="last"> <a href='engscore.php'><img src="images/english.jpeg" alt="products" width="126" height="103" class="imgl" /></a>
            
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
