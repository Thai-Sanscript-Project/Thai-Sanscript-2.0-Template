<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>error_404 | Corlate</title>
    <link href="<?php echo base_url() ?>inc/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>inc/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>inc/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>inc/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>inc/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>inc/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>inc/js/html5shiv.js"></script>
    <script src="<?php echo base_url() ?>inc/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url() ?>inc/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>inc/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>inc/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>inc/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>inc/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="<?php echo site_url() ?>/demo/demo/#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="<?php echo site_url() ?>/demo/demo/#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index"><img src="<?php echo base_url() ?>inc/images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo site_url() ?>/demo/demo/index">Home</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/about_us">About Us</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/services">Services</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/portfolio">Portfolio</a></li>
                        <li class="dropdown active">
                            <a href="<?php echo site_url() ?>/demo/demo/#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url() ?>/demo/demo/blog_item">Blog Single</a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/pricing">Pricing</a></li>
                                <li class="active"><a href="<?php echo site_url() ?>/demo/demo/error_404">404</a></li>
                                <li><a href="<?php echo site_url() ?>/demo/demo/shortcodes">Shortcodes</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/blog">Blog</a></li> 
                        <li><a href="<?php echo site_url() ?>/demo/demo/contact_us">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->

    <section id="error" class="container text-center">
        <h1>404, Page not found</h1>
        <p>The Page you are looking for doesn't exist or an other error occurred.</p>
        <a class="btn btn-primary" href="index">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">About us</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">We are hiring</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Meet the team</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Copyright</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Terms of use</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Privacy policy</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Faq</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Blog</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Forum</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Documentation</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Refund policy</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Ticket system</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Web Development</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">SEO Marketing</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Theme</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Development</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Email Marketing</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Plugin Development</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Adipisicing Elit</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Eiusmod</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Tempor</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Veniam</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Exercitation</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Ullamco</a></li>
                            <li><a href="<?php echo site_url() ?>/demo/demo/#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="<?php echo site_url() ?>/demo/demo/#">Home</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/#">About Us</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/#">Faq</a></li>
                        <li><a href="<?php echo site_url() ?>/demo/demo/#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url() ?>inc/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>inc/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>inc/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url() ?>inc/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url() ?>inc/js/main.js"></script>
    <script src="<?php echo base_url() ?>inc/js/wow.min.js"></script>
</body>
</html>