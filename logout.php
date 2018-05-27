<?php 
if (empty ($_COOKIE['pincode'])) 
 {
 header ("Location: index.php");
 }
 if (empty ($_COOKIE['firstname'])) 
 {
 header ("Location: index.php");
 }
 if (empty ($_COOKIE['lastname'])) 
 {
	 header ("Location: index.php");
	 }
else

@$pincode=$_COOKIE['pincode'];
@$firstname=$_COOKIE['firstname'];
@$lastname=$_COOKIE['lastname'];
setcookie("pincode", "$pincode", time()-1200);
setcookie("firstname", "$firstname", time()-1200);
setcookie("lastname", "$lastname", time()-1200);
header ("Location: index2.php");
exit();
?>