
$(function() {
$(".submit_button").click(function() {
var textcontent = $("#content").val();
var dataString = 'content='+ textcontent;
if(textcontent=='')
{
alert("");
$("#content").focus();
}
else
{
$("#flash").show();
$("#flash").fadeIn(400).html('<span class="load">Loading..</span>');
$.ajax({
type: "POST",
url: "action.php",
data: dataString,
cache: true,
success: function(html){
$("#show").after(html);
document.getElementById('content').value='';
$("#flash").hide();
$("#content").focus();
}  
});
}
return false;
});
});
