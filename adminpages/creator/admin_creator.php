<?php
    require("../../setting/admin_info.php");
    include("../../setting/dbconn.php");

    require("../../view/top.php");
  ?>
  <link href="../../css/style.css" rel="stylesheet" type="text/css">
  <link href="../../css/function.css" rel="stylesheet" type="text/css">
  <section>



   <?php if(isset($_SESSION['ss_mb_id'])){
 $mb_id=$_SESSION['ss_mb_id'];
      ?>

      <div class="divider">
        <a href="../../index.php">
      <div>
        <h1 style="text-align:center">YOUNIV</h1>
      </div>
        </a>

          <table border="1">
              <tr>
                  <td>고유번호</td><td>채널명</td><td>채널소개</td><td>분야</td><td>채널ID</td><td>중요도</td>
                  <td>이미지저장폴더</td><td>이미지명</td><td>UPDATE</td><td>DELETE</td>
              </tr>
              <?php
                  $sql='select * from creator order by crt_num asc;';
                  $result= mysqli_query($conn, $sql);

      //$row에는 DB테이블에 저장된 정보가 한줄씩 배열

              while($row=mysqli_fetch_array($result)){
                  $filtered=array('crt_no'=>htmlspecialchars($row['crt_no']),
                                 'crt_name'=>htmlspecialchars($row['crt_name']),
                                 'crt_intro'=>htmlspecialchars($row['crt_intro']),
                                 'crt_area'=>htmlspecialchars($row['crt_area']),
                                 'crt_link'=>htmlspecialchars($row['crt_link']),
                                 'crt_num'=>htmlspecialchars($row['crt_num']),
                                 'crt_directory'=>htmlspecialchars($row['crt_directory']),
                                 'crt_imagename'=>htmlspecialchars($row['crt_imagename']),
                               )
                  ?>
                  <tr>
                      <td><?=$filtered['crt_no']?></td>
                      <td><?=$filtered['crt_name']?></td>
                      <td><?=$filtered['crt_intro']?></td>
                      <td><?=$filtered['crt_area']?></td>
                      <td><?=$filtered['crt_link']?></td>
                      <td><?=$filtered['crt_num']?></td>
                      <td><?=$filtered['crt_directory']?></td>
                      <td><?=$filtered['crt_imagename']?></td>
                      <td><a href="admin_creator.php?crt_no=<?=$filtered['crt_no']?>">UPDATE</a></td>
                      <td>
                          <form action="admin_creator_process_delete.php" method="post" onsubmit="if(!confirm('sure?')){return false;}">
                              <input type="hidden" name="crt_no" value="<?=$filtered['crt_no']?>">
                              <input type="submit" value="DELETE">
                          </form>
                      </td>
                  </tr>
                  <?php
                 }
                      ?>
          </table>
          <?php

      $escaped=array('crt_name'=>'','crt_intro'=>'','crt_area'=>'','crt_link'=>'','crt_num'=>'','crt_directory'=>'','crt_imagename'=>'');
      $button='CREATE CREATOR';
      $form_action='admin_creator_process_create.php';
      $form_id='';

      if(isset($_GET['crt_no'])){
          $filtered_id=mysqli_real_escape_string($conn, $_GET['crt_no']);
          settype($filtered_id,'integer');
          $sql="select * from creator where crt_no={$filtered_id}";
          $result= mysqli_query($conn, $sql);

          $row=mysqli_fetch_array($result);
          $escaped['crt_name']=htmlspecialchars($row['crt_name']);
          $escaped['crt_intro']=htmlspecialchars($row['crt_intro']);
          $escaped['crt_area']=htmlspecialchars($row['crt_area']);
          $escaped['crt_link']=htmlspecialchars($row['crt_link']);
          $escaped['crt_num']=htmlspecialchars($row['crt_num']);
          $escaped['crt_directory']=htmlspecialchars($row['crt_directory']);
          $escaped['crt_imagename']=htmlspecialchars($row['crt_imagename']);



          $button='UPDATE CREATOR';
          $form_action='admin_creator_process_update.php';
          $form_id='<input type="hidden" name="crt_no" value="'.$_GET['crt_no'].'">';
      }
      ?>

          <h1>POST</h1>
         <form action="<?=$form_action?>" enctype="multipart/form-data" method="post">
              <?=$form_id?>
             <p><input type="text" name="crt_name" placeholder="크리에이터명" value="<?=$escaped['crt_name']?>"></p>
             <p><textarea name="crt_intro" cols="30" rows="10" placeholder="크리에이터 소개글"><?=$escaped['crt_intro']?></textarea></p>
             <p><input type="text" name="crt_area" placeholder="분야" value="<?=$escaped['crt_area']?>"></p>
             <p><input type="text" name="crt_link" placeholder="채널 url(youtube.com/channel/ 이후 주소)" value="<?=$escaped['crt_link']?>"></p>
             <p><input type="text" name="crt_num" placeholder="중요도" value="<?=$escaped['crt_num']?>"></p>
              <input type="file" name="myfile">
              <p><input type="submit" value="<?=$button?>"></p>
         </form>
         <p>'jpg, jpeg, png, gif 파일만 허용</p>




 <?php
 }
 else
 {
 echo "<script> alert('로그인해주세요.');</script>";
 echo "<script> location.replace('../login.php');</script>";
 ?>

 <?php } ?>





    <?php require("../../view/bottom.php"); ?>
