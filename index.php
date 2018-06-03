<?php
session_start();
require "config/config.php";
?>
<html lang="en">

<head>
    <title>Project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    
    <!-- <link rel="stylesheet" href="icon/web-fonts-with-css/css/fontawesome-all.min.css"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Local file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.css">
</head>

<body>
    <div id="box">
        <div class="menu">
            <?php require "config/menu.html";?>
        </div>
        <div class="content">
            <?php require "$location"?>
        </div>
    </div>
    </div>
    <!-- End Container-->
    <?php require 'mysql/unconn.php';?>
    <script src="script/jquery.js"></script>
    <script src="script/materialize.js"></script>
    <script>
        $(document).ready(function () {
            $(".card").hide();
            $("form").hide();

            $("form").fadeIn(500);
            $(".card").slideDown(500);
            $('input#input_text, textarea#textarea2').characterCounter();
            $('.tooltipped').tooltip();
            $('select').formSelect();
            $('.dropdown-trigger').dropdown()
        });
    </script>
</body>

</html>