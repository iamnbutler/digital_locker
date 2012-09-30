// Initialize sitewide variables
	var docWidth = $(document).width();
	var docHeight = $(document).height();

	var winWidth = $(window).width();
	var winHeight = $(window).height();

	var sidebarWidth = 220;

	function setContent() {

		var docWidth = $(document).width();
		var docHeight = $(document).height();

		var winWidth = $(window).width();
		var winHeight = $(window).height();

		// Subtrack header height from window height to get the left column and stage height
		var bodyHeight = (winHeight - 190);
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

});

// Run these scripts when the window is resized
$(window).resize(function() {

	// Reset all content that needs calculations when the window is resized
	setContent();
});