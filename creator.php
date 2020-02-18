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
    <h2>서비스</h2>
  </div>
  <div>
    <h3>유니브는 크리에이터들의 성장을 위해 다양한 서비스를 지원합니다.<br><br></h3>
  </div>
  <div class="wrapping">

        <div class="wrapper_three">
          <div class="wrap_image_title">
            <img class="image_mini" src="./img/management.png" alt="매니지먼트">
          <div>
            <h3 class="center">매니지먼트</h3>
          </div>
          </div>
          <div class="creator_content_normal_text">
            <p>
              	&middot; 채널 성장을 위한 정기 컨설팅 <br>
              	&middot; CMS 운영 및 관리 <br>
              	&middot; 유튜브 데이터 분석 <br>
              	&middot; 유튜브 관련 소식 전달 및 교육
            </p>
          </div>
        </div>

        <div class="wrapper_three">
          <div class="wrap_image_title">
            <img class="image_mini" src="./img/studio.png" alt="스튜디오">
          <div>
            <h3 class="center">콘텐츠 제작 지원</h3>
          </div>
          </div>
          <div class="creator_content_normal_text" id="crt_text_short">
            <p>
            	&middot; 촬영장비 대여 <br>
            	&middot; 스튜디오 지원 <br>
            	&middot; 채널아트 및 프로필 지원 </p>
          </div>
        </div>

        <div class="wrapper_three">
          <div class="wrap_image_title">
            <img class="image_mini" src="./img/advertisement.png" alt="광고">
          <div>
            <h3 class="center">광고/IP 비즈니스</h3>
          </div>
          </div>
          <div class="creator_content_normal_text">
            <p>
            	&middot; 교육부터 라이프스타일까지<br>
            &nbsp;&nbsp; 다양한 시장의 광고주 보유 <br>
            	&middot; 전문 광고팀 운영 <br>
            	&middot; IP를 활용한 수익화 기회 창출 </p>
          </div>
        </div>

  </div>

</div>
<div class="divider">
  <div>
    <h2>파트너 리스트</h2>
  </div>
  <div>
    <h3>유니브와 함께하는 파트너분들을 소개합니다. </h3>
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
      <a href="http://www.youtube.com/channel/<?=$filtered['crt_link']?>" target="_blank">
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
    <h2>신규 파트너 문의</h2>
  </div>
  <div class="contact_content">
    <h3>Mail</h3>
    <p>support@youniv.video</p>
  </div>
  <div class="contact_content">
    <h3>필요 내용</h3>
    <p>채널명, 채널 url, 컨셉, 운영기간 등</p>
  </div>
</div>
<div class="blank"></div>

<?php require('./view/bottom.php');?>
