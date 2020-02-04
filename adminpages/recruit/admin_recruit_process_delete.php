<?php

require("../../setting/admin_info.php");
$conn=mysqli_connect($hostname,$username,$password,$DBname);
settype($_POST['rc_no'],'integer');
$filtered=array(
    'rc_no'=>mysqli_real_escape_string($conn,$_POST['rc_no'])
);


$sql="DELETE FROM RECRUIT
    WHERE rc_no={$filtered['rc_no']}
    ;";

$result=mysqli_query($conn,$sql);

if ($result===false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의하세요';
    error_log(mysqli_error($conn));
}else{
    header('Location:admin_recruit.php');
}

?>
