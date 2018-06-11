<a href="?location=action/logout.php">ออกจากระบบ</a>
<?php
    if(!isset($_SESSION['admins'])){
       echo 'a;slfdjk';
    }
    $pass = array("ไม่ผ่าน","่ผ่าน");
    $sql = "SELECT user_code,user_name, user_dep, user_pretest, user_aftest FROM users";
    $user = mysqli_query($con,$sql);
?>
    <table>
    <tr>
        <td>รหัสพนักงาน</td>
        <td>ชื่อ - นามสกุล</td>
        <td>แผนก</td>
        <td>แบบทดสอบก่อนดูวีดีโอ</td>
        <td>แบบทดสอบหลังดูวีดีโอ</td>
    </tr>
<?php
    while(list($code, $name, $dep, $u_pretest, $u_aftest ) = mysqli_fetch_array($user)){
        echo '<tr>';
        echo "<td>$code</td>";
        echo "<td>$name</td>";
        echo "<td>$department[$dep]</td>";
        echo "<td>$pass[$u_pretest]</td>";
        echo "<td>$pass[$u_aftest]</td>";
        echo '</tr>';
    }
?>
</table>