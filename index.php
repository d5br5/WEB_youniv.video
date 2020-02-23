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
    <h1 class="title_divider">What To Do</h1>
  </div>
<div class="blank_hide"></div>

  <div class="wrapping">
    <a href="original.php">
        <div class="wrapper_three">
          <div class="wrap_image_title">
            <img class="image_mini" src="./img/o_o.png" alt="O_O">
            <div>
              <h3 class="center">오리지널</h3>
            </div>
          </div>
          <div class="main_content_normal_text">
            <p>학생들을 대상으로 공부팁, 학교 생활 모습 등을 재미있게 알려주는 채널(Owned&Operated 채널)을 직접 운영합니다. </p>
          </div>
        </div>
      </a>
      <a href="creator.php">
        <div class="wrapper_three">
          <div class="wrap_image_title">
            <img class="image_mini" src="./img/creator.png" alt="creator">
            <div>
              <h3 class="center">파트너십</h3>
            </div>
          </div>
          <div class="main_content_normal_text">
            <p>교육/러닝(Learning) 카테고리를 넘어서서 학생 라이프스타일 채널들이 높은 영향력을 얻을 수 있도록 전범위적인 매니지먼트를 지원합니다.</p>
          </div>
        </div>
      </a>
      <a href="class.php">
        <div class="wrapper_three">
          <div class="wrap_image_title">
          <img class="image_mini" src="./img/math.png" alt="class">
          <div>
            <h3 class="center">클래스</h3>
          </div>
          </div>
          <div class="main_content_normal_text">
            <p>변화하는 뉴미디어 환경에 맞춰 YouTube를 기반으로 유익하면서 동시에 재미있는 교육/학습 콘텐츠를 제공합니다.</p>
          </div>
        </div>
      </a>
  </div>

  <div class="blank_hide"></div>

  <div class="wrapping_2">
    <a href="business_brand.php">
      <div class="wrapper_three">
        <div class="wrap_image_title">
        <img class="image_mini" src="./img/branded.png" alt="BDC">
        <div>
          <h3 class="center">광고사업</h3>
        </div>
        </div>
        <div class="main_content_normal_text">
          <p>오리지널 채널 운영 및 파트너 채널 매니지먼트를 통해 확보한 콘텐츠 역량을 기반으로 브랜드 파워를 강화할 수 있는 방안을 제시합니다.</p>
        </div>
      </div>
    </a>
    <a href="business_ip.php">
      <div class="wrapper_three">
        <div class="wrap_image_title">
        <img class="image_mini" src="./img/ip.png" alt="IP">
        <div>
          <h3 class="center">IP 사업</h3>
        </div>
        </div>
        <div class="main_content_normal_text">
          <p>채널을 기반으로 형성된 강력한 브랜드 아이덴티티를 기반으로 굿즈 출시, 출판 등 다양한 상품화 프로젝트를 진행합니다.</p>
        </div>
      </div>
    </a>
  </div>
</div>
<div class="blank"></div>
<div class="divider">
  <div>
    <h1 class="title_divider">HISTORY</h1>
  </div>
  <img src="./img/youniv_history.png" alt="유니브 역사 이미지" style="width:100%">
</div>
<div class="divider">
  <div>
    <h1 class="title_divider">오시는 길</h1>
  </div>
  <p> <br></p>
  <div class="wrapping">
    <div class="wrap_contact_map">
        <div id="map"></div>
    </div>
    <div class="wrap_contact_address">
        <div class="contact_address_title">
          <p>주 소<br></p>
          <p><br>대표전화<br></p>
          <p><br>팩스<br></p>
          <p><br>이메일<br></p>
          <p><br>영업시간</p>
        </div>
        <div class="contact_address_text">
          <p>서울시 강남구 테헤란로 501 (VPLEX) 411호<br></p>
          <p><br>02-508-8866<br></p>
          <p><br>02-508-8867<br></p>
          <p><br>contact@youniv.video<br></p>
          <p><br>평일 10:00-19:00 / 주말, 공휴일 휴무</p>
        </div>
    </div>
  </div>
</div>
<div class="blank_hide"></div>

<script>
var mapOptions = {center: new naver.maps.LatLng(37.507280, 127.056940),zoom: 16};
var map = new naver.maps.Map('map', mapOptions);
var markerOptions = {position:new naver.maps.LatLng(37.507280, 127.056940), map: map};
var marker = new naver.maps.Marker(markerOptions);
</script>

<?php require('./view/bottom.php');?>
