Digital Locker
================================

##Disclaimer

This project is not yet offically affiliated to the York Department of Design. Any copy, code or concepts do not reflect the views or opinions of the department. All images and code is concept and temporary

**Readme Under Construction**

##Services

###Avatars

Avatars will be handled with Gravatar. Using the email address supplied by the users ExpressionEngine/Digital Locker account, Gravatar will attempt to match the email to an existing avatar. If no avatar exists, users can upload one on the Gravatar website. 

*Implementation:*

Call the Gravatar

	<?php 
		$email = "your@email.com"; /* Pulled from EE database*/
		$default = "http://www.somewhere.com/default.jpg"; /* Default fallback avatar */
		$size = 50; /* Avatar size */

		$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
	?>

Add image to element as a background image using css

	<div id="avatar" style="background-image: url(<?php echo $grav_url; ?>);"></div>

or directly to an image tag
	
	<img src="<?php echo $grav_url; ?>" alt="" />
