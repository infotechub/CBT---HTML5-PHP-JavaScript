
<?php
session_start();
include ("debase.php");
@$username=$_COOKIE['username'];
@$section=$_REQUEST['section'];
@$weeks=$_REQUEST['weeks'];
@$class=$_REQUEST['class'];
@$subject=$_REQUEST['subject'];
@$Id=$_REQUEST['Id'];
@$instructions=$_REQUEST['instructions'];
@$question=$_REQUEST['question'];
@$answer=$_REQUEST['answer'];
@$fake1=$_REQUEST['fake1'];
@$fake2=$_REQUEST['fake2'];


if( $_POST ){
	
	
	@$Id = $_POST['Id'];
	$_SESSION['counter'] = $Id;
	
	if (isset($_POST["2"]))
	{
$sql1="INSERT INTO questions(instructions, Id, question, answer, fake1, fake2, section, weeks, class, subject) VALUES ('$instructions', '1', '$question','$answer',  '$fake1', '$fake2', '$section', '$weeks','$class', '$subject')";
if (mysql_query($sql1))
	{
//setcookie ("answer1", $answer, time() + 1200);
    $_SESSION['counter'] = 2;
	}
	}
	elseif (isset($_POST["3"]))
	{
	$sql1="INSERT INTO questions(instructions, Id, question, answer, fake1, fake2, section, weeks, class, subject) VALUES ('$instructions', '2', '$question','$answer',  '$fake1', '$fake2', '$section', '$weeks','$class', '$subject')";
if (mysql_query($sql1))
{
    $_SESSION['counter'] = 3;
	}
	}
elseif (isset($_POST["4"]))
{
	$sql1="INSERT INTO questions(instructions, Id, question, answer, fake1, fake2, section, weeks, class, subject) VALUES ('$instructions', '3', '$question','$answer',  '$fake1', '$fake2', '$section', '$weeks','$class', '$subject')";
if (mysql_query($sql1))
{
    $_SESSION['counter'] = 4;
	}
}
	elseif (isset($_POST["5"]))
	{
   $sql1="INSERT INTO questions(instructions, Id, question, answer, fake1, fake2, section, weeks, class, subject) VALUES ('$instructions', '4', '$question','$answer',  '$fake1', '$fake2', '$section', '$weeks','$class', '$subject')";
if (mysql_query($sql1))
{
    $_SESSION['counter'] = 5;
	}
	}
	elseif (isset($_POST["6"]))
	{
 $sql1="INSERT INTO questions(instructions, Id, question, answer, fake1, fake2, section, weeks, class, subject) VALUES ('$instructions', '5', '$question','$answer',  '$fake1', '$fake2', '$section', '$weeks','$class', '$subject')";
if (mysql_query($sql1))
{
    $_SESSION['counter'] = 6;
	}
	}
	elseif (isset($_POST["7"]))
	{
   $sql1="INSERT INTO questions(instructions, Id, question, answer, fake1, fake2, section, weeks, class, subject) VALUES ('$instructions', '6', '$question','$answer',  '$fake1', '$fake2', '$section', '$weeks','$class', '$subject')";
if (mysql_query($sql1))
{
    $_SESSION['counter'] = 7;
	}
	}
	elseif (isset($_POST["8"]))
	{
   $sql1="INSERT INTO questions(instructions, Id, question, answer, fake1, fake2, section, weeks, class, subject) VALUES ('$instructions', '7', '$question','$answer',  '$fake1', '$fake2', '$section', '$weeks','$class', '$subject')";
if (mysql_query($sql1))
{
    $_SESSION['counter'] = 8;
	}
	}
	elseif (isset($_POST["9"]))
	{
$sql1="INSERT INTO questions(instructions, Id, question, answer, fake1, fake2, section, weeks, class, subject) VALUES ('$instructions', '8', '$question','$answer',  '$fake1', '$fake2', '$section', '$weeks','$class', '$subject')";
if (mysql_query($sql1))
{
   // setcookie ("answer8", $answer8, time() + 1200);
    $_SESSION['counter'] = 9;
	}
	}
	elseif (isset($_POST["10"]))
	{
   $sql1="INSERT INTO questions(instructions, Id, question, answer, fake1, fake2, section, weeks, class, subject) VALUES ('$instructions', '9', '$question','$answer',  '$fake1', '$fake2', '$section', '$weeks','$class', '$subject')";
if (mysql_query($sql1))
{
    $_SESSION['counter'] = 10;
	}
	}
	elseif (isset($_POST["11"]))
	{
		$sql1="INSERT INTO questions(instructions, Id, question, answer, fake1, fake2, section, weeks, class, subject) VALUES ('$instructions', '10', '$question','$answer',  '$fake1', '$fake2', '$section', '$weeks','$class', '$subject')";
if (mysql_query($sql1))
  {
    $_SESSION['counter'] = 11;
	}
}
}
  

include ("debase.php");
if ($Id =='1')
{
echo "<div id='form-content'><form method='post' id='reg-form' autocomplete='off'><p align='center'><input type='textarea' name='instructions' value='' placeholder='Enter Instruction' id='lname' required/></p><hr/>
            
<p align='center'><b>$_SESSION[counter].<input type='textarea' name='question' value='' placeholder='Enter Question' id='lname' required/></p><p align='center'>a). <input type='textarea' name='answer' value='' placeholder='Correct Option' id='lname' required/>
      </p><p align='center'>b). <input type='textarea' name='fake1' value='' placeholder='Fake Option 1' id='lname' required/>
      </p><p align='center'>c). <input type='textarea' name='fake2' value='' placeholder='Fake Option 2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='2' id='lname'/>
					<div class='form-group' align='center'>
					<button class='btn btn-primary'>Next Question</button>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
elseif ($Id =='2')
{
echo "<div id='form-content'><form method='post' id='reg-form' autocomplete='off'><p align='center'><input type='text' name='instructions' value='' placeholder='Enter Instruction' id='lname' required/></p><hr/>
            
<p align='center'><b>$_SESSION[counter].<input type='textarea' name='question' value='' placeholder='Enter Question' id='lname' required/></p><p align='center'>a). <input type='textarea' name='answer' value='' placeholder='Correct Option' id='lname' required/>
      </p><p align='center'>b). <input type='textarea' name='fake1' value='' placeholder='Fake Option 1' id='lname' required/>
      </p><p align='center'>c). <input type='textarea' name='fake2' value='' placeholder='Fake Option 2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='3' id='lname'/>
					<div class='form-group' align='center'>
					<button class='btn btn-primary'>Next Question</button>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
elseif ($Id =='3')
{
echo "<div id='form-content'><form method='post' id='reg-form' autocomplete='off'><p align='center'><input type='textarea' name='instructions' value='' placeholder='Enter Instruction' id='lname' required/></p><hr/>
            
<p align='center'><b>$_SESSION[counter].<input type='textarea' name='question' value='' placeholder='Enter Question' id='lname' required/></p><p align='center'>a). <input type='textarea' name='answer' value='' placeholder='Correct Option' id='lname' required/>
      </p><p align='center'>b). <input type='textarea' name='fake1' value='' placeholder='Fake Option 1' id='lname' required/>
      </p><p align='center'>c). <input type='textarea' name='fake2' value='' placeholder='Fake Option 2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='4' id='lname'/>
					<div class='form-group' align='center'>
					<button class='btn btn-primary'>Next Question</button>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
elseif ($Id =='4')
{
echo "<div id='form-content'><form method='post' id='reg-form' autocomplete='off'><p align='center'><input type='textarea' name='instructions' value='' placeholder='Enter Instruction' id='lname' required/></p><hr/>
            
<p align='center'><b>$_SESSION[counter].<input type='textarea' name='question' value='' placeholder='Enter Question' id='lname' required/></p><p align='center'>a). <input type='textarea' name='answer' value='' placeholder='Correct Option' id='lname' required/>
      </p><p align='center'>b). <input type='textarea' name='fake1' value='' placeholder='Fake Option 1' id='lname' required/>
      </p><p align='center'>c). <input type='textarea' name='fake2' value='' placeholder='Fake Option 2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='5' id='lname'/>
					<div class='form-group' align='center'>
					<button class='btn btn-primary'>Next Question</button>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
elseif ($Id =='5')
{
echo "<div id='form-content'><form method='post' id='reg-form' autocomplete='off'><p align='center'><input type='textarea' name='instructions' value='' placeholder='Enter Instruction' id='lname' required/></p><hr/>
            
<p align='center'><b>$_SESSION[counter].<input type='textarea' name='question' value='' placeholder='Enter Question' id='lname' required/></p><p align='center'>a). <input type='textarea' name='answer' value='' placeholder='Correct Option' id='lname' required/>
      </p><p align='center'>b). <input type='textarea' name='fake1' value='' placeholder='Fake Option 1' id='lname' required/>
      </p><p align='center'>c). <input type='textarea' name='fake2' value='' placeholder='Fake Option 2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='6' id='lname'/>
					<div class='form-group' align='center'>
					<button class='btn btn-primary'>Next Question</button>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
elseif ($Id =='6')
{

echo "<div id='form-content'><form method='post' id='reg-form' autocomplete='off'><p align='center'><input type='textarea' name='instructions' value='' placeholder='Enter Instruction' id='lname' required/></p><hr/>
            
<p align='center'><b>$_SESSION[counter].<input type='textarea' name='question' value='' placeholder='Enter Question' id='lname' required/></p><p align='center'>a). <input type='textarea' name='answer' value='' placeholder='Correct Option' id='lname' required/>
      </p><p align='center'>b). <input type='textarea' name='fake1' value='' placeholder='Fake Option 1' id='lname' required/>
      </p><p align='center'>c). <input type='textarea' name='fake2' value='' placeholder='Fake Option 2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='7' id='lname'/>
					<div class='form-group' align='center'>
					<button class='btn btn-primary'>Next Question</button>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
elseif ($Id =='7')
{
echo "<div id='form-content'><form method='post' id='reg-form' autocomplete='off'><p align='center'><input type='textarea' name='instructions' value='' placeholder='Enter Instruction' id='lname' required/></p><hr/>
            
<p align='center'><b>$_SESSION[counter].<input type='textarea' name='question' value='' placeholder='Enter Question' id='lname' required/></p><p align='center'>a). <input type='textarea' name='answer' value='' placeholder='Correct Option' id='lname' required/>
      </p><p align='center'>b). <input type='textarea' name='fake1' value='' placeholder='Fake Option 1' id='lname' required/>
      </p><p align='center'>c). <input type='textarea' name='fake2' value='' placeholder='Fake Option 2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='8' id='lname'/>
					<div class='form-group' align='center'>
					<button class='btn btn-primary'>Next Question</button>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
elseif ($Id =='8')
{
echo "<div id='form-content'><form method='post' id='reg-form' autocomplete='off'><p align='center'><input type='textarea' name='instructions' value='' placeholder='Enter Instruction' id='lname' required/></p><hr/>
            
<p align='center'><b>$_SESSION[counter].<input type='textarea' name='question' value='' placeholder='Enter Question' id='lname' required/></p><p align='center'>a). <input type='textarea' name='answer' value='' placeholder='Correct Option' id='lname' required/>
      </p><p align='center'>b). <input type='textarea' name='fake1' value='' placeholder='Fake Option 1' id='lname' required/>
      </p><p align='center'>c). <input type='textarea' name='fake2' value='' placeholder='Fake Option 2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='9' id='lname'/>
					<div class='form-group' align='center'>
					<button class='btn btn-primary'>Next Question</button>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
elseif ($Id =='9')
{
echo "<div id='form-content'><form method='post' id='reg-form' autocomplete='off'><p align='center'><input type='textarea' name='instructions' value='' placeholder='Enter Instruction' id='lname' required/></p><hr/>
            
<p align='center'><b>$_SESSION[counter].<input type='textarea' name='question' value='' placeholder='Enter Question' id='lname' required/></p><p align='center'>a). <input type='textarea' name='answer' value='' placeholder='Correct Option' id='lname' required/>
      </p><p align='center'>b). <input type='textarea' name='fake1' value='' placeholder='Fake Option 1' id='lname' required/>
      </p><p align='center'>c). <input type='textarea' name='fake2' value='' placeholder='Fake Option 2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='10' id='lname'/>
					<div class='form-group' align='center'>
					<button class='btn btn-primary'>Next Question</button>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
elseif ($Id =='10')
{
echo "<div id='form-content'><form method='post' id='reg-form' autocomplete='off'><p align='center'><input type='textarea' name='instructions' value='' placeholder='Enter Instruction' id='lname' required/></p><hr/>
            
<p align='center'><b>$_SESSION[counter].<input type='text' name='question' value='' placeholder='Enter Question' id='lname' required/></p><p align='center'>a). <input type='textarea' name='answer' value='' placeholder='Correct Option' id='lname' required/>
      </p><p align='center'>b). <input type='textarea' name='fake1' value='' placeholder='Fake Option 1' id='lname' required/>
      </p><p align='center'>c). <input type='textarea' name='fake2' value='' placeholder='Fake Option 2' id='lname' required/>
      </p><p align='right'><input type='hidden' name='Id' value='11' id='lname'/>
					<div class='form-group' align='center'>
					<button class='btn btn-primary'>Next Question</button>
				</div></form>
            
            </div>
				<p align='right'>Question $_SESSION[counter] of 10>>></p><br/> </p>";
}
elseif ($Id =='11')
{
@$answer11=$_COOKIE['answer11'];
echo "You have successfully submitted questions for $subject test week $weeks. ";
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


</script>