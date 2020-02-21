<?php
require("../setting/admin_info.php");
include("../setting/dbconn.php");
?>

<?php
$mb_id=trim($_POST['mb_id']);
$mb_password=trim($_POST['mb_password']);

if (!$mb_id || !$mb_password){
echo "<script> alert('회원 아이디나 비밀번호가 공백이면 안됩니다.');</script>";
echo "<script> location.replace('./login.php');</script>";
exit;
  }

$sql="SELECT * from younivmember where mb_id='$mb_id' and mb_password='$mb_password'";
$result=mysqli_query($conn, $sql);
$mb=mysqli_fetch_assoc($result);


if (!$mb['mb_id']||!$mb['mb_password']){
echo "<script> alert('가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n 비밀번호는 대소문자를 구분합니다.');</script>";
echo "<script> location.replace('./login.php');</script>";
exit;
  }


$_SESSION['ss_mb_id']=$mb_id;
mysqli_close($conn);

if(isset($_SESSION['ss_mb_id'])){
  echo "<script>alert('로그인되었습니다.');</script>";
  echo "<script>location.replace('../admin.php');</script>";
}

 ?>
