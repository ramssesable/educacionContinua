


//This function is called automatically upon page load
$(document).ready(function() 
{	
	$("#background_popup").click(function()
	{
		$("#popup").hide(); //Hides the sign-up box when clicked outside the form
		$("#background_popup").fadeOut("slow");
	});
});

//This function displays the sign-up box when called
function show_popup()
{
	$("#background_popup").css({
		"opacity": "0.4"
	});
	$("#background_popup").fadeIn("slow");
	$("#popup").fadeIn('fast');
	window.scroll(0,0);
}


//This function hides both the Sign-up Box and Login Box when called
function hide_popup()
{
	$("#popup").hide(); //Hides the sign-up box when clicked outside the form
	$("#background_popup").fadeOut("slow");
}
