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
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$s_n=$_POST['s_n'];

	   if ($s_n =='' && $pincode =='' && $weeks =='' && $class =='' && subjects =='')
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
@$s_n=$_POST['s_n'];
@$pincode=$_COOKIE['pincode'];
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
@$pincode=$_COOKIE['pincode'];
@$class=$_COOKIE['class'];
@$subjects=$_COOKIE['subjects'];
@$weeks=$_POST['weeks'];
@$s_n=$_POST['s_n'];
@$pincode=$_COOKIE['pincode'];
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
@$pincode=$_COOKIE['pincode'];
@$class=$_COOKIE['class'];
@$subjects=$_COOKIE['subjects'];
@$weeks=$_POST['weeks'];

// To protect MySQL injection (more detail about MySQL injection)
$weeks = stripslashes($weeks);
@$weeks = mysql_real_escape_string($weeks);
$sql="SELECT * FROM mathanswers WHERE s_n = '$s_n' && pincode = '$pincode' && weeks = '$weeks'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 0)

{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");
@$week=mysql_result($result,$row,"week");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");
{
  	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
 
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
@$pincode=$_COOKIE['pincode'];
@$class=$_COOKIE['class'];
@$weeks=$_POST['weeks'];
@$subjects=$_POST['subjects'];

$sql1="SELECT * FROM mathsquestions WHERE s_n='$s_n' && weeks = '$weeks'";
$result=mysql_query($sql1) or die ("query failed13");
if (mysql_num_rows ($result) == 0)

{
@$s_n=mysql_result($result,$row,"s_n");
@$weeks=mysql_result($result,$row,"weeks");
@$class=mysql_result($result,$row,"class");
@$subjects=mysql_result($result,$row,"subjects");
@$question1=mysql_result($result,$row,"question1");
$quest = ($s_n + '1');

echo  "<p class='style7' align='center'><br>Week <b>$weeks, $subjects Questions No $s_n</b></p><p align='center'> Ensure that the form below is filled with your answer</b></br></p></p>";
echo  "<p align='center'>
             
             <form id='form2' name='form2' method='post' action='enterquestion.php'>
               
                 <tr>
                  
                   <td><label> <div align='center'>$question1
          <textarea name='answer1'></textarea></div>
        </label></td>
                 </tr> <tr>
                  
                   <td><label>
                     <div align='center'>
                     <input type='hidden' name='$pincode' /></div>
                   </label></td><td><label>
                     <div align='center'>
                     <input type='hidden' name='$firstname' /></div>
                   </label></td><td><label>
                     <div align='center'>
                     <input type='hidden' name='$lastname' /></div>
                   </label></td>
                 </tr>
               </table><p align='center'>
                   <label></label>
                   <br />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Proceed to Question No $quest' /></p></form></p>";
echo "<br><br><p align='right'> Question $s_n of 10 </p>
<p align='center'>&nbsp;</p>
     
    
      <h2>&nbsp;</h2>
    </div>
    <div id='column'>
      <div class='holder'>
        <ul id='latestnews'>
          <li> <img src='images/staff.jpg' alt='products' width='86' height='93' class='imgl' />
            <p><strong><a href='#'>E-Library</a></strong></p>
          </li>
          <li>
            <p> COMING SOON! Under construction</p>
          </li>
          <li class='last'> <img src='images/hands.jpg' alt='products' width='86' height='93' class='imgl' />
            <p><strong><a href='#'>Electronic Test (e-test) .</a></strong> </p>
          </li>
          <li class='last'>
            <p>Our e-subject and e-test platform prepares you ahead for JAMB computer based test (CBT) as well as post UTME.</p>
          </li>
        </ul>
      </div>
    </div>
    <br class='clear' />
  </div>
</div>
<div class='wrapper col6'>
  <div id='footer'>
    <div id='login'>
      <p>&nbsp;</p>
      <p></p>
    </div>
    
    
    <div class='footbox'>
      <ul>
        <li></li>
        <li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'>
      <ul>
        <li></li>
        <li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'><div></div>
      <ul><li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'><div></div>
      <ul><li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'><div></div>
      <ul><li class='last'><a href='#'></a></li>
      </ul>
    </div>
    <br class='clear' />
  </div>
</div>
<div class='wrapper col7'>
  <div id='copyright'><p align='center'>&nbsp;&nbsp;<script language='JavaScript'>
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('Copyright © '+year+' Royal Rainbow High School - All Rights Reserved');
//--></script>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered by:<a href='http://www.jozitek.com'>Jozi Global Services</a>
    <p class='fl_right'></p>
   <br class='clear' />
   
  </div>
</div>
</body>
</html>";

}
exit();
}
}
else
@$s_n=$_POST['s_n'];
$s_n2 = ($s_n + '1');
$sql1="SELECT * FROM mathanswers WHERE s_n = '$s_n2' && pincode = '$pincode' && weeks = '$weeks'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");
@$week=mysql_result($result,$row,"week");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");

  	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];

	   if ($s_n =='' && $pincode =='' && $weeks =='' && $class =='' && $subject =='')
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
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
@$pincode=$_COOKIE['pincode'];
@$class=$_COOKIE['class'];
@$weeks=$_POST['weeks'];
@$subjects=$_POST['subjects'];

@$s_n=$_POST['s_n'];
$s_n2 = ($s_n + '1');
$sql1="SELECT * FROM mathsquestions WHERE s_n='$s_n2' && pincode='$pincode' && weeks='$weeks'";
$result=mysql_query($sql1) or die ("query failed12");
if (mysql_num_rows ($result) == 1)

{
@$s_n=mysql_result($result,$row,"s_n");
@$weeks=mysql_result($result,$row,"weeks");
@$class=mysql_result($result,$row,"class");
@$subjects=mysql_result($result,$row,"subjects");
@$question1=mysql_result($result,$row,"question1");
$quest = ($s_n + '1');

echo  "<p class='style7' align='center'><br>Week <b>$weeks $subjects Questions No $s_n2</b></p><p align='center'> Ensure that the form below is filled with your answer</b></br></p></p>";
echo  "<p align='center'>
             
             <form id='form2' name='form2' method='post' action='enterquestion.php'>
               
                 <tr>
                  
                   <td><label> <div align='center'>$question2
          <textarea name='answer1'></textarea></div>
        </label></td>
                 </tr> <tr>
                  
                   <td><label>
                     <div align='center'>
                     <input type='hidden' name='$pincode' /></div>
                   </label></td><td><label>
                     <div align='center'>
                     <input type='hidden' name='$firstname' /></div>
                   </label></td><td><label>
                     <div align='center'>
                     <input type='hidden' name='$lastname' /></div>
                   </label></td>
                 </tr>
               </table><p align='center'>
                   <label></label>
                   <br />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Proceed to Question No $quest' /></p></form></p>";
echo "<br><br><p align='right'> Question $s_n2 of 10 </p>
<p align='center'>&nbsp;</p>
     
    
      <h2>&nbsp;</h2>
    </div>
    <div id='column'>
      <div class='holder'>
        <ul id='latestnews'>
          <li> <img src='images/staff.jpg' alt='products' width='86' height='93' class='imgl' />
            <p><strong><a href='#'>E-Library</a></strong></p>
          </li>
          <li>
            <p> COMING SOON! Under construction</p>
          </li>
          <li class='last'> <img src='images/hands.jpg' alt='products' width='86' height='93' class='imgl' />
            <p><strong><a href='#'>Electronic Test (e-test) .</a></strong> </p>
          </li>
          <li class='last'>
            <p>Our e-subject and e-test platform prepares you ahead for JAMB computer based test (CBT) as well as post UTME.</p>
          </li>
        </ul>
      </div>
    </div>
    <br class='clear' />
  </div>
</div>
<div class='wrapper col6'>
  <div id='footer'>
    <div id='login'>
      <p>&nbsp;</p>
      <p></p>
    </div>
    
    
    <div class='footbox'>
      <ul>
        <li></li>
        <li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'>
      <ul>
        <li></li>
        <li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'><div></div>
      <ul><li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'><div></div>
      <ul><li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'><div></div>
      <ul><li class='last'><a href='#'></a></li>
      </ul>
    </div>
    <br class='clear' />
  </div>
</div>
<div class='wrapper col7'>
  <div id='copyright'><p align='center'>&nbsp;&nbsp;<script language='JavaScript'>
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('Copyright © '+year+' Royal Rainbow High School - All Rights Reserved');
//--></script>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered by:<a href='http://www.jozitek.com'>Jozi Global Services</a>
    <p class='fl_right'></p>
   <br class='clear' />
   
  </div>
</div>
</body>
</html>";

}
exit();
}
else

@$s_n=$_POST['s_n'];
$s_n3 = ($s_n + '2');
$sql1="SELECT * FROM mathanswers WHERE s_n = '$s_n3' && pincode = '$pincode' && weeks = '$weeks'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");
@$week=mysql_result($result,$row,"week");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
@$pincode=$_COOKIE['pincode'];
@$class=$_COOKIE['class'];
@$weeks=$_POST['weeks'];
@$subjects=$_POST['subjects'];

@$s_n=$_POST['s_n'];
$s_n3 = ($s_n + '2');
$sql1="SELECT * FROM mathsquestions WHERE s_n='$s_n3' && pincode='$pincode' && weeks='$weeks'";
$result=mysql_query($sql1) or die ("query failed12");
if (mysql_num_rows ($result) == 1)

{
@$s_n=mysql_result($result,$row,"s_n");
@$weeks=mysql_result($result,$row,"weeks");
@$class=mysql_result($result,$row,"class");
@$subjects=mysql_result($result,$row,"subjects");
@$question1=mysql_result($result,$row,"question1");
$quest = ($s_n2 + '1');

echo  "<p class='style7' align='center'><br>Week <b>$weeks $subjects Questions No $s_n3</b></p><p align='center'> Ensure that the form below is filled with your answer</b></br></p></p>";
echo  "<p align='center'>
             
             <form id='form2' name='form2' method='post' action='enterquestion.php'>
               
                 <tr>
                  
                   <td><label> <div align='center'>$question2
          <textarea name='answer1'></textarea></div>
        </label></td>
                 </tr> <tr>
                  
                   <td><label>
                     <div align='center'>
                     <input type='hidden' name='$pincode' /></div>
                   </label></td><td><label>
                     <div align='center'>
                     <input type='hidden' name='$firstname' /></div>
                   </label></td><td><label>
                     <div align='center'>
                     <input type='hidden' name='$lastname' /></div>
                   </label></td>
                 </tr>
               </table><p align='center'>
                   <label></label>
                   <br />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Proceed to Question No $quest' /></p></form></p>";
echo "<br><br><p align='right'> Question $s_n3 of 10 </p>
<p align='center'>&nbsp;</p>
     
    
      <h2>&nbsp;</h2>
    </div>
    <div id='column'>
      <div class='holder'>
        <ul id='latestnews'>
          <li> <img src='images/staff.jpg' alt='products' width='86' height='93' class='imgl' />
            <p><strong><a href='#'>E-Library</a></strong></p>
          </li>
          <li>
            <p> COMING SOON! Under construction</p>
          </li>
          <li class='last'> <img src='images/hands.jpg' alt='products' width='86' height='93' class='imgl' />
            <p><strong><a href='#'>Electronic Test (e-test) .</a></strong> </p>
          </li>
          <li class='last'>
            <p>Our e-subject and e-test platform prepares you ahead for JAMB computer based test (CBT) as well as post UTME.</p>
          </li>
        </ul>
      </div>
    </div>
    <br class='clear' />
  </div>
</div>
<div class='wrapper col6'>
  <div id='footer'>
    <div id='login'>
      <p>&nbsp;</p>
      <p></p>
    </div>
    
    
    <div class='footbox'>
      <ul>
        <li></li>
        <li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'>
      <ul>
        <li></li>
        <li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'><div></div>
      <ul><li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'><div></div>
      <ul><li class='last'><a href='#'></a></li>
      </ul>
    </div><div class='footbox'><div></div>
      <ul><li class='last'><a href='#'></a></li>
      </ul>
    </div>
    <br class='clear' />
  </div>
</div>
<div class='wrapper col7'>
  <div id='copyright'><p align='center'>&nbsp;&nbsp;<script language='JavaScript'>
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('Copyright © '+year+' Royal Rainbow High School - All Rights Reserved');
//--></script>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered by:<a href='http://www.jozitek.com'>Jozi Global Services</a>
    <p class='fl_right'></p>
   <br class='clear' />
   
  </div>
</div>
</body>
</html>";
}

else

 @$s_n=$_POST['s_n'];
$s_n4 = ($s_n + '3');		  
$sql="SELECT * FROM answers WHERE s_n = '$s_n4' && pincode = '$pincode' && subjects = '$subjects' && class = '$class'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");
@$week=mysql_result($result,$row,"week");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");

include ("test4.php");
exit();
}

else

@$s_n=$_POST['s_n'];
$s_n5 = ($s_n + '4');
$sql="SELECT * FROM answers WHERE s_n = '5' && pincode = '$pincode' && subjects = '$subjects' && class = '$class'";
$result=mysql_query($sql) or die('Error, insert query failed6');
if(mysql_num_rows($result)==0)
{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");
@$week=mysql_result($result,$row,"week");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");

include ("test5.php");
exit();
}

else
@$s_n=$_POST['s_n'];
$s_n6 = ($s_n + '5');
$sql="SELECT * FROM answers WHERE s_n = '$s_n6' && pincode = '$pincode' && subjects = '$subjects' && class = '$class'";
$result=mysql_query($sql) or die('Error, insert query failed6');
if(mysql_num_rows($result)==0)
{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");
@$week=mysql_result($result,$row,"week");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");

include ("test6.php");
exit();
}
else
@$s_n=$_POST['s_n'];
$s_n7 = ($s_n + '6');
$sql="SELECT * FROM answers WHERE s_n = '$s_n7' && pincode = '$pincode' && subjects = '$subjects' && class = '$class'";
$result=mysql_query($sql) or die('Error, insert query failed6');
if(mysql_num_rows($result)==0)
{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");
@$week=mysql_result($result,$row,"week");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");

include ("test7.php");
exit();
}

else
@$s_n=$_POST['s_n'];
$s_n8 = ($s_n + '7');
$sql="SELECT * FROM answers WHERE s_n = '$s_n8' && pincode = '$pincode' && subjects = '$subjects' && class = '$class'";
$result=mysql_query($sql) or die('Error, insert query failed6');
if(mysql_num_rows($result)==0)
{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");
@$week=mysql_result($result,$row,"week");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");
include ("test8.php");
exit();
}
else
@$s_n=$_POST['s_n'];
$s_n9 = ($s_n + '8');
$sql="SELECT * FROM answers WHERE s_n = '$s_n9' && pincode = '$pincode' && subjects = '$subjects' && class = '$class'";
$result=mysql_query($sql) or die('Error, insert query failed6');
if(mysql_num_rows($result)==0)
{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");
@$week=mysql_result($result,$row,"week");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");
include ("test9.php");
exit();
}

else
@$s_n=$_POST['s_n'];
$s_n10 = ($s_n + '9');
$sql="SELECT * FROM answers WHERE s_n = '$s_n10' && pincode = '$pincode' && subjects = '$subjects' && class = '$class'";
$result=mysql_query($sql) or die('Error, insert query failed6');
if(mysql_num_rows($result)==0)
{
@$s_n=mysql_result($result,$row,"s_n");
@$pincode=mysql_result($result,$row,"pincode");
@$answer1=mysql_result($result,$row,"answer1");
@$answer2=mysql_result($result,$row,"answer2");
@$answer3=mysql_result($result,$row,"answer3");
@$answer4=mysql_result($result,$row,"answer4");
@$answer5=mysql_result($result,$row,"answer5");
@$answer6=mysql_result($result,$row,"answer6");
@$answer7=mysql_result($result,$row,"answer7");
@$answer8=mysql_result($result,$row,"answer8");
@$answer9=mysql_result($result,$row,"answer9");
@$answer10=mysql_result($result,$row,"answer10");
@$week=mysql_result($result,$row,"week");
@$class=mysql_result($result,$row,"class");
@$date=mysql_result($result,$row,"date");
include ("test10.php");
exit();
}



/*echo "<p class='style7' align='center'><br><b>Week $weeks Kindly select any subject you want to attempt and the week from the field below</b></br></p>"; 
$sql1="SELECT * FROM questions WHERE s_n = '1' && subjects = '$subjects' &&  class = '$class' && weeks = '$weeks'";
$r=mysql_query($sql1) or die ('Error, query failed3');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
$s_n=mysql_result($result,$row,"s_n");
$weeks=mysql_result($result,$row,"weeks");
$class=mysql_result($result,$row,"class");
$subjects=mysql_result($result,$row,"subjects");
$question1=mysql_result($result,$row,"question1");
$quest = ($s_n + '1');

echo  "<p class='style7' align='center'><br><b>Week $weeks Kindly select any subject you want to attempt and the week from the field below</b></br></p>";
echo  "<p align='center'>
             
             <form id='form2' name='form2' method='post' action='enterquestion.php'>
               
                 <tr>
                  
                   <td><label> <div align='center'>$question1
          <textarea name='answer1'></textarea></div>
        </label></td>
                 </tr> <tr>
                  
                   <td><label>
                     <div align='center'>
                     <input type='hidden' name='$pincode' /></div>
                   </label></td><td><label>
                     <div align='center'>
                     <input type='hidden' name='$firstname' /></div>
                   </label></td><td><label>
                     <div align='center'>
                     <input type='hidden' name='$lastname' /></div>
                   </label></td>
                 </tr>
               </table><p align='center'>
                   <label></label>
                   <br />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Proceed to Question No $quest' /></p></form></p>";
echo "<br><br><p align='right'> Question $s_n of 10 </p>";
}*/
}
?>
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
