<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>
<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>





  <img width="100%" src="./img/banner/web_recruit.jpg?image_loading_time=<?php echo time()?>" alt="유니브" class="web_image">
  <img width="100%" src="./img/banner/mobile_recruit.jpg?image_loading_time=<?php echo time()?>" alt="history" class="mobile_image">
  <section>
  <br><div class="blank"></div>
<div class="divider">
  <h1 class="title_divider">인재채용</h1>
  <div class="blank"></div>

<div class="board">
  <ul>
    <div class="board_row_wrap">
    <li class="board-head">
      <ul class="board-head-title">
        <li class="rc_form" id="rc_form_title">형태</li>
        <li class="rc_title" id="rc_title_title">모집 분야</li>
        <li class="rc_group" id="rc_group_title">직군</li>
        <li class="rc_career" id="rc_career_title">대상</li>
      </ul>
    </li>
    </div>
    <div class="board_content_row_wrap">
      <?php
          $sql='select * from recruit order by rc_no desc;';
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
        <div class="rc_normal">
          <div class="rc_form"><?=$filtered['rc_form']?></div>
          <div class="rc_title"><?=$filtered['rc_title']?></div>
          <div class="rc_group"><?=$filtered['rc_group']?></div>
          <div class="rc_career"><?=$filtered['rc_career']?></div>
        </div>
        <div class="rc_mobile">
          <div class="rc_mobile_left">
            <div class="rc_title_mobile" style="font-size:1.2rem; margin-left:1%"><?=$filtered['rc_title']?></div>
            <div class="rc_form_mobile" style="color:gray; margin-left:1%"><?=$filtered['rc_form']?> | <?=$filtered['rc_group']?></div>
          </div>
          <div class="rc_mobile_right">
            <div class="rc_career_mobile"><?=$filtered['rc_career']?></div>
          </div>
        </div>

      </a>
    </li>
    <?php
  }
  ?>
    </div>
  </ul>
</div>
<div class="blank"></div>
</div>


<?php require('./view/bottom.php');?>
