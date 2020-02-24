<?php // require_once("./lib/print.php"); ?>
<?php require("./setting/admin_info.php");?>
<?php include("./setting/dbconn.php"); ?>


<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>
<?php // require("./view/function_alpha.php"); ?>

<div class="divider">

  <div id="business_navi">
    <a href="business_brand.php">
    <div class="business_menu">
      광고 사업
    </div></a>
    <a href="business_ip.php">
    <div class="business_menu_active">
      IP 사업
    </div></a>
  </div>
<div class="blank"></div>

  <div class="blank"></div>
  <div>
    <p style="text-align:center" class="business_copy">채널의 <br class="br_3"> 브랜드 아이덴티티를 기반으로 <br class="br_1"> 다양한 상품을 제작합니다.</p>
  </div>
  <div class="blank"></div>
<div class="blank"></div>

  <div>
    <h2>대표 상품</h2>
  </div>

  <div class="wrapping">
    <div class="ip_title">연고티비 노트세트</div>
      <div class="ip_wrap">
    <div class="ip_index">
      <div class="ip_image">
        <img src="./img/note.png" alt="노트">
      </div>
      <div class="ip_intro">
        <p>5권, 1SET 구성</p>
        <p>판매 개시 약 28시간 만에 2,000SET(10,000권) 완판</p>
        <p>2차 판매 오픈 후 5,000권 추가 완판</p>
        <p>현재 판매 종료 상품</p>
      </div>
    </div>
    </div>
    <div class="ip_video">
      <iframe width="100%" height="300px" src="https://www.youtube.com/embed/wZe64a4FY6c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  <div class="wrapping">
    <div class="ip_title">연고티비 사계절 노트세트, 인덱스 노트</div>
    <div class="ip_index">
      <div class="ip_image">
        <img src="./img/note.png" alt="노트">
      </div>
      <div class="ip_intro">
        <p>고객의 니즈를 반영하여 제품력을 개선하여 출시</p>
        <p>인덱스 노트 추가 출시로 기능을 분화한 제품</p>
        <p>제품 출시 이후 누적 10,000권 이상 판매</p>
        <p>스테디셀러 상품으로 자리매김 (현재 판매 중)</p>
      </div>
    </div>
    <div class="ip_video">
      <iframe width="100%" height="300px" src="https://www.youtube.com/embed/xYd5kn1iFAI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  <div class="wrapping">
    <div class="ip_title">연고티비 100일 플래너</div>
    <div class="ip_wrap">
    <div class="ip_index">
      <div class="ip_image">
        <img src="./img/note.png" alt="노트">
      </div>
      <div class="ip_intro">
        <p>연고티비 크리에이터들의 학습 노하우를 100% 반영한 제품</p>
        <p>판매 개시 약 48시간 만에 1,500부 완판</p>
        <p>현재 판매 종료 상품</p>
      </div>
    </div>
    <div class="ip_video">
      <iframe width="100%" height="300px" src="https://www.youtube.com/embed/_NSEWWbTLP4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    </div>
  </div>

</div>


<div class="blank"></div>

<?php require('./view/bottom.php');?>
