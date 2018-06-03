<?php
if (!isset($_SESSION['user'], $_SESSION['pretest_score'])) {
    $card_alert = "คุณยังไม่ได้ทำแบบทดสอบก่อนชมวีดีโอ";
    $card_location = "pretest.php";
    $card_btn = "ทำแบบทดสอบก่อนชมวีดีโอ";
    require "config/card.php";
} // ถ้ายังไม่ได้กรอกข้อมูล และไม่เคยทำแบบทดสอบก่อนดูวีดีโอ
else {
    $_SESSION['vdo'] = true;
    require "config/profile.php";
    ?>
  <div class="card">
    <h5 class="header-content">ชมวีดีโอ</h5>
    <iframe width="100%" height="50%" src="https://www.youtube.com/embed/BL4Mpz-P-I0" frameborder="0" allow="autoplay; encrypted-media"
      allowfullscreen></iframe>
  </div>
</div>
<?php } //ถ้าเคยทำแบบทดสอบก่อนดูวีดีโอ?>