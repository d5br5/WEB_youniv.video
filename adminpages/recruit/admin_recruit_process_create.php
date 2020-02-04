<?php

require("../../setting/admin_info.php");
$conn=mysqli_connect($hostname,$username,$password,$DBname);

$filtered=array(
  'rc_title'=>mysqli_real_escape_string($conn,$_POST['rc_title']),
  'rc_group'=>mysqli_real_escape_string($conn, $_POST['rc_group']));

$sql="INSERT INTO recruit(rc_title, rc_group)
    VALUES('{$filtered['rc_title']}','{$filtered['rc_group']}');";

$result=mysqli_query($conn,$sql);

if ($result===false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의하세요';
    error_log(mysqli_error($conn));
}else{
   header('Location:admin_recruit.php');
}

?>
