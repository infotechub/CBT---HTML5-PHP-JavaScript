 <?php
	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];

	   if ($pincode =='' && $weeks =='' && $class =='')
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
@$weeks=$_POST['weeks'];
@$subjects=$_POST['subjects'];
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
$sql="SELECT * FROM mathanswers WHERE s_n = '2' && pincode = '$pincode' && weeks = '$weeks'";
$result=mysql_query($sql) or die('Error, insert query failedpp');
$n=mysql_num_rows($result);
if ($n<0)

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

$sql1="SELECT * FROM mathsquestions WHERE s_n = '1'";
$result=mysql_query($sql1) or die ('Error, query failed3');
//Mysql_num_row is counting table row
$n=mysql_num_rows($result);
if ($n>0)

{
@$s_n=mysql_result($result,$row,"s_n");
@$weeks=mysql_result($result,$row,"weeks");
@$class=mysql_result($result,$row,"class");
@$subjects=mysql_result($result,$row,"subjects");
@$question1=mysql_result($result,$row,"question1");
$quest = ($s_n + '1');

echo  "<p class='style7' align='center'><br>Week <b>$weeks $subjects Questions No $s_n</b></p><p align='center'> Ensure that the form below is filled with your answer</b></br></p></p>";
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
exit();
}
else
{
include ("test2.php");
exit();
$sql2="SELECT * FROM questions WHERE s_n= '2'";
$result=mysql_query($sql2) or die ('Error, query failed3');
//Mysql_num_row is counting table row
$n=mysql_num_rows($result);
if ($n>0)
@$s_n=mysql_result($result,$row,"s_n");
@$weeks=mysql_result($result,$row,"weeks");
@$class=mysql_result($result,$row,"class");
@$subjects=mysql_result($result,$row,"subjects");
@$question1=mysql_result($result,$row,"question1");
$quest = ($s_n + '1');
echo  "<p class='style7' align='center'><br>Week <b>$weeks $subjects Questions No $s_n</b></p><p align='center'> Ensure that the form below is filled with your answer</b></br></p></p>";
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
exit();
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
