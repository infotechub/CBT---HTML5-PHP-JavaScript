
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

     