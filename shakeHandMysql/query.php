<?php
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = 'mysql';
  $dbname = "mydb";
  $conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(! $conn ) die('Could not connect: ' . mysql_error());
// choose db  
  mysql_select_db($dbname, $conn);


// sql
  $querySQL = "SELECT * FROM goods"; 

//query  
  $result = mysql_query($querySQL);

  while ($row    = mysql_fetch_array($result) ) {
    echo($row);
    echo('</br>');
  }

 

  mysql_close($conn);
?>