<div class="row">
    <h4 class="header-content">เข้าสู่ระบบผู้ดูแล</h4>
    <div class="col s6 offset-s3">
        <form action="?location=action/admin_check.php" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="uname" name="username" type="text" class="validate" required>
                    <label for="uname">ฃื่อผู้ใช้งาน</label>
                </div>
                <div class="input-field col s12">
                    <input id="pwd" name="password" type="password" class="validate" required>
                    <label for="pwd">รหัสผ่าน</label>
                </div>
                <button id="submit" type="submit" class="light-blue darken-2 waves-effect waves-light btn">ยืนยัน</button>
            </div>
        </form>
    </div>
</div>