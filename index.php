<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>

<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>




<div class="divider">
  <div class="main_video">
    <div class="main_video_text">
      유니브는 지식과 정보를 전달하는<br>러닝(learning) MCN이자 뉴미디어 교육 콘텐츠 기업입니다.
    </div>
  </div>
</div>

<div class="divider">
  <div>
    <h1>What We Do</h1>
  </div>
  <div class="wrapping">
    <a href="original.php">
        <div class="wrapper_three">
          <div class="image_mini"></div>
          <div>
            <h3 class="center">O&O</h3>
          </div>
          <div class="main_content_normal_text">
            <p>유니브는 학생들이 공부를 즐겁게 할 수 있도록 도와주는 O&O 채널들을 운영하며, 이러한 경험을 통해 YouTube 및 채널 운영에 대한 인사이트를 전면에서 쌓고 있습니다.</p>
          </div>
        </div>
      </a>
      <a href="creator.php">
        <div class="wrapper_three">
          <div class="image_mini"></div>
          <div>
            <h3 class="center">크리에이터</h3>
          </div>
          <div class="main_content_normal_text">
            <p>대학/입시부터 전문지식, 라이프스타일까지 유니브는 자신의 지식과 경험을 공유하는 다양한 크리에이터 분들과 파트너십을 맺어 채널 관리를 도와드리고 있습니다. </p>
          </div>
        </div>
      </a>
      <a href="class.php">
        <div class="wrapper_three">
          <div class="image_mini"></div>
          <div>
            <h3 class="center">클래스</h3>
          </div>
          <div class="main_content_normal_text">
            <p>유니브는 YouTube와 뉴미디어에 맞는 유익하며 동시에 재미있는 교육 콘텐츠를 합리적인 가격에 제공합니다. YouTube에서 공부해보세요. </p>
          </div>
        </div>
      </a>
  </div>
</div>

<div class="divider">
  <div>
    <h1>BUSINESS</h1>
  </div>
  <div class="wrapping">
    <div class="wrapper_two">
      <div class="image_mini"></div>
      <div>
        <h3 style="text-align:center">BDC</h3>
      </div>
      <div>
        <p style="text-align:center">BDC 소개</p>
      </div>
    </div>
    <div class="wrapper_two">
      <div class="image_mini"></div>
      <div>
        <h3 style="text-align:center">IP</h3>
      </div>
      <div>
        <p style="text-align:center">IP사업 소개</p>
      </div>
    </div>
  </div>
</div>

<div class="divider">
  <div>
    <h1>HISTORY</h1>
  </div>
  <img src="./img/youniv_history.png" alt="유니브 역사 이미지" style="width:100%">
</div>
<div class="divider">
  <div>
    <h1>오시는 길</h1>
  </div>
  <div class="wrapping">
    <div class="wrap_contact_map">
        <div id="map" style="width:100%;height:300px;"></div>
    </div>
    <div class="wrap_contact_address">
        <div class="contact_address_title">
          <p><br><br><br>주 소<br></p>
          <p><br>전화번호<br></p>
          <p><br>팩스번호<br></p>
          <p><br>이메일</p>
        </div>
        <div class="contact_address_text">
          <p><br><br><br>서울 강남구 테헤란로 501 VPLEX 411호<br></p>
          <p><br>02-508-8866<br></p>
          <p><br>02-508-8867<br></p>
          <p><br>contact@youniv.video</p>
        </div>
    </div>
  </div>
</div>

<script>
var mapOptions = {center: new naver.maps.LatLng(37.507280, 127.056940),zoom: 16};
var map = new naver.maps.Map('map', mapOptions);
var markerOptions = {position:new naver.maps.LatLng(37.507280, 127.056940), map: map};
var marker = new naver.maps.Marker(markerOptions);

</script>

<?php require('./view/bottom.php');?>
