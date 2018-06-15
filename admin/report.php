<?php require 'admin/admin_session.php';?>
<link rel="stylesheet" href="css/graph.css">
<h5 class="header-content">ผลการทดสอบทั้งหมด
    <?php echo $total_user ?> คน</h5>
<div class="box-graph">
    <div>
        <h5 class="header-content">แบบทดสอบก่อนชมวีดีโอ</h5>
        <div class="graph">
            <div class="left2">
                <div>100</div>
                <div>90</div>
                <div>80</div>
                <div>70</div>
                <div>60</div>
                <div>50</div>
                <div>40</div>
                <div>30</div>
                <div>20</div>
                <div>10</div>
                <div>0</div>
            </div>
            <div class="right2">
                <div class="g1" style="height: <?php echo $g1 . '%'; ?>"></div>
                <div class="g2" style="height: <?php echo $g2 . '%'; ?>"></div>
            </div>
        </div>
       
    </div>
    <div>
        <h5 class="header-content">แบบทดสอบหลังชมวีดีโอ</h5>
        <div class="graph">
            <div class="left2">
                <div>100</div>
                <div>90</div>
                <div>80</div>
                <div>70</div>
                <div>60</div>
                <div>50</div>
                <div>40</div>
                <div>30</div>
                <div>20</div>
                <div>10</div>
                <div>0</div>
            </div>
            <div class="right2">
                <div class="g1" style="height: <?php echo $g3 . '%'; ?>"></div>
                <div class="g2" style="height: <?php echo $g4 . '%'; ?>"></div>
            </div>
        </div>
        
    </div>

    <div class="detail">
            <div class="g1"></div> ผ่าน
            <?php printf("%.2f%%", $g1);?>
            <div class="g2"></div> ไม่ผ่าน
            <?php printf("%.2f%%", $g2);?>
        </div>

        <div class="detail">
                <div class="g1"></div> 
                ผ่าน
                <?php printf("%.2f%%", $g3);?>
                <div class="g2"></div> ไม่ผ่าน
                <?php printf("%.2f%%", $g4);?>
        </div>
</div>