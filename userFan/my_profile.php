<?php 
session_start(); 
if (isset($_SESSION['username']) && $_SESSION['perfil']=='f') {
require_once "../Functions/bbdd.php";
$usu = sessionUsu($_SESSION['username']);
extract($usu);
?>
<!DOCTYPE html>
<html lang="es-ES" class="no-js">
<!-- Begin Head -->

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GOD Music</title>
    <link rel="canonical" href="http://godmusic.es/" data-ajax-meta="binded">
    <meta name="keywords" content="HTML5 Theme" />
    <meta name="description" content="GODMusic - HTML5 Theme">
    <meta name="author" content="godmusic.es">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">
    
    <!-- Vendor Styles -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="/HTML/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/HTML/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="/HTML/vendor/themify/themify.css" rel="stylesheet" type="text/css" />
    <link href="/HTML/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css" />
    <link href="/HTML/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="/HTML/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/HTML/css/global/global.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/HTML/img/gm_favicon.ico" type="image/x-icon">
    <link rel="icon" href="/HTML/img/gm_favicon.ico" type="image/x-icon">
</head>
<!-- End Head -->

<!-- Body -->

<body>
    <!--========== HEADER V2 ==========-->
    <header class="navbar-fixed-top s-header-v2 js__header-sticky">
        <div class="row">
            <!-- Navbar -->
            <nav class="s-header-v2__navbar">
                <div class="container g-display-table--lg">
                    <!-- Navbar Row -->
                    <div class="s-header-v2__navbar-row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="s-header-v2__navbar-col">
                            <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                <span class="s-header-v2__toggle-icon-bar"></span>
                            </button>
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                            <!-- Logo -->
                            <div class="s-header-v2__logo">
                                <a href="profile.php" class="s-header-v2__logo-link">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="/HTML/img/logo.PNG" alt="GODMusic Logo" width="255px" high="208px">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="/HTML/img/logo.PNG" alt="GODMusic Logo" width="255px" high="208px">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--left">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <!-- Search -->
                                    <li class="s-header-v2__nav-item">
                                        <div class="input-group">
                                            <div class="input-group-btn search-panel">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#contains">Contains</a></li>
                                                    <li><a href="#its_equal">It's equal</a></li>
                                                    <li><a href="#greather_than">Greather than ></a></li>
                                                    <li><a href="#less_than">Less than < </a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#all">Anything</a></li>
                                                </ul>
                                            </div>
                                            <input type="hidden" name="search_param" value="all" id="search_param">
                                            <input type="text" class="form-control" name="x" placeholder="Search term...">
                                            <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                            </span>
                                        </div>
                                    </li>
                                    <!-- End Search -->
                                </ul>
                            </div>
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <!-- Home -->
                                    <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                        <a href="profile.php" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-right: 0;">HOMEPAGE <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                        <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                            <li><a href="profile.php#js__scroll-to-section" class="s-header-v2__dropdown-menu-link">Proximos conciertos</a></li>
                                            <li><a href="profile.php#js__scroll-to-section1" class="s-header-v2__dropdown-menu-link">Inscribirse conciertos</a></li>
                                            <li><a href="profile.php#js__scroll-to-section2" class="s-header-v2__dropdown-menu-link">Votar Conciertos</a></li>
                                            <li><a href="profile.php#js__scroll-to-section3" class="s-header-v2__dropdown-menu-link">Votar Locales</a></li>
                                            <li><a href="profile.php#js__scroll-to-section4" class="s-header-v2__dropdown-menu-link">Contact Us</a></li>
                                            <li><a href="profile.php#js__scroll-to-section5" class="s-header-v2__dropdown-menu-link">About</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Home -->

                                    <!-- Profile -->
                                    <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                        <ul class="navbar-right">
                                <li class="dropdown" style="list-style-type: none !important;"><a href="#" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin: 0;margin-left: -11px;">
                                    <span class="user-avatar pull-left" style="margin-right:8px; margin-top:28px;">
                                        <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" class="img-responsive img-circle" title="<?php echo $_SESSION['username'];?>" alt="<?php echo $_SESSION['username'];?>" width="30px" height="30px">
                                    </span>
                                    <span class="user-name">
                                        <?php echo $_SESSION['username'];?>
                                    </span>
                                    <b class="caret"></b></a>
                                    <ul class="dropdown-menu" style="list-style:none;">
                                        <li>
                                            <div class="navbar-content">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" alt="<?php echo $_SESSION['username'];?>" class="img-responsive" width="120px" height="120px" />
                                                        <p class="text-center small">
                                                            <a href="change_profile.php">Change Photo</a></p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <span><?php echo $_SESSION['username'];?></span>
                                                        <p class="text-muted small">
                                                            <?php echo $usu['email'];?></p>
                                                        <div class="divider">
                                                        </div>
                                                        <a href="my_profile.php" class="btn btn-default btn-xs"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contacts</a>
                                                        <a href="change_profile.php" class="btn btn-default btn-xs"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Help!</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="navbar-footer">
                                                <div class="navbar-footer-content">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="change_profile.php" class="btn btn-default btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change Passowrd</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="/logout.php" class="btn btn-default btn-sm pull-right"><i class="fa fa-power-off" aria-hidden="true"></i> Sign Out</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                                    </li>
                                    <!-- End Profile -->
                                </ul>
                            </div>
                            <!-- End Nav Menu -->
                        </div>
                    </div>
                    <!-- End Navbar Row -->
                </div>
            </nav>
            <!-- End Navbar -->
    </header>
    
<!--========== PAGE CONTENT ==========-->

    <div style="padding-top:90px;"> </div>
    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div align="center">
                        <img class="thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                    </div>
                    <div class="media-body">
                        <hr>
                        <h3><strong>Bio</strong></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                        <hr>
                        <h3><strong>Location</strong></h3>
                        <p><?php echo $usu['ciudad'];?></p>
                        <hr>
                        <h3><strong>Gender</strong></h3>
                        <p><?php echo $usu['sexo'];?></p>
                        <hr>
                        <h3><strong>Birthday</strong></h3>
                        <p><?php echo $usu['nacimiento'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <span>
                        <h1 class="panel-title pull-left" style="font-size:30px;"><?php echo $_SESSION['username'];?> <small> <?php echo $usu['email'];?></small> <i class="fa fa-check text-success" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="<?php echo $_SESSION['username'];?> is sharing with you"></i></h1>
                        <div class="dropdown pull-right">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Friends
                                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Familly</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-check" aria-hidden="true"></i> Friends</a></li>
                    <li><a href="#">Work</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="fa fa-fw fa-plus" aria-hidden="true"></i> Add a new aspect</a></li>
                </ul>
            </div>
            </span>
            <br><br>
            <i class="fa fa-tags" aria-hidden="true"></i> <a href="/tags/diaspora" class="tag">#diaspora</a> <a href="/tags/hashtag" class="tag">#hashtag</a> <a href="/tags/caturday" class="tag">#caturday</a>
            <br><br>
            <hr>
            <span class="pull-left">
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-files-o" aria-hidden="true"></i> Posts</a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-picture-o" aria-hidden="true"></i> Photos <span class="badge">42</span></a>
            <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Contacts <span class="badge">42</span></a>
            </span>
            <span class="pull-right">
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-at" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mention"></i></a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-envelope-o" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Message"></i></a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-ban" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Ignore"></i></a>
                    </span>
        </div>
    </div>
    <hr>
    <form href="" id="conversation" action="/conversation.php" method="post" role="form">
    <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div class="pull-left">
                            <a href="#">
                                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px">
                            </a>
                        </div>
                        <div class="media-body">
                            <input type="hidden" name="idusu" value=<?php echo $_SESSION['idusuario'];?>>
                            <input type="submit" name="submit-text"><textarea class="form-control" name="text" rows="2" placeholder="Start a conversation..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <!-- Simple post content example. -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="pull-left">
                <a href="#">
                    <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                </a>
            </div>
            <h4><a href="#" style="text-decoration:none;"><strong><?php echo $_SESSION['username'];?></strong></a> – <small><small><a style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small>
            </h4>
            <span>
                        <div class="navbar-right">
                            <div class="dropdown">
                                <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
                <li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
                <li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
                <li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
                <li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
            </ul>
        </div>
    </div>
    </span>
    <hr>
    <div class="post-content">
        <p>Simple post content example.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
    </div>
    <hr>
    <div>
        <div class="pull-right btn-group-xs">
            <a class="btn btn-default btn-xs"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
            <a class="btn btn-default btn-xs"><i class="fa fa-retweet" aria-hidden="true"></i> Reshare</a>
            <a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
        </div>
        <div class="pull-left">
            <p class="text-muted" style="margin-left:5px;"><i class="fa fa-globe" aria-hidden="true"></i> Public</p>
        </div>
        <br>
    </div>
    <hr>
    <div class="media">
        <div class="pull-left">
            <a href="#">
                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
            </a>
        </div>
        <div class="media-body">
            <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
        </div>
    </div>
    </div>
    </div>
    <!-- Reshare Example -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="pull-left">
                <a href="#">
                    <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                </a>
            </div>
            <h4><a href="#" style="text-decoration:none;"><strong><?php echo $_SESSION['username'];?></strong></a> – <small><small><a style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small>
            </h4>
            <span>
                        <div class="navbar-right">
                            <div class="dropdown">
                                <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
                <li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
                <li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
                <li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
                <li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
            </ul>
        </div>
    </div>
    </span>
    <hr>
    <div class="post-content">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="pull-left">
                    <a href="#">
                        <img class="media-object img-circle" src="https://diaspote.org/uploads/images/thumb_large_283df6397c4db3fe0344.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                    </a>
                </div>
                <h4><a href="#" style="text-decoration:none;"><strong>✪ SтeғOғғιcιel ✪ ツ</strong></a> – <small><small><a style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> about 15 hours ago</i></a></small></small>
                </h4>
                <hr>
                <div class="post-content">
                    Reshare post example.
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div>
        <div class="pull-right btn-group-xs">
            <a class="btn btn-default btn-xs"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
            <a class="btn btn-default btn-xs"><i class="fa fa-retweet" aria-hidden="true"></i> Reshare</a>
            <a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
        </div>
        <div class="pull-left">
            <p class="text-muted" style="margin-left:5px;"><i class="fa fa-globe" aria-hidden="true"></i> Public</p>
        </div>
        <br>
    </div>
    <hr>
    <div class="media">
        <div class="pull-left">
            <a href="#">
                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
            </a>
        </div>
        <div class="media-body">
            <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
        </div>
    </div>
    </div>
    </div>
    <!-- Sample post content with picture. -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="pull-left">
                <a href="#">
                    <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                </a>
            </div>
            <h4><a href="#" style="text-decoration:none;"><strong><?php echo $_SESSION['username'];?></strong></a> – <small><small><a style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small>
            </h4>
            <span>
                        <div class="navbar-right">
                            <div class="dropdown">
                                <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
                <li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
                <li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
                <li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
                <li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
            </ul>
        </div>
    </div>
    </span>
    <hr>
    <div class="post-content">
        <p>Sample post content with picture.</p>
        <img class="img-responsive" src="https://media.giphy.com/media/j1QQj6To9Pbxu/giphy.gif">
        <p><br><a href="/tags/christmas" class="tag">#Christmas</a> <a href="/tags/caturday" class="tag">#Caturday</a></p>
    </div>
    <hr>
    <div>
        <div class="pull-right btn-group-xs">
            <a class="btn btn-default btn-xs"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
            <a class="btn btn-default btn-xs"><i class="fa fa-retweet" aria-hidden="true"></i> Reshare</a>
            <a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
        </div>
        <div class="pull-left">
            <p class="text-muted" style="margin-left:5px;"><i class="fa fa-globe" aria-hidden="true"></i> Public <strong>via mobile</strong></p>
        </div>
        <br>
    </div>
    <hr>
    <div class="media">
        <div class="pull-left">
            <a href="#">
                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
            </a>
        </div>
        <div class="media-body">
            <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
        </div>
    </div>
    </div>
    </div>
    <!-- Sample post content with comments. -->
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="pull-left">
                <a href="#">
                    <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="50px" height="50px" style="margin-right:8px; margin-top:-5px;">
                </a>
            </div>
            <h4><a href="#" style="text-decoration:none;"><strong><?php echo $_SESSION['username'];?></strong></a> – <small><small><a style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 42 minutes ago</i></a></small></small>
            </h4>
            <span>
                        <div class="navbar-right">
                            <div class="dropdown">
                                <button class="btn btn-link btn-xs dropdown-toggle" type="button" id="dd1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="fa fa-cog" aria-hidden="true"></i>
                                    <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dd1" style="float: right;">
                <li><a href="#"><i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i> Report</a></li>
                <li><a href="#"><i class="fa fa-fw fa-ban" aria-hidden="true"></i> Ignore</a></li>
                <li><a href="#"><i class="fa fa-fw fa-bell" aria-hidden="true"></i> Enable notifications for this post</a></li>
                <li><a href="#"><i class="fa fa-fw fa-eye-slash" aria-hidden="true"></i> Hide</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#"><i class="fa fa-fw fa-trash" aria-hidden="true"></i> Delete</a></li>
            </ul>
        </div>
    </div>
    </span>
    <hr>
    <div class="post-content">
        <p>Sample post content with comments.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
    </div>
    <hr>
    <div>
        <div class="pull-right btn-group-xs">
            <a class="btn btn-default btn-xs"><i class="fa fa-heart" aria-hidden="true"></i> Like</a>
            <a class="btn btn-default btn-xs"><i class="fa fa-comment" aria-hidden="true"></i> Comment</a>
        </div>
        <div class="pull-left">
            <p class="text-muted" style="margin-left:5px;"><i class="fa fa-user-secret" aria-hidden="true"></i> Limited</p>
        </div>
        <br>
    </div>
    <hr>
    <div>
        <a class="btn btn-default btn-xs"><i class="fa fa-bars" aria-hidden="true"></i> Show 12 more comments</a>
        <hr>
        <div class="post-content">
            <div class="panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <a href="#">
                            <img class="media-object img-circle" src="https://diaspote.org/uploads/images/thumb_large_283df6397c4db3fe0344.png" width="35px" height="35px" style="margin-right:8px; margin-top:-5px;">
                        </a>
                    </div>
                    <h4><a href="#" style="text-decoration:none;"><strong>✪ SтeғOғғιcιel ✪ ツ</strong></a></h4>
                    <hr>
                    <div class="post-content">
                        Comment example.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu sapien. Donec laoreet, nisl quis tempor hendrerit, libero augue blandit turpis, in dignissim odio mauris eu tortor. Ut hendrerit
                        ipsum elit, a elementum nulla ultrices eu. In posuere mollis efficitur. Maecenas justo turpis, tristique sit amet ultricies quis, molestie eget ex. Nam vestibulum consequat tincidunt. Morbi vitae placerat sapien. Phasellus quis
                        mi tincidunt sem scelerisque tincidunt. Ut viverra porttitor sagittis. Phasellus aliquam auctor purus, id sollicitudin mauris pulvinar ac. Vivamus vel erat nec orci ultricies iaculis quis sit amet augue. Vestibulum aliquam felis
                        lorem, interdum porttitor sapien sodales ac. Maecenas id ullamcorper risus. Suspendisse id dui sed urna rutrum pharetra. Nam eu lectus et orci vestibulum bibendum. Mauris et pulvinar dui, ac facilisis leo.
                        <br><small><small><a style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 12 minutes ago</i></a></small></small>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="post-content">
            <div class="panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <a href="#">
                            <img class="media-object img-circle" src="https://lut.im/yR07xwobAA/bZpvdTZmBBTZDJDd.png" width="35px" height="35px" style="margin-right:8px; margin-top:-5px;">
                        </a>
                    </div>
                    <h4><a href="#" style="text-decoration:none;"><strong>Mi Chleen</strong></a></h4>
                    <hr>
                    <div class="post-content">
                        Another comment.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu sapien. Donec laoreet, nisl quis tempor hendrerit, libero augue blandit turpis, in dignissim odio mauris eu tortor. Ut hendrerit
                        ipsum elit, a elementum nulla ultrices eu. In posuere mollis efficitur. Maecenas justo turpis, tristique sit amet ultricies quis, molestie eget ex. Nam vestibulum consequat tincidunt. Morbi vitae placerat sapien. Phasellus quis
                        mi tincidunt sem scelerisque tincidunt. Ut viverra porttitor sagittis. Phasellus aliquam auctor purus, id sollicitudin mauris pulvinar ac. Vivamus vel erat nec orci ultricies iaculis quis sit amet augue. Vestibulum aliquam felis
                        lorem, interdum porttitor sapien sodales ac. Maecenas id ullamcorper risus. Suspendisse id dui sed urna rutrum pharetra. Nam eu lectus et orci vestibulum bibendum. Mauris et pulvinar dui, ac facilisis leo.
                        <br><small><small><a style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 9 minutes ago</i></a></small></small>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="post-content">
            <div class="panel-default">
                <div class="panel-body">
                    <div class="pull-left">
                        <a href="#">
                            <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-right:8px; margin-top:-5px;">
                        </a>
                    </div>
                    <h4><a href="#" style="text-decoration:none;"><strong><?php echo $_SESSION['username'];?></strong></a></h4>
                    <hr>
                    <div class="post-content">
                        Yet another post.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at arcu sapien. Donec laoreet, nisl quis tempor hendrerit, libero augue blandit turpis, in dignissim odio mauris eu tortor. Ut hendrerit
                        ipsum elit, a elementum nulla ultrices eu. In posuere mollis efficitur. Maecenas justo turpis, tristique sit amet ultricies quis, molestie eget ex. Nam vestibulum consequat tincidunt. Morbi vitae placerat sapien. Phasellus quis
                        mi tincidunt sem scelerisque tincidunt. Ut viverra porttitor sagittis. Phasellus aliquam auctor purus, id sollicitudin mauris pulvinar ac. Vivamus vel erat nec orci ultricies iaculis quis sit amet augue. Vestibulum aliquam felis
                        lorem, interdum porttitor sapien sodales ac. Maecenas id ullamcorper risus. Suspendisse id dui sed urna rutrum pharetra. Nam eu lectus et orci vestibulum bibendum. Mauris et pulvinar dui, ac facilisis leo.
                        <br><small><small><a style="text-decoration:none; color:grey;"><i><i class="fa fa-clock-o" aria-hidden="true"></i> 2 minutes ago</i></a></small></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="media">
        <div class="pull-left">
            <a href="#">
                <img class="media-object img-circle" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="35px" height="35px" style="margin-left:3px; margin-right:-5px;">
            </a>
        </div>
        <div class="media-body">
            <textarea class="form-control" rows="1" placeholder="Comment"></textarea>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!--========== END PAGE CONTENT ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

    <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
    <!-- Vendor -->
    <script type="text/javascript " src="/HTML/vendor/jquery.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/jquery.migrate.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/jquery.smooth-scroll.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/jquery.back-to-top.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/scrollbar/jquery.scrollbar.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/swiper/swiper.jquery.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/masonry/jquery.masonry.pkgd.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/masonry/imagesloaded.pkgd.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/jquery.equal-height.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/jquery.parallax.min.js "></script>
    <script type="text/javascript " src="/HTML/vendor/jquery.wow.min.js "></script>


    <!-- General Components and Settings -->
    <script type="text/javascript " src="/HTML/js/global.min.js "></script>
    <script type="text/javascript " src="/HTML/js/components/header-sticky.min.js "></script>
    <script type="text/javascript " src="/HTML/js/components/scrollbar.min.js "></script>
    <script type="text/javascript " src="/HTML/js/components/swiper.min.js "></script>
    <script type="text/javascript " src="/HTML/js/components/masonry.min.js "></script>
    <script type="text/javascript " src="/HTML/js/components/equal-height.min.js "></script>
    <script type="text/javascript " src="/HTML/js/components/parallax.min.js "></script>
    <script type="text/javascript " src="/HTML/js/components/wow.min.js "></script>
    <!--========== END JAVASCRIPTS ==========-->

</body>
<!-- End Body -->

</html>
<?php
} else{
    header("Location: ../index_home.php");
}?>