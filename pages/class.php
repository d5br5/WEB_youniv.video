<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>


<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>


  <img width="100%" src="./img/banner/web_class.jpg?image_loading_time=<?php echo time()?>" alt="유니브" class="web_image">
  <img width="100%" src="./img/banner/mobile_class.jpg?image_loading_time=<?php echo time()?>" alt="history" class="mobile_image">
  <section>
  <div class="blank"></div>
  <div class="divider">
  <div>
    <h2>클래스 소개</h2>
  </div>
  <div>
    <h3>
      오리지널 채널 운영과 파트너 채널 매니지먼트를 통해 <br class="br_2"> 확보한 리소스를 바탕으로<br class="br_only1"> 유튜버에서 강사로의 확장 뿐만 아니라,<br class="br_0"><br class="br_2">
      성장 가능성이 있는 외부 강사들을 YouTube로 진출시켜<br class="br_only1"><br class="br_2"> 학습을 위한 콘텐츠를 제공함으로써 <br class="br_0"><br class="br_2">온라인 교육 콘텐츠 시장을 선도하는 기업이 되고자 합니다.<br><br>
    </h3>
    <h3>
      자체 강의 큐레이션 채널인 <유니브클래스>를 운영하며, <br class="br_2">해당 채널을 통해 <br class="br_only1"><br class="br_0">다양한 강의 콘텐츠를 <br class="br_2">YouTube Membership 기능을 통해 합리적인 가격에 제공합니다.<br><br>
    </h3>
  </div>

  <div class="apply_button">
    <a href="https://www.youtube.com/channel/UCSvQJiTYECOrw-AYOr4yzqA" target="_blank" style="text-decoration: none;"><div class="apply_text">유니브클래스 강의 보러 가기</div></a>
  </div>
</div>
<div class="divider">
  <div>
    <h2>강사소개</h2>
  </div>
  <div class="teacher_wrap">
      <img src="./img/teacher/t_mingzzi.jpg?image_loading_time=<?php echo time()?>" alt="밍찌" class="teacher_image">
      <div class="wrap_three_title">
        <p class="video_title_2">밍찌 선생님 소개 영상</p>
      <div class="video_wrapper">
      <iframe  width="560" height="315" src="https://www.youtube.com/embed/452hOM4wJzY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div class="teacher_wrap">
    <img src="./img/teacher/t_ddang.jpg?image_loading_time=<?php echo time()?>" alt="땅우" class="teacher_image">
    <div class="wrap_three_title">
      <p class="video_title_2">땅우 선생님 소개 영상</p>
    <div class="video_wrapper">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/yBhTkJmM73M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  </div>
  <div class="teacher_wrap">
    <img src="./img/teacher/t_jimyung.jpg?image_loading_time=<?php echo time()?>" alt="지명" class="teacher_image">
    <div class="wrap_three_title">
      <p class="video_title_2">지명 선생님 소개 영상</p>
    <div class="video_wrapper">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/2Y9vrZM9COA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  </div>
  <div class="teacher_wrap">
    <img src="./img/teacher/t_chan.jpg?image_loading_time=<?php echo time()?>" alt="김찬" class="teacher_image">
    <div class="wrap_three_title">
      <p class="video_title_2">김찬 선생님 소개 영상</p>
    <div class="video_wrapper">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/5IiN3piwj0o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  </div>

</div>

<?php require('./view/bottom.php');?>
