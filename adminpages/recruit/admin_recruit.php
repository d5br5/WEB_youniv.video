<?php
    require("../../setting/admin_info.php");
    include("../../setting/dbconn.php");
  ?>


    <?php require("../../view/top.php");?>

    <a href="../../index.php">
        <h1>WEB</h1>
    </a>
<?php  echo "36";?>
    <table border="1">
        <tr>
            <td>rc_no</td><td>rc_title</td><td>rc_group</td><td>rc_form</td><td>rc_career</td>
            <td>rc_deadline</td><td>rc_text</td><td>rc_directory</td><td>rc_imagename</td><td>UPDATE</td><td>DELETE</td>
        </tr>
        <?php
            $sql='select * from recruit order by rc_no desc;';
            $result= mysqli_query($conn, $sql);

//$row에는 DB테이블에 저장된 정보가 한줄씩 배열

        while($row=mysqli_fetch_array($result)){
            $filtered=array('rc_no'=>htmlspecialchars($row['rc_no']),
                           'rc_title'=>htmlspecialchars($row['rc_title']),
                           'rc_group'=>htmlspecialchars($row['rc_group']),
                           'rc_form'=>htmlspecialchars($row['rc_form']),
                           'rc_career'=>htmlspecialchars($row['rc_career']),
                           'rc_deadline'=>htmlspecialchars($row['rc_deadline']),
                           'rc_text'=>htmlspecialchars($row['rc_text']),
                           'rc_directory'=>htmlspecialchars($row['rc_directory']),
                           'rc_imagename'=>htmlspecialchars($row['rc_imagename']),
                         )
            ?>
            <tr>
                <td><?=$filtered['rc_no']?></td>
                <td><?=$filtered['rc_title']?></td>
                <td><?=$filtered['rc_group']?></td>
                <td><?=$filtered['rc_form']?></td>
                <td><?=$filtered['rc_career']?></td>
                <td><?=$filtered['rc_deadline']?></td>
                <td><?=$filtered['rc_text']?></td>
                <td><?=$filtered['rc_directory']?></td>
                <td><?=$filtered['rc_imagename']?></td>
                <td><a href="admin_recruit_process_update.php?rc_no=<?=$filtered['rc_no']?>">UPDATE</a></td>
                <td>
                    <form action="admin_recruit_process_delete.php" method="post" onsubmit="if(!confirm('sure?')){return false;}">
                        <input type="hidden" name="rc_no" value="<?=$filtered['rc_no']?>">
                        <input type="submit" value="DELETE">
                    </form>
                </td>
            </tr>
            <?php
           }
                ?>
    </table>
    <?php

$escaped=array('rc_title'=>'','rc_group'=>'','rc_form'=>'','rc_career'=>'','rc_deadline'=>'','rc_text'=>'','rc_directory'=>'','rc_imagename'=>'');
$button='CREATE RECRUIT';
$form_action='admin_recruit_process_create.php';
$form_id='';

if(isset($_GET['rc_no'])){
    $filtered_id=mysqli_real_escape_string($conn, $_GET['rc_no']);
    settype($filtered_id,'integer');
    $sql="select * from recruit where rc_no={$filtered_id}";
    $result= mysqli_query($conn, $sql);

    $row=mysqli_fetch_array($result);
    $escaped['rc_title']=htmlspecialchars($row['rc_title']);
    $escaped['rc_group']=htmlspecialchars($row['rc_group']);
    $escaped['rc_form']=htmlspecialchars($row['rc_form']);
    $escaped['rc_career']=htmlspecialchars($row['rc_career']);
    $escaped['rc_deadline']=htmlspecialchars($row['rc_deadline']);
    $escaped['rc_text']=htmlspecialchars($row['rc_text']);
    $escaped['rc_directory']=htmlspecialchars($row['rc_directory']);
    $escaped['rc_imagename']=htmlspecialchars($row['rc_imagename']);



    $button='UPDATE RECRUIT';
    $form_action='admin_recruit_process_update.php';
    $form_id='<input type="hidden" name="rc_no" value="'.$_GET['rc_no'].'">';
}
?>

    <h1>POST</h1>
   <form action="<?=$form_action?>" enctype="multipart/form-data" method="post">
        <?=$form_id?>
       <p><input type="text" name="rc_title" placeholder="글 제목" value="<?=$escaped['rc_title']?>"></p>
       <p><input type="text" name="rc_group" placeholder="직군" value="<?=$escaped['rc_group']?>"></p>
       <p><input type="text" name="rc_form" placeholder="형태(상시)" value="<?=$escaped['rc_form']?>"></p>
       <p><input type="text" name="rc_career" placeholder="신입/경력" value="<?=$escaped['rc_career']?>"></p>
       <p><input type="date" name="rc_deadline" value="<?=$escaped['rc_deadline']?>"></p>
       <p><textarea name="rc_text" cols="30" rows="10" placeholder="글 내용"><?=$escaped['rc_text']?></textarea></p>
      <?php //<input type="file" name="myfile"> ?>
        <p><input type="submit" value="<?=$button?>"></p>
   </form>
   <p>'jpg, jpeg, png, gif 파일만 허용</p>


    <?php require("../../view/bottom.php"); ?>
