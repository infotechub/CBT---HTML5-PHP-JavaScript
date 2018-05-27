<?php 
include ("debase.php");
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];
@$Id=$_COOKIE['Id'];
@$number=$_COOKIE['number'];
//@$number='10';


//////////////// Now we will display the returned records in side the rows of the table/////////
if ($number =='1')
{
$sql=" SELECT * FROM questions WHERE Id= '$number'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");


echo "<div id='myform' name='form1' class='register'><p align='center'>$instructions</p><hr/><p align='center'><b>$number.&nbsp; &nbsp; $question</p><p align='center'>a). <input type='radio' name='answer1' value='$fake1' id='answer' required/>
      $fake1&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer1' value='$answer' id='answer' required/>
      $answer&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer1' value='$fake2' id='answer' required/>
      $fake2&nbsp;&nbsp</p><p align='right'><input type='hidden' name='number' value='2' id='number'/><button id='Submit' type='button' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20'>Next Question</button><p align='right'>Question $number of 10>>></p><br/> </p>
</div>";
exit();
}
if ($number =='2')
{
	$sql=" SELECT * FROM questions WHERE Id= '$number'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");

echo "<div id='myform' name='form2' class='register'><p align='center'>$instructions</p><hr/><p align='center'><b>$number.&nbsp; &nbsp; $question</p><p align='center'>a). <input type='radio' name='answer2' value='$fake1' id='answer' required/>
      $fake1&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer2' value='$fake2' id='answer' required/>
      $fake2&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer2' value='$answer' id='answer' required/>
      $answer&nbsp;&nbsp</p><p align='right'><input type='hidden' name='number' value='3' id='number'/><button id='Submit' type='button' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20'>Next Question</button><p align='right'>Question $number of 10>>></p><br/> </p>
</form>";
exit();
}
if ($number =='3')
{
	$sql=" SELECT * FROM questions WHERE Id= '$number'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<form id='myform' name='form3' method='post' action='' class='register'><p align='center'>$instructions</p><hr/><p align='center'><b>$number.&nbsp; &nbsp; $question</p><p align='center'>a). <input type='radio' name='answer3' value='$answer' id='answer' required/>
      $answer&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer3' value='$fake2' id='fake2' required/>
      $fake2&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer3' value='$fake1' id='fake1' required/>
      $fake1&nbsp;&nbsp</p><p align='right'><input type='hidden' name='number' value='4'/><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question' /><p align='right'>Question $number of 10>>></p><br/> </p>
</form>";
exit();
}
if ($number =='4')
{
	$sql=" SELECT * FROM questions WHERE Id= '$number'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<form id='myform' name='form4' method='post' action='' class='register'><p align='center'>$instructions</p><hr/><p align='center'><b>$number.&nbsp; &nbsp; $question</p><p align='center'>a). <input type='radio' name='answer4' value='$answer' id='answer' required/>
      $answer&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer4' value='$fake1' id='fake1' required/>
      $fake1&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer4' value='$fake2' id='fake2' required/>
      $fake2&nbsp;&nbsp</p><p align='right'><input type='hidden' name='number' value='5'/><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question' /><p align='right'>Question $number of 10>>></p><br/> </p>
</form>";
exit();
}
if ($number =='5')
{
	$sql=" SELECT * FROM questions WHERE Id= '$number'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<form id='myform' name='form5' method='post' action='' class='register'><p align='center'>$instructions</p><hr/><p align='center'><b>$number.&nbsp; &nbsp; $question</p><p align='center'>a). <input type='radio' name='answer5' value='$answer' id='answer' required/>
      $answer&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer5' value='$fake2' id='fake2' required/>
      $fake2&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer5' value='$fake1' id='fake1' required/>
      $fake1&nbsp;&nbsp</p><p align='right'><input type='hidden' name='number' value='6'/><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question' /><p align='right'>Question $number of 10>>></p><br/> </p>
</form>";
exit();
}
if ($number =='6')
{
	$sql=" SELECT * FROM questions WHERE Id= '$number'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<form id='myform' name='form6' method='post' action='' class='register'><p align='center'>$instructions</p><hr/><p align='center'><b>$number.&nbsp; &nbsp; $question</p><p align='center'>a). <input type='radio' name='answer6' value='$fake1' id='fake1' required/>
      $fake1&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer6' value='$fake2' id='fake2' required/>
      $fake2&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer6' value='$answer' id='answer' required/>
      $answer&nbsp;&nbsp</p><p align='right'><input type='hidden' name='number' value='7'/><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question' /><p align='right'>Question $number of 10>>></p><br/> </p>
</form>";
exit();
}
if ($number =='7')
{
	$sql=" SELECT * FROM questions WHERE Id= '$number'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<form id='myform' name='form7' method='post' action='' class='register'><p align='center'>$instructions</p><hr/><p align='center'><b>$number.&nbsp; &nbsp; $question</p><p align='center'>a). <input type='radio' name='answer7' value='$fake1' id='fake1' required/>
      $fake1&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer7' value='$answer' id='answer' required/>
      $answer&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer7' value='$fake2' id='fake2' required/>
      $fake2&nbsp;&nbsp</p><p align='right'><input type='hidden' name='number' value='8'/><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question' /><p align='right'>Question $number of 10>>></p><br/> </p>
</form>";
exit();
}
if ($number =='8')
{
	$sql=" SELECT * FROM questions WHERE Id= '$number'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<form id='myform' name='form8' method='post' action='' class='register'><p align='center'>$instructions</p><hr/><p align='center'><b>$number&nbsp; &nbsp; $question</p><p align='center'>a). <input type='radio' name='answer8' value='$fake1' id='fake1' required/>
      $fake1&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer8' value='$fake2' id='fake2' required/>
      $fake2&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer8' value='$answer' id='answer' required/>
      $answer&nbsp;&nbsp</p><p align='right'><input type='hidden' name='number' value='9'/><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question' /><p align='right'>Question $number of 10>>></p><br/> </p>
</form>";
exit();
}
if ($number =='9')
{
	$sql=" SELECT * FROM questions WHERE Id= '$number'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<form id='myform' name='form9' method='post' action='' class='register'><p align='center'>$instructions</p><hr/><p align='center'><b>$number.&nbsp; &nbsp; $question</p><p align='center'>a). <input type='radio' name='answer9' value='$answer' id='answer' required/>
      $answer&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer9' value='$fake1' id='fake1' required/>
      $fake1&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer9' value='$fake2' id='fake2' required/>
      $fake2&nbsp;&nbsp</p><p align='right'><input type='hidden' name='number' value='10'/><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Next Question' /><p align='right'>Question $number of 10>>></p><br/> </p>
</form>";
exit();
}
if ($number =='10')
{
	$sql=" SELECT * FROM questions WHERE Id= '$number'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)

@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<form id='myform' name='form10' method='post' action='' class='register'><p align='center'>$instructions</p><hr/><p align='center'><b>$number.&nbsp; &nbsp; $question</p><p align='center'>a). <input type='radio' name='answer10' value='$fake1' id='fake1' required/>
      $fake1&nbsp;&nbsp</p><p align='center'>b). <input type='radio' name='answer10' value='$answer' id='answer' required/>
      $answer&nbsp;&nbsp</p><p align='center'>c). <input type='radio' name='answer10' value='$fake2' id='fake2' required/>
      $fake2&nbsp;&nbsp</p><p align='right'><input type='hidden' name='number' value='11'/><input type='submit' name='submit' style='font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20' value='Submit' /><p align='right'>Question $number of 10</p><br/> </p>
</form>";
exit();
}
?>
