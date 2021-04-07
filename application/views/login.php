<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome Repository</title>

    <!-- core CSS -->
    <link href="<?php echo base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/font-awesome.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/animate.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/prettyPhoto.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/owl.carousel.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/icomoon.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/main.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/css/responsive.css');?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url('asset/images/ico/favicon.ico');?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('asset/images/ico/apple-touch-icon-144-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('asset/images/ico/apple-touch-icon-114-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('asset/images/ico/apple-touch-icon-72-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('asset/images/ico/apple-touch-icon-57-precomposed.png');?>">
</head>
<!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i> +6285692414524</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
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
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="" alt=""></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="<?php echo base_url("Project/index"); ?>">Home</a></li>
                        <li><a href="<?php echo base_url("About/index");?>">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Browse<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("Browse/year");?>">Browse By Year</a></li>
                                <li><a href="<?php echo base_url("Browse/subject");?>">Browse By Subject</a></li>
                                <li><a href="<?php echo base_url("Browse/division");?>">Browse By Division</a></li>
                                <li><a href="<?php echo base_url("Browse/Author");?>">Browse By Author</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Login</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->

    </header>
    <!--/header-->
    <!--/#main-slider-->
<section id="partner">
        <div class="container">
        <div class="row">
            <div class="left">
                <h1 class="h2">Login Admin</h1>
                <p class="lead">Silahkan masuk ke Panel Admin</p>
            </div>
        </div>
        <div class="row"> 
            <div class="center">
                <?php echo form_open("Auth/cek_login"); ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username"  placeholder="Pakai username juga bisa.." required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password.." required />
                    </div>
                    <button type="submit" class="btn btn-success W100">Login</button>
                    <?php echo form_close(); ?>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </section>
    
    <!--/#partner-->


    
    <!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy;  <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">CV Kreasi Teknologi Nusantara</a>. 
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="<?php echo base_url('asset/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.prettyPhoto.js');?>"></script>
    <script src="<?php echo base_url('asset/js/owl.carousel.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.isotope.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/main.js');?>"></script>
</body>

</html>
