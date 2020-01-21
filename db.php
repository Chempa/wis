<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("remotemysql.com","bpHAAOc8yY","x2WSfy2o80","bpHAAOc8yY");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	// echo "Connected";
  }
?>
