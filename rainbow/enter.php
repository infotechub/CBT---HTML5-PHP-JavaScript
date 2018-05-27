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
  <div id="container">
    <div id="content">
      <h2 align="center" class="bold">  </h2>
      <p align="center" class="style4"> </p>
             <?php 

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="cbt";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


// Random registration code
$pincode=md5(uniqid(rand()));
@$s_n=$_REQUEST['s_n'];
@$firstname=$_REQUEST['firstname'];
@$lastname=$_REQUEST['lastname'];
@$schoolopened=$_REQUEST['schoolopened'];
@$timepresent=$_REQUEST['timepresent'];
@$sex=$_REQUEST['sex'];
@$section=$_REQUEST['section'];
@$term=$_REQUEST['term'];
@$test1=$_REQUEST['test1'];
@$exam1=$_REQUEST['exam1'];
@$test2=$_REQUEST['test2'];
@$exam2=$_REQUEST['exam2'];
@$test3=$_REQUEST['test3'];
@$exam3=$_REQUEST['exam3'];
@$test4=$_REQUEST['test4'];
@$exam4=$_REQUEST['exam4'];
@$test5=$_REQUEST['test5'];
@$exam5=$_REQUEST['exam5'];
@$test6=$_REQUEST['test6'];
@$exam6=$_REQUEST['exam6'];
@$test7=$_REQUEST['test7'];
@$exam7=$_REQUEST['exam7'];
@$test8=$_REQUEST['test8'];
@$exam8=$_REQUEST['exam8'];
@$test9=$_REQUEST['test9'];
@$exam9=$_REQUEST['exam9'];
@$test10=$_REQUEST['test10'];
@$exam10=$_REQUEST['exam10'];
@$test11=$_REQUEST['test11'];
@$exam11=$_REQUEST['exam11'];
@$test12=$_REQUEST['test12'];
@$exam12=$_REQUEST['exam12'];
@$test13=$_REQUEST['test13'];
@$exam13=$_REQUEST['exam13'];
@$test14=$_REQUEST['test14'];
@$exam14=$_REQUEST['exam14'];
@$test15=$_REQUEST['test15'];
@$exam15=$_REQUEST['exam15'];
@$test16=$_REQUEST['test16'];
@$exam16=$_REQUEST['exam16'];
@$test17=$_REQUEST['test17'];
@$exam17=$_REQUEST['exam17'];
@$gdeed=$_REQUEST['gdeed'];
@$bdeed=$_REQUEST['bdeed'];
@$comment=$_REQUEST['comment'];
@$totalsubjects=$_REQUEST['totalsubjects'];
@$tcomment=$_REQUEST['tcomment'];
@$class=$_REQUEST['class'];


$sql1="SELECT * FROM studentsrecord WHERE firstname='$firstname' && lastname='$lastname'";
$r=mysql_query($sql1) or die ('Error, query failed3');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
echo "<p align='center'class='style7'><br><b>It seems you have entered the data of the student - $firstname $lastname. Click <a href='studentsrecord.php'>here</a> to enter another student's data.</b></br></p>";
exit();
}
else
{
$sql2="INSERT INTO studentsrecord(s_n, firstname, lastname, pincode, schoolopened, timepresent, sex, section, term, test1, exam1, test2, exam2, test3, exam3, test4, exam4, test5, exam5, test6, exam6, test7, exam7, test8, exam8, test9, exam9, test10, exam10, test11, exam11, test12, exam12, test13, exam13, test14, exam14, test15, exam15, test16, exam16, test17, exam17, gdeed, bdeed, comment,  totalsubjects, tcomment) VALUES ('$s_n', '$firstname', '$lastname', '$pincode', '$schoolopened', '$timepresent', '$sex', '$section', '$term', '$test1', '$exam1', '$test2', '$exam2', '$test3', '$exam3', '$test4', '$exam4', '$test5', '$exam5', '$test6', '$exam6', '$test7', '$exam7', '$test8', '$exam8', '$test9', '$exam9', '$test10', '$exam10', '$test11','$exam11', '$test12', '$exam12', '$test13', '$exam13', '$test14', '$exam14', '$test15', '$exam15', '$test16', '$exam16', '$test17', '$exam17', '$gdeed', '$bdeed', '$comment', '$totalsubjects','$tcomment')";
  } 
  // if sucessfully inserted data into database, send confirmation link to email
if (mysql_query($sql2))
{
echo  "<p class='style7'><br><b>Thank you</b>, you have successfully registered the student - $firstname $lastname.  Click <a href='studentsrecord.php'>here</a> to enter another student's data.</br>If you want to check the scoresheet, kindly <a href='$class.php'>Click </a>here</p>";
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
