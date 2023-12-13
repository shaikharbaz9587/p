<?php
  $db_server="localhost";
  $db_username="root";
  $db_password="";
  $database="campuses";
  $con = mysqli_connect($db_server, $db_username, $db_password, $database);

  if(! $con){
    echo "Not successful";
  }
//   echo "Connection successful<br>";
?>