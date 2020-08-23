<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>


<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>


  <img width="100%" src="./img/banner/web_partnership.jpg?image_loading_time=<?php echo time()?>" alt="유니브" class="web_image">
  <img width="100%" src="./img/banner/mobile_partnership.jpg?image_loading_time=<?php echo time()?>" alt="history" class="mobile_image">
<section>
  <div class="divider">

  <div class="apply_button">
    <a href="mailto:support@youniv.video?Subject=신규파트너문의" target="_top"><div class="apply_text">신규 파트너 문의하기</div></a>
  </div>
</div>
<div class="divider">
  <div>
    <h2>파트너 서비스</h2>
  </div>
  <div class="wrapping">

        <div class="wrapper_three">
          <div class="wrap_image_title">
            <img class="image_mini" src="./img/symbol/매니지먼트.png?image_loading_time=<?php echo time()?>" alt="매니지먼트">
          <div>
            <h3 class="center" style="font-weight:900">매니지먼트</h3>
          </div>
          </div>
          <div class="creator_content_normal_text">
            <p>
              	&middot; CMS 운영 및 관리 <br>
              	&middot; 유튜브 채널 데이터 분석 <br>
                &middot; 채널 성장을 위한 정기 컨설팅 <br>
              	&middot; 유튜브와 관련된 다양한 정보 제공
            </p>
          </div>
        </div>

        <div class="wrapper_three">
          <div class="wrap_image_title">
            <img class="image_mini" src="./img/symbol/제작지원.png?image_loading_time=<?php echo time()?>" alt="스튜디오">
          <div>
            <h3 class="center" style="font-weight:900">콘텐츠 제작지원</h3>
          </div>
          </div>
          <div class="creator_content_normal_text" id="crt_text_short">
            <p>
              &middot; 채널로고 및 배너 제작 <br>
            	&middot; 촬영장비 대여 <br>
            	&middot; 스튜디오 대여 <br>
              &middot; 콘텐츠 기획 방향성 제시
             </p>
          </div>
        </div>

        <div class="wrapper_three">
          <div class="wrap_image_title">
            <img class="image_mini" src="./img/symbol/비즈니스.png?image_loading_time=<?php echo time()?>" alt="광고">
          <div>
            <h3 class="center" style="font-weight:900">비즈니스</h3>
          </div>
          </div>
          <div class="creator_content_normal_text">
            <p>
            	&middot; 채널 적합 제품/브랜드 광고 경험 제공<br>
            	&middot; 채널 IP를 활용한 굿즈/제품 제작 지원<br>
            	&middot; 콘텐츠 관련 다양한 수익화 기회 창출 </p>
          </div>
        </div>

  </div>

</div>
<div class="divider">
  <div>
    <h2 style="margin-bottom:1.3rem">파트너 리스트</h2>
  </div>
  <div>
    <h3 style="padding-bottom:0.15rem">유니브와 함께하는 파트너분들을 소개합니다. </h3>
    <p style="padding-bottom:0.5rem"> <span style="font-size:1rem; color:gray">채널 로고를 클릭하시면 해당 채널로 이동합니다.</span></p>
  </div>
  <div class="crt_wrapping">
  <?php
      $sql='select * from creator order by crt_num asc;';
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

<div class="blank"></div>

<?php require('./view/bottom.php');?>
