<?php
    if(isset($con, $result)){
        mysqli_close($con);
        unset($result,$sql,$record);
    }
?>