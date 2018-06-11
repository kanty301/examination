<?php 
   
    if(!isset($_POST['username'], $_POST['password'])){ //ถ้ายังไม่ได้กรับข้อมูลจากฟอร์ม
        header('location:?location=admin_login.php');
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admins WHERE admin_uname = '$username' AND admin_pwd = '$password'";
        $admin = mysqli_query($con,$sql);
        if(mysqli_num_rows($admin) > 0){ //ล็อกอินผ่าน
            $_SESSION['login'] = 1; //ถ้าเป็น admin = 1 , user = 0
            $_SESSION['admin'] = 0; // เก็บสถานะการล็อกอินของ admin
            list($_SESSION['code'],$_SESSION['name'],$_SESSION['id']) = mysqli_fetch_array($admin);
            header("location:?location=admin/user_report.php");
        }else{
            $card_alert = "รหัสผ่านหรือชื่อผู้ใช้ไม่ถูกต้อง";
            $card_location = "admin_login.php";
            $card_btn = "เข้าสู่ระบบอีกครั้ง";
            require("config/card.php");
        }
    }
?>