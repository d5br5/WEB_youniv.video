<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>


<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>

<div class="divider">
  <img width="100%" src="./img/banner/web_class.jpg" alt="유니브">
  <div class="blank"></div>
  <div>
    <h2>비전</h2>
  </div>
  <div>
    <h3>
      오리지널 채널 운영과 파트너 채널 매니지먼트를 통해 확보한 리소스를 바탕으로<br> 유튜버에서 강사로의 확장 뿐만 아니라,
      성장 가능성이 있는 외부 강사들을 YouTube로 진출시켜<br> 학습을 위한 콘텐츠를 제공함으로써 온라인 교육 콘텐츠 시장을 선도하는 기업이 되고자 합니다.
    </h3>
    <h3>
      자체 강의 큐레이션 채널인 <유니브클래스>를 운영하며, 해당 채널을 통해 <br>다양한 강의 콘텐츠를 YouTube Membership 기능을 통해 합리적인 가격에 제공합니다.<br><br>
    </h3>
  </div>

  <div class="youtube_button">
    <a href="https://www.youtube.com/channel/UCSvQJiTYECOrw-AYOr4yzqA" target="_top" style="text-decoration: none;"><div class="apply_text">유니브 클래스 강의 보러 가기</div></a>
  </div>
</div>
<div class="divider">
  <div>
    <h2>강사소개</h2>
  </div>
  <div class="teacher_wrap">
      <img src="./img/teacher/t_mingzzi.jpg" alt="밍찌" class="teacher_image">
      <div class="video_wrapper">
      <iframe  width="560" height="315" src="https://www.youtube.com/embed/452hOM4wJzY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  </div>
  <div class="teacher_wrap">
    <img src="./img/teacher/t_real.jpg" alt="진짜" class="teacher_image">
    <div class="video_wrapper">
    <iframe  width="560" height="315" src="https://www.youtube.com/embed/452hOM4wJzY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  <div class="teacher_wrap">
      <img class="teacher_next" src="./img/teacher/t_next.jpg" alt="next" style="margin-left:0;">
      <img class="teacher_next" src="./img/teacher/t_next.jpg" alt="next">
      <img class="teacher_next" src="./img/teacher/t_next.jpg" alt="next" style="margin-right:0;">
  </div>

</div>

<?php require('./view/bottom.php');?>
