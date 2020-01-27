<?php 
  session_start();
  if($_SESSION['in'] == 1){
  }else{
    session_destroy();
		session_start();
    header( "Location: index.php" );
  }
?>
