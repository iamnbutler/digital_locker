// Load scripts after page loads
$(document).ready(function(){
	$('#sidebar-nav li').click(function(){
		$('#sidebar-nav li').removeClass('tier-one-selected');
		$(this).addClass('tier-one-selected');
		$('#sidebar-nav li ul li').hide();
		$(this).find('li').each(function(index) {
		    $(this).delay(400*index).fadeIn(200);
		});
		return false;
	});
});