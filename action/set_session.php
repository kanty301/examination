<?php
if (!isset($_POST['name'], $_POST['department'], $_POST['id'])) { // ถ้าไม่ได้รับค่า name department id จากผู้ใช้
    header("location:?location=index.php");
} else {
    $sql0 = "SELECT user_pretest, user_aftest FROM users WHERE user_name != '$_POST[name]' AND user_code = '$_POST[id]'";
    $check_user0 = mysqli_query($con, $sql0) or die(mysqli_error($con));
    if (mysqli_num_rows($check_user0) > 0) { // ถ้าข้อมูลซ้ำ
        $card_alert = "รหัสพนักงานนี้มีอยู่ในระบบแล้ว";
        $card_location = "form.php";
        $card_btn = "เข้าสู่ระบบอีกครั้ง";
        require "config/card.php";
    } else {
        $_SESSION['login'] = 0;
        $_SESSION['user'] = 0;
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['department'] = $_POST['department'];
        $_SESSION['id'] = $_POST['id'];
        $sql = "SELECT user_pretest, user_aftest FROM users WHERE user_name = '$_POST[name]' AND user_code = '$_POST[id]' LIMIT 1";
        $check_user = mysqli_query($con, $sql) or die(mysqli_error($con));
        if (mysqli_num_rows($check_user) > 0) {
            list($_SESSION['pretest_score'], $_SESSION['aftertest_score']) = mysqli_fetch_array($check_user);
            $_SESSION['membered'] = true;
        }
        header("location:?location=pretest.php");
    }
}
