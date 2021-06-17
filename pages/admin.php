<?php require_once("./adminpages/print.php"); ?>
<?php require("./setting/admin_info.php"); ?>
<?php include("./setting/dbconn.php"); ?>


<?php require("./view/top.php"); ?>
<?php require("./view/navi.php"); ?>

<div style="text-align:center; padding : 300px 0;">
<span style="text-align:center;">
<?php print_description(); ?>
</span>
</div>

<?php require('./view/bottom.php');?>
