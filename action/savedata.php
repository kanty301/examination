<?php
if(!isset($_POST['submit'])){
    header("location: index.php");
    exit;
}else{
    $name = $_SESSION['name'];
    $dep = $_SESSION['dep'];
    $pretest = $_SESSION['pretest'];
    $aftest = chedkPass($_POST['aftest']);

    $sql = "INSERT INTO users (user_id, user_name, user_dep, user_pretest, user_aftest) VALUES ('$name','$dep','$pretest','$aftest')";
    mysqli_query($con,$sql);
    session_destroy();
    header("location: index.php");
    exit;
}
?>