<link rel="stylesheet" href="css/graph.css">
<h2 style="text-align:center; padding-right: 155px;">ผลการทดสอบทั้งหมด <?php echo $total_user ?> คน</h2>
<div class="graph">
    <div></div>
    <div class="left">
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
    <div class="right">
        <div class="g1" style="height: <?php echo $g1 . '%'; ?>"></div>
        <div class="g2" style="height: <?php echo $g2 . '%'; ?>"></div>
    </div>
</div>
<div class="detail">
    
    <div class="g1"></div> ผ่าน <?php printf("%.2f%%",$g1);?>
    <div class="g2"></div> ไม่ผ่าน <?php printf("%.2f%%",$g2);?>
</div>