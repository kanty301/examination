<?php
    function checkUser(){
        if(isset($_SESSION['name'], $_SESSION['dep'])){return true; }else {return false;}
    }

    function checkSession($session,$navigation){
        if(!isset($_SESSION[$session])){header("location=$navigation");}
    }

    function calScore($score, $total){
        return $score * 100 / $total;
    }

    function checkPass($score, $total){
        if($score == 0 || $total/$score > 2){return 0;}else if($total/$score <= 2){return 1;}
    }
?>