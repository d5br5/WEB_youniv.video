<?php

require("../../setting/admin_info.php");
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
settype($_POST['rc_no'],'integer');
$filtered=array(
  'rc_title'=>mysqli_real_escape_string($conn,$_POST['rc_title']),
  'rc_group'=>mysqli_real_escape_string($conn, $_POST['rc_group']),
  'rc_form'=>mysqli_real_escape_string($conn, $_POST['rc_form']),
  'rc_career'=>mysqli_real_escape_string($conn, $_POST['rc_career']),
  'rc_deadline'=>mysqli_real_escape_string($conn, $_POST['rc_deadline']),
  'rc_text'=>mysqli_real_escape_string($conn, $_POST['rc_text'])
    );

$sql="UPDATE recruit
    SET
    rc_title='{$filtered['rc_title']}',
    rc_group='{$filtered['rc_group']}',
    rc_form='{$filtered['rc_form']}',
    rc_career='{$filtered['rc_career']}',
    rc_deadline='{$filtered['rc_deadline']}',
    rc_text='{$filtered['rc_text']}'
    WHERE rc_no={$_POST['rc_no']}
    ;";

$result=mysqli_query($conn,$sql);



if ($result===false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의하세요';
    error_log(mysqli_error($conn));
}else{header('Location:admin_recruit.php');}

?>
