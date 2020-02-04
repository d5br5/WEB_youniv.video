<?php
$mb_id = $_SESSION['ss_mb_id'];

$sql="SELECT * from member where mb_id='$mb_id' ";
$result=mysqli_query($conn, $sql);
$mb=mysqli_fetch_assoc($result);
mysqli_close($conn);

$past_url=basename($_SERVER['REQUEST_URI']);
if($past_url==$folder){$past_url='index.php';};

 ?>
<body>

    <h1 class="main">
        <a href="index.php">
            <font color="white">도 형 's&nbsp; 의 경 생 활</font>
        </a>
    </h1>

    <h2 class="military" id="message"></h2>

    <div class="status">
    <?php if(isset($_SESSION['ss_mb_id'])){
    // echo $mb['mb_name']."님 환영합니다.<br>" ;
    ?>
    <form action="logout.php" method="post">
      <input type="hidden" name="past_url" value="<?php echo $past_url; ?>">
      <input class="status_button" type="submit" value="로그아웃">
    </form>
    <?php
    }else {
     ?>
     <form action="login.php" method="post">
       <input type="hidden" name="past_url" value="<?php echo $past_url; ?>">
       <input class="status_button" type="submit" value="로그인">
     </form>
     <?php    }      ?>
   </div>
