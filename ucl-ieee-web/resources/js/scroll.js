$(document).ready(function(){
	$("#showmore").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#products").offset().top
	    }, 500);
	});
	$(".to-contact").click(function() {
	    $('html, body').animate({
	        scrollTop: $("#email").offset().top
	    }, 500);
	});
});
