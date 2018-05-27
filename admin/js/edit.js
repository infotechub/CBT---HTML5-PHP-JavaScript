$("#edit_profile_link").hide();
var status = $("#status");
$("span[contenteditable]").blur(function(){ 
var field = $(this).attr("id");
var value = $(this).text();
var resourceURL = $(this).closest("ul").attr("postme.php");
$.ajax({
url: resourceURL,
dataType: "json",
method: "PUT",
data: field + "=" + value,
success: function(data){
	status.html("The record was saved.");
},
error: function(data) {
	status.html("The record failed to save.");
}
});
});
