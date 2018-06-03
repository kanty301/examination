<?php 
    session_destroy();
    if(!isset($_POST['username'], $_POST['password'])){ //ถ้ายังไม่ได้กรับข้อมูลจากฟอร์ม
        header('location:admin_login.php');
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admins WHERE admin_uname = '$username' AND admin_pwd = '$password'";
        $admin = mysqli_query($con,$sql);
        if(mysqli_num_rows($admin) > 0){ //ล็อกอินผ่าน
            list($_SESSION['code'],$_SESSION['name'],$_SESSION['id']) = mysqli_fetch_array($admin);
        }else{
            $card_alert = "รหัสผ่านหรือชื่อผู้ใช้ไม่ถูกต้อง";
            $card_location = "admin_login.php";
            $card_btn = "เข้าสู่ระบบอีกครั้ง";
            require("config/card.php");
        }
    }
?>