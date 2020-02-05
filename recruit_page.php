<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>
<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>

<?php
    $sql='select * from recruit where rc_no='.$_GET['rc_no'].';';
    $result= mysqli_query($conn, $sql);


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

<div class="testframe">
  <table>
    <tr>
      <td>글 번호</td><td><?=$filtered['rc_no']?></td>
    </tr>
    <tr>
      <td>제목</td><td><?=$filtered['rc_title']?></td>
    </tr>
    <tr>
      <td>직군</td><td><?=$filtered['rc_group']?></td>
    </tr>
    <tr>
      <td>형태</td><td><?=$filtered['rc_form']?></td>
    </tr>
    <tr>
      <td>신입경력</td><td><?=$filtered['rc_career']?></td>
    </tr>
    <tr>
      <td>마감 기한</td><td><?=$filtered['rc_deadline']?></td>
    </tr>
    <tr>
      <td>글 내용</td><td><?=$filtered['rc_text']?></td>
    </tr>
    <tr>
      <td>저장 경로</td><td><?=$filtered['rc_directory']?></td>
    </tr>
    <tr>
      <td>사진 이름</td><td><?=$filtered['rc_imagename']?></td>
    </tr>
  </table>
</div>


          <?php
         }
              ?>

<?php require('./view/bottom.php');?>
