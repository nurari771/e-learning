<?php
include('includes/connection.php');
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <link href="css/jquery.bxslider.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
<header class="header_area">
    <div class="container">
        <div class="row top_header">
            <div class="col-md-8 col-sm-8 col-xs-12">
                <ul class="social_top">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="loginreg">
                    <ul>
                        <?php
                        session_start();
                        if(!isset($_SESSION['luser_name'])):?>
                        <li><a href="login.php"><img src="img/login.png">&nbsp;Login</a></li>
                        <li><a href="registration.php">Regester</a></li>
                        <?php else: ?>
                        <li><strong>Hello <?php echo $_SESSION['luser_name'];?><span>    </span></strong></li>
                        <li><a href="logout.php">Logout</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row logo_area">
            <div class="col-md-6 col-sm-6- col-xs-12">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png" alt="News"></a>
                </div>
            </div>

        </div>

    </div>
</header>
