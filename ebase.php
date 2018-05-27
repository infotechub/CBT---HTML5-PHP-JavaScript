
     <?php
	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$answer1=$_REQUEST['answer1'];
@$answer2=$_REQUEST['answer2'];
@$answer3=$_REQUEST['answer3'];
@$answer4=$_REQUEST['answer4'];
@$answer5=$_REQUEST['answer5'];
@$answer6=$_REQUEST['answer6'];
@$answer7=$_REQUEST['answer7'];
@$answer8=$_REQUEST['answer8'];
@$answer9=$_REQUEST['answer9'];
@$answer10=$_REQUEST['answer10'];


	   if ($pincode =='')
{
echo "<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**Please sign in with your pin code!**</b>";
header ("Location: index2.php");
exit();
}
if ($answer1='')
 {
echo "<div id='myform' name='myform' class='register'>
    <hr/><p align='center'>1). <b>$question1</b>
     <p align='center'><input type="text" name="name" id="name"/>
    <br />
    Suffix : <input type="text" name="suffix" id="suffix"/>
    <br />
    <button id="Submit" type="button">thanks</button>
</div>
<form id='form2' name='form2' method='post' action='setans.php' >               
                 <hr/><p align='center'>1). <b>$question1</b>
     <p align='center'>
      <input type='radio' name='answer1' value='$answer1' />a)
      $answer1</p><p align='center'>
      <input type='radio' name='answer1' value='$fake1' />b)
      $fake1</p><p align='center'>
      <input type='radio' name='answer1' value='$fake2' />c)
      $fake2<hr/></p></p><p align='right'>Question 1 0f 10>>>></p><p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> ";
 }
elseif ($answer1='answer1')
 {
setcookie ("answer1", $answer1, time() + 1200);
echo "<form id='form2' name='form2' method='post' action='setans.php' class='register'>               
                 <hr/><p align='center'>2). <b>$question 2</b><p>
      <input type='radio' name='answer2' value='$fake3' />a)
      $fake3</p><p>
      <input type='radio' name='answer2' value='$fake4' />b)
      $fake4</p><p>
      <input type='radio' name='answer2' value='$answer2' />c)
      $answer2<hr/>
    </p><p align='right'>Question 2 0f 10>>>></p><p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form>  ";
exit();
}
elseif ($answer2='answer2')
 {
setcookie ("answer2", $answer2, time() + 1200);
echo "<form id='form2' name='form2' method='post' action='setans.php' class='register'>               
                 <hr/><p align='center'>3). &nbsp;&nbsp;&nbsp;<b>$question3</b>
     <p>
      <input type='radio' name='answer3' value='$fake5' />a)
      $fake5</p><p>
      <input type='radio' name='answer3' value='$fake6' />b)
      $fake6</p><p>
      <input type='radio' name='answer3' value='$answer3' />c)
      $answer3<hr/></p><p align='right'>Question 3 0f 10>>>></p><p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> ";
exit();
}
elseif ($answer3='answer3')
 {
setcookie ("answer3", $answer3, time() + 1200);
echo "<form id='form2' name='form2' method='post' action='setans.php' class='register'>               
                 <hr/><p align='center'>4). &nbsp;&nbsp;&nbsp;<b>$question4</b></p>
     <p>
      <input type='radio' name='answer4' value='$fake7' />a)
      $fake7</p>
    
    <p>
      <input type='radio' name='answer4' value='$fake8' />b)
      $fake8</p><p>
      <input type='radio' name='answer4' value='$answer4' />c)
      $answer4<hr/></p><p align='right'>Question 4 0f 10>>>></p><p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> ";
exit();
}
elseif ($answer4='answer4')
 {
setcookie ("answer4", $answer4, time() + 1200);
echo "<form id='form2' name='form2' method='post' action='setans.php' class='register'>               
                 <hr/><p align='center'>5). &nbsp;&nbsp;&nbsp;<b>$question5</b></p>
     <p>
      <input type='radio' name='answer5' value='$fake9' />a)
      $fake9</p>
    
    <p>
      <input type='radio' name='answer5' value='$fake10' />b)
      $fake10</p><p>
      <input type='radio' name='answer5' value='$answer5' />c)
      $answer5<hr/></p><p align='right'>Question 5 0f 10>>>></p><p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form>";
exit();
}
elseif ($answer5='answer5')
 {
setcookie ("answer5", $answer5, time() + 1200);
echo "<form id='form2' name='form2' method='post' action='setans.php' class='register'>               
                 <hr/><p align='center'>6). &nbsp;&nbsp;&nbsp;<b>$question6</b></p>
     <p>
      <input type='radio' name='answer6' value='$answer6' />a)
      $answer6</p>
    
    <p>
      <input type='radio' name='answer6' value='$fake11' />b)
      $fake11</p><p>
      <input type='radio' name='answer6' value='$fake12' />c)
      $fake12<hr/></p><p align='right'>Question 6 0f 10>>>></p><p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form>";
exit();
}
elseif ($answer6='answer6')
 {
setcookie ("answer6", $answer6, time() + 1200);
echo "<form id='form2' name='form2' method='post' action='setans.php' class='register'>               
                 <hr/><p align='center'>7). &nbsp;&nbsp;&nbsp;<b>$question7</b></p>
     <p>
      <input type='radio' name='answer7' value='$fake13' />a)
      $fake13</p>
    
    <p>
      <input type='radio' name='answer7' value='$fake14' />b)
      $fake14</p><p>
      <input type='radio' name='answer7' value='$answer7' />c)
      $answer7<hr/></p><p align='right'>Question 7 0f 10>>>></p><p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form>";
exit();
}
elseif ($answer7='answer7')
 {
setcookie ("answer7", $answer7, time() + 1200);
echo "<form id='form2' name='form2' method='post' action='setans.php' class='register'>               
                 <hr/><p align='center'>8). &nbsp;&nbsp;&nbsp;<b>$question8</b></p>
     <p>
      <input type='radio' name='answer8' value='$fake15' />a)
      $fake15</p>
    
    <p>
      <input type='radio' name='answer8' value='$fake16' />b)
      $fake5</p><p>
      <input type='radio' name='answer8' value='$answer8' />c)
      $answer8<hr/></p><p align='right'>Question 8 0f 10>>>></p><p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form>";
exit();
}
elseif ($answer8='answer8')
 {
setcookie ("answer8", $answer8, time() + 1200);
echo "<p align='center'>9). &nbsp;&nbsp;&nbsp;<b>$question9</b></p>
     <p>
      <input type='radio' name='answer9' value='$fake17' />a)
      $fake5</p><p>
      <input type='radio' name='answer9' value='$answer9' />b)
      $answer9</p>
    <p>
      <input type='radio' name='answer9' value='$fake18' />c)
      $fake18<hr/></p><p align='right'>Question 9 0f 10>>>></p><p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form>";
exit();
}
elseif ($answer9='answer9')
 {
setcookie ("answer9", $answer9, time() + 1200);
echo "<form id='form2' name='form2' method='post' action='setans.php' class='register'>               
                 <hr/><p align='center'>10). &nbsp;&nbsp;&nbsp;<b>$question10</b></p>
     <p>
      <input type='radio' name='answer10' value='$fake19' />a)
      $fake19</p>
    
    <p>
      <input type='radio' name='answer10' value='$fake20' />b)
      $fake20</p><p>
      <input type='radio' name='answer10' value='$answer10' />c)
      $answer10<hr/></p><p align='right'>Question 10 0f 10>>>></p><p align='center'>
                   
                  <br>
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form>";
exit();
}
elseif ($answer10='answer10')
 {
setcookie ("answer10", $answer10, time() + 1200);
echo "Click here to view your score.";
exit();
}

?>
     