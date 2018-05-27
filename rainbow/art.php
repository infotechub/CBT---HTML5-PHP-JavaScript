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
.style9 {font-size: 9px}
-->
</style>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1 align="justify"><img src="images/logo1.jpg" alt="logo" width="120" height="100" align="left" /><span class="bold"> Royal Rainbow High School</span></h1>
      <p align="center"> 15, Agbolade Street, Cele Bus stop, Egbe, Lagos State, Nigeria <br/>Phone Number: 08146211784, 08035369684<br/>E-mail: <a href="mailto:rainbowschools@gmail.com">rainbowschools@gmail.com</a> or <a href="mailto:royalrainbiz@yahoo.com.com">royalrainbiz@yahoo.com</a></p>
    </div>
    <div class="footbox">
      <div align="right"></div>
      
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
 
     
    <!-- ###### -->
    
  <p align="center"></p>
</div>
  
  <!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="container">
    <div id="content">
     <?php
	 @$pincode=$_REQUEST['pincode'];
	   	   // username and password sent from form
//@$firstname=$_COOKIE['firstname'];
//@$lastname=$_COOKIE['lastname'];
//@$username=$_COOKIE['username'];
//@$class=$_REQUEST['class'];


	  // if ($class =='')
//{
//echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**Sign in to access this page!**</b>";
//{
//include ("index22.php");
//exit();  
//}


$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="cbt";
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// username and password sent from form

 $sql="SELECT * FROM studentsrecord WHERE pincode='$pincode'";
$result=mysql_query($sql) or die ("query failed12");
if (mysql_num_rows ($result) == 1)
//Mysql_num_row is counting table row
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
@$totalsubjects=mysql_result($result,$row,"totalsubjects");
@$tcomment=mysql_result($result,$row,"tcomment");
@$schoolopened=mysql_result($result,$row,"schoolopened");
@$timepresent=mysql_result($result,$row,"timepresent");
@$section=mysql_result($result,$row,"section");
@$term=mysql_result($result,$row,"term");
@$gdeed=mysql_result($result,$row,"gdeed");
@$bdeed=mysql_result($result,$row,"bdeed");
@$comment=mysql_result($result,$row,"comment");
@$nexterm=mysql_result($result,$row,"nexterm");
@$year=date("Y");
$today=date("Y-m-d");
$absent = $schoolopened - $timepresent;
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
$testtotal = $test1 + $test2 + $test3 + $test4 + $test5 + $test6 + $test7 + $test8 + $test9 + $test10 + $test11 + $test12 + $test13 + $test14 + $test15 + $test16 + $test17;
$examtotal = $exam1 + $exam2 + $exam3 + $exam4 + $exam5 + $exam6 + $exam7 + $exam8 + $exam9 + $exam10 + $exam11 + $exam12 + $exam13 + $exam14 + $exam15 + $exam16 + $exam17;
$total = $total1 + $total2 + $total3 + $total4 + $total5 + $total6 + $total7 + $total8 + $total9 + $total10 + $total11 + $total12 + $total13 + $total14 + $total15 + $total16 + $total17;
$average= round($total/$totalsubjects, 3);
$percentage= $average;
$obtainable = $totalsubjects * 100;

 if ($total1 >= 75)
   {
   $rank1="A1";
   }
   elseif ($total1 <=74.9 and $total1 >69.9)
   {
   $rank1="B2";
   }
   elseif ($total1 <=69.9 and $total1 >64.9)
   {
   $rank1="B3";
   }
   elseif ($total1 <= 64.9 and $total1 >59.9)
   {
   $rank1="C4";
   }
   elseif ($total1 <=59.9 and $total1 >54.9)
   {
   $rank1="C5";
   }
   elseif ($total1 <=54.9 and $total1 >49.9)
   {
   $rank1="C6";
   }
   elseif ($total1 <= 49.9 and $total1 >44.9)
   {
   $rank1="D7";
   }
   elseif ($total1 <=44.9 and $total1 >39.9)
   {
   $rank1="E8";
   }
   else
   {
   $rank1="F9";
   }
   if ($total2 >= 75)
   {
   $rank2="A1";
   }
   elseif ($total2 <=74.9 and $total2 >69.9)
   {
   $rank2="B2";
   }
   elseif ($total2 <=69.9 and $total2 >64.9)
   {
   $rank2="B3";
   }
   elseif ($total2 <= 64.9 and $total2 >59.9)
   {
   $rank2="C4";
   }
   elseif ($total2 <=59.9 and $total2 >54.9)
   {
   $rank2="C5";
   }
   elseif ($total2 <=54.9 and $total2 >49.9)
   {
   $rank2="C6";
   }
   elseif ($total2 <= 49.9 and $total2 >44.9)
   {
   $rank2="D7";
   }
   elseif ($total2 <=44.9 and $total2 >39.9)
   {
   $rank2="E8";
   }
   else
   {
   $rank2="F9";
   }
   if ($total3 >= 75)
   {
   $rank3="A1";
   }
   elseif ($total3 <=74.9 and $total3 >69.9)
   {
   $rank3="B2";
   }
   elseif ($total3 <=69.9 and $total3 >64.9)
   {
   $rank3="B3";
   }
   elseif ($total3 <= 64.9 and $total3 >59.9)
   {
   $rank3="C4";
   }
   elseif ($total3 <=59.9 and $total3 >54.9)
   {
   $rank3="C5";
   }
   elseif ($total3 <=54.9 and $total3 >49.9)
   {
   $rank3="C6";
   }
   elseif ($total3 <= 49.9 and $total3 >44.9)
   {
   $rank3="D7";
   }
   elseif ($total3 <=44.9 and $total3 >39.9)
   {
   $rank3="E8";
   }
   else
   {
   $rank3="F9";
   }
   if ($total4 >= 75)
   {
   $rank4="A1";
   }
   elseif ($total4 <=74.9 and $total4 >69.9)
   {
   $rank4="B2";
   }
   elseif ($total4 <=69.9 and $total4 >64.9)
   {
   $rank4="B3";
   }
   elseif ($total4 <= 64.9 and $total4 >59.9)
   {
   $rank4="C4";
   }
   elseif ($total4 <=59.9 and $total4 >54.9)
   {
   $rank4="C5";
   }
   elseif ($total4 <=54.9 and $total4 >49.9)
   {
   $rank4="C6";
   }
   elseif ($total4 <= 49.9 and $total4 >44.9)
   {
   $rank4="D7";
   }
   elseif ($total4 <=44.9 and $total4 >39.9)
   {
   $rank4="E8";
   }
   else
   {
   $rank4="F9";
   }
   if ($total5 >= 75)
   {
   $rank5="A1";
   }
   elseif ($total5 <=74.9 and $total5 >69.9)
   {
   $rank5="B2";
   }
   elseif ($total5 <=69.9 and $total5 >64.9)
   {
   $rank5="B3";
   }
   elseif ($total5 <= 64.9 and $total5 >59.9)
   {
   $rank5="C4";
   }
   elseif ($total5 <=59.9 and $total5 >54.9)
   {
   $rank5="C5";
   }
   elseif ($total5 <=54.9 and $total5 >49.9)
   {
   $rank5="C6";
   }
   elseif ($total5 <= 49.9 and $total5 >44.9)
   {
   $rank5="D7";
   }
   elseif ($total5 <=44.9 and $total5 >39.9)
   {
   $rank5="E8";
   }
   else
   {
   $rank5="F9";
   }
   if ($total6 >= 75)
   {
   $rank6="A1";
   }
   elseif ($total6 <=74.9 and $total6 >69.9)
   {
   $rank6="B2";
   }
   elseif ($total6 <=69.9 and $total6 >64.9)
   {
   $rank6="B3";
   }
   elseif ($total6 <= 64.9 and $total6 >59.9)
   {
   $rank6="C4";
   }
   elseif ($total6 <=59.9 and $total6 >54.9)
   {
   $rank6="C5";
   }
   elseif ($total6 <=54.9 and $total6 >49.9)
   {
   $rank6="C6";
   }
   elseif ($total6 <= 49.9 and $total6 >44.9)
   {
   $rank6="D7";
   }
   elseif ($total6 <=44.9 and $total6 >39.9)
   {
   $rank6="E8";
   }
   else
   {
   $rank6="F9";
   }
   if ($total7 >= 75)
   {
   $rank7="A1";
   }
   elseif ($total7 <=74.9 and $total7 >69.9)
   {
   $rank7="B2";
   }
   elseif ($total7 <=69.9 and $total7 >64.9)
   {
   $rank7="B3";
   }
   elseif ($total7 <= 64.9 and $total7 >59.9)
   {
   $rank7="C4";
   }
   elseif ($total7 <=59.9 and $total7 >54.9)
   {
   $rank7="C5";
   }
   elseif ($total7 <=54.9 and $total7 >49.9)
   {
   $rank7="C6";
   }
   elseif ($total7 <= 49.9 and $total7 >44.9)
   {
   $rank7="D7";
   }
   elseif ($total7 <=44.9 and $total7 >39.9)
   {
   $rank7="E8";
   }
   else
   {
   $rank7="F9";
   }
   if ($total8 >= 75)
   {
   $rank8="A1";
   }
   elseif ($total8 <=74.9 and $total8 >69.9)
   {
   $rank8="B2";
   }
   elseif ($total8 <=69.9 and $total8 >64.9)
   {
   $rank8="B3";
   }
   elseif ($total8 <= 64.9 and $total8 >59.9)
   {
   $rank8="C4";
   }
   elseif ($total8 <=59.9 and $total8 >54.9)
   {
   $rank8="C5";
   }
   elseif ($total8 <=54.9 and $total8 >49.9)
   {
   $rank8="C6";
   }
   elseif ($total8 <= 49.9 and $total8 >44.9)
   {
   $rank8="D7";
   }
   elseif ($total8 <=44.9 and $total8 >39.9)
   {
   $rank8="E8";
   }
   else
   {
   $rank8="F9";
   }
   if ($total9 >= 75)
   {
   $rank9="A1";
   }
   elseif ($total9 <=74.9 and $total9 >69.9)
   {
   $rank9="B2";
   }
   elseif ($total9 <=69.9 and $total9 >64.9)
   {
   $rank9="B3";
   }
   elseif ($total9 <= 64.9 and $total9 >59.9)
   {
   $rank9="C4";
   }
   elseif ($total9 <=59.9 and $total9 >54.9)
   {
   $rank9="C5";
   }
   elseif ($total9 <=54.9 and $total9 >49.9)
   {
   $rank9="C6";
   }
   elseif ($total9 <= 49.9 and $total9 >44.9)
   {
   $rank9="D7";
   }
   elseif ($total9 <=44.9 and $total9 >39.9)
   {
   $rank9="E8";
   }
   else
   {
   $rank9="F9";
   }
   if ($total10 >= 75)
   {
   $rank10="A1";
   }
   elseif ($total10 <=74.9 and $total10 >69.9)
   {
   $rank10="B2";
   }
   elseif ($total10 <=69.9 and $total10 >64.9)
   {
   $rank10="B3";
   }
   elseif ($total10 <= 64.9 and $total10 >59.9)
   {
   $rank10="C4";
   }
   elseif ($total10 <=59.9 and $total10 >54.9)
   {
   $rank10="C5";
   }
   elseif ($total10 <=54.9 and $total10 >49.9)
   {
   $rank10="C6";
   }
   elseif ($total10 <= 49.9 and $total10 >44.9)
   {
   $rank10="D7";
   }
   elseif ($total10 <=44.9 and $total10 >39.9)
   {
   $rank10="E8";
   }
   else
   {
   $rank10="F9";
   }
   if ($total11 >= 75)
   {
   $rank11="A1";
   }
   elseif ($total11 <=74.9 and $total11 >69.9)
   {
   $rank11="B2";
   }
   elseif ($total11 <=69.9 and $total11 >64.9)
   {
   $rank11="B3";
   }
   elseif ($total11 <= 64.9 and $total11 >59.9)
   {
   $rank11="C4";
   }
   elseif ($total11 <=59.9 and $total11 >54.9)
   {
   $rank11="C5";
   }
   elseif ($total11 <=54.9 and $total11 >49.9)
   {
   $rank11="C6";
   }
   elseif ($total11 <= 49.9 and $total11 >44.9)
   {
   $rank11="D7";
   }
   elseif ($total11 <=44.9 and $total11 >39.9)
   {
   $rank11="E8";
   }
   else
   {
   $rank11="F9";
   }
   if ($total12 >= 75)
   {
   $rank12="A1";
   }
   elseif ($total12 <=74.9 and $total12 >69.9)
   {
   $rank12="B2";
   }
   elseif ($total12 <=69.9 and $total12 >64.9)
   {
   $rank12="B3";
   }
   elseif ($total12 <= 64.9 and $total12 >59.9)
   {
   $rank12="C4";
   }
   elseif ($total12 <=59.9 and $total12 >54.9)
   {
   $rank12="C5";
   }
   elseif ($total12 <=54.9 and $total12 >49.9)
   {
   $rank12="C6";
   }
   elseif ($total12 <= 49.9 and $total12 >44.9)
   {
   $rank12="D7";
   }
   elseif ($total12 <=44.9 and $total12 >39.9)
   {
   $rank12="E8";
   }
   else
   {
   $rank12="F9";
   }
   if ($total13 >= 75)
   {
   $rank13="A1";
   }
   elseif ($total13 <=74.9 and $total13 >69.9)
   {
   $rank13="B2";
   }
   elseif ($total13 <=69.9 and $total13 >64.9)
   {
   $rank13="B3";
   }
   elseif ($total13 <= 64.9 and $total13 >59.9)
   {
   $rank13="C4";
   }
   elseif ($total13 <=59.9 and $total13 >54.9)
   {
   $rank13="C5";
   }
   elseif ($total13 <=54.9 and $total13 >49.9)
   {
   $rank13="C6";
   }
   elseif ($total13 <= 49.9 and $total13 >44.9)
   {
   $rank13="D7";
   }
   elseif ($total13 <=44.9 and $total13 >39.9)
   {
   $rank13="E8";
   }
   else
   {
   $rank13="F9";
   }
   if ($total14 >= 75)
   {
   $rank14="A1";
   }
   elseif ($total14 <=74.9 and $total14 >69.9)
   {
   $rank14="B2";
   }
   elseif ($total14 <=69.9 and $total14 >64.9)
   {
   $rank14="B3";
   }
   elseif ($total14 <= 64.9 and $total14 >59.9)
   {
   $rank14="C4";
   }
   elseif ($total14 <=59.9 and $total14 >54.9)
   {
   $rank14="C5";
   }
   elseif ($total14 <=54.9 and $total14 >49.9)
   {
   $rank14="C6";
   }
   elseif ($total14 <= 49.9 and $total14 >44.9)
   {
   $rank14="D7";
   }
   elseif ($total14 <=44.9 and $total14 >39.9)
   {
   $rank14="E8";
   }
   else
   {
   $rank14="F9";
   }
   if ($total15 >= 75)
   {
   $rank15="A1";
   }
   elseif ($total15 <=74.9 and $total15 >69.9)
   {
   $rank15="B2";
   }
   elseif ($total15 <=69.9 and $total15 >64.9)
   {
   $rank15="B3";
   }
   elseif ($total15 <= 64.9 and $total15 >59.9)
   {
   $rank15="C4";
   }
   elseif ($total15 <=59.9 and $total15 >54.9)
   {
   $rank15="C5";
   }
   elseif ($total15 <=54.9 and $total15 >49.9)
   {
   $rank15="C6";
   }
   elseif ($total15 <= 49.9 and $total15 >44.9)
   {
   $rank15="D7";
   }
   elseif ($total15 <=44.9 and $total15 >39.9)
   {
   $rank15="E8";
   }
   else
   {
   $rank15="F9";
   }
   if ($total16 >= 75)
   {
   $rank16="A1";
   }
   elseif ($total16 <=74.9 and $total16 >69.9)
   {
   $rank16="B2";
   }
   elseif ($total16 <=69.9 and $total16 >64.9)
   {
   $rank16="B3";
   }
   elseif ($total16 <= 64.9 and $total16 >59.9)
   {
   $rank16="C4";
   }
   elseif ($total16 <=59.9 and $total16 >54.9)
   {
   $rank16="C5";
   }
   elseif ($total16 <=54.9 and $total16 >49.9)
   {
   $rank16="C6";
   }
   elseif ($total16 <= 49.9 and $total16 >44.9)
   {
   $rank16="D7";
   }
   elseif ($total16 <=44.9 and $total16 >39.9)
   {
   $rank16="E8";
   }
   else
   {
   $rank16="F9";
   }
   if ($total17 >= 75)
   {
   $rank17="A1";
   }
   elseif ($total17 <=74.9 and $total17 >69.9)
   {
   $rank17="B2";
   }
   elseif ($total17 <=69.9 and $total17 >64.9)
   {
   $rank17="B3";
   }
   elseif ($total17 <= 64.9 and $total17 >59.9)
   {
   $rank17="C4";
   }
   elseif ($total17 <=59.9 and $total17 >54.9)
   {
   $rank17="C5";
   }
   elseif ($total17 <=54.9 and $total17 >49.9)
   {
   $rank17="C6";
   }
   elseif ($total17 <= 49.9 and $total17 >44.9)
   {
   $rank17="D7";
   }
   elseif ($total17 <=44.9 and $total17 >39.9)
   {
   $rank17="E8";
   }
   else
   {
   $rank17="F9";
   }
   if ($average >= 89)
   {
   $pcomment="Distintion Performance. Keep it up.";
   }
   elseif ($average = 70 - 88.9)
   {
   $pcomment="This is excellent performance. Keep it up.";
   }
   elseif ($average = 64.9 - 69.9)
   {
   $pcomment="Very good performance. You can do better.";
   }
   elseif ($average = 50.9 - 59.9)
   {
   $pcomment="This result is above average but you can do better.";
   }
   elseif ($average = 50 )
   {
   $pcomment="Average performance. You can do better.";
   }
   elseif ($average = 39.9 - 49.9)
   {
   $pcomment="Passed, put in more effort.";
   }
   elseif ($average <= 39.9)
   {
   $pcomment="Poor performance, put in extra effort.";
   }
$grade1 = $rank1;
$grade2 = $rank2;
$grade3 = $rank3;
$grade4 = $rank4;
$grade5 = $rank5;
$grade6 = $rank6;
$grade7 = $rank7;
$grade8 = $rank8;
$grade9 = $rank9;
$grade10 = $rank10;
$grade11 = $rank11;
$grade12 = $rank12;
$grade13 = $rank13;
$grade14 = $rank14;
$grade15 = $rank15;
$grade16 = $rank16;
$grade17 = $rank17;

//$grades = $rank;
echo "<p align='center'><table class=''>
					<tbody>
						<tr>
							<th>FULL NAME</th>
    <td align='center'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$firstname&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$lastname</b></td>
  </tr>
  <tr>
    <th>CLASS</th>
    <td align='center'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$section</b> </td>
  </tr>
  <tr>
    <th>TERM</th>
    <td align='center'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$term, 2016/2017 Session</b></td>
  </tr></tbody><table class=''>
						<thead><tr>
							<th>
SUBJECTS</th><th>TEST</th>
    <th >EXAM</th>
	<th align='center'>TOTAL</th>
	<th align='center'>GRADES</th>
  </tr>
					</thead> <tbody>
						<tr>
    <th>MATHEMATICS</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test1</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam1</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total1</td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade1</td>
  </tr><tr>
    <th>ENGLISH LANGUAGE</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test2</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam2</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total2</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade2</td>
  </tr><tr>
    <th>COMPUTER STUDIES</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test3</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam3</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total3</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade3</td>
  </tr><tr>
    <th>CIVIC EDUCATION</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test4</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam4</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total4</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade4</td>
  </tr>";
	
	if ($total5 > 0)
	{
		echo "<tr>
    <th>ACCOUNTING</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test5</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam5</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total5</td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade5</td>
  </tr>";
	}
	else
	{
	echo "<tr>
    <th>ACCOUNTING</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Attempted</td>
  </tr>";
	}
	
	if ($total6 > 0)
	{
  echo "<tr>
    <th>GOVERNMENT</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test6</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam6</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total6</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade6</td>
  </tr>";
	}
	else
	{
	echo "<tr>
    <th>GOVERNMENT</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Attempted</td>
  </tr>";
	}
	if ($total7 > 0)
	{
	echo "<tr>
    <th>CRK</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test7</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam7</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total7</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade7</td>
  </tr>";
	}
	else
	{
	echo "<tr>
    <th>CRK</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Attempted</td>
  </tr>";
	}
  
 if ($total8 > 0)
	{ 
  echo "<tr>
    <th>MARKETING</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test8</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam8</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total8</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade8</td>
  </tr>";
}
else
	{
	echo "<tr>
    <th>MARKETING</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Attempted</td>
  </tr>";
	}
  if ($total9 > 0)
	{
  echo"<tr>
    <th>ENGLISH LITERATURE</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test9</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam9</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total9</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade9</td>
  </tr>";
}
else
	{
	echo "<tr>
    <th>ENGLISH LITERATURE</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Attempted</td>
  </tr>";
	}
	if ($total10 > 0)
	{
  echo "<tr>
    <th>BIOLOGY</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test10</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam10</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total10</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade10</td>
  </tr>"; 
  }
  else
	{
	echo "<tr>
    <th>BIOLOGY</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Attempted</td>
  </tr>";
	}
	if ($total11 > 0)
	{
  
  echo "<tr>
    <th>COMMERCE</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test11</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam11</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total11</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade11</td>
  </tr>";
  }
  else
	{
	echo "<tr>
    <th>COMMERCE</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Attempted</td>
  </tr>";
	}
	
	if ($total12 > 0)
	{
  
  echo "<tr>
    <th>ECONOMICS</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test12</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam12</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total12</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade12</td>
  </tr>";
  }
  else
	{
	echo "<tr>
    <th>ECONOMICS</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Attempted</td>
  </tr>";
	}
	if ($total13 > 0)
	{
  echo "<tr>
    <th>YORUBA</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$test13</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$exam13</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total13</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade13</td>
  </tr>";
  }
  else
	{
	echo "<tr>
    <th>YORUBA</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- </td><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Not Attempted</td>
  </tr>";
	}
  echo "<tr>
    <th>E-MATHS</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total14</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade14</td>
  </tr>";
  echo "<tr>
    <th>E-ENGLISH</th><td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</td>
    <td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total15</td>
	<td align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$grade15</td>
  </tr>";
  }
  
   
						
						
						//$sql="SELECT sum(score) as total FROM students WHERE pincode='$pincode'";
//$result=mysql_query($sql) or die ("query failed12");
//if (mysql_num_rows ($result) == 1)
  

//$total = 0;
//while ($num = mysql_fetch_assoc($query_run))
//$total += $num['score'];
  echo "<tr>
    <th>TOTAL SCORE</th>
    <td align='center'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td align='center'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td><td align='center'><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$total</b></td><td align='center'><b></b></td>
  </tr>
					</tbody>
				</table></table><b>Teacher's Comment</b>: <u> $tcomment </u> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature:</b>_________________<br/><br/> <b>Principal's Comment</b>:<u>&nbsp;$pcomment</u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature:</b>_________________<br/><br/><p align='center'>**ANY ALTERATION, ERASURE, ERROR OR INCONSISTENCY ON THIS SHEET RENDERS IT VALUELESS**</p><form align='right'><input type='button' value='Print This Result Sheet' onClick='window.print()' /></form></p><p align='right'>Printed on: $today</p>
     
      <h2>&nbsp;</h2>
    </div>
    <div id='column'>
      <div class='holder'>
        <br/><b>Student's Performance</b><hr />
        <table class=''>
          <tr>
            <td><span class='style9'>Marks Obtainable </span></td>
            <td><span class='style9'>Marks Obtained </span></td>
            <td><span class='style9'>Percentage (%)</span></td>
          </tr>
          <tr>
            <td><b>$obtainable</b></td>
            <td><b>$total</b></td>
            <td><b>$percentage</b></td>
          </tr>
        </table>
        <br/><b>Student's Conduct</b><hr />
        <table class=''>
          <tr>
            <td><span class='style9'>No of Exemplary Conduct </span></td>
            <td><span class='style9'>No of bad Conduct </span></td>
            <td><span class='style9'>Comments</span></td>
          </tr>
          <tr>
            <td><b>$gdeed</b></td>
            <td><b>$bdeed</b></td>
            <td><b>$comment</b></td>
          </tr>
        </table>
        <br/><b>Attendance:</b><hr />
        <table class=''>
          <tr>
            <td><span class='style9'>No of Times School Opened </span></td>
            <td><span class='style9'>No of Times Present </span></td>
            <td><span class='style9'>No of Times Absent</span></td>
          </tr>
          <tr>
            <td align='center'><b>$schoolopened</b></td>
            <td align='center'><b>$timepresent</b></td>
            <td align='center'><b>$absent</b></td>
          </tr>
        </table>
       
        <table class=''><b align='center'>Interpretation:</b>
          <hr />
          <tr>
            <td><div align='center'><strong>A1</strong></div></td>
            <td><div align='center'><strong>DISTINCTION</strong></div></td>
            <td><div align='center'><strong>75 - 100</strong></div></td>
          </tr>
          <tr>
            <td><div align='center'><strong>B2</strong></div></td>
            <td><div align='center'><strong>VERY GOOD </strong></div></td>
            <td><div align='center'><strong>70 - 74</strong></div></td>
          </tr>
          <tr>
            <td><div align='center'><strong>B3</strong></div></td>
            <td><div align='center'><strong>GOOD</strong></div></td>
            <td><div align='center'><strong>65 - 69</strong></div></td>
          </tr>
          <tr>
            <td><div align='center'><strong>C4</strong></div></td>
            <td><div align='center'><strong>CREDIT</strong></div></td>
            <td><div align='center'><strong>60 - 64</strong></div></td>
          </tr>
          <tr>
            <td><div align='center'><strong>C5</strong></div></td>
            <td><div align='center'><strong>CREDIT</strong></div></td>
            <td><div align='center'><strong>55 - 59</strong></div></td>
          </tr>
          <tr>
            <td><div align='center'><strong>C6</strong></div></td>
            <td><div align='center'><strong>CREDIT</strong></div></td>
            <td><div align='center'><strong>50 - 54</strong></div></td>
          </tr>
          <tr>
            <td><div align='center'><strong>D7</strong></div></td>
            <td><div align='center'><strong>PASS</strong></div></td>
            <td><div align='center'><strong>45 - 49 </strong></div></td>
          </tr>
          <tr>
            <td><div align='center'><strong>E8</strong></div></td>
            <td><div align='center'><strong>PASS</strong></div></td>
            <td><div align='center'><strong>40 - 44 </strong></div></td>
          </tr>
          <tr>
            <td><div align='center'><strong>F9</strong></div></td>
            <td><div align='center'><strong>FAIL</strong></div></td>
            <td><div align='center'><strong>0 - 39 </strong></div></td>
          </tr>
        </table><br/><br/><b>Second Term Begins</b>:<u>&nbsp;$nexterm</u></b><br/>";
		




?>
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
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Powered by: <a href="http://www.webtemplates.com.ng">www.webtemplates.com.ng (08073047600)</a>
    <p class="fl_right"></p>
   <br class="clear" />
   
  </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
</body>
</html>
