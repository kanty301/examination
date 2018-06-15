<?php
session_start();
require "config/config.php";
?>
<html lang="en">

<head>
    <title>Project</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css"> -->
    <!-- Compiled and minified JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> -->
    
    <!-- <link rel="stylesheet" href="icon/web-fonts-with-css/css/fontawesome-all.min.css"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Local file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">
</head>

<body>

    <div id="box">
        <div class="menu">
            <?php require "config/menu.php";?>
        </div> 
        <a href="#"><i class="material-icons light-blue darken-2"  id="menu-icon">arrow_drop_down</i></a>
        <img src="image/banner.jpg" width="100%" alt="" id="banner">
        
        <div class="content container">
            <?php require "$location"?>
        </div>
    </div>
   
    <?php require 'mysql/unconn.php';?>
    <script src="script/jquery.js"></script>
    <script src="script/materialize.js"></script>
    <script>
        $(document).ready(function () {
            $(".card").hide();
            $("form").hide();
            $(".menu").hide();
            var divMenu = $(".menu").attr("display");
            $("form").fadeIn(500);
            $(".card").slideDown(500);
            $('input#input_text, textarea#textarea2').characterCounter();
            $('.tooltipped').tooltip();
            $('select').formSelect();
            $('.dropdown-trigger').dropdown()
            $("#menu-icon").click(function(){
                $(".menu").slideDown(500)
                $(this).fadeOut(500)
            })
            $("#close-menu").click(function(){
                $(".menu").slideUp(500);
                $("#menu-icon").fadeIn(500)
            });

              $("#id").keydown(function (e) { // ทำให้พิมพ์ได้แค่ตัวเลข
                        // Allow: backspace, delete, tab, escape, enter and .
                        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                                // Allow: Ctrl+A, Command+A
                                
                                (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                                // Allow: home, end, left, right, down, up
                                (e.keyCode >= 35 && e.keyCode <= 40)) {
                                // let it happen, don't do anything
                                return;
                        }
                        // Ensure that it is a number and stop the keypress
                        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                                e.preventDefault();
                        }
                });
        });
    </script>
</body>
</html>