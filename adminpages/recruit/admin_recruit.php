<?php
    require("../../setting/admin_info.php");
    include("../../setting/dbconn.php");

    require("../../view/top.php");
  ?>
  <link href="../../css/style.css" rel="stylesheet" type="text/css">
  <link href="../../css/function.css" rel="stylesheet" type="text/css">
  <section>


    <?php if(isset($_SESSION['ss_mb_id'])){
    $mb_id=$_SESSION['ss_mb_id'];
       ?>


<div class="divider">
  <a href="../../index.php">
<div>
  <h1 style="text-align:center">YOUNIV</h1>
</div>
  </a>

  <table border="1">
      <tr>
          <td>번호</td><td>제목</td><td>직군</td><td>기한</td><td>대상</td>
          <td>마감기한</td><td>UPDATE</td><td>DELETE</td>
      </tr>
      <?php
          $sql='select * from recruit order by rc_no desc;';
          $result= mysqli_query($conn, $sql);

//$row에는 DB테이블에 저장된 정보가 한줄씩 배열

      while($row=mysqli_fetch_array($result)){
          $filtered=array('rc_no'=>htmlspecialchars($row['rc_no']),
                         'rc_title'=>htmlspecialchars($row['rc_title']),
                         'rc_group'=>htmlspecialchars($row['rc_group']),
                         'rc_form'=>htmlspecialchars($row['rc_form']),
                         'rc_career'=>htmlspecialchars($row['rc_career']),
                         'rc_deadline'=>htmlspecialchars($row['rc_deadline']),
                         'rc_text'=>htmlspecialchars($row['rc_text']),
                         'rc_directory'=>htmlspecialchars($row['rc_directory']),
                         'rc_imagename'=>htmlspecialchars($row['rc_imagename']),
                       )
          ?>
          <tr>
              <td><?=$filtered['rc_no']?></td>
              <td><?=$filtered['rc_title']?></td>
              <td><?=$filtered['rc_group']?></td>
              <td><?=$filtered['rc_form']?></td>
              <td><?=$filtered['rc_career']?></td>
              <td><?=$filtered['rc_deadline']?></td>
              <td><a href="admin_recruit.php?rc_no=<?=$filtered['rc_no']?>">UPDATE</a></td>
              <td>
                  <form action="admin_recruit_process_delete.php" method="post" onsubmit="if(!confirm('sure?')){return false;}">
                      <input type="hidden" name="rc_no" value="<?=$filtered['rc_no']?>">
                      <input type="submit" value="DELETE">
                  </form>
              </td>
          </tr>
          <?php
         }
              ?>
  </table>
  <?php

$escaped=array('rc_title'=>'','rc_group'=>'','rc_form'=>'','rc_career'=>'',
'rc_deadline'=>'','rc_text'=>'','rc_directory'=>'','rc_imagename'=>'');
$button='CREATE RECRUIT';
$form_action='admin_recruit_process_create.php';
$form_id='';

if(isset($_GET['rc_no'])){
  $filtered_id=mysqli_real_escape_string($conn, $_GET['rc_no']);
  settype($filtered_id,'integer');
  $sql="select * from recruit where rc_no={$filtered_id}";
  $result= mysqli_query($conn, $sql);

  $row=mysqli_fetch_array($result);
  $escaped['rc_title']=htmlspecialchars($row['rc_title']);
  $escaped['rc_group']=htmlspecialchars($row['rc_group']);
  $escaped['rc_form']=htmlspecialchars($row['rc_form']);
  $escaped['rc_career']=htmlspecialchars($row['rc_career']);
  $escaped['rc_deadline']=htmlspecialchars($row['rc_deadline']);
  $escaped['rc_text']=htmlspecialchars($row['rc_text']);
  $escaped['rc_directory']=htmlspecialchars($row['rc_directory']);
  $escaped['rc_imagename']=htmlspecialchars($row['rc_imagename']);



  $button='UPDATE RECRUIT';
  $form_action='admin_recruit_process_update.php';
  $form_id='<input type="hidden" name="rc_no" value="'.$_GET['rc_no'].'">';
}
?>
</div>

<div class="divider">


    <h1 style="text-align:center">POST</h1>
    <span style="text-align:center; line-height:2rem">

      <p> <주의사항><br>마감기한 설정과 이미지 파일 첨부를 반드시 해주세요~<br>수정시에도 반드시 필요합니다.<br>
        상시모집이어도 날짜설정 아무거나 해주세요 어차피 표시 안됩니다.<br><br></p>
   <form action="<?=$form_action?>" enctype="multipart/form-data" method="post">
        <?=$form_id?>
       <p><input type="text" name="rc_title" placeholder="글 제목" value="<?=$escaped['rc_title']?>"></p>
       <br>
       <p><input type="text" name="rc_group" placeholder="직군" value="<?=$escaped['rc_group']?>"></p>
       <br>
       <p><input type="text" name="rc_form" placeholder="형태(상시)" value="<?=$escaped['rc_form']?>"></p>
       <br>
       <p><input type="text" name="rc_career" placeholder="신입/경력" value="<?=$escaped['rc_career']?>"></p>
       <br>
       <p>마감기한 &nbsp;<input type="date" name="rc_deadline" value="<?=$escaped['rc_deadline']?>"></p>
       <br>
       채용글 이미지<br> <input style="border:1px solid black;" type="file" name="myfile">
       <p>'jpg, jpeg, png, gif 파일만 허용</p><br><br>
        <p><input type="submit" value="<?=$button?>"></p>
   </form>
 </span>
</div>

<?php
}
else
{
echo "<script> alert('로그인해주세요.');</script>";
echo "<script> location.replace('../login.php');</script>";
?>

<?php } ?>


    <?php require("../../view/bottom.php"); ?>
