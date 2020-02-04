<?php
  $conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
  if(!$conn){die("연결 실패 : ".mysqli_connect_error());}
  session_start();
 ?>
