<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Digital Locker</title>

		<meta charset="UTF-8">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<meta name="description" content="description">
		<meta name="keywords" content="keywords">
		<meta name="author" content="name">
		<meta name="copyright" content="&copy; 2012">

		<link rel="icon" type="image/png" href="">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<header id="dl-header">
			<ul id="h-left">
				<li id="h-logo">
					<a href="/"><h1>Digital Locker</h1></a>
				</li>
				
			</ul>
			<ul id="h-right">
				<li id="h-user">
					<ul id="h-user-text">
						<li id="h-name" class="user-link">Nathan B</li>
						<li id="h-logout">logout</li>
					</ul>

					<?php
						$email = "iamnbutler@gmail.com";
						$default = "http://www.somewhere.com/homestar.jpg";
						$size = 50;

						$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
					?>

					<div id="h-avatar" class="user-link" style="background-image: url(<?php echo $grav_url; ?>);"></div>
				</li>
				<li id="h-notification" class="h-nav">
					<div id="h-n-value"></div>
				</li>
				<li id="h-search-icon"></li>
				<li id="h-option" class="h-nav"></li>
			</ul>
		</header>

		<section id="dl-sidebar">
			<div id="s-inner-wrapper">
				<ul class="s-primary-nav">
					<li class="top-tier selected" id="s-primary-home">Home</li>
					<li class="top-tier" id="s-primary-courses">Courses</li>
					<li class="top-tier">Resources</li>
					<li class="top-tier">Equipment</li>
					<li class="top-tier">Archive</li>
				</ul>

				<ul class="s-course-nav">
					<li class="top-tier nav-title theme-text">My Courses</li>
					<li class="top-tier">Typography 2</li>
					<li class="top-tier">Communication Design</li>
					<li class="top-tier" id="s-course-int-2">Interactivity 2</li>
					<li class="top-tier">History of Design</li>
				</ul>

				<ul class="s-custom-nav">
					<li class="top-tier nav-title theme-text">Custom Links</li>
					<li class="top-tier">Interactivity 1</li>
					<li class="top-tier">Design Gallery</li>
				</ul>

				<ul class="s-external-nav">
					<li class="top-tier nav-title theme-text">External Links</li>
					<li class="top-tier"><a href="http://design.yorku.ca">YSDN Homepage</a></li>
					<li class="top-tier"><a href="http://design.yorku.ca/gallery">YSDN Gallery</a></li>
				</ul>
			</div>
			<div id="s-spine"></div>
		</section>

		<section id="dl-stage">
			<div id="st-welcome" class="st-item">
				<h2>Welcome to the Digital Locker front-end concept!</h2>
				<p>Take a look around and see what you think! Remember this is a very early stage of development, so many things are non-functional or even temporary.</p>
				<p>Disclaimer: This project is not yet offically affiliated to the York Department of Design. Any copy, code or concepts do not reflect the views or opinions of the department. All images and code is concept and temporary</p>
				<p>Let me know what you think of the concept so far!</p>
				<p>You can email me <a href="mail-to:iamnbutler@gmail.com">here</a>.</p>
			</div>
			<div id="st-container"></div>
		</section>

		<noscript>

		<div id="no-script-wrapper">
			<div id="no-script">
				<h2>Sorry! This site absolutely requires scripts to run.</h2>
				<p>Please turn scripts on in your browser to use this site. If you need assistance to do this, check out <a href="http://www.enable-javascript.com/">this</a> link. We promise there is no malicious scripts on this site!</p>
			</div>
		</div>

		</noscript>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
		<script src="js/jquery-ui-1.8.24.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>