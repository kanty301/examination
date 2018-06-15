<nav>
  <div class="nav-wrapper  light-blue darken-2">
    <a href="index.php" class="brand-logo"></a>
    <ul class="right hide-on-med-and-down">
      <?php if (!isset($_SESSION['login']) || $_SESSION['login'] == 0) {?>
      <li>
        <a href="?location=wellcome.html">
          <i class="material-icons left">home</i>หน้าแรก</a>
      </li>
      <li>
        <a href="?location=pretest.php">
          <i class="material-icons left">assignment_turned_in</i>แบบทดสอบก่อนชมวีดีโอ</a>
      </li>
      <li>
        <a href="?location=watch_animation.php">
          <i class="material-icons left">play_circle_outline</i>ชมวีดีโอ</a>
      </li>
      <li>
        <a href="?location=after_test.php">
          <i class="material-icons left">assignment_turned_in</i>แบบทดสอบหลังชมวีดีโอ</a>
      </li>
      <?php } else if ($_SESSION['login'] == 1) {?>
      <li>
        <a href="?location=admin/user_report.php">
          <i class="material-icons left">assignment</i>รายชื่อผู้ทำแบบทดสอบ</a>
      </li>
      <li>
        <a href="?location=admin/report.php">
          <i class="material-icons left">insert_chart</i>สรุปสถิติ</a>
      </li>
      <?php }?>
      <?php if (!isset($_SESSION['login'])) {?>
      <li>
        <a href="?location=admin_login.php">
          <i class="material-icons left">verified_user</i>ผู้ดูแล</a>
      </li>
      <?php }else{?>
      <li>
        <a href="?location=action/logout.php">
          <i class="material-icons left">power_settings_new
          </i>ออกจากระบบ</a>
      </li>
      <?php } ?>

      <li>
        <a href="#">
          <i class="material-icons" id="close-menu">arrow_drop_up</i>
        </a>
      </li>
    </ul>
  </div>
</nav>