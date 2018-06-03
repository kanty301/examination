<ul class="collection">
    <li class="collection-item avatar grey lighten-4">
        <img src="image/user.png" alt="" class="circle">
        <?php
             echo "<span class='title'>ชื่อ: " . $_SESSION['name'] . "</span>
             <p>รหัสประจำตัว: " . $_SESSION['id'] . "<br>
             แผนก: " . $_SESSION['department'] . "
             </p>
             ";
             ?>
        <a href="?location=action/logout.php" class="secondary-content tooltipped" data-position="bottom" data-tooltip="ออกจากระบบ">
        <i class="material-icons">cancel</i>
    </a>
</li>
</ul>
<!-- แสดงโปรไฟล์ -->