<script language="javascript">
$(document).ready(function() {
$('#myForm').on('submit', function(event) {

$.ajax({
url:'update1.php', // target file
data: $(this).serialize(), //translate data structure
type: 'POST',

error: function(data) {
$("#error").show(). fadeOut (5000); //===show error message====
}, 
success: function(data){

console.log(data);
$("#success").show(); //show success message==
}

});
event.preventDefault(); // To avoid page refresh and fire the event "click"
});
});
</script>


<?php
include ("debase.php");


@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$number=$_COOKIE['number'];
@$ans10=$_COOKIE['ans10'];
@$ans1=$_COOKIE['ans1'];

$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
$n=mysql_num_rows($r);
if ($n>0)
@$instructions=mysql_result($r,$row,"instructions");
@$instruction1=mysql_result($r,$row,"instruction1");
@$question1=mysql_result($r,$row,"question1");
@$question2=mysql_result($r,$row,"question2");
@$question3=mysql_result($r,$row,"question3");
@$question4=mysql_result($r,$row,"question4");
@$question5=mysql_result($r,$row,"question5");
@$question6=mysql_result($r,$row,"question6");
@$question7=mysql_result($r,$row,"question7");
@$question8=mysql_result($r,$row,"question8");
@$question9=mysql_result($r,$row,"question9");
@$question10=mysql_result($r,$row,"question10");
@$answer1=mysql_result($r,$row,"answer1");
@$answer2=mysql_result($r,$row,"answer2");
@$answer3=mysql_result($r,$row,"answer3");
@$answer4=mysql_result($r,$row,"answer4");
@$answer5=mysql_result($r,$row,"answer5");
@$answer6=mysql_result($r,$row,"answer6");
@$answer7=mysql_result($r,$row,"answer7");
@$answer8=mysql_result($r,$row,"answer8");
@$answer9=mysql_result($r,$row,"answer9");
@$answer10=mysql_result($r,$row,"answer10");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
@$fake3=mysql_result($r,$row,"fake3");
@$fake4=mysql_result($r,$row,"fake4");
@$fake5=mysql_result($r,$row,"fake5");
@$fake6=mysql_result($r,$row,"fake6");
@$fake7=mysql_result($r,$row,"fake7");
@$fake8=mysql_result($r,$row,"fake8");
@$fake9=mysql_result($r,$row,"fake9");
@$fake10=mysql_result($r,$row,"fake10");
@$fake11=mysql_result($r,$row,"fake11");
@$fake12=mysql_result($r,$row,"fake12");
@$fake13=mysql_result($r,$row,"fake13");
@$fake14=mysql_result($r,$row,"fake14");
@$fake15=mysql_result($r,$row,"fake15");
@$fake16=mysql_result($r,$row,"fake16");
@$fake17=mysql_result($r,$row,"fake17");
@$fake18=mysql_result($r,$row,"fake18");
@$fake19=mysql_result($r,$row,"fake19");
@$fake20=mysql_result($r,$row,"fake20");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");

@$number1=$_COOKIE['number1'];
@$number2=$_COOKIE['number2'];
@$number3=$_COOKIE['number3'];
@$number4=$_COOKIE['number4'];
@$number5=$_COOKIE['number5'];
@$number6=$_COOKIE['number6'];
@$number7=$_COOKIE['number7'];
@$number8=$_COOKIE['number8'];
@$number9=$_COOKIE['number9'];
@$number10=$_COOKIE['number10'];

if ($number1 =='0')
{
echo "$number1 $ans1<form id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>1). &nbsp;&nbsp;&nbsp;<b>$question1</b>
     <p>
      a). <input type='radio' name='ans1' value='$answer1' />
      $answer1 &nbsp;&nbsp,
     b). <input type='radio' name='ans1' value='$fake1' />
      $fake1 &nbsp;&nbsp,
      c). <input type='radio' name='ans1' value='$fake2' />
      $fake2<hr/><input type='hidden' name='number1' value='0' />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> <div id='cont'></div>";
exit();
}
elseif ($number1 =='1')
{
 echo "<form id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>2). &nbsp;&nbsp;&nbsp;<b>$question2</b>
     <p>
      a). <input type='radio' name='ans2' value='$answer2' />
      $answer2 &nbsp;&nbsp,
     b). <input type='radio' name='ans2' value='$fake3' />
      $fake3 &nbsp;&nbsp,
      c). <input type='radio' name='ans2' value='$fake4' />
      $fake4<hr/><br><input type='hidden' name='number2' value='2' />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> <div id='cont'></div>";
	  exit();
}
elseif ($number2 =='2')
{
 echo "<form id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>3. &nbsp;&nbsp;&nbsp;<b>$question3</b>
     <p>
      (a) <input type='radio' name='ans3' value='$answer3' />
      $ans1 &nbsp;&nbsp,
     (b) <input type='radio' name='ans3' value='$fake5' />
      $fake5 &nbsp;&nbsp,
      (c) <input type='radio' name='ans3' value='$fake6' />
      $fake6<hr/><br><input type='hidden' name='number3' value='3' />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> <div id='cont'></div>";
	  exit();
}
elseif ($number3 =='3')
{
 echo "<form id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>4). &nbsp;&nbsp;&nbsp;<b>$question4</b>
     <p>
      a). <input type='radio' name='ans4' value='$answer4' />
      $answer4 &nbsp;&nbsp,
     b). <input type='radio' name='ans4' value='$fake7' />
      $fake7 &nbsp;&nbsp,
      c). <input type='radio' name='ans4' value='$fake8' />
      $fake8<hr/><br><input type='hidden' name='number4' value='4' />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> <div id='cont'></div>";
	  exit();
}
elseif ($number4 =='4')
{
 echo "<form id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>5). &nbsp;&nbsp;&nbsp;<b>$question5</b>
     <p>
      a). <input type='radio' name='ans5' value='$answer5' />
      $answer5 &nbsp;&nbsp,
     b). <input type='radio' name='ans5' value='$fake9' />
      $fake9 &nbsp;&nbsp,
      c). <input type='radio' name='ans5' value='$fake10' />
      $fake10<hr/><br><input type='hidden' name='number5' value='5' />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> <div id='cont'></div>";
	  exit();
}
elseif ($number5 =='5')
{
echo "<form id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>6). &nbsp;&nbsp;&nbsp;<b>$question6</b>
     <p>
      a). <input type='radio' name='ans6' value='$answer6' />
      $answer6 &nbsp;&nbsp,
     b). <input type='radio' name='ans6' value='$fake11' />
      $fake11 &nbsp;&nbsp,
      c). <input type='radio' name='ans6' value='$fake12' />
      $fake12<hr/><br><input type='hidden' name='number6' value='6' />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> <div id='cont'></div>";
	  exit();
}
elseif ($number6 =='6')
{
echo "<form id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>7). &nbsp;&nbsp;&nbsp;<b>$question7</b>
     <p>
      a). <input type='radio' name='ans7' value='$answer7' />
      $answer7 &nbsp;&nbsp,
     b). <input type='radio' name='ans7' value='$fake13' />
      $fake13 &nbsp;&nbsp,
      c). <input type='radio' name='ans7' value='$fake14' />
      $fake14<hr/><br><input type='hidden' name='number7' value='7' />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> <div id='cont'></div>";
	  exit();
}
elseif ($number7 =='7')
{
echo "<form id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>8). &nbsp;&nbsp;&nbsp;<b>$question8</b>
     <p>
      a). <input type='radio' name='ans8' value='$answer8' />
      $answer8 &nbsp;&nbsp,
     b). <input type='radio' name='ans8' value='$fake15' />
      $fake15 &nbsp;&nbsp,
      c). <input type='radio' name='ans8' value='$fake16' />
      $fake16<hr/><br><input type='hidden' name='number8' value='8' />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> <div id='cont'></div>";
	  exit();
}
elseif ($number8 =='8')
{
echo "<form id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>9). &nbsp;&nbsp;&nbsp;<b>$question9</b>
     <p>
      a). <input type='radio' name='ans9' value='$answer9' />
      $answer9 &nbsp;&nbsp,
     b). <input type='radio' name='ans9' value='$fake17' />
      $fake17 &nbsp;&nbsp,
      c). <input type='radio' name='ans9' value='$fake18' />
      $fake18<hr/><br><input type='hidden' name='number9' value='9' />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> <div id='cont'></div>";
	  exit();
}
elseif ($number9 =='9')
{
echo "<form id='myForm' name='form2' method='post' action='' class='register'><hr/><p align='center'>10). &nbsp;&nbsp;&nbsp;<b>$question10</b>
     <p>
      a). <input type='radio' name='ans10' value='$answer10' />
      $answer10 &nbsp;&nbsp,
     b). <input type='radio' name='ans10' value='$fake19' />
      $fake19 &nbsp;&nbsp,
      c). <input type='radio' name='ans10' value='$fake20' />
      $fake20<hr/><br><input type='hidden' name='number10' value='10' />
                   <input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /></p></form> <div id='cont'></div>";
	  exit();
}
elseif ($number10 =='number10')
{
$sql1="INSERT INTO mathanswers(ans1, ans2, ans3, ans4, ans5, ans6, ans7, ans8, ans9, ans10, weeks, class, pincode) VALUES ('$ans1', '$ans2', '$ans3', '$ans4', '$ans5', '$ans6', '$ans7', '$ans8', '$ans9', '$ans10','$weeks', '$class', '$pincode')";
if (mysql_query($sql1))
{
header ("Location: myperformance1.php");
exit (); 
}
}
?>