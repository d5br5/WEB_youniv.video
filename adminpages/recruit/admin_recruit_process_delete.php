<?php

require("../../setting/admin_info.php");
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_db);
settype($_POST['rc_no'],'integer');
$filtered=array(
    'rc_no'=>mysqli_real_escape_string($conn,$_POST['rc_no'])
);


$sql="DELETE FROM recruit WHERE rc_no={$filtered['rc_no']};";

$result=mysqli_query($conn,$sql);

if ($result===false){


    echo 'error happened!';
    error_log(mysqli_error($conn));

}else{
    header('Location:admin_recruit.php');
}

?>
