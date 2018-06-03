<div class="row">
    <form class="col s4 offset-s4" action="?location=action/set_session.php" method="post">
        <h4 class="header-content">กรอกข้อมูลก่อนทำแบบทดสอบ</h4>
        <div class="row">
            <div class="input-field col s12">
                <input id="id" name="id" type="text" class="validate" required>
                <label for="id">รหัสพนักงาน</label>
            </div>
            
            <div class="input-field col s12">
                <input id="name" name="name" type="text" class="validate" required>
                <label for="name">ชื่อ - นามสกุล</label>
            </div>
            
            <div class="input-field col s12">
                <select name="department" required>
                    <option value="" disabled selected>กรุณาเลือกแผนก</option>
                    <?php for($i = 0; $i < sizeof($department);$i++){
                    echo "<option value='$department[$i]'>$department[$i]</option>";
                     } ?>
                </select>
                <label>แผนก</label>
            </div>
            <button id="submit" type="submit" class="light-blue darken-2 waves-effect waves-light btn">ยืนยัน</button>
        </div>
    </form>
</div>