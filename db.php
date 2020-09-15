<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("us-cdbr-east-02.cleardb.com","b74e6332d94183","68b26b83","heroku_85db63f8e1343dc");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  	// echo "Connected";
  }
?>
