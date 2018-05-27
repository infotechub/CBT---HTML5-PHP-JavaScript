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
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
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
        <li><a href="#">School Website</a></li>
        <li><a href="#">E-library</a></li>
        <li><a href="#">E-Subject</a></li>
		<li class="active" ><a href="register.php">Register</a></li>
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
      <h2 align="center" class="bold"><span class="style4">If you  already have your pin code, click <a href="index.php">here</a> to log in </span></h2>
      <form action='enter.php' method='post' name='form2' id='form2'>
         <p align='center'>Fill the form below with up-to-date Information to Sign Up:</p>
         <p align='center'> <label> 
          <input name='firstname' type='text' id='firstname' value='' placeholder ='Students First Name' size='34' maxlength='20' required />
          </label>
                <label>
                <input name='lastname' type='text' id='lastname' value='' placeholder ='Student Last Name' size='34' maxlength='20' required />
          </label></p>
         
                <p align='center'>
                  <label>
                  <input name='schoolopened' type='text' id='schoolopened' value='' placeholder ='No of Times School Opened' size='34' maxlength='20' required/>  
                  </label>
                  <label>
                  <input name="timepresent" type="text" id="timepresent" value=""  placeholder ='No of Times Present'size="34" maxlength="20" required />
                  </label>
          </p>
                <p align='center'> SEX:<label>
                <select name='sex' id='sex'>
                    <option value='male'>Male</option>
                    <option value='female'>Female</option>
                </select>
                </label>
                <label>CLASS:
                <select name='class' id='class'>
                    <option value='JSS 1'>J.S.S 1</option>
                    <option value='JSS 2'>J.S.S 2</option>
                    <option value='JSS3'>J.S.S 3</option>
                    <option value='SS1'>S.S 1</option>
                    <option value='SS2'>S.S 2</option>
                    <option value='SS3'>S.S 3</option>
                    
                </select>
                </label> <label>TERM:
                <select name='term' id='term'>
                    <option value='FIRST TERM'>FIRST TERM</option>
                    <option value='SECOND TERM'>SECOND TERM</option>
                    <option value='THIRD TERM'>THIRD TERM</option>
                    
                </select>
                </label></p>
                <table width='900' border='1'><tr>
                    <td>SUBJECTS</td>
                    <td>MID-TERM TEST</td>
                    <td>EXAMINATION</td>
                    
                  </tr>
                  <tr>
                    <td>MATHEMATICS</td>
                    <td><input name='test1' type='number' id='mattest' value='' placeholder ='Mid-Term Test' size='34' maxlength='20' /></td>
                    <td><input name='exam1' type='number' id='matexam' value='' placeholder ='Examination' size='34' maxlength='20' /></td>
            
                  </tr>
                  <tr>
                    <td>ENGLISH LANG. </td>
                    <td><input name='test2' type='number' id='engtest' value='' placeholder ='Mid-Term Test' size='34' maxlength='20' /></td>
                    <td><input name='exam2' type='number' id='engexam' value='' placeholder ='Examination' size='34' maxlength='20' /></td>
                    
                  </tr>
                  <tr>
                    <td>COMPUTER</td>
                    <td><input name='test3' type='number' id='comptest' value='' placeholder ='Mid-Term Test' size='34' maxlength='20' /></td>
                    <td><input name="exam3" type="number" id="compexam" value="" placeholder ='Examination' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>CIVIC EDU </td>
                    <td><input name="test4" type="number" id="civictest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam4" type="number" id="civicexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>GOVERMENT </td>
                    <td><input name="test5" type="number" id="sostest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam5" type="number" id="sosexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>MARKETING</td>
                    <td><input name="test6" type="number" id="phetest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam6" type="number" id="pheexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>CRK</td>
                    <td><input name="test7" type="number" id="crktest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam7" type="number" id="crkexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                   
                  </tr>
                  <tr>
                    <td>YORUBA</td>
                    <td><input name="test8" type="number" id="yortest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam8" type="number" id="yorexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>ACCOUNTING </td>
                    <td><input name="test9" type="number" id="agrictest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam9" type="number" id="agriexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>BUSINESS STU. </td>
                    <td><input name="test10" type="number" id="biztest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam10" type="number" id="bizexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>BASIC SCI </td>
                    <td><input name="test11" type="number" id="sciencetest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam11" type="number" id="scienceexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>BASIC TECH. </td>
                    <td><input name="test12" type="number" id="basictest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam12" type="number" id="basicexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>FRENCH</td>
                    <td><input name="test13" type="number" id="frenchtest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam13" type="number" id="frenchexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>CC ART </td>
                    <td><input name="test14" type="number" id="arttest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam14" type="number" id="artexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                   
                  </tr>
                  <tr>
                    <td>HOME ECO </td>
                    <td><input name="test15" type="number" id="hectest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam15" type="number" id="hecexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>E-MATHS</td>
                    <td><input name="test16" type="number" id="emattest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam16" type="number" id="ematexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr>
                  <tr>
                    <td>E-ENG</td>
                    <td><input name="test17" type="number" id="eengtest" value="" placeholder ='Mid-Term Test' size="34" maxlength="20" /></td>
                    <td><input name="exam17" type="number" id="eengexam" value="" placeholder ='EXAMINATION' size="34" maxlength="20" /></td>
                    
                  </tr> <tr>
                   <td> <label>No of good deed:
                <select name="gdeed" id="gdeed">
				<option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
					<option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
					<option value="10">10</option>
                </select>
                </label></td>
				 <td> <label>No of bad deeds:
                <select name="bdeed" id="bdeed">
				<option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
					<option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
					<option value="10">10</option>
                </select>
                </label></td>
                    <td><input name="comment" type="text" id="comment" value="" placeholder ='Comment on student good deed ' size="34" maxlength="20" /></td>
                    
                  </tr></table>
				   Total Subjects: <input name="totalsubjects" type="text" id="tcomment" value="" placeholder ='Total Subjects Offered by Student' size="64" maxlength="50" />
				  Teacher's Comment: <input name="tcomment" type="text" id="tcomment" value="" placeholder ='Comment about student' size="64" maxlength="60" />
                
                <p align="center">&nbsp;</p>
                <p align="center"> <label><BR />
                 <BR />
                  <input type="submit" name="Submit" style="font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20" value="Submit" />
                  </label>
                  <label>
                  <input type="reset" name="reset" style="font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20" value="Reset" />
                  </label>
                </p>
      </form>
      <p align="center">&nbsp;</p>
      <h2>&nbsp;</h2>
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
