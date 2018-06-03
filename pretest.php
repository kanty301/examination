<?php
if (!isset($_SESSION['user'])) {
    header("location:?location=form.php");
}
?>

<div class="row">
    <div class="col s6 offset-s3">
        <?php require "config/profile.php";
        if (isset($_SESSION['pretest_score'])) {
            $alert_msg = "คุณได้ทำแบบทดสอบก่อนชมวีดีโอไปเรียบร้อยแล้ว";
            $alert_btn = "ชมวีดีโอ";
            require "config/alert_test.php";
    
        } else {?>

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
            <?php }?>
            <div class="question">
                <button id="submit" type="submit" class="waves-effect waves-light btn">ส่งคำตอบ</button>
            </div>
        </form>
    </div>
</div>
                <?php } ?>