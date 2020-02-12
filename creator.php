<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>


<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>

<div class="divider">
  <div>
    <h1>크리에이터</h1>
  </div>
  <div>
    <h3>대학/입시부터 전문지식, 라이프스타일까지 유니브와 함께 성장할 파트너를 찾습니다.</h3>
  </div>
</div>
<div class="divider">
  <div>
    <h1>서비스</h1>
  </div>
  <div>
    <h3>유니브는 크리에이터들의 성장을 위해 다양한 서비스를 지원합니다.<br><br></h3>
  </div>
  <div>
    <h2>매니지먼트</h2>
    <h3>● 채널 성장을 위한 정기 컨설팅</h3>
    <h3>● CMS 운영 및 관리</h3>
    <h3>● YouTube 데이터 분석</h3>
    <h3>● YouTube 관련 소식 전달 및 각종 교육</h3>
  </div>
  <div>
    <h2>콘텐츠 제작 지원</h2>
    <h3>● 촬영장비 대여</h3>
    <h3>● 스튜디오 지원</h3>
    <h3>● 채널아트 및 프로필 지원</h3>
  </div>
  <div>
    <h2>광고/IP 비즈니스</h2>
    <h3>● 교육시장부터 라이프스타일까지 다양한 풀의 광고주 보유</h3>
    <h3>● 전문 광고팀 운영</h3>
    <h3>● IP를 활용한 다양한 수익화 기회 창출</h3>
  </div>
</div>
<div class="divider">
  <div>
    <h1>파트너 리스트</h1>
  </div>
  <div>
    <h3>이런 분들 이 있습니다.</h3>
  </div>
  <div class="crt_wrapping">
  <?php
      $sql='select * from creator order by crt_name asc;';
      $result= mysqli_query($conn, $sql);
  while($row=mysqli_fetch_array($result)){
      $filtered=array('crt_no'=>htmlspecialchars($row['crt_no']),
                     'crt_name'=>htmlspecialchars($row['crt_name']),
                     'crt_link'=>htmlspecialchars($row['crt_link']),
                     'crt_directory'=>htmlspecialchars($row['crt_directory']),
                     'crt_imagename'=>htmlspecialchars($row['crt_imagename'])
                   )
      ?>

  <div class="crt_wrap_each">
    <div class="crt_image">
      <a href="http://www.youtube.com/channel/<?=$filtered['crt_link']?>">
      <div class="react_box" style=<?="\"background-image: url(./adminpages/creator/fileupload_creator/".$filtered['crt_imagename'].")\""?>></div>
      </a>
    </div>
    <div class="crt_name"><?=$filtered['crt_name']?></div>
  </div>
  <?php
  }
  ?>

  </div>
</div>
<div class="divider">
  <div>
    <h1>Contact us</h1>
  </div>
  <div>
    <h2>Mail</h2>
    <h3>support@youniv.video</h3>
  </div>
  <div>
    <h2>필요 내용</h2>
    <h3>채널명, 채널 url, 컨셉, 운영기간 등</h3>
  </div>
</div>

<?php require('./view/bottom.php');?>
