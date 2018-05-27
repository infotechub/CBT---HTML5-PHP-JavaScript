
<?php
	   	   // username and password sent from form
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$number=$_COOKIE['number'];



include ("debase.php");


$sql="SELECT * FROM mathanswers WHERE pincode = '$pincode' && weeks = '$weeks' && class ='$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form
@$ans1=mysql_result($r,$row,"ans1");
@$ans2=mysql_result($r,$row,"ans2");
@$ans3=mysql_result($r,$row,"ans3");
@$ans4=mysql_result($r,$row,"ans4");
@$ans5=mysql_result($r,$row,"ans5");
@$ans6=mysql_result($r,$row,"ans6");
@$ans7=mysql_result($r,$row,"ans7");
@$ans8=mysql_result($r,$row,"ans8");
@$ans9=mysql_result($r,$row,"ans9");
@$ans10=mysql_result($r,$row,"ans10");

//echo "<form id='form2' name='form2' method='post' action='updateanswer.php' class='register'>
echo "<form id='form2' name='form2' method='post' action='base.php' class='register'>               
                 <hr/>";
				 
if ($ans1='')

{
$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)
@$instruction1=mysql_result($r,$row,"instruction1");
@$question1=mysql_result($r,$row,"question1");
@$answer1=mysql_result($r,$row,"answer1");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");
echo "<p align='center'>1). <b>$question1</b>
     <p align='center'>
      <input type='radio' name='answer1' value='$answer1' />a)
      $answer1</p><p align='center'>
      <input type='radio' name='answer1' value='$fake1' />b)
      $fake1</p><p align='center'>
      <input type='radio' name='answer1' value='$fake2' />c)
      $fake2<hr/></p></p><p align='right'>Question 1 0f 10>>>></p>";
exit();
}
elseif ($ans2='')
{
	
$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)
@$instruction1=mysql_result($r,$row,"instruction1");
@$question2=mysql_result($r,$row,"question2");
@$answer2=mysql_result($r,$row,"answer2");
@$fake3=mysql_result($r,$row,"fake3");
@$fake4=mysql_result($r,$row,"fake4");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");
echo"<p align='center'>2). &nbsp;&nbsp;&nbsp;<b>$question2</b><p>
      <input type='radio' name='answer2' value='$fake3' />a)
      $fake3</p><p>
      <input type='radio' name='answer2' value='$fake4' />b)
      $fake4</p><p>
      <input type='radio' name='answer2' value='$answer2' />c)
      $answer2<hr/>
    </p><p align='right'>Question 2 0f 10>>>></p>";
exit();
}
elseif ($ans3='')
{
$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)
@$instruction1=mysql_result($r,$row,"instruction1");
@$question3=mysql_result($r,$row,"question3");
@$answer3=mysql_result($r,$row,"answer3");
@$fake5=mysql_result($r,$row,"fake5");
@$fake6=mysql_result($r,$row,"fake6");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");
echo"<p align='center'>3). &nbsp;&nbsp;&nbsp;<b>$question3</b>
     <p>
      <input type='radio' name='answer3' value='$fake5' />a)
      $fake5</p><p>
      <input type='radio' name='answer3' value='$fake6' />b)
      $fake6</p><p>
      <input type='radio' name='answer3' value='$answer3' />c)
      $answer3<hr/></p><p align='right'>Question 3 0f 10>>>></p>";
exit();
}
if ($ans4='')
{
	$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)
@$instruction1=mysql_result($r,$row,"instruction1");
@$question4=mysql_result($r,$row,"question4");
@$answer4=mysql_result($r,$row,"answer4");
@$fake7=mysql_result($r,$row,"fake7");
@$fake8=mysql_result($r,$row,"fake8");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");
echo"<p align='center'>4). &nbsp;&nbsp;&nbsp;<b>$question4</b></p>
     <p>
      <input type='radio' name='answer4' value='$fake7' />a)
      $fake7</p>
    
    <p>
      <input type='radio' name='answer4' value='$fake8' />b)
      $fake8</p><p>
      <input type='radio' name='answer4' value='$answer4' />c)
      $answer4<hr/></p><p align='right'>Question 4 0f 10>>>></p>";
exit();
}
if ($ans5='')
{
	$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)
@$instruction1=mysql_result($r,$row,"instruction1");
@$question5=mysql_result($r,$row,"question5");
@$answer5=mysql_result($r,$row,"answer5");
@$fake9=mysql_result($r,$row,"fake9");
@$fake10=mysql_result($r,$row,"fake10");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");
echo"<p align='center'>5). &nbsp;&nbsp;&nbsp;<b>$question5</b></p>
     <p>
      <input type='radio' name='answer5' value='$fake9' />a)
      $fake9</p>
    
    <p>
      <input type='radio' name='answer5' value='$fake10' />b)
      $fake10</p><p>
      <input type='radio' name='answer5' value='$answer5' />c)
      $answer5<hr/></p><p align='right'>Question 5 0f 10>>>></p>";
exit();
}
if ($ans6='')
{
	$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)

@$instruction1=mysql_result($r,$row,"instruction1");
@$question6=mysql_result($r,$row,"question6");
@$answer6=mysql_result($r,$row,"answer6");
@$fake11=mysql_result($r,$row,"fake11");
@$fake12=mysql_result($r,$row,"fake12");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");
echo"<<p align='center'>6). &nbsp;&nbsp;&nbsp;<b>$question6</b></p>
     <p>
      <input type='radio' name='answer6' value='$answer6' />a)
      $answer6</p>
    
    <p>
      <input type='radio' name='answer6' value='$fake11' />b)
      $fake11</p><p>
      <input type='radio' name='answer6' value='$fake12' />c)
      $fake12<hr/></p><p align='right'>Question 6 0f 10>>>></p>";
exit();
}
if ($ans7='')
{
	$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)
@$instruction1=mysql_result($r,$row,"instruction1");
@$question7=mysql_result($r,$row,"question7");
@$answer7=mysql_result($r,$row,"answer7");
@$fake13=mysql_result($r,$row,"fake13");
@$fake14=mysql_result($r,$row,"fake14");
@$fake15=mysql_result($r,$row,"fake15");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");
echo "<p align='center'>7). &nbsp;&nbsp;&nbsp;<b>$question7</b></p>
     <p>
      <input type='radio' name='answer7' value='$fake13' />a)
      $fake13</p>
    
    <p>
      <input type='radio' name='answer7' value='$fake14' />b)
      $fake14</p><p>
      <input type='radio' name='answer7' value='$answer7' />c)
      $answer7<hr/></p><p align='right'>Question 7 0f 10>>>></p>";
exit();
	}
if ($ans8='')
{
	$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)

@$instruction1=mysql_result($r,$row,"instruction1");
@$question8=mysql_result($r,$row,"question8");
@$answer8=mysql_result($r,$row,"answer8");
@$fake15=mysql_result($r,$row,"fake15");
@$fake16=mysql_result($r,$row,"fake16");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");
echo "<p align='center'>8). &nbsp;&nbsp;&nbsp;<b>$question8</b></p>
     <p>
      <input type='radio' name='answer8' value='$fake15' />a)
      $fake15</p>
    
    <p>
      <input type='radio' name='answer8' value='$fake16' />b)
      $fake5</p><p>
      <input type='radio' name='answer8' value='$answer8' />c)
      $answer8<hr/></p><p align='right'>Question 8 0f 10>>>></p>";
exit();
	}
if ($ans9='')
{
	$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)
@$instruction1=mysql_result($r,$row,"instruction1");
@$question9=mysql_result($r,$row,"question9");
@$answer9=mysql_result($r,$row,"answer9");
@$fake17=mysql_result($r,$row,"fake17");
@$fake18=mysql_result($r,$row,"fake18");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");
echo "<p align='center'>9). &nbsp;&nbsp;&nbsp;<b>$question9</b></p>
     <p>
      <input type='radio' name='answer9' value='$fake17' />a)
      $fake5</p><p>
      <input type='radio' name='answer9' value='$answer9' />b)
      $answer9</p>
    <p>
      <input type='radio' name='answer9' value='$fake18' />c)
      $fake18<hr/></p><p align='right'>Question 9 0f 10>>>></p>";
exit();
	}
if ($ans10='')
{
	$sql="SELECT * FROM mathsquestions WHERE weeks = '$weeks' && class = '$class' && Section='second'";
$r=mysql_query($sql) or die ("query failed");
while ($row=mysql_fetch_array($r))
$row>0;
$numrows=mysql_num_rows($r);
// username and password sent from form


//while($row<$numrows)
@$instruction1=mysql_result($r,$row,"instruction1");
@$question10=mysql_result($r,$row,"question10");
@$answer10=mysql_result($r,$row,"answer10");
@$fake19=mysql_result($r,$row,"fake19");
@$fake20=mysql_result($r,$row,"fake20");
@$class=mysql_result($r,$row,"class");
@$weeks=mysql_result($r,$row,"weeks");

echo "<p align='center'>10). &nbsp;&nbsp;&nbsp;<b>$question10</b></p>
     <p>
      <input type='radio' name='answer10' value='$fake19' />a)
      $fake19</p>
    
    <p>
      <input type='radio' name='answer10' value='$fake20' />b)
      $fake20</p><p>
      <input type='radio' name='answer10' value='$answer10' />c)
      $answer10<hr/></p><p align='right'>Question 10 0f 10>>>></p>";
exit();
	}
else
{
echo"<p align='center'>You have attempted this week's task.</p>";
exit();
}
echo "</div>";

?>
