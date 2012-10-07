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
		var bodyHeight = (winHeight - 90);
		$('#sidebar, #stage').height(bodyHeight);
		$('#sidebar').width(sidebarWidth);

		// Subtrack sidebar width from window width for stage width (subtract sidebar padding plus right border width)
		var stageWidth = (winWidth - sidebarWidth - 84);
		$('#stage').width(stageWidth);
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
			$('#sidebar').css('left', -220);
		}, 
		function(){
			$('#sidebar').css('left', 0);
		}
	);

	/* Navigation Links */

	$('#sidebar').find('li').click(function(){
		$('#sidebar').find('li').removeClass('selected');
		$(this).addClass('selected');
	
	});

	$('#s-course-int-2').click(function(){
		$('#st-welcome').fadeOut();
		$('#st-container').hide();
		$('#st-container').load('sites/2005_Interactivity_2/index.html .container');
		$('#st-container').fadeIn();
	});


});

// Run these scripts when the window is resized
$(window).resize(function() {

	// Reset all content that needs calculations when the window is resized
	setContent();
});