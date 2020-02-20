<?php

    function print_error(){

         echo "<h1 style='text-align:center'><span style='font-size:200px'>없는 주소</span></h1>";

    }

    function print_description(){


      if(isset($_SESSION['ss_mb_id'])){
          echo "<a href=\"./adminpages/recruit/admin_recruit.php\">리크루팅 관리</a>
          <a href=\"./adminpages/creator/admin_creator.php\">크리에이터 관리</a>";

      }else {
      echo "<h1><a href='./adminpages/login.php'>로그인</a> 해야 볼 수 있습니다.<br></h1>";
        }

}
    ?>
