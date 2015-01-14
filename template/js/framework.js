/***

 * --- --- --- --- ---
 * JD Sports Fashion plc
 * Khaleel Mughal
 * --- --- --- --- ---
 * #HAWK
 * --- --- --- --- ---

***/

// START
// -- Load Program

	// VARS
	// -- For the system
	// -- use the #EDIT to modify anything else on this page
	var strInterval;
	var strRandom = 1 + Math.floor(Math.random() * 6);	
	var initWindowHeight = $( window ).height();
	var windowHeightLessHeader = (initWindowHeight - 113);
	var browserSize = [];
	var globalHawkHeight = $(window).height();
	var globalHawkWidth = $(window).width();
	var hawkWrapper = $('.rx');


$(document).ready(function ($) {
	
	// FUNCTION
	// -- Make last item of the nav bold (logout)
		var logoutlink = $('.navbar-nav li:last-child');
		$(logoutlink).css("font-weight", "bold");
		$('.navbar-nav li:last-child a').css("color", "#e64e2b");
		
	// DATE AND TIMES
	// -- Launch Calendar UI
		$(function(){$(".calendarLaunch").datepicker({changeMonth:true,dateFormat:'yy-mm-dd',changeYear:true,yearRange:'2013:2017'});});
		
	// ANIMATION
	// -- Fade in the main HAWK application window as desired
		$(hawkWrapper).fadeIn("slow");

	// END
	// -- EOF EOM - Terminate program
});