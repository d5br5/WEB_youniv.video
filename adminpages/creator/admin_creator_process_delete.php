<?php

require("../../setting/admin_info.php");
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
settype($_POST['crt_no'],'integer');
$filtered=array(
    'crt_no'=>mysqli_real_escape_string($conn,$_POST['crt_no'])
);


$sql="DELETE FROM creator
    WHERE crt_no={$filtered['crt_no']}
    ;";

$result=mysqli_query($conn,$sql);

if ($result===false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의하세요';
    error_log(mysqli_error($conn));
}else{
    header('Location:admin_creator.php');
}

?>
