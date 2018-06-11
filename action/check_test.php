<?php
if (!isset($_SESSION["id"], $_SESSION["name"], $_SESSION["name"])) {
    header('location:?location=register.php');
}
$test_score = 0;
for ($i = 1; $i <= $total_score; $i++) {
    $indexQuestion = 'c' . $i;
    $sql = "SELECT * FROM question WHERE quest_q = '$_POST[$indexQuestion]' AND quest_a = '$_POST[$i]'";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    if (mysqli_num_rows($result) > 0) {
        $test_score++;
    }
} // นับคะแนนทั้งหมด
if (!isset($_SESSION['pretest_score'])) {
    $_SESSION['pretest_score'] = checkPass($test_score, $total_score); // สร้าง session เก็บคะแนนก่อนดูวีดีโอ
    $report = "สรุปคะแนนแบบทดสอบก่อนชมวีดีโอ";
    $vdo = 'เริ่มชมวีดีโอ';
} else {
    $_SESSION['aftertest_score'] = checkPass($test_score, $total_score); // สร้าง session เก็บคะแนนหลังดูวีดีโอ
    $report = "สรุปคะแนนแบบทดสอบหลังชมวีดีโอ";
    $vdo = 'กลับไปชมวีดีโอ';
    if (!isset($_SESSION['membered'])) {
        $sql = "INSERT INTO users(
          user_id,
          user_name,
          user_dep,
          user_pretest,
          user_aftest,
          user_status,
          user_code) VALUES (
            NULL,
            '$_SESSION[name]',
            '$_SESSION[department]',
            '$_SESSION[pretest_score]',
            '$_SESSION[aftertest_score]',
            '$_SESSION[user]',
            '$_SESSION[id]')";
        mysqli_query($con, $sql);
    }
}
$result_score = $test_score >= 8 ? 'ผ่าน' : 'ไม่ผ่าน'; // เอาไว้แสดงคำว่าผ่านหรือไม่ผ่าน
?>
  <div class="row">
    <div class="col s6  offset-s3">
      <div class="card">
        <div class="card-content">
            <p><?php echo $report; ?></p>
          <p>คุณได้คะแนน <?php echo $test_score; ?> คะแนน</p>
          <p>ผล: <?php echo $result_score; ?></p>
        </div>
        <div class="card-action">
          <a href="?location=watch_animation.php" class="light-blue darken-2 waves-effect waves-light btn"><?php echo $vdo; ?></a>
        </div>
      </div>
    </div>
  </div>
