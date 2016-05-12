<?php
	// $PHP_SELF = $_SERVER['PHP_SELF'];
	// $WEB_ROOT_DIR = substr($PHP_SELF, 0, strrpos($PHP_SELF, '/') + 1);

	define('WEB_ROOT_DIR', '/lenoux/');
	define('WEB_ROOT_FULL_DIR', $_SERVER['DOCUMENT_ROOT'] . WEB_ROOT_DIR);
	define('HEADER', 'header.php');
	define('FOOTER', 'footer.php');

	$header_file = WEB_ROOT_FULL_DIR . HEADER;
	$footer_file = WEB_ROOT_FULL_DIR . FOOTER;
?>
