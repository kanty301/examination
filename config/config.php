<?php
require 'mysql/connectdb.php';
require 'config/function.php';

if (isset($_SESSION['user'])) {
    if ($_SESSION['user'] == 1) {
        $total_user = mysqli_num_rows(mysqli_query($con, "SELECT * FROM users"));
        $pretest_pass = mysqli_num_rows(mysqli_query($con, "SELECT user_pretest FROM users WHERE user_pretest = '1'"));
        $pretest_fail = mysqli_num_rows(mysqli_query($con, "SELECT user_pretest FROM users WHERE user_pretest = '0'"));
        $aftest_pass = mysqli_num_rows(mysqli_query($con, "SELECT user_aftest FROM users WHERE user_aftest = '1'"));
        $aftest_fail = mysqli_num_rows(mysqli_query($con, "SELECT user_aftest FROM users WHERE user_aftest = '0'"));
        
        $g1 = $pretest_pass == 0 ? 0 : calScore($pretest_pass, $total_user);
        $g2 = $pretest_fail == 0 ? 0 : calScore($pretest_fail, $total_user);
        
        $g3 = $aftest_pass == 0 ? 0 : calScore($aftest_pass, $total_user);
        $g4 = $pretest_fail == 0 ? 0 : calScore($aftest_fail, $total_user);
    } // ตัวแปรสำหรับกราฟ ให้แอดมินดู
    else { 
       
        $total_score = 1;
        $question = array(
            "เครื่องกำเนิดรังสีที่ใช้ในบริษัทเป็นเครื่องกำเนิดรังสีชนิดใด ?",
            "เรานำเครื่องกำเนิดรังสีมาเพื่อทำอะไร ?",
            "เครื่อง X-Ray มีความพิเศษยังไง ?",
            "เครื่อง X-Ray ในบริษัทเราจัดอยู่ในเครื่อง X-Ray ประเภทใด ?",
            "สิ่งที่ควรปฏิบัติก่อนจะเข้าใช้เครื่องX-Ray ?",
            "อุปกรณ์ป้องกันรังสีชนิดใดที่ใช้ป้องกันรังสีจากดวงตา ?",
            "อุปกรณ์ป้องกันรังสีชนิดใดที่ป้องกันอันตรายของอวัยวะภายใน ?",
            "อุปกรณ์ป้องกันรังสีชนิดใดที่ป้องกันอันตรายในการสัมผัสจากมือ ?",
            "รังสีที่แผ่อออกมาโดนอวัยวะใดที่จะก่อให้เกิดความเสี่ยงเป็นต้อกระจก ?",
            "ทำไมจึงต้องมีการให้ความรู้เรื่องความปลอกภัยในการใช้เครื่อง X-Ray ?",
            "ถ้าเกิดมีความผิดปกติของเครื่อง X-Ray ต้องทำอย่างไร ?",
            "ถ้าเกิดมีรังสีเกินกว่าค่าที่กำหนดควรปฏิบัติอย่างไร ?",
            "อุปกรณ์ป้องกันรังสีชนิดใดที่มีเฉพาะตัวบุคคล ?",
            "โรงงานทาคาโน๊ะประเทศไทย ผลิต อะไร ?",
            "ควรปฏิบัติอย่างไรกับการใช้งานเครื่อง X-Ray ?",
        ); // คำถาม

        $choice = array(
            array("เครื่องกำเนิดรังสีชนิดรังสี X-Ray", "เครื่องกำเนิดรังสีชนิดรังสี แกรมมา", "เครื่องกำเนิดรังสีชนิดรังสี บีต้า", "ไม่มีข้อถูก"),
            array("ตรวจสอบความผิดปกติของชิ้นงาน", "ตรวจสอบคุณภาพชิ้นงาน", "ตรวจสอบรอยรั่วหรือรอยร้าว", "ถูกทุกข้อ"),
            array("มีความแม่นยำสูง", "มีราคาที่ถูกกว่าเครื่องวัดชนิดอื่น", "มีการใช้งานที่ง่าย", "กฎหมายอุตสาหกรรมสั่งต้องมี"),
            array("เครื่อง X-Ray ที่ใช้ในทางการแพทย์", "เครื่อง X-Ray ที่ใช้ในทางโทรคมนานคม", "เครื่อง X-Ray ที่ใช้ในอุตสาหกรรม", "เครื่อง X-Ray ที่ใช้ตรวจสอบสัมภาระในสนามบิน"),
            array("สามารถปฏิบัติงานได้เลย", "ควรสวมใส่อุปกรณ์ป้องกันอันตรายจากรังสีให้ครบถ้วน", "ใส่เฉพาะถุงมือเพื่อป้องกันรังสีในการสัมผัส", "ถูกทุกข้อ"),
            array("ชุดตะกั่ว", "ถุงมือกันรังสี", "แว่นตากันรังสี", "รองเท้า safety"),
            array("ชุดตะกั่ว", "ถุงมือกันรังสี", "แว่นตากันรังสี", "รองเท้า safety"),
            array("ชุดตะกั่ว", "ถุงมือกันรังสี", "แว่นตากันรังสี", "รองเท้า safety"),
            array("ดวงตา", "หัวใจ", "ปอด", "มือ"),
            array("ทำตามกฏของบริษัท", "เพื่อให้เกิดความปลอดภัยแก่ผู้ปฏิบัติงาน", "เพื่อความปลอดภัยของหัวหน้างาน", "ถูกทุกข้อ"),
            array("ซ่อมด้วยตนเอง", "แจ้งเจ้าหน้าที่ผู้รับผิดชอบ", "ปล่อยทิ้งไว้โดยไม่สนใจ", "ไม่มีข้อถูก"),
            array("ปฏิบัติงานตามปกติโดยไม่สนใจ", "แจ้งหัวหน้างานหรือเจ้าหน้าที่ที่เกี่ยวข้อง", "ปล่อยไว้โดยคิดว่าไม่เป็นไร", "ถูกทุกข้อ"),
            array("ชุดตะกั่ว", "แว่นตากันรังสี", "แถบวัดรังสีประจำตัวบุคคล", "ถุงมือป้องกันรังสี"),
            array("ชิ้นส่วนอิเล็กทรอนิกส์", "ชิ้นส่วนยานยนต์", "ชิ้นส่วนเครื่องจักร", "ถูกทุกข้อ"),
            array("ทำตามที่หัวหน้าสั่งและทำตามคู่มือและคำแนะนำในการอบรม", "ทำตามอำเภอใจ", "ทำตามที่เพื่อนร่วมงานบอก", "ทำตามคำแนะนำในอินเตอร์เน็ต"),
        ); // ตัวเลือก
        $random = range(0, 14); // ตัวแปรเอาไว้เป็น index ของอาเรย์คำถามและตัวเลือก
        shuffle($random); // สุ่ม
       
    }
}
$department = array(
    "Qc",
    "Plating",
    "Maintenace",
    "Injection",
    "General",
    "warehouse",
    "Tooling",
    "Technical",
    "Store",
    "CNC",
    "Analyst",
); // เผนนกทั้งหมด

$location = isset($_GET['location']) ? $_GET['location'] : "wellcome.html"; // ที่อยู่เอาไว้เรียกใช้ไฟล์
