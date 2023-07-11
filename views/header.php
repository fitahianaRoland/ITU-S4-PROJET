<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Newsbox - Modern Magazine &amp; Newspaper HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo site_url('assets/img/core-img/favicon.ico')?>">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/index.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/animate.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/classy-nav.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/registration.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css');?>">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="newsbox-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newsboxNav">

                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="<?php echo base_url('assets/img/core-img/logo.png');?>" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?php echo base_url('Lien/page/index');?>">Home</a></li>
                                    <li><a href="#">Objectifs</a>
                                        <ul class="dropdown">
                                            <li><a href="#">weight up</a></li>
                                            <li><a href="#">weight down</a></li>
                                            <li><a href="#">weight regular</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo site_url('Lien/page/dashboard');?>">dashboard</a></li>
                                    <li><a href="<?php echo site_url('Lien/sport/sport');?>">Les sport</a></li>
                                    <li><a href="<?php echo site_url('traitement/deconnection');?>">deconnection</a></li>
                                </ul>

                                <!-- Header Add Area -->
                            </div>
                            <!-- Nav End -->

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>