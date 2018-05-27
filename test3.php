<?php
session_start();
include ("debase.php");
@$pincode=$_COOKIE['pincode'];
@$weeks=$_COOKIE['weeks'];
@$class=$_COOKIE['class'];
@$subject=$_COOKIE['subject'];
@$section=$_COOKIE['section'];
@$Id=$_REQUEST['Id'];
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

if( $_POST ){
	
	
	@$Id = $_POST['Id'];
	$_SESSION['counter'] = $Id;
	
	if (isset($_POST["answer1"])){
    setcookie ("answer1", $answer1, time() + 1200);
    $_SESSION['counter'] = 2;
	}
	elseif (isset($_POST["answer2"])){
    setcookie ("answer2", $answer2, time() + 1200);
    $_SESSION['counter'] = 3;
	}
elseif (isset($_POST["answer3"])){
    setcookie ("answer3", $answer3, time() + 1200);
    $_SESSION['counter'] = 4;
	}
	elseif (isset($_POST["answer4"])){
   setcookie ("answer4", $answer4, time() + 1200);
    $_SESSION['counter'] = 5;
	}
	elseif (isset($_POST["answer5"])){
    setcookie ("answer5", $answer5, time() + 1200);
    $_SESSION['counter'] = 6;
	}
	elseif (isset($_POST["answer6"])){
    setcookie ("answer6", $answer6, time() + 1200);
    $_SESSION['counter'] = 7;
	}
	elseif (isset($_POST["answer7"])){
    setcookie ("answer7", $answer7, time() + 1200);
    $_SESSION['counter'] = 8;
	}
	elseif (isset($_POST["answer8"])){
    setcookie ("answer8", $answer8, time() + 1200);
    $_SESSION['counter'] = 9;
	}
	elseif (isset($_POST["answer9"])){
    setcookie ("answer9", $answer9, time() + 1200);
    $_SESSION['counter'] = 10;
	}
	elseif (isset($_POST["answer10"])){
    setcookie ("answer10", $answer10, time() + 1200);
    $_SESSION['counter'] = 11;
	}
}
  

include ("debase.php");
if ($Id =='1')
{

$sql="SELECT * FROM questions WHERE Id= '1' && weeks='$weeks' && class='$class' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<div id='form-content'>
			<p align='center'>$instructions</p><hr/><p align='center'><b>$_SESSION[counter].&nbsp; &nbsp; $question</p><form method='post' id='reg-form' autocomplete='off'><input type='hidden' name='answer1' value='$fake1' id='lname' required/>
      <input type='hidden' name='Id' value='2' id='lname'/>
					<div class='form-group' align='center'>
					<table><tr><td><button class='btn btn-primary'>a). $fake1</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</p><p align='center'><form method='post' id='reg-form1' autocomplete='off'><input type='hidden' name='answer1' value='$fake2' id='lname' required/>
      </p><input type='hidden' name='Id' value='2' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>b). $fake2</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</p><p align='center'><form method='post' id='reg-form2' autocomplete='off'><p align='center'><input type='hidden' name='answer1' value='$answer' id='lname' required/>
      <input type='hidden' name='Id' value='2' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>c). $answer</button></td></tr></table>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
				
}
else
{
header ("Location: myperformance1.php");
exit (); 
}
}
elseif ($Id =='2')
{

$sql="SELECT * FROM questions WHERE Id= '2' && weeks='$weeks' && class='$class' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<div id='form-content'>
			<p align='center'>$instructions</p><hr/><p align='center'><b>$_SESSION[counter].&nbsp; &nbsp; $question</p><form method='post' id='reg-form' autocomplete='off'><input type='hidden' name='answer2' value='$answer' id='lname' required/>
      <input type='hidden' name='Id' value='3' id='lname'/>
					<div class='form-group' align='center'>
					<table><tr><td><button class='btn btn-primary'>a). $answer</button><form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><p align='center'><form method='post' id='reg-form1' autocomplete='off'><input type='hidden' name='answer2' value='$fake1' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='3' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>b). $fake1</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><p align='center'><form method='post' id='reg-form2' autocomplete='off'><input type='hidden' name='answer2' value='$fake2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='3' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>c). $fake2</button></td></tr></table>
				</div></form>
            
            </div></td></tr></table>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
else
{
header ("Location: myperformance1.php");
exit (); 
}
}
elseif ($Id =='3')
{
$sql="SELECT * FROM questions WHERE Id= '3' && weeks='$weeks' && class='$class' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");

echo "<div id='form-content'>
			<p align='center'>$instructions</p><hr/><p align='center'><b>$_SESSION[counter].&nbsp; &nbsp; $question</p><p align='center'><form method='post' id='reg-form' autocomplete='off'><input type='hidden' name='answer3' value='$fake2' id='lname' required/>
      <input type='hidden' name='Id' value='4' id='lname'/>
					<div class='form-group' align='center'>
					<table><tr><td><button class='btn btn-primary'>a). $fake2</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form1' autocomplete='off'><input type='hidden' name='answer3' value='$answer' id='lname' required/><input type='hidden' name='Id' value='4' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>b). $answer</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div>
     <p align='center'><form method='post' id='reg-form2' autocomplete='off'><input type='hidden' name='answer3' value='$fake1' id='lname' required/>
      <p align='right'><input type='hidden' name='Id' value='4' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>c). $fake1</button></td></tr></table>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
else
{
header ("Location: myperformance1.php");
exit (); 
}
}
elseif ($Id =='4')
{

$sql="SELECT * FROM questions WHERE Id= '4' && weeks='$weeks' && class='$class' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<div id='form-content'>
			<p align='center'>$instructions</p><hr/><p align='center'><b>$_SESSION[counter].&nbsp; &nbsp; $question<form method='post' id='reg-form' autocomplete='off'><input type='hidden' name='answer4' value='$fake2' id='lname' required/>
      <input type='hidden' name='Id' value='5' id='lname'/>
					<div class='form-group' align='center'>
					<table><tr><td><button class='btn btn-primary'>a). $fake2</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form1' autocomplete='off'><input type='hidden' name='answer4' value='$fake1' id='lname' required/><input type='hidden' name='Id' value='5' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>b). $fake1</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form2' autocomplete='off'>
     <input type='hidden' name='answer4' value='$answer' id='lname' required/>
     <input type='hidden' name='Id' value='5' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>c). $answer</button></td></tr></table>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
else
{
header ("Location: myperformance1.php");
exit (); 
}
}
elseif ($Id =='5')
{

$sql="SELECT * FROM questions WHERE Id= '5' && weeks='$weeks' && class='$class' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<div id='form-content'>
			<p align='center'>$instructions</p><hr/><p align='center'><b>$_SESSION[counter].&nbsp; &nbsp; $question</p><p align='center'><form method='post' id='reg-form' autocomplete='off'><input type='hidden' name='answer5' value='$fake1' id='lname' required/>
      <input type='hidden' name='Id' value='6' id='lname'/>
					<div class='form-group' align='center'>
					<table><tr><td><button class='btn btn-primary'>a). $fake1</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form1' autocomplete='off'><input type='hidden' name='answer5' value='$answer' id='lname' required/><input type='hidden' name='Id' value='6' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>b). $answer</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form2' autocomplete='off'>
     <input type='hidden' name='answer5' value='$fake2' id='lname' required/>
      <input type='hidden' name='Id' value='6' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>c). $fake2</button></td></tr></table>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
else
{
header ("Location: myperformance1.php");
exit (); 
}
}
elseif ($Id =='6')
{

$sql="SELECT * FROM questions WHERE Id= '6' && weeks='$weeks' && class='$class' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<div id='form-content'>
			<p align='center'>$instructions</p><hr/><p align='center'><b>$_SESSION[counter].&nbsp; &nbsp; $question</p><form method='post' id='reg-form' autocomplete='off'><input type='hidden' name='answer6' value='$answer' id='lname' required/>
      <input type='hidden' name='Id' value='7' id='lname'/>
					<div class='form-group' align='center'>
					<table><tr><td><button class='btn btn-primary'>a). $answer</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form1' autocomplete='off'><input type='hidden' name='answer6' value='$fake2' id='lname' required/><input type='hidden' name='Id' value='7' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>b). $fake2</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form2' autocomplete='off'>
      <input type='hidden' name='answer6' value='$fake1' id='lname' required/><input type='hidden' name='Id' value='7' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>c). $fake1</button></td></tr></table>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
else
{
header ("Location: myperformance1.php");
exit (); 
}
}
elseif ($Id =='7')
{

$sql="SELECT * FROM questions WHERE Id= '7' && weeks='$weeks' && class='$class' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<div id='form-content'>
			<p align='center'>$instructions</p><hr/><p align='center'><b>$_SESSION[counter].&nbsp; &nbsp; $question</p><p align='center'><form method='post' id='reg-form' autocomplete='off'><input type='hidden' name='answer7' value='$answer' id='lname' required/>
      <input type='hidden' name='Id' value='8' id='lname'/>
					<div class='form-group' align='center'>
					<table><tr><td><button class='btn btn-primary'>a). $answer</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form1' autocomplete='off'><input type='hidden' name='answer7' value='$fake1' id='lname' required/>
      <input type='hidden' name='Id' value='8' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>b). $fake1</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form2' autocomplete='off'><input type='hidden' name='answer7' value='$fake2' id='lname' required/>
      <input type='hidden' name='Id' value='8' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>c). $fake2</button></td></tr></table>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
else
{
header ("Location: myperformance1.php");
exit (); 
}
}
elseif ($Id =='8')
{

$sql="SELECT * FROM questions WHERE Id= '8' && weeks='$weeks' && class='$class' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<div id='form-content'>
			<p align='center'>$instructions</p><hr/><p align='center'><b>$_SESSION[counter].&nbsp; &nbsp; $question</p><p align='center'><form method='post' id='reg-form' autocomplete='off'><input type='hidden' name='answer8' value='$fake1' id='lname' required/>
      <input type='hidden' name='Id' value='9' id='lname'/>
					<div class='form-group' align='center'>
					<table><tr><td><button class='btn btn-primary'>a). $fake1</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form1' autocomplete='off'><input type='hidden' name='answer8' value='$fake2' id='lname' required/><input type='hidden' name='Id' value='9' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>b). $fake2</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form2' autocomplete='off'><input type='hidden' name='answer8' value='$answer' id='lname' required/>
      <input type='hidden' name='Id' value='9' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>c). $answer</button></td></tr></table>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
else
{
header ("Location: myperformance1.php");
exit (); 
}
}
elseif ($Id =='9')
{

$sql="SELECT * FROM questions WHERE Id= '9' && weeks='$weeks' && class='$class' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<div id='form-content'>
			<p align='center'>$instructions</p><hr/><p align='center'><b>$_SESSION[counter].&nbsp; &nbsp; $question</p><form method='post' id='reg-form' autocomplete='off'><input type='hidden' name='answer9' value='$fake2' id='lname' required/>
      <input type='hidden' name='Id' value='10' id='lname'/>
					<div class='form-group' align='center'>
					<table><tr><td><button class='btn btn-primary'>a). $fake2</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form1' autocomplete='off'><input type='hidden' name='answer9' value='$answer' id='lname' required/>
     <input type='hidden' name='Id' value='10' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>b). $answer</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form2' autocomplete='off'><input type='hidden' name='answer9' value='$fake1' id='lname' required/><input type='hidden' name='Id' value='10' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>c). $fake1</button></td></tr></table>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
else
{
header ("Location: myperformance1.php");
exit (); 
}
}
elseif ($Id =='10')
{

$sql="SELECT * FROM questions WHERE Id= '10' && weeks='$weeks' && class='$class' && subject='$subject' && section='$section'";
$r=mysql_query($sql) or die ('Error, query failed1');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0)
{
@$instructions=mysql_result($r,$row,"instructions");
@$question=mysql_result($r,$row,"question");
@$answer=mysql_result($r,$row,"answer");
@$fake1=mysql_result($r,$row,"fake1");
@$fake2=mysql_result($r,$row,"fake2");
echo "<div id='form-content'>
			<p align='center'>$instructions</p><hr/><p align='center'><b>$_SESSION[counter].&nbsp; &nbsp; $question</p><p align='center'><form method='post' id='reg-form' autocomplete='off'><input type='hidden' name='answer10' value='$fake1' id='lname' required/>
      <input type='hidden' name='Id' value='11' id='lname'/>
					<div class='form-group' align='center'>
					<table><tr><td><button class='btn btn-primary'>a). $fake1</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form1' autocomplete='off'><input type='hidden' name='answer10' value='$fake2' id='lname' required/>
      <input type='hidden' name='Id' value='11' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>b). $fake2</button></form></td><td>&nbsp;&nbsp;&nbsp;</td>
				</div><form method='post' id='reg-form2' autocomplete='off'><input type='hidden' name='answer10' value='$answer' id='lname' required/>
      <input type='hidden' name='Id' value='11' id='lname'/>
					<div class='form-group' align='center'>
					<td><button class='btn btn-primary'>c). $answer</button></td></tr></table>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
else
{
echo "<p align='center'>There is no more question</p>";
exit();
}
}
elseif ($Id =='11')
{
@$answer1=$_COOKIE['answer1'];
@$answer2=$_COOKIE['answer2'];
@$answer3=$_COOKIE['answer3'];
@$answer4=$_COOKIE['answer4'];
@$answer5=$_COOKIE['answer5'];
@$answer6=$_COOKIE['answer6'];
@$answer7=$_COOKIE['answer7'];
@$answer8=$_COOKIE['answer8'];
@$answer9=$_COOKIE['answer9'];
@$answer10=$_COOKIE['answer10'];
{
$sql1="INSERT INTO answers(answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9, answer10, weeks, class, pincode, section) VALUES ('$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9', '$answer10','FOUR', 'J.S 1', '5600', 'second')";
if (mysql_query($sql1))
{
echo "You have successfully completed week $weeks $subject test. Click <a href='myperformance.php'>here</a> to see your score.";
} 
}
}
?><script src="assets/jquery-1.12.4-jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'test.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');	
		});
	});
	
	
	/*
	// submit form using ajax short hand $.post() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.post('submit.php', $(this).serialize() )
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');
		});
		
	});
	*/
	
});


</script><script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#reg-form1').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'test.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');	
		});
	});
	
	
	/*
	// submit form using ajax short hand $.post() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.post('submit.php', $(this).serialize() )
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');
		});
		
	});
	*/
	
});


</script><script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#reg-form2').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'test.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');	
		});
	});
	
	
	/*
	// submit form using ajax short hand $.post() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.post('submit.php', $(this).serialize() )
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');
		});
		
	});
	*/
	
});


</script>