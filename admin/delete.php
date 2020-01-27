<?php
    include '../db.php';
    include '../user.php';
    $u = new User();
    $id = $_GET["user"];
    $ret = $u->delete($con,$id);
    header( "Location: page.php?q=0" );

?>
