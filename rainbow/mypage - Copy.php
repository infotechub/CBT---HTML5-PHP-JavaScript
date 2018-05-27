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
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
@$username=$_COOKIE['username'];
@$subjects=$_COOKIE['subjects'];

	   if ($username =='' && $firstname =='' && $lastname=='')
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
@$subject=mysql_result($r,$row,"subject");


echo  "<p class='style7' align='center'><br><b>$firstname $lastname, Kindly select any week, class and subject you want to examine from the field below</b></br></p>";
echo  "<p align='center'>
             
             <p align='center'><br/><b>  ENTER QUESTIONS AND ANSWERS FOR EACH CLASS BELOW.</br></p><br/><p align='center'><form id='form2' name='form2' method='post' action='setquestions.php'>
              <br><table width='200' border='1'><tr><td> <label>
        <div align='center'>WEEKS
          <select name='weeks'>
            <option> TWO</option>
            <option> THREE</option>
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
        </label></td><td> <label>
        <div align='center'>Class
          <select name='class'>
            <option> J.S 1</option>
            <option> J.S 2</option>
            <option> J.S 3</option>
            <option> S.S 1</option>
            <option> S.S 2</option>
            <option> S.S 3</option>
          </select>
        </div>
        </label></td><td> <label>
        <div align='center'>Subjects<select name='subject'>
            <option>Mathematics</option>
			<option>English Language</option>
         
          </select>
         
        </div>
        </label></td></tr>
                  <tr>
                   <td><label>
                     <div align='center'>
                     <input type='text' name='question1' placeholder='question no 1' value=''/><input type='text' name='answer1' value='' placeholder='answer no 1'/><input type='text' name='question2' placeholder='question no 2' value=''/><input type='text' name='answer2' placeholder='answer no 2' value=''/><input type='text' name='question3' placeholder='question no 3' value=''/><input type='text' name='answer3' placeholder='answer3' value=''/><input type='text' name='question4' placeholder='question no 4' value=''/><input type='text' name='answer4' placeholder='answer no 4' value=''/><input type='text' name='question5' placeholder='question no 5' value=''/><input type='text' name='answer5' placeholder='question no 5' value=''/><input type='text' name='question6' placeholder='question no 6' value=''/><input type='text' name='answer6'  placeholder='question no 6' value=''/><input type='text' name='question7' placeholder='question no 7' value=''/><input type='text' name='answer7'  placeholder='question no 7' value=''/><input type='text' name='question8' placeholder='question no 8' value=''/><input type='text' name='answer8'  placeholder='answer no 8' value=''/><input type='text' name='question9' placeholder='question no 9' value=''/><input type='text' name='answer9'  placeholder='answer no 9' value=''/><input type='text' name='question10' placeholder='question no 10' value=''/><input type='text' name='answer10'  placeholder='answer no 10' value=''/></div>
                   </label></td>
                 </tr>
               </table><p align='center'>
                   <label></label>
                   <br />
                   <input type='submit' name='Submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Get Started' /></p></form></p>";

}
else
{
echo "Ouch, there is an error. Please try again!!!";
}

?>
      <p align="center">&nbsp;</p>
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
