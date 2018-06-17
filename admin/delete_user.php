<?php
if(isset($_GET['user_code'])){
    require("../mysql/connectdb.php");
    $sql = "DELETE FROM users WHERE user_code = '$_GET[user_code]'";
    mysqli_query($con,$sql) or die(mysqli_error($con));
}
header("location:../?location=admin/user_report.php");
?>
