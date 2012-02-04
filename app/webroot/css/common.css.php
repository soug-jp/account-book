<?php 
ob_start();
header("Content-Type: text/css");
$mob = preg_match("/(SoftBank|DoCoMo|KDDI)/",$_SERVER["HTTP_USER_AGENT"]);
?>
/*
 * common.css
 * @author bis5 <bis5@bis5.mydns.jp>
 */
.left {
    width:70%;
    float:left;
}
.right {
    width:30%;
    float:right;
}
<?php if (!$mob): ?>
@media screen and (max-width: 600px) {
<?php endif; ?>
    .left {
        width:100%;
        float:none;
    }
    .right {
        width:100%;
        float:none;
    }
<?php if (!$mob): ?>
}
<?php endif; ?>
<?php ob_end_flush(); ?>
