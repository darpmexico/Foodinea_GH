<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Foodinea</title>

        <meta name="keywords" content="foodinea, food, tour, chef, cook, cooking, eat, meals">
        <meta name="author" content="darp">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" />
        <link rel="stylesheet" href="assets/css/font-awesome.css" />
        <link rel="stylesheet" href="assets/css/flexslider.css" />
        <link rel="stylesheet" href="assets/css/socicons.css" />
        <link rel="stylesheet" href="assets/css/hover.css" />
        <link rel="stylesheet" href="assets/css/animate.css" />
        <link rel="stylesheet" href="assets/css/owlcarousel.css" />
        <link rel="stylesheet" href="assets/css/style-green.css" />

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,900' rel='stylesheet' type='text/css'>

        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/img/ico/favicon.ico" type="image/x-icon"/>
        <link rel="apple-touch-icon" sizes="57x57" href="assets/img/ico/apple-touch-icon-57x57.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="assets/img/ico/apple-touch-icon-72x72.png"/>
        <link rel="apple-touch-icon" sizes="114x114" href="assets/img/ico/apple-touch-icon-114x114.png"/>
        <link rel="apple-touch-icon" sizes="144x144" href="assets/img/ico/apple-touch-icon-144x144.png"/>

    </head>

    <body id="pageTop">
        <!-- Analytics code -->

        <!-- ***** Theme switcher ***** 
        <div class="theme-switcher" id="themeSwitcher">
            <a href="#" class="toggle-button"><i class="fa fa-gear"></i></a>
            <div class="inner">
                <h3>Color skin:</h3>
                <ul class="colors">
                    <li><a href="#" data-color="blue" class="color-blue"></a></li>
                    <li><a href="#" data-color="green" class="color-green"></a></li>
                    <li><a href="#" data-color="orange" class="color-orange active"></a></li>
                    <li><a href="#" data-color="purple" class="color-purple"></a></li>
                    <li><a href="#" data-color="red" class="color-red"></a></li>
                    <li><a href="#" data-color="yellow" class="color-yellow"></a></li>
                </ul>
            </div>
        </div>
        theme switcher -->

        <!-- ***** Page loader ***** -->
        <div class="page-loader">
            <div class="loading">
                <div class="loading-spin"></div>
                <span>Loading...</span>
            </div>
        </div><!-- /.page-loader -->

        <!-- ***** Socialbar ***** 
        <div id="socialbar" class="socialbar socialbar-fixed socialbar-radius colorizesocial right hidden-xs">
            <ul>
                <li><a class="socicon socicon-facebook" href="#" title="Facebook"></a></li>
                <li><a class="socicon socicon-youtube" href="#" title="YouTube"></a></li>
                <li><a class="socicon socicon-pinterest" href="#" title="Pinterest"></a></li>
                <li><a class="socicon socicon-twitter" href="#" title="Twitter"></a></li>
                <li><a class="socicon socicon-google" href="#" title="Google"></a></li>
            </ul>
        </div>
         /.socialbar -->


        <!-- ***** Top Navigation ***** -->
        <section id="topNavigation" class="top-navigation">

            <nav class="navbar navbar-default" role="navigation">

                <div class="container container-inner">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-menu-collapse">
                            <span class="sr-only">Toggle navigation</span>
                           
                        </button>

                        <!-- <a class="btn-cart-xs visible-xs" href="#"><i class="fa fa-shopping-cart primary-color"></i><span>3</span></a> -->

                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo/logo.jpg" class="img-responsive" alt="Foodinea"></img></a>
                    </div>

                    <div class="collapse navbar-collapse" id="top-menu-collapse">

                        <ul id="top-menu" class="nav navbar-nav navbar-left">
                            <li class="active">
                                <a href="/">Foodinea</a>
                                <ul>
                                    <li class="active">
                                        <?php echo anchor('about','About') ?>

                                    </li>
                                    <li><a href="operators.html">Operators</a></li>
                                    <?php echo anchor('about','Operators') ?>
                                </ul>
                            </li>                      
                            <li><a href="#">Our destinations</a>
                                <ul>
                                    <li><?php echo anchor('mexico','Mexico') ?></li>
                                    <li><a href="shop.html">Argentina</a></li>
                                    <li><a href="shop.html">Chile</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                            <li><a href="contact.html">Help</a>
                                <ul>
                                    <li><a href="empty.html">FAQ´s</a></li>
                                    <li><a href="empty.html">Privacy Policy</a></li>
                                    <li><a href="empty.html">Terms & Conditions</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" id="desktopSearchButton"><i class="fa fa-search"></i></a>
                            </li>
                            <!-- <li>
                                <a href="/">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-single-post.html">Single post</a></li>
                                </ul>
                            </li> -->
                            <!-- <li>
                                <a href="/">Shop</a>
                                <ul>
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="shop-item.html">Shop item</a></li>
                                </ul>
                            </li> -->
                        </ul><!-- /#top-menu -->


                        <div class="visible-xs mobile-search">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div><!-- /.mobile-search -->

                    </div><!-- /.top-menu-collapse -->

                    <div class="desktop-search" id="desktopSearch">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <button class="btn btn-default" id="desktopSearchClose" type="button"><i class="fa fa-close"></i></button>
                            </span>
                            <input type="text" class="form-control searchField" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div><!-- /.desktop-search -->

                </div>

            </nav>

        </section><!-- /.top-navigation -->