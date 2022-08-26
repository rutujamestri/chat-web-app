<?php
  $mysql_hostname = "localhost";
  $mysql_username = "root";
  $mysql_password = "";
  $mysql_dbname = "chatting";

  $conn = new mysqli('localhost', 'root', '', 'chatting');
  if($conn){
    echo " ".mysqli_connect_error();
  }
?>
