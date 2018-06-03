<?php
if (!isset($_SESSION['user'], $_SESSION['pretest_score'], $_SESSION['vdo'])) {
    $card_alert = "คุณยังไม่ได้ชมวีดีโอ";
    $card_location = "watch_animation.php";
    $card_btn = "ชมวีดีโอ";
    require "config/card.php";
} // ถ้ายังไม่เคยดูวีดีโอ และไม่เคยกรอกข้อมูล
else {
    if (isset($_SESSION['user'])) {
        require "config/profile.php";
    } // ถ้ากรอกข้อมูลแล้ว มีการสร้าง $_SESSION['user']
    if (isset($_SESSION['aftertest_score'])) {
        $alert_msg = "คุณได้ทำแบบทดสอบหลังชมวีดีโอไปเรียบร้อยแล้ว";
        $alert_btn = "กลับไปชมวีดีโอ";
        require "config/alert_test.php";
    } // ถ้าเคยทำแบบทดสอบไปแล้ว
    else {?>
    <h4 class="header-content">แบบทดสอบหลังชมวีดีโอ</h4>
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
                <div class="clr"></div> <!-- Clear float ขึ้นบรรทัดใหม่ของคำถาม  -->
                <?php } // วนลูปคำถาม  ?>
                <div class="question">
                    <button id="submit" type="submit" class="waves-effect waves-light btn">ส่งคำตอบ</button>
                </div>
            </form>
    <?php
        } // ถ้ายังไม่เคยทำแบบทดสอบ
} // ถ้าเคยดูวีดีโอ และกรอกข้อมูลแล้ว
?>