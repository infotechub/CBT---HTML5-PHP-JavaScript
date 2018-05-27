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
      <h2 align="center" class="bold"> Welcome To Electronic Subject (e-subject) platform </h2>


      <p align="center"><?php    
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
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

echo  "<p class='style7' align='center'><br><b>$firstname $lastname, select the week and subject to view corrections to the exercises you have attempted</b></br></p>";
echo  "<p align='center'>
             
             <form id='form2' name='form2' method='post' action='view.php'>
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
            <option>$class</option>
          </select>
        </div>
        </label></td><td> <label>
        <div align='center'><select name='subject'>
            <option>$subject1</option>
            <option>$subject2</option>
         
          </select>
         <input name='class' type='hidden' id='class' value='$class' />
        </div>
        </label></td></tr>
                  <tr>
                   <td><label>
                     <div align='center'>
                     <input type='hidden' name='pincode' value='$pincode'/></div>
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

?></p>
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
