// Initialize sitewide variables
	var docWidth = $(document).width();
	var docHeight = $(document).height();

	var winWidth = $(window).width();
	var winHeight = $(window).height();

	var sidebarWidth = 228;

	function setContent() {

		var docWidth = $(document).width();
		var docHeight = $(document).height();

		var winWidth = $(window).width();
		var winHeight = $(window).height();

		// Subtrack header height from window height to get the left column and stage height
		var bodyHeight = (winHeight - 50);
		$('#dl-sidebar, #dl-stage').height(bodyHeight);
		$('#dl-sidebar').width(sidebarWidth);
	};

// Load scripts immediately
// Only put scripts that must load immediatly in this section for speed reasons

$(window).load(function() {

	// Initally set all content that requires calculations
	setContent();
});

// Load scripts that come after page loads
$(document).ready(function(){

	/***
	*
	*  Header
	*
	***/

	// Focus search bar when clicking search icon
	$('#h-search-icon').click(function(){
		$('#h-search input').animate({backgroundColor: '#E5E5E5'}, 100).animate({backgroundColor: '#EFEFEF'}, 800);
	});

	// Show sub-nav on nav icon click
	$('.h-nav').click(function(){
		$(this).children('ul').toggle();
	});

	/***
	*
	*  Sidebar
	*
	***/

	$('#s-spine').toggle(
		function() {
			$('#dl-sidebar').css('left', -220);
		}, 
		function(){
			$('#dl-sidebar').css('left', 0);
		}
	);

	/* Navigation Links */

	$('#dl-sidebar').find('li').click(function(){
		$('#dl-sidebar').find('li').removeClass('selected');
		$(this).addClass('selected');
	
	});

	$('#s-primary-home').click(function(){
		$('#st-container').fadeOut();
		$('#st-welcome').fadeIn();
	});

	$('#s-course-int-2').click(function(){
		$('#st-welcome').fadeOut();
		$('#st-container').hide();
		$('#st-container').load('sites/2005_Interactivity_2/index.html');
		$('#st-container').fadeIn();
	});


});

// Run these scripts when the window is resized
$(window).resize(function() {

	// Reset all content that needs calculations when the window is resized
	setContent();
});