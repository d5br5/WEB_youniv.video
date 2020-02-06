<?php

require("../../setting/admin_info.php");
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);

$filtered=array(
  'rc_title'=>mysqli_real_escape_string($conn,$_POST['rc_title']),
  'rc_group'=>mysqli_real_escape_string($conn, $_POST['rc_group']),
  'rc_form'=>mysqli_real_escape_string($conn, $_POST['rc_form']),
  'rc_career'=>mysqli_real_escape_string($conn, $_POST['rc_career']),
  'rc_deadline'=>mysqli_real_escape_string($conn, $_POST['rc_deadline']),
  'rc_text'=>mysqli_real_escape_string($conn, $_POST['rc_text']));


$sql="INSERT INTO recruit(rc_title, rc_group, rc_form, rc_career, rc_deadline, rc_text)
    VALUES('{$filtered['rc_title']}','{$filtered['rc_group']}','{$filtered['rc_form']}','{$filtered['rc_career']}','{$filtered['rc_deadline']}','{$filtered['rc_text']}');";

$result=mysqli_query($conn,$sql);

if ($result===false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의하세요';
    error_log(mysqli_error($conn));
}else{
   header('Location:admin_recruit.php');
}

?>
