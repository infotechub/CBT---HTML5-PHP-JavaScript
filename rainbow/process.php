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
      <h2 align="center" class="bold"> Welcome To Electronic Subject (e-subject) platform </h2>
      <p align="center" class="style4">If you have your pin code, kindly enter it in the form below: </p>
             <?php 
$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="rainbow";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// Random registration code
$pincode=md5(uniqid(rand()));
// values sent from form
@$s_n=$_POST['s_n'];
@$firstname=$_POST['firstname'];
@$lastname=$_POST['lastname'];
@$schoolopened=$_POST['schoolopened'];
@$timepresent=$_POST['timepresent'];
@$sex=$_POST['sex'];
@$class=$_POST['class'];
@$term=$_POST['term'];
@$mattest=$_POST['mattest'];
@$matexam=$_POST['matexam'];
@$total=$_POST['total'];
@$engtest=$_POST['engtest'];
@$engexam=$_POST['engexam'];
@$total1=$_POST['total1'];
@$comptest=$_POST['comptest'];
@$compexam=$_POST['compexam'];
@$total2=$_POST['total2'];
@$civictest=$_POST['civictest'];
@$civicexam=$_POST['civicexam'];
@$total3=$_POST['total3'];
@$sostest=$_POST['sostest'];
@$sosexam=$_POST['sosexam'];
@$total4=$_POST['total4'];
@$phettest=$_POST['phetest'];
@$pheexam=$_POST['pheexam'];
@$total5=$_POST['total5'];
@$crktest=$_POST['crktest'];
@$crkexam=$_POST['crkexam'];
@$total6=$_POST['total6'];
@$yortest=$_POST['yortest'];
@$yorexam=$_POST['yorexam'];
@$total7=$_POST['total7'];
@$agritest=$_POST['agritest'];
@$agriexam=$_POST['agriexam'];
@$total8=$_POST['total8'];
@$biztest=$_POST['biztest'];
@$bizexam=$_POST['bizexam'];
@$total9=$_POST['total9'];
@$sciencetest=$_POST['sciencetest'];
@$scienceexam=$_POST['scienceexam'];
@$total10=$_POST['total10'];
@$basictest=$_POST['basictest'];
@$basicexam=$_POST['basicexam'];
@$total11=$_POST['total11'];
@$frenchtest=$_POST['frenchtest'];
@$frenchexam=$_POST['frenchexam'];
@$total12=$_POST['total12'];
@$arttest=$_POST['arttest'];
@$artexam=$_POST['artexam'];
@$total13=$_POST['total13'];
@$hectest=$_POST['hectest'];
@$hecexam=$_POST['hecexam'];
@$total14=$_POST['total14'];
@$emattest=$_POST['emattest'];
@$ematexam=$_POST['ematexam'];
@$total15=$_POST['total15'];
@$eengtest=$_POST['eengtest'];
@$eengexam=$_POST['eengexam'];
@$total16=$_POST['total16'];





$sql2="SELECT * FROM studentsrecords WHERE firstname='$firstname' && lastname='$lastname'";
$r=mysql_query($sql2) or die ('Error, query failed3');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
echo "<p align='center'class='style7'><br><b>Student's data exist. I will advice you move on to the next student. Thanks</b></br></p>";
include ("studentsrecord2.php");
exit();
}
else
{
$sql2="INSERT INTO studentsrecords(s_n, firstname, lastname, pincode, address1, address2, city, zip, state, country, phoneno, mobileno, email, email2, username, class, terms) VALUES ('$s_n', '$firstname', '$lastname', '$pincode', '$address1', '$address2', '$city', '$zip', '$state', '$country', '$phoneno', '$mobileno', '$email', '$email2', '$username', '$class', '$terms')";
  } 
  // if sucessfully inserted data into database, send confirmation link to email
if (mysql_query($sql2))
{
$sql3="INSERT INTO subjects( s_n, firstname, lastname, pincode, class, subject1, subject2) VALUES ('$s_n', '$firstname', '$lastname', '$pincode', '$class', 'Mathematics', 'English Language')";
  }
  if (mysql_query($sql3)) 
{
echo  "<p class='style7'><br><b>$firstname $lastname</b>, you have successfully registered and your pincode is <b>$pincode</b> Kindly keep your pincode safe as you will need it to access your account.</br></p>";
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
