<?php

session_start();
@$username=$_SESSION['username'];
@$product_code=$_SESSION['product_code'];

include ("debase.php");

$ip=$_SERVER['REMOTE_ADDR'];
$sql="SELECT * FROM visitors WHERE ip='$ip'";
$r=mysql_query($sql) or die ('Error, query failed3');
//Mysql_num_row is counting table row
$n=mysql_num_rows($r);
if ($n>0);
{
$sql="DELETE FROM visitors WHERE ip='$ip'";
$result=mysql_query($sql);
if($result);
} 

// username and password sent from form
$ip=$_SERVER['REMOTE_ADDR'];
$page='register';
$checkforbanned="SELECT ip from ipbans where ip='$ip'";
$checkforbanned2=mysql_query($checkforbanned) or die ("Could not check for banned IPS");
if (mysql_num_rows ($checkforbanned2)>0)
//IP is in the banned list
{
Print "I can't grant you access because your IP has been blacklisted";
exit();
}
else
{
$page='register';
$thedate=date("u");//grab date and time of post
$Insertmessage="INSERT into visitors (ip, page) values ('$ip', '$page')";
mysql_query($Insertmessage) or die ("Could not Insert IP");

}
 ?><!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/joziwebs/css/style.css">
  <link rel="stylesheet" href="assets/joziwebs-gallery/style.css">
  <link rel="stylesheet" href="assets/joziwebs-slider/style.css">
  <link rel="stylesheet" href="assets/joziwebs/css/mbr-additional.css" type="text/css">
  
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="style/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
<SCRIPT type="text/javascript">
<!--


pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

if(usr.length >= 4)
{
$("#status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');

    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "username="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#username").removeClass('object_error'); // if necessary
		$("#username").addClass("object_ok");
		$(this).html('<font color="green">Congrats, the username is available!<img src="tick.gif" align="absmiddle">');
	}  
	else  
	{  
		$("#username").removeClass('object_ok'); // if necessary
		$("#username").addClass("object_error");
		$(this).html(msg);
	}  
   
   });

 } 
   
  }); 

}
else
	{
	$("#status").html('The username should have at least <strong>4</strong> characters.');
	$("#username").removeClass('object_ok'); // if necessary
	$("#username").addClass("object_error");
	}

});

});

//-->
</SCRIPT>
<script language="javascript">
$(document).ready(function()
{
	$("#login_form").submit(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgbox").removeClass().addClass('messagebox').text('Validating....').fadeIn(1000);
		//check if the username exists or not from ajax
		$.post("securelogin.php",{ username:$('#username').val(),password:$('#password').val(),rand:Math.random() } ,function(data)
        {
		  if(data=='yes') //if correct login detail
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Logging in.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
			  	 //redirect to secure page
				 document.location='etest.php';
			  });
			  
			});
		  }
		  else 
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Your login detail is incorrect...').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
				
        });
 		return false; //not to post the  form physically
	});
	//now call the ajax also focus move from 
	$("#password").blur(function()
	{
		$("#login_form").trigger('submit');
	});
});
</script>
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
  <style type="text/css">
<!--
.style1 {
	color: #000000;
	font-size: 12px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
-->
  </style>
</head>
<body>
<section class="engine"><a rel="nofollow" href="http://jozionline.com">Responsive Website Templates</a></section>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <div align="left">
                      <h3><a class="mbr-brand__name" href="http://jozionline.com">
                        <span class="mbr-brand__logo"><img src="assets/images/fav68x74-139.jpg" alt="" align="left" class="mbr-navbar__brand-img mbr-brand__img"></span><span class="mbr-brand__name style1">Royal-Rainbow High School</span> </a> </h3>                                     ...excellence in all things                    </div>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"> 
                          <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="#">HOME</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="elibrary.php">E-LIBRARY</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="eclass.php">E-CLASS</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="register.php">REGISTER</a></li> <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="examiner.php">EXAMINER LOGIN</a></li><li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-primary" href="support.php">CONTACT</a></li></ul></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<div class='benefts'>
<section class="mbr-section" id="header3-3">
    <div class="mbr-section__container container mbr-section__container--first">
        
    </div>
</section>


</div><div class='benefts'><div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center"></h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								 <h5 class="mbr-header__text" align='center'><br/><br/>TO REGISTER , FILL THE FORM BELOW</h5><h3></h3>
                <p class="mbr-header__subtext" align='center'><span class="style4">If you  already have your pin code, click <a href="index.php">here</a> to log in </span></p>
					</div></div><!--/recommended_items-->
<div class='benefts'>
<section class="content-2 col-3" id="features1-6" style="background-color: rgb(255, 255, 255);">
    <form action="flatfile.php" method="post" name="form2" id="form2" onSubmit="MM_validateForm('firstname','','R','lastname','','R','address1','','R','city','','R','state','','R','username','','R');return document.MM_returnValue">
         <p align="center">Fill the form below with up-to-date Information to Sign Up:</p>
         <p align="center"> <label> 
          <input name="firstname" type="text" id="firstname" value="" placeholder ='First Name' size="34" maxlength="20" />
          </label>
                <label>
                <input name="lastname" type="text" id="lastname" value="" placeholder ='Last Name' size="34" maxlength="20" />
          </label></p>
         <p align="center" class="style30">First and Last Names must contain only Alphabets(no number or symbol) </p>
                <p align="center">
                  <label>
                  <input name="address1" type="text" id="address1" value="" placeholder ='Your Address' size="34" maxlength="20" />  
                  </label>
                  <label>
                  <input name="address2" type="text" id="address2" value=""  placeholder ='Address Continues'size="34" maxlength="20" />
                  </label>
          </p>
                <p align="center">
                  <label>
                  <input name="city" type="text" id="city" value="" placeholder ='city' size="34" />
                  </label>
                  <label></label>
                  <label>
                  <input name="zip" type="text" id="zip" value=""  placeholder ='Postal Code' size="34" maxlength="20" />
                  </label>
                </p><p align="center"> <label>
                <input name="state" type="text" id="state" value="" placeholder ='state' size="30" />
                </label>
                <label>
                <select name="country" id="country">
                    <option value="244">Angola</option>
                    <option value="61">Australia</option>
                    <option value="32">Belgi&euml;</option>
                    <option value="86">China</option>
                    <option value="49">Deutschland</option>
                    <option value="34">Espa&ntilde;a</option>
                    <option value="33">France</option>
                    <option value="91">India</option>
                    <option value="62">Indonesia</option>
                    <option value="972">Israel</option>
                    <option value="39">Italia</option>
                    <option value="81">Japan</option>
                    <option value="352">Luxemburg</option>
                    <option value="31">Nederland</option>
                    <option value="234">Nigeria</option>
                    <option value="43">&Ouml;sterreich</option>
                    <option value="63">Philippines</option>
                    <option value="351">Portugal</option>
                    <option value="27">South Africa</option>
                    <option value="41">Switzerland</option>
                    <option value="90">T&uuml;rkiye</option>
                    <option value="44">United Kingdom</option>
                    <option value="1">USA / Canada</option>
                    <option value="">---</option>
                    <option value="93">Afghanistan</option>
                    <option value="355">Albania</option>
                    <option value="213">Algeria</option>
                    <option value="244">Angola</option>
                    <option value="1268">Antigua and Barbuda</option>
                    <option value="54">Argentina</option>
                    <option value="374">Armenia</option>
                    <option value="297">Aruba</option>
                    <option value="61">Australia</option>
                    <option value="994">Azerbaijan</option>
                    <option value="1242">Bahamas</option>
                    <option value="973">Bahrain</option>
                    <option value="880">Bangladesh</option>
                    <option value="1246">Barbados</option>
                    <option value="375">Belarus</option>
                    <option value="32">Belgi&euml;</option>
                    <option value="501">Belize</option>
                    <option value="229">Benin</option>
                    <option value="975">Bhutan</option>
                    <option value="591">Bolivia</option>
                    <option value="387">Bosnia and Herzegovina</option>
                    <option value="267">Botswana</option>
                    <option value="55">Brazil</option>
                    <option value="673">Brunei</option>
                    <option value="359">Bulgaria</option>
                    <option value="226">Burkina Faso</option>
                    <option value="257">Burundi</option>
                    <option value="855">Cambodia</option>
                    <option value="237">Cameroon</option>
                    <option value="238">Cape Verde</option>
                    <option value="56">Chile</option>
                    <option value="86">China</option>
                    <option value="57">Colombia</option>
                    <option value="269">Comoros</option>
                    <option value="242">Congo</option>
                    <option value="506">Costa Rica</option>
                    <option value="385">Croatia</option>
                    <option value="53">Cuba</option>
                    <option value="357">Cyprus</option>
                    <option value="420">Czech Republic</option>
                    <option value="243">Democratic Republic of Congo</option>
                    <option value="45">Denmark</option>
                    <option value="49">Deutschland</option>
                    <option value="253">Djibouti</option>
                    <option value="1767">Dominica</option>
                    <option value="1809">Dominican Republic</option>
                    <option value="670">East Timor</option>
                    <option value="593">Ecuador</option>
                    <option value="20">Egypt</option>
                    <option value="503">El Salvador</option>
                    <option value="240">Equatorial Guinea</option>
                    <option value="291">Eritrea</option>
                    <option value="34">Espa&ntilde;a</option>
                    <option value="372">Estonia</option>
                    <option value="251">Ethiopia</option>
                    <option value="679">Fiji</option>
                    <option value="358">Finland</option>
                    <option value="33">France</option>
                    <option value="220">Gambia</option>
                    <option value="995">Georgia</option>
                    <option value="233">Ghana</option>
                    <option value="350">Gibraltar</option>
                    <option value="30">Greece</option>
                    <option value="1473">Grenada</option>
                    <option value="502">Guatemala</option>
                    <option value="224">Guinea</option>
                    <option value="245">Guinea-Bissau</option>
                    <option value="592">Guyana</option>
                    <option value="504">Honduras</option>
                    <option value="852">Hong Kong</option>
                    <option value="36">Hungary</option>
                    <option value="354">Iceland</option>
                    <option value="91">India</option>
                    <option value="62">Indonesia</option>
                    <option value="98">Iran</option>
                    <option value="964">Iraq</option>
                    <option value="353">Ireland</option>
                    <option value="972">Israel</option>
                    <option value="39">Italia</option>
                    <option value="225">Ivory Coast</option>
                    <option value="1876">Jamaica</option>
                    <option value="81">Japan</option>
                    <option value="962">Jordan</option>
                    <option value="254">Kenya</option>
                    <option value="381">Kosovo</option>
                    <option value="965">Kuwait</option>
                    <option value="996">Kyrgyzstan</option>
                    <option value="856">Laos</option>
                    <option value="262">La R&eacute;union</option>
                    <option value="371">Latvia</option>
                    <option value="961">Lebanon</option>
                    <option value="266">Lesotho</option>
                    <option value="218">Libya</option>
                    <option value="423">Liechtenstein</option>
                    <option value="370">Lithuania</option>
                    <option value="352">Luxemburg</option>
                    <option value="853">Macau</option>
                    <option value="389">Macedonia</option>
                    <option value="261">Madagascar</option>
                    <option value="265">Malawi</option>
                    <option value="60">Malaysia</option>
                    <option value="960">Maldives</option>
                    <option value="223">Mali</option>
                    <option value="356">Malta</option>
                    <option value="596">Martinique</option>
                    <option value="222">Mauritania</option>
                    <option value="230">Mauritius</option>
                    <option value="52">Mexico</option>
                    <option value="373">Moldova</option>
                    <option value="377">Monaco</option>
                    <option value="976">Mongolia</option>
                    <option value="382">Montenegro</option>
                    <option value="212">Morocco</option>
                    <option value="258">Mozambique</option>
                    <option value="95">Myanmar</option>
                    <option value="264">Namibia</option>
                    <option value="674">Nauru</option>
                    <option value="31">Nederland</option>
                    <option value="977">Nepal</option>
                    <option value="599">Netherlands Antilles</option>
                    <option value="64">New Zealand</option>
                    <option value="505">Nicaragua</option>
                    <option value="234">Nigeria</option>
                    <option value="47">Norway</option>
                    <option value="968">Oman</option>
                    <option value="43">&Ouml;sterreich</option>
                    <option value="000">Others</option>
                    <option value="92">Pakistan</option>
                    <option value="970">Palestina</option>
                    <option value="507">Panama</option>
                    <option value="675">Papua New Guinea</option>
                    <option value="595">Paraguay</option>
                    <option value="51">Peru</option>
                    <option value="63">Philippines</option>
                    <option value="48">Poland</option>
                    <option value="351">Portugal</option>
                    <option value="1787">Puerto Rico</option>
                    <option value="974">Qatar</option>
                    <option value="389">Republic of Macedonia</option>
                    <option value="40">Romania</option>
                    <option value="7">Russia / Kazakhstan</option>
                    <option value="250">Rwanda</option>
                    <option value="685">Samoa</option>
                    <option value="378">San Marino</option>
                    <option value="239">Sao Tome and Principe</option>
                    <option value="966">Saudi Arabia</option>
                    <option value="221">Senegal</option>
                    <option value="381">Serbia</option>
                    <option value="248">Seychelles</option>
                    <option value="232">Sierra Leone</option>
                    <option value="65">Singapore</option>
                    <option value="421">Slovakia</option>
                    <option value="386">Slovenia</option>
                    <option value="27">South Africa</option>
                    <option value="82">South Korea</option>
                    <option value="94">Sri Lanka</option>
                    <option value="249">Sudan</option>
                    <option value="597">Suriname</option>
                    <option value="268">Swaziland</option>
                    <option value="46">Sweden</option>
                    <option value="41">Switzerland</option>
                    <option value="963">Syria</option>
                    <option value="886">Taiwan</option>
                    <option value="992">Tajikistan</option>
                    <option value="255">Tanzania</option>
                    <option value="66">Thailand</option>
                    <option value="228">Togo</option>
                    <option value="1868">Trinidad and Tobago</option>
                    <option value="216">Tunisia</option>
                    <option value="90">T&uuml;rkiye</option>
                    <option value="256">Uganda</option>
                    <option value="380">Ukraine</option>
                    <option value="971">United Arab Emirates</option>
                    <option value="44">United Kingdom</option>
                    <option value="598">Uruguay</option>
                    <option value="1">USA / Canada</option>
                    <option value="998">Uzbekistan</option>
                    <option value="678">Vanuatu</option>
                    <option value="58">Venezuela</option>
                    <option value="84">Vietnam</option>
                    <option value="967">Yemen</option>
                    <option value="260">Zambia</option>
                    <option value="263">Zimbabwe</option>
                </select>
                </label></p>
                <p align="center">
                  <label>
                  <input name="phoneno" type="text" id="phoneno" value="" placeholder ='phone number' size="34" maxlength="20" />  
                  </label>
                  <label>
                  <input name="mobileno" type="text" id="mobileno" value=""  placeholder ='Mobile Number' size="34" maxlength="20" />
                  </label>
          </p>
                <p align="center" class="style30">Phone and Mobile Numbers must contain only Numbers(no letter or symbol) </p>
                <p align="center">
                  <label>
                  <input name="email" type="text" id="email" value="" placeholder ='Email Address' size="34" />
                  </label>
                  <label></label>
                  <label>
                  <input name="email2" type="text" id="email2" value="" placeholder ='Re-type E-mail' size="34" />
                  </label>
                </p><p align="center">
                  <label>
                  <input name="username" type="text" id="username" value="" placeholder ='username' size="34" />
                  <div id='status'></div></label><label>
                  <input name="password" type="password" id="password" value="" placeholder ='password' size="34" />
                  </label>
                 
                  <select name='class'>
            <option> J.S 1</option>
            <option> J.S 2</option>
            <option> J.S 3</option>
            <option> S.S 1</option>
            <option> S.S 2</option>
            <option> S.S 3</option>
          </select>
                </p><p align="center">
                  <label>
                  <input name="terms" type="checkbox" id="terms" value="yes" />
                  I accept the <a href="#">Terms and Condition</a> </label>
                  <label></label>
                  <label></label>
                </p>
                
                 <p align="center"> <label><BR />
                 <BR />
                  <input type="submit" name="Submit" style="font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20" value="Submit" />
                  </label>
                  <label>
                  <input type="reset" name="reset" style="font-size: 10pt; font-family: arial; font-weight: bold; color: #ffffff; background-color : #0000ff; border-color: #bbbbff; width: 20" value="Reset" />
                  </label>
                </p>
      </form>
    
</section></div>



<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts2-9" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row">
            <div class="col-sm-6">
                <figure class="mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg">
                    <div class="mbr-figure__map mbr-figure__map--short mbr-google-map">
                        <p class="mbr-google-map__marker" data-coordinates="40.748384,-73.9854792"></p>
                    </div>
                </figure>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                        <p class="mbr-contacts__text"><strong>CONTACT ADDRESS</strong><br>Royal-Rainbow High School

<br/>15/16 Agbolade Street, <br/>Cele Bus Stop or Hostel Bus Stop,
<br/>Agodo-Egbe, Lagos State<br/>Nigeria                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-10" style="background-color: rgb(0, 0, 0);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p><script language="JavaScript">
<!--
function y2k(number) { return (number < 1000) ? number + 1900 : number; }
var today = new Date();
var year = y2k(today.getYear());
document.write('Copyright © '+year+' Royal Rainbow High School - All Rights Reserved');
//--></script>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Powered by <a href='http://www.jozionline.com'>Jozi Website Templates</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href="faq.php" target="_blank">FAQ</a></p>
            </div>
        </div>
    </div>
</section>
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="assets/jquery-parallax/jquery.parallax.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/joziwebs/js/script.js"></script>
  <script src="assets/joziwebs-gallery/script.js"></script>
</body>
</html>