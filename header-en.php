<?php
include('config/bdpdo.php');
include('config/vars.php');
include('config/php.php'); ?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es_MX">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta name="facebook-domain-verification" content="2xhjyakv3yp5ud8wsvioqzhm25xunm" />
        <!--<base href="/static/">-->
        <meta charset="utf-8" />
        <title>Grupo Gusi | <?php echo @$meta_nombre; ?></title>
		<base href="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author" />
        <meta content="carne de res, carne mexicana, cortes de carne, gusi, grupo gusi, carnes gusi, cortes de exportacion, cortes de calidad, exportacion de carne, recetas de carne, tbone, arrachera, carne de san luis potosi, la mejor carne" name="keywords"/>
<?php include('meta.php'); ?>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="/static/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="/static/assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN THEME STYLES -->
        <link href="/static/assets/base/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="/static/assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="/static/assets/base/css/themes/red1.css" rel="stylesheet" id="style_theme" type="text/css" />
        <link href="/static/assets/base/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="/static/img/favicon.ico" /> 
        
        <script src="static/assets/plugins/jquery.min.js" type="text/javascript"></script>
    </head>

    <body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen c-layout-header-topbar c-layout-header-topbar-collapse">
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <header class="c-layout-header c-layout-header-4 c-bordered c-layout-header-default-mobile c-header-transparent-dark">
            <div class="c-navbar">
                <div class="container">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="index.php" class="c-logo">
                                <img src="static/img/logo-1.png" alt="Grupo Gusi" class="c-desktop-logo">
                                <img src="static/img/logo-1.png" alt="Grupo Gusi" class="c-desktop-logo-inverse">
                                <img src="static/img/logo-m.png" alt="Grupo Gusi" class="c-mobile-logo"> </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                        </div>
                        <!-- END: BRAND -->
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- BEGIN: MEGA MENU -->
                        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                        <nav class="c-mega-menu c-pull-left c-mega-menu-light c-mega-menu-light-mobile c-fonts-uppercase c-fonts-bold" style="background-color: rgba(255,255,255,0.9)">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li>
                                    <a href="en.html" class="c-link dropdown-toggle">Home
                                        <span class="c-arrow c-toggler"></span>
                                    </a>    
                                </li>
                                <li class="c-active c-menu-type-classic">
                                    <a href="my-gusi.html" class="c-link dropdown-toggle">My Gusi
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                            <a href="recetas.php">Recipes
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="cocina.php">Kitchen
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="parrilla.php">Grill
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="c-active c-menu-type-classic">
                                    <a href="noticias.php" class="c-link dropdown-toggle">News
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="c-active c-menu-type-classic">
                                    <a href="recetas.php" class="c-link dropdown-toggle">Recipes
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="c-active c-menu-type-classic">
                                    <a href="productos.php" class="c-link dropdown-toggle">Products
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="c-active c-menu-type-classic">
                                    <a href="mission-and-vision.html" class="c-link dropdown-toggle">Grupo Gusi
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                    <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                            <a href="mission-and-vision.html#mision">Mission and vision
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="mission-and-vision.html#valores">Values
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="our-people.html">Our people
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="social-responsiblity.html">Social responsibility
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="certifications.html">Certifications
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="processes.html">Processes
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="exportaciones.php">Exportaciones
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="exports.html">Exports
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/GrupoGusi/" class="c-link" target="_blank">
                                        <i class="icon-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/grupogusi" class="c-link" target="_blank">
                                        <i class="icon-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCJSdMDYgpYbIP79sgG1mZxA" class="c-link" target="_blank">
                                        <i class="icon-social-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://api.whatsapp.com/send?phone=525611127396&text=Hola%20Grupo%20Gusi" style="padding-top:18px;" target="_blank">
                                        <img src="/static/img/whatsapp.png" width="20px">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.grupogusi.com.mx/" style="padding-top:18px;">
                                        <img src="/static/img/en/mexico.png" width="25px">
                                    </a>
                            </ul>
                        </nav>
                        <!-- END: MEGA MENU -->
                        <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->
                    </div>
                </div>
            </div>
        </header>
        <!-- END: HEADER -->
        <!-- END: LAYOUT/HEADERS/HEADER-1 -->

