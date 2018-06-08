<a href="?location=action/logout.php">ออกจากระบบ</a>
<?php
    if(!isset($_SESSION['admins'])){
       echo 'a;slfdjk';
    }
    $sql = "SELECT user_code,user_name, user_dep, user_pretest, user_aftest FROM users";
    $user = mysqli_query($con,$sql);
?>
    <table>
<?php
    while(list($code, $name, $dep, $u_pretest, $u_aftest ) = mysqli_fetch_array($user)){

    }
?>
