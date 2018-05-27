<div id="example3" style="text-align:center; border:1px solid black; padding:10px;">
<p style="margin:0;"><b>Third example.</b></p>
<form id="form3" method="post" action="script.php">
Name: <input type="text" style="width:200px;"><br>
<input type="button" onclick="ReplaceForm()" value="Click Me" style="width:300px;">
</form>
</div>

<div id="myform" name="myform">
    Name : <input type="text" name="name" id="name"/>
    <br />
    Suffix : <input type="text" name="suffix" id="suffix"/>
    <br />
    <button id="Submit" type="button">thanks</button>
</div>

<div id="for_replacement" style="display:none;">
<p>
<b>This replaces the form when the button is clicked.</b>
<br>(This visual example does not submit. A real form would.)
</div>

<script type="text/javascript">
function ReplaceForm()
{
// Three places to customize:

// Specify the id of the form.
var IDofForm = "form3";

// Specify the id of the div containing the form.
var IDofDivWithForm = "example3";

// Specify the id of the div with the content to replace the form with.
var IDforReplacement = "for_replacement";

// End of customizations.

// This line submits the form. (If Ajax processed, call Ajax function, instead.)
document.getElementById(IDofForm).submit();

// This replaces the form with the replacement content.
document.getElementById(IDofDivWithForm).innerHTML = document.getElementById(IDforReplacement).innerHTML;
}
</script>
