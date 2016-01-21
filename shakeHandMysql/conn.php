<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'mysql';
  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  if(! $conn )
  {
    die('Could not connect: ' . mysql_error());
  }
  echo 'Connected successfully';
  mysql_close($conn);
?>