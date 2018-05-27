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
@$s_n=$_REQUEST['s_n'];
@$firstname=$_REQUEST['firstname'];
@$lastname=$_REQUEST['lastname'];
@$address1=$_REQUEST['address1'];
@$address2=$_REQUEST['address2'];
@$city=$_REQUEST['city'];
@$zip=$_REQUEST['zip'];
@$state=$_REQUEST['state'];
@$country=$_REQUEST['country'];
@$phoneno=$_REQUEST['phoneno'];
@$mobileno=$_REQUEST['mobileno'];
@$email=$_REQUEST['email'];
@$email2=$_REQUEST['email2'];
@$username=$_REQUEST['username'];
//@$pincode=$_POST['pincode'];
@$class=$_REQUEST['class'];
@$terms=$_REQUEST['terms'];
$today=date("Y-m-d");

$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $today);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $firstname);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $lastname);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $address1);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $address2);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $city);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $zip);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $state);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $country);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $phoneno);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $mobileno);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $email);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $username);
$fh = fopen ("students/$pincode.txt", "a+");
fwrite($fh, $class);

if($fh)

{
$sql2="INSERT INTO students(s_n, firstname, lastname, pincode, address1, address2, city, zip, state, country, phoneno, mobileno, email, email2, username, class, terms) VALUES ('$s_n', '$firstname', '$lastname', '$pincode', '$address1', '$address2', '$city', '$zip', '$state', '$country', '$phoneno', '$mobileno', '$email', '$email2', '$username', '$class', '$terms')";
  } 
  // if sucessfully inserted data into database, send confirmation link to email
if (mysql_query($sql2))
{
$sql3="INSERT INTO subjects(s_n, firstname, lastname, pincode, class, subject1, subject2) VALUES ('$s_n', '$firstname', '$lastname', '$pincode', '$class', 'Mathematics', 'English Language')";
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
