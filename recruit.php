<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>
<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>




<div class="divider">
  <div class="main_video">
    <div class="main_video_text">
      슬로건
    </div>
  </div>
  <br>
  <h1 class="title_divider">인재채용</h1>
  <h3>유니브와 함께하실 훌륭한 유니버를 찾습니다.</h3>
  <br>

<div class="board">
  <ul>
    <div class="board_row_wrap">
    <li class="board-head">
      <ul class="board-head-title">
        <li class="rc_form">형태</li>
        <li class="rc_title">모집 분야</li>
        <li class="rc_group">직군</li>
        <li class="rc_career">대상</li>
      </ul>
    </li>
    </div>
    <div class="board_content_row_wrap">
      <?php
          $sql='select * from recruit order by rc_title asc;';
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
    <li class="border_content_row">
      <a href="recruit_page.php?rc_no=<?=$filtered['rc_no']?>">
      <div class="rc_form"><?=$filtered['rc_form']?></div>
      <div class="rc_title"><?=$filtered['rc_title']?></div>
      <div class="rc_group"><?=$filtered['rc_group']?></div>
      <div class="rc_career"><?=$filtered['rc_career']?></div>
      </a>
    </li>
    <?php
  }
  ?>
    </div>
  </ul>
</div>
</div>


<?php require('./view/bottom.php');?>
