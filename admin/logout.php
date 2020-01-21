<?php
	include 'sess.php';
	$SESSION['LGI'] = 0;
	session_destroy();
	header( "Location: index.php" );
?>