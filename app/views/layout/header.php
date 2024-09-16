    <!DOCTYPE html>
    <html lang="<?php echo LANGUAGE?>">

    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">

        <!-- ========== Page Title ========== -->
        <title><?php echo $data['lang']['main']['site_name'];?></title>

        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" href="<?php echo URL?>public/assets/favicon.png" type="image/x-icon">

        <!-- ========== Start Stylesheet ========== -->
        <link href="<?php echo URL?>public/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/themify-icons.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/elegant-icons.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/flaticon-set.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/magnific-popup.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/swiper-bundle.min.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/animate.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/validnavs.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/helper.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/unit-test.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/css/style.css" rel="stylesheet">
        <link href="<?php echo URL?>public/assets/style.css" rel="stylesheet">
        <!-- ========== End Stylesheet ========== -->


    </head>

    <body class="bg-fixed dark-layout text-light" style="background-image: url(<?php echo URL?>public/assets/img/shape/banner-2.jpg);">

    <!-- Start Preloader
    ============================================= -->
    <div id="preloader">
        <div id="anaton-preloader" class="anaton-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="H" class="letters-loading">
                        H
                    </span>
                    <span data-text-preloader="i" class="letters-loading">
                        i
                    </span>
                    <span data-text-preloader="p" class="letters-loading">
                        p
                    </span>
                    <span data-text-preloader="o" class="letters-loading">
                        o
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed white no-background">

            <div class="container d-flex justify-content-between align-items-center">


                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="<?php echo URL?>public/assets/logo-white.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="<?php echo URL?>public/assets/logo.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="<?php echo URL ?>" class="active" data-toggle="dropdown" >Anasayfa</a></li>
                        <li><a href="<?php echo URL.LANGUAGE.'/home/about'?>" class="active" data-toggle="dropdown" >Kurumsal</a></li>
                        <li><a href="<?php echo URL.LANGUAGE.'/home/contact'?>">İletişim</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="button border-btn secondary">
                                <a target="_blank" href="https://hipoiot.xyz">Giriş Yap</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Overlay screen for menu -->
                    <div class="overlay-screen"></div>
                    <!-- End Overlay screen for menu -->

                </div>
                <!-- Main Nav -->

            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->










