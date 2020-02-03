<?php
    require("./userinfo.php");
    $conn=mysqli_connect($hostname,$username,$password,$DBname);
  ?>


    <?php require("view/top.php");?>

    <a href="admin_recruit.php">
        <h1>WEB</h1>
    </a>

    <table border="1">
        <tr>
            <td>rc_no</td><td>rc_title</td><td>rc_group</td><td>UPDATE</td><td>DELETE</td>
        </tr>
        <?php
            $sql='select * from recruit;';
            $result= mysqli_query($conn, $sql);

//$row에는 DB테이블에 저장된 정보가 한줄씩 배열

        while($row=mysqli_fetch_array($result)){
            $filtered=array('rc_no'=>htmlspecialchars($row['rc_no']),
                           'rc_title'=>htmlspecialchars($row['rc_title']),
                           'rc_group'=>htmlspecialchars($row['rc_group']))
            ?>
            <tr>
                <td><?=$filtered['rc_no']?></td>
                <td><?=$filtered['rc_title']?></td>
                <td><?=$filtered['rc_group']?></td>
                <td><a href="author.php?rc_no=<?=$filtered['rc_no']?>">UPDATE</a></td>
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

$escaped=array('rc_title'=>'','rc_group'=>'');
$button='CREATE RECRUIT';
$form_action='admin_recruit_process_create.php';
$form_id='';

if(isset($_GET['rc_no'])){
    $filtered_id=mysqli_real_escape_string($conn, $_GET['rc_no']);
    settype($filtered_id,'integer');
    $sql="select * from topic where rc_no={$filtered_id}";
    $result= mysqli_query($conn, $sql);

    $row=mysqli_fetch_array($result);
    $escaped['rc_title']=htmlspecialchars($row['rc_title']);
    $escaped['rc_group']=htmlspecialchars($row['rc_group']);

    $button='UPDATE RECRUIT';
    $form_action='admin_recruit_process_update.php';
    $form_id='<input type="hidden" name="rc_no" value="'.$_GET['rc_no'].'">';
}
?>

    <h1>POST</h1>
   <form action="<?=$form_action?>" enctype="multipart/form-data" method="post">
        <?=$form_id?>
       <p><input type="text" name="rc_title" placeholder="rc_title" value="<?=$escaped['rc_title']?>"></p>
       <p><textarea name="rc_group" cols="30" rows="10" placeholder="rc_group"><?=$escaped['rc_group']?></textarea></p>
      <?php //<input type="file" name="myfile"> ?>
        <p><input type="submit" value="<?=$button?>"></p>
   </form>
   <p>'jpg, jpeg, png, gif 파일만 허용</p>


    <?php require("view/bottom.php"); ?>
