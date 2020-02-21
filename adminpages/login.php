<?php
require("../setting/admin_info.php");
include("../setting/dbconn.php");
?>

<?php require("../view/top.php"); ?>
<?php require("../view/navi.php"); ?>

<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

  <body>

    <?php if(!isset($_SESSION['ss_mb_id'])){ ?>


    <div>
    <form action="./login_check.php" method="post">
      <table class="login">
        <tr>
          <td class="logintitle" colspan="2">로 그 인</td>
        </tr>
        <tr>
          <td class="login">아 이 디</td>
          <td class="login"><input type="text" name="mb_id" placeholder="아이디"></td>
        </tr>
        <tr>
          <td class="login">비밀번호</td>
          <td class="login"><input type="password" name="mb_password" placeholder="비밀번호"></td>
        </tr>
      </table>
      <br>
      <input class="button" type="submit" value="로 그 인">
    </form>
</div>
  <?php
}
else
{
$mb_id=$_SESSION['ss_mb_id'];

echo "<script> alert('이미 로그인 완료되었습니다.');</script>";
echo "<script> location.replace('../admin.php');</script>";
 ?>

<?php } ?>
  </body>
</html>


<?php require('../view/bottom.php');?>
