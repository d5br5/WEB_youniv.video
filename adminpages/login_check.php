<?php
require("../setting/admin_info.php");
include("../setting/dbconn.php");
?>

<?php
$mb_id=trim($_POST['mb_id']);
$mb_password=trim($_POST['mb_password']);

if (!$mb_id || !$mb_password){
echo "<script> alert('No Blank Allowed');</script>";
echo "<script> location.replace('./login.php');</script>";
exit;
  }

$sql="SELECT * from younivmember where mb_id='$mb_id' and mb_password='$mb_password'";
$result=mysqli_query($conn, $sql);
$mb=mysqli_fetch_assoc($result);


if (!$mb['mb_id']||!$mb['mb_password']){
echo "<script> alert('ID or Password Error\\n caution : CAPS lock');</script>";
echo "<script> location.replace('./login.php');</script>";
exit;
  }


$_SESSION['ss_mb_id']=$mb_id;
mysqli_close($conn);

if(isset($_SESSION['ss_mb_id'])){
  echo "<script>alert('Login Successed.');</script>";
  echo "<script>location.replace('../admin.php');</script>";
}

 ?>
