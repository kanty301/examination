<?php
if (!isset($_SESSION['user'], $_SESSION['pretest_score'])) {
    $card_alert = "คุณยังไม่ได้ทำแบบทดสอบก่อนชมวีดีโอ";
    $card_location = "pretest.php";
    $card_btn = "ทำแบบทดสอบก่อนชมวีดีโอ";
    require "config/card.php";
} else {
    $_SESSION['vdo'] = true;
    ?>
<div class="row">
  <div class="col s6 offset-s3">
    <?php require "config/profile.php";?>
  </div>
</div>
<div class="row">
  <div class="col s6 offset-s3 card">
    <h5 class="header-content">ชมวีดีโอ</h5>
    <iframe width="100%" height="50%" src="https://www.youtube.com/embed/BL4Mpz-P-I0" frameborder="0" allow="autoplay; encrypted-media"
      allowfullscreen></iframe>
  </div>
</div>
<?php }?>