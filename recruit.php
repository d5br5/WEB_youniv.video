<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>
<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>


<div class="testframe">
  <div>
    슬로건 40
  </div>
  <div>
    누구나 행복한 교육을 받도록
  </div>
</div>
<div class="testframe">
  <div>
    인재영입 테이블
  </div>
  <div>
    게시판 형태 깔끔하게
  </div>
</div>
<div class="testframe">

</div>

<div class="testframe">
  <table border="1">
      <tr>
          <td>rc_no</td><td>rc_title</td><td>rc_group</td><td>rc_form</td><td>rc_career</td>
          <td>rc_deadline</td><td>rc_text</td><td>rc_directory</td><td>rc_imagename</td>
      </tr>
      <?php
          $sql='select * from recruit order by rc_title asc;';
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
              <td><a href="recruit_page.php?rc_no=<?=$filtered['rc_no']?>"><?=$filtered['rc_title']?></a></td>
              <td><?=$filtered['rc_group']?></td>
              <td><?=$filtered['rc_form']?></td>
              <td><?=$filtered['rc_career']?></td>
              <td><?=$filtered['rc_deadline']?></td>
              <td><?=$filtered['rc_text']?></td>
              <td><?=$filtered['rc_directory']?></td>
              <td><?=$filtered['rc_imagename']?></td>
          </tr>
          <?php
        }
        ?>
  </table>
</div>

<?php require('./view/bottom.php');?>
