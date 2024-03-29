<?php session_start()?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site 1</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .button_exit{
            margin-top: 9px;
            border: none;
            background: none;
        }
        .button_exit:hover{
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <header class="col-md-12">
                <?php
                if(!isset($_SESSION['registered_user'])){
                    include_once 'pages/function.php';
                    include_once 'pages/log_in.php';
                }
                ?>
            </header>
        </div>
        <div class="row">
            <nav class="col-md-12">
                <?php include_once 'pages/menu.php'?>
                <?php include_once 'pages/function.php'?>
            </nav>
        </div>
        <div class="row">
            <section class="col-md-12">
                <?php include_once 'pages/function.php'?>
                <?php
                if(isset($_GET['page'])){
                    $page=$_GET['page'];
                    if($page==1) include_once 'pages/home.php';
                    if($page==2) include_once 'pages/upload.php';
                    if($page==3) include_once 'pages/gallery.php';
                    if($page==4) include_once 'pages/registration.php';
                }
                else{
                    include_once 'pages/home.php';
                }
                ?>
            </section>
        </div>
    </div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>