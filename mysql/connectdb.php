<?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db_name = "animation3";

    $con = mysqli_connect($host,$username,$pass,$db_name) or die(mysqli_error($con)); //ติดต่อฐานข้อมูล
    mysqli_set_charset($con,"utf8"); 

  
?>