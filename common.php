<?php

/**
 * Defines website configuration and common structural functions.
 */


/** Configuration */
define(DEBUG, true);

if (DEBUG) {
	ini_set('display_errors', 'on');
}


/**
 * Prints start of page.
 * Include main CSS files to prevent FOUC (flash of unstyled content).
 */
function startPage() {
?>
	<!DOCTYPE html>
	<html>


	<head>
		<meta charset="utf-8">
		<title>Epic Vortex</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/slick.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>
<?php
}

/**
 * Prints website header.
 * Includes the main navigation for the page.
 */
function pageHeader() {
?>
	<header>
		<div class="limited-width cf">
			<a href="index.php" class="logo"><img src="img/logo.png"></a>
			<nav class="cf">
				<a href="team.php">Team</a>
				<a href="sueca.php">Apps</a>
			</nav>
		</div>
	</header>
<?php
}

/**
 * Prints website footer.
 * Includes auxiliary navigation / contacts.
 */
function pageFooter() {
?>

	<footer>
		<nav class="cf limited-width">
			<div class="sub-nav">
				<h2>Contact us</h2>
				<a href="mailto:contact@epicvortex.com"><i class="fa fa-envelope"></i>contact@epicvortex.com</a><br>
				<a href="#"><i class="fa fa-google-plus"></i>plus.google.com/epicvortex</a><br>
				<a href="#"><i class="fa fa-facebook"></i>facebook.com/epicvortex</a>
			</div>
			<div class="sub-nav">
				<h2>Software</h2>
				<a href="mailto:contact@epicvortex.com"><i class="fa fa-android"></i>Play Store</a><br>
				<a href="#"><i class="fa fa-apple"></i>App Store</a><br>
			</div>
		</nav>
	</footer>


<?php
}

/**
 * Prints end of page.
 * Includes all the javascript that can be included after the content.
 */
function endPage() {
?>

		<script src="js/jquery-1.11.2.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/script.js"></script>
	</body>

	</html>

<?php
}
?>
