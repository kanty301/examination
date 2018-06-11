
<?php
    if(!isset($_SESSION['admin'])){
       header("location:?location=wellcome.html");
    }
    $pass = array("<span class='badge badge-danger'>ไม่ผ่าน</span>","<span class='badge badge-success'>ผ่าน</span>");
    $sql = "SELECT user_code,user_name, user_dep, user_pretest, user_aftest FROM users";
    $user = mysqli_query($con,$sql);
?>
    <h5 class="header-content">รายชื่อผู้ทำแบบทดสอบ</h5>
    <table  class="highlight centered">
        <tr class="blue lighten-3 centered" >
            <td>รหัสพนักงาน</td>
            <td>ชื่อ - นามสกุล</td>
            <td>แผนก</td>
            <td class='centered'>แบบทดสอบก่อนดูวีดีโอ</td>
            <td class='centered'>แบบทดสอบหลังดูวีดีโอ</td>
        </tr>
<?php
    while(list($code, $name, $dep, $u_pretest, $u_aftest ) = mysqli_fetch_array($user)){
        echo '<tr class="grey lighten-4">';
            echo "<td>$code</td>";
            echo "<td>$name</td>";
            echo "<td>$dep</td>";
            echo "<td class='centered'>$pass[$u_pretest]</td>";
            echo "<td class='centered'>$pass[$u_aftest]</td>";
        echo '</tr>';
    }
?>
</table>


