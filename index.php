<?php
require_once "Functions/bbdd.php";?>
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
    <link href="HTML/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="HTML/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="HTML/vendor/themify/themify.css" rel="stylesheet" type="text/css" />
    <link href="HTML/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css" />
    <link href="HTML/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="HTML/css/style.css" rel="stylesheet" type="text/css" />
    <link href="HTML/css/global/global.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="HTML/img/gm_favicon.ico" type="image/x-icon">
    <link rel="icon" href="HTML/img/gm_favicon.ico" type="image/x-icon">
</head>
<!-- End Head -->

<!-- Body -->
<body>
    <div id="inicio" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content panel panel-login">

                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="-1" class="form-control" placeholder="Username" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <input type="checkbox" class="" name="remember" id="remember">
                                    <label for="remember"> Remember Me</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-login" value="Log In">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="http://phpoll.com/recover" class="forgot-password">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form id="register-form" action="login.php" method="POST" role="form" style="display: none;">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="-1" class="form-control" placeholder="Username" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <label class="radio-inline">
                                  <input type="radio" name="usu" value="f">Fan
                                </label>
                                    <label class="radio-inline">
                                  <input type="radio" name="usu" value="m">Musico
                                </label>
                                    <label class="radio-inline">
                                  <input type="radio" name="usu" value="l">Local
                                </label>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">

                                            <input type="submit" name="register-submit" id="register-submit" class="form-control btn btn-register" value="Register Now">

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========== HEADER V2 ==========-->
    <header class="navbar-fixed-top s-header-v2 js__header-sticky">
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
                            <a href="index.php" class="s-header-v2__logo-link">
                                <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="HTML/img/logoBlack.png" alt="GODMusic Logo" width="308px" high="214px" style="margin-left: -43px;margin-top: 5px;">
                                <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="HTML/img/logoWhite.png" alt="GODMusic Logo" width="308px" high="214px" style="margin-left: -43px;margin-top: 5px;">
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
                                            <button type="button"  class="btn btn-default dropdown-toggle" data-toggle="dropdown">
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
                                        <input type="text" class="form-control" name="x" placeholder="que quieres buscar?">
                                      
                                          
                                        <span class="input-group-btn">
                    <button class="btn btn-default" action="buscador.php" type="submit"><span class="glyphicon glyphicon-search"></span></button>
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
                                    <a href="index.php" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOMEPAGE <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                    <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                        <li><a href="#js__scroll-to-section" class="s-header-v2__dropdown-menu-link">Proximos conciertos</a></li>
                                        <li><a href="#js__scroll-to-section2" class="s-header-v2__dropdown-menu-link">Artistas recomendados</a></li>
                                        <li><a href="#js__scroll-to-section3" class="s-header-v2__dropdown-menu-link">Conciertos recomendados</a></li>
                                        <li><a href="#js__scroll-to-section4" class="s-header-v2__dropdown-menu-link">Contact Us</a></li>
                                        <li><a href="#js__scroll-to-section5" class="s-header-v2__dropdown-menu-link">About</a></li>
                                    </ul>
                                </li>
                                <!-- End Home -->

                                <li class="s-header-v2__nav-item"><a href="" class="s-header-v2__nav-link -is-active" data-toggle="modal" data-target="#inicio"><i class="fa fa-fw fa-sign-in"></i> Login</a></li>

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
    <!--========== END HEADER V2 ==========-->

    <!--========== SWIPER SLIDER ==========-->
    <div id="js__scroll-to-section" class="s-swiper js__swiper-slider">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <div class="g-fullheight--xs g-bg-position--center swiper-slide swip" style="background: url('HTML/img/1.png');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/2.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/3.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/4.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/5.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/6.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/7.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/8.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/9.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/10.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/12.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/13.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/14.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/15.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/16.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/17.png');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('HTML/img/19.jpg');">
            </div>
        </div>
        <!-- End Swiper Wrapper -->

        <!-- Pagination -->
        <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--bc s-swiper__pagination-v1--white js__swiper-pagination"></div>
    </div>
    <!--========== END SWIPER SLIDER ==========-->

    <!--========== PAGE CONTENT ==========-->
    
    <div id="js__scroll-to-section2">
                   <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
                       
                       <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white spai">Artistas recomendados</h2>
                       
                        <div class="container3">
    <div>
        <div class="col-md-4 col-md-offset-4 watch-card" style="width:320px;">
            <div class="artist-title col-md-12">
                <a href="">Chris Brown</a><br/>
            </div>
            <div class="artist-collage col-md-12">
                <div class="col-md-6"><img src="http://i.ytimg.com/i/MXDyVR2tclKWhbqNforSyA/mq1.jpg" alt="artist-image" width="150" height="150"></div>
                <div class="col-md-6 collage-rhs">
                    <div class="col-md-12"><img src="http://i.ytimg.com/vi/8gyLR4NfMiI/mqdefault.jpg" alt="artist-image" width="150" height="84"></div>
                    <div class="col-md-12"><img src="http://i.ytimg.com/vi/zKCrSN9oXgQ/mqdefault.jpg" alt="artist-image" width="150" height="84"></div>        
                </div>
            </div>
            <div class="listing-tab col-md-12">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active"><a href="#track" aria-controls="track" role="tab" data-toggle="tab">Mejores Canciones</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <li><a href="#">Loyal</a>    <span>4:31</span></li>
                            <li><a href="#">Ayo</a> <span>6:01</span></li>
                            <li><a href="#">Look at Me Now</a>  <span>4:09</span></li>
                            <li><a href="#">Liquor</a>  <span>3:51</span></li>
                            <li><a href="#">View all</a></li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>
        
        <div class="col-md-4 col-md-offset-4 watch-card" style="width:320px;">
            <div class="artist-title col-md-12">
                <a href="">Chris Brown</a><br/>
            </div>
            <div class="artist-collage col-md-12">
                <div class="col-md-6"><img src="http://i.ytimg.com/i/MXDyVR2tclKWhbqNforSyA/mq1.jpg" alt="artist-image" width="150" height="150"></div>
                <div class="col-md-6 collage-rhs">
                    <div class="col-md-12"><img src="http://i.ytimg.com/vi/8gyLR4NfMiI/mqdefault.jpg" alt="artist-image" width="150" height="84"></div>
                    <div class="col-md-12"><img src="http://i.ytimg.com/vi/zKCrSN9oXgQ/mqdefault.jpg" alt="artist-image" width="150" height="84"></div>        
                </div>
            </div>
            <div class="listing-tab col-md-12">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active"><a href="#track" aria-controls="track" role="tab" data-toggle="tab">Mejores Canciones</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <li><a href="#">Loyal</a>    <span>4:31</span></li>
                            <li><a href="#">Ayo</a> <span>6:01</span></li>
                            <li><a href="#">Look at Me Now</a>  <span>4:09</span></li>
                            <li><a href="#">Liquor</a>  <span>3:51</span></li>
                            <li><a href="#">View all</a></li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>
        
        <div class="col-md-4 col-md-offset-4 watch-card" style="width:320px;">
            <div class="artist-title col-md-12">
                <a href="">Chris Brown</a><br/>
            </div>
            <div class="artist-collage col-md-12">
                <div class="col-md-6"><img src="http://i.ytimg.com/i/MXDyVR2tclKWhbqNforSyA/mq1.jpg" alt="artist-image" width="150" height="150"></div>
                <div class="col-md-6 collage-rhs">
                    <div class="col-md-12"><img src="http://i.ytimg.com/vi/8gyLR4NfMiI/mqdefault.jpg" alt="artist-image" width="150" height="84"></div>
                    <div class="col-md-12"><img src="http://i.ytimg.com/vi/zKCrSN9oXgQ/mqdefault.jpg" alt="artist-image" width="150" height="84"></div>        
                </div>
            </div>
            <div class="listing-tab col-md-12">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active"><a href="#track" aria-controls="track" role="tab" data-toggle="tab">Mejores Canciones</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <li><a href="#">Loyal</a>    <span>4:31</span></li>
                            <li><a href="#">Ayo</a> <span>6:01</span></li>
                            <li><a href="#">Look at Me Now</a>  <span>4:09</span></li>
                            <li><a href="#">Liquor</a>  <span>3:51</span></li>
                            <li><a href="#">View all</a></li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>
        
        
        </div>
    </div>
</div>
</div>
                
    <div id="js__scroll-to-section3">
                   <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
                       
                       <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white spai">Conciertos recomendados</h2>
                       
                        <div class="container3">
    <div>
        <?php
        $concierto = selectConciertos();
        while ($fila = mysqli_fetch_array($concierto)) {
        extract($fila);
        $date = $dia;
        list($y, $m, $d) = explode('-', $date);
        if ($m=='01') $m='January';
        else if ($m=='02') $m='February';
        else if ($m=='03') $m='March';
        else if ($m=='04') $m='April';
        else if ($m=='05') $m='May';
        else if ($m=='06') $m='June';
        else if ($m=='07') $m='July';
        else if ($m=='08') $m='August';
        else if ($m=='09') $m='September';
        else if ($m=='10') $m='October';
        else if ($m=='11') $m='November';
        else if ($m=='12') $m='December';
        echo "
        <div class='col-md-4 col-md-offset-4 watch-card' style='width:320px;'>
            <div class='artist-title col-md-12'>
                <a href=''>$nombre</a><br/>
            </div>
            <div class='artist-collage col-md-12'>
                <div><img src='$imagen' alt='artist-image' width='300' height='150'></div>
            </div>
            <div class='listing-tab col-md-12'>
                  <!-- Nav tabs -->
                  <ul class='nav nav-tabs' id='myTabs' role='tablist'>
                    <li role='presentation' class='active'><a href='#track' aria-controls='track' role='tab' data-toggle='tab'>Información</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                  <div class='tab-content'>
                    <div role='tabpanel' class='tab-pane active' id='track'>
                        <ul>
                            <li><p class='calendar'> $d<em> $m</em></p></li>
                            <li>Hora:</a><span>$hora</span></li>
                            <li>Local:</a><span>$nombre_artistico</span></li>
                            <li>Genero:</a><span>$nomestilo</span></li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>";
        
        
        }?>
        
        </div>
    </div>
</div>
</div>            

    <!-- Form -->
    <div id="js__scroll-to-appointment" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm">
        <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
            <div class="row">
                <!-- Form -->
                <div class="col-md-8 js__form-eqaul-height-v1">
                    <div class="g-padding-x-40--xs g-padding-y-50--xs">
                        <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs">Make an Appointment</h2>
                        <form>
                            <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Full Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Phone Number">
                                </div>
                            </div>
                            <div class="row g-margin-b-50--xs g-margin-b-50--md">
                                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Department">
                                </div>
                                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* Doctor">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="* DD/MM/YY">
                                </div>
                            </div>
                            <div class="g-margin-b-50--xs">
                                <textarea class="form-control s-form-v4__input g-padding-l-0--xs" rows="5" placeholder="* What ails you?"></textarea>
                            </div>
                            <div class="g-text-center--xs">
                                <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Form -->

                <!-- Contacts -->
                <div id="js__scroll-to-section4" class="col-md-4 g-bg-color--primary-ltr js__form-eqaul-height-v1">
                    <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
                        <h2 class="g-font-size-24--xs g-color--white g-margin-b-50--xs">Contact Us</h2>
                        <ul class="list-unstyled g-margin-b-70--xs">
                            <li class="clearfix g-color--white g-margin-b-40--xs">
                                <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                    <i class="g-font-size-20--xs g-color--white-opacity-light ti-location-pin"></i>
                                </div>
                                <div class="g-media__body">
                                    277 Bedford Avenue, <br> Brooklyn, NY 11211, New York
                                </div>
                            </li>
                            <li class="clearfix g-color--white g-margin-b-40--xs">
                                <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                    <i class="g-font-size-20--xs g-color--white-opacity-light ti-headphone-alt"></i>
                                </div>
                                <div class="g-media__body">
                                    + (1) 001 389 3720
                                </div>
                            </li>
                            <li class="clearfix g-color--white g-margin-b-40--xs">
                                <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                    <i class="g-font-size-20--xs g-color--white-opacity-light ti-email"></i>
                                </div>
                                <div class="g-media__body">
                                    support@godmusic.es
                                </div>
                            </li>
                        </ul>
                        <ul class="list-inline g-ul-li-lr-15--xs">
                            <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-facebook"></i></a></li>
                            <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-twitter"></i></a></li>
                            <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-instagram"></i></a></li>
                        </ul>
                        <i class="g-font-size-150--xs g-color--white-opacity-lightest ti-comments" style="position: absolute; bottom: -1.25rem; right: -1.25rem;"></i>
                    </div>
                </div>
                <!-- End Contacts -->
                
            </div>
        </div>
    </div>
    <!-- End Form -->
    <!--========== END PAGE CONTENT ==========-->

    <!--========== FOOTER ==========-->
    <footer id="js__scroll-to-section5" class="g-bg-color--dark">
        <!-- Links -->
        <div class="g-hor-divider__dashed--white-opacity-lightest">
            <div class="container g-padding-y-80--xs">
                <div class="row">
                    <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Home</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">About</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Work</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Twitter</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Facebook</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Instagram</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">YouTube</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Subscribe to Our Newsletter</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Privacy Policy</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                        <h3 class="g-font-size-18--xs g-color--white">GODMusic</h3>
                        <p class="g-color--white-opacity">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Links -->

        <!-- Copyright -->
        <div class="container g-padding-y-50--xs">
            <div class="row">
                <div class="col-xs-6">
                    <a href="index.php">
                        <img class="g-width-100--xs g-height-auto--xs" src="HTML/img/gm.png" alt="GODMusic Logo" style="width: 25px;">
                    </a>
                </div>
                <div class="col-xs-6 g-text-right--xs">
                    <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="http://godmusic.es">GODMusic</a> Theme Powered by: <a href="http://www.godmusic.es/">godmusic.es</a></p>
                </div>
            </div>
        </div>
        <!-- End Copyright -->
    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0); " class="s-back-to-top js__back-to-top "></a>

    <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
    <!-- Vendor -->
    <script type="text/javascript " src="HTML/vendor/jquery.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/jquery.migrate.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/jquery.smooth-scroll.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/jquery.back-to-top.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/scrollbar/jquery.scrollbar.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/swiper/swiper.jquery.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/masonry/jquery.masonry.pkgd.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/masonry/imagesloaded.pkgd.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/jquery.equal-height.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/jquery.parallax.min.js "></script>
    <script type="text/javascript " src="HTML/vendor/jquery.wow.min.js "></script>


    <!-- General Components and Settings -->
    <script type="text/javascript " src="HTML/js/global.min.js "></script>
    <script type="text/javascript " src="HTML/js/components/header-sticky.min.js "></script>
    <script type="text/javascript " src="HTML/js/components/scrollbar.min.js "></script>
    <script type="text/javascript " src="HTML/js/components/swiper.min.js "></script>
    <script type="text/javascript " src="HTML/js/components/masonry.min.js "></script>
    <script type="text/javascript " src="HTML/js/components/equal-height.min.js "></script>
    <script type="text/javascript " src="HTML/js/components/parallax.min.js "></script>
    <script type="text/javascript " src="HTML/js/components/wow.min.js "></script>
    <!--========== END JAVASCRIPTS ==========-->

</body>
<!-- End Body -->

</html>