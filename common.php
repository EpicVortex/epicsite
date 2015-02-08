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
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
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
			<a href="index.php"><img class="logo" src="img/logo.png"></a>
			<nav class="cf">
				<a href="sueca.php">Products</a>
				<a href="team.php">Team</a>
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
