<?php
if (!isset($_SESSION['user'])) {
    header("location:?location=form.php");
    exit();
} // ถ้ายังไม่ได้กรอกข้อมูล
require "config/profile.php";
if (isset($_SESSION['pretest_score'])) {
    $alert_msg = "คุณได้ทำแบบทดสอบก่อนชมวีดีโอไปเรียบร้อยแล้ว";
    $alert_btn = "ชมวีดีโอ";
    require "config/alert_test.php";
} // ถ้าเคยทำแบบทดสอบก่อนดูวีดีโอ
else {?>
<h4 class="header-content">แบบทดสอบก่อนชมวีดีโอ</h4>
<?php for ($i = 0; $i < $total_score; $i++) {?>
<form action="?location=action/check_test.php" method="post">
    <div class="question">
        <h5 style="color:#6e89ee;">
            <?php echo ($i + 1) . ". " . $question[$random[$i]]; ?>
        </h5>
        <input type="hidden" name="c<?php echo ($i + 1); ?>" value="<?php echo $question[$random[$i]]; ?>">
        <?php for ($j = 0; $j < 4; $j++) {?>
        <div class="question-label">
            <label class="lbl">
                <input class="with-gap" type="radio" name="<?php echo ($i + 1); ?>" value="<?php echo $choice[$random[$i]][$j]; ?>" required
                />
                <span style="font-size:20px;color:#5bb6ad;">
                    <?php echo $choice[$random[$i]][$j]; ?>
                </span>
            </label>
        </div>
        <?php }?>
    </div>
    <div class="clr"></div>
    <?php } // วนลูปคำถาม?>
        <button id="submit" type="submit" class="waves-effect waves-light btn">ส่งคำตอบ</button>
</form>
<?php } // ถ้ายังไม่เคยทำแบบทดสอบก่อนดูวีดีโอ ?>