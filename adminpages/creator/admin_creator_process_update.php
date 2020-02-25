<?php

require("../../setting/admin_info.php");
require("./admin_creator_fileupload.php");

$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
settype($_POST['crt_no'],'integer');
$filtered=array(
  'crt_name'=>mysqli_real_escape_string($conn,$_POST['crt_name']),
  'crt_intro'=>mysqli_real_escape_string($conn, $_POST['crt_intro']),
  'crt_area'=>mysqli_real_escape_string($conn, $_POST['crt_area']),
  'crt_link'=>mysqli_real_escape_string($conn, $_POST['crt_link']),
  'crt_num'=>mysqli_real_escape_string($conn, $_POST['crt_num']),
  'crt_directory'=>mysqli_real_escape_string($conn, $uploads_dir),
  'crt_imagename'=>mysqli_real_escape_string($conn, $name)
    );

$sql="UPDATE creator
    SET
    crt_name='{$filtered['crt_name']}',
    crt_intro='{$filtered['crt_intro']}',
    crt_area='{$filtered['crt_area']}',
    crt_link='{$filtered['crt_link']}',
    crt_num='{$filtered['crt_num']}',
    crt_directory='{$filtered['crt_directory']}',
    crt_imagename='{$filtered['crt_imagename']}'
    WHERE crt_no={$_POST['crt_no']}
    ;";

$result=mysqli_query($conn,$sql);



if ($result===false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의하세요';
    error_log(mysqli_error($conn));
}else{header('Location:admin_creator.php');}

?>
