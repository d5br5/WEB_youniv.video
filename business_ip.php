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
    <p style="text-align:center" class="business_copy">채널의 브랜드 아이덴티티를 기반으로 다양한 상품을 제작합니다.</p>
  </div>
  <div class="blank"></div>
<div class="blank"></div>

  <div>
    <h2>대표 상품</h2>
  </div>

  
  <div class="wrapping">

        <div class="wrapper_three">
          <div class="wrap_three_title">
            <iframe width="100%" height="212px" src="https://www.youtube.com/embed/xye3DIqYfMQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="wrapper_three">
          <div class="wrap_three_title">
            <iframe width="100%" height="212px" src="https://www.youtube.com/embed/JDdgUn5_wxw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="wrapper_three">
          <div class="wrap_three_title">
            <iframe width="100%" height="212px" src="https://www.youtube.com/embed/y2jSsy0oAns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
  </div>
</div>

<div class="divider">

</div>


<div class="blank"></div>

<?php require('./view/bottom.php');?>
