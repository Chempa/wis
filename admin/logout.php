<?php
	include 'sess.php';
	$SESSION['in'] = 0;
	session_destroy();
	header( "Location: index.php" );
?>
