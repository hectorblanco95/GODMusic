<?php 
session_start(); 
if (isset($_SESSION['username'])) {?>
<!DOCTYPE html>
<html lang="es-ES" class="no-js">
<!-- Begin Head -->

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GOD Music</title>
    <link rel="canonical" href="http://godmusic.com/" data-ajax-meta="binded">
    <meta name="keywords" content="HTML5 Theme" />
    <meta name="description" content="GODMusic - HTML5 Theme">
    <meta name="author" content="godmusic.com">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

    <!-- Vendor Styles -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css" />
    <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css" />
    <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/global/global.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/godmusic/HTML/img/IconGodMusic.ico" type="image/x-icon">
    <link rel="icon" href="/godmusic/HTML/img/IconGodMusic.ico" type="image/x-icon">
</head>
<!-- End Head -->

<!-- Body -->

<body>
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
                            <a href="/godmusic/HTML/profile.php" class="s-header-v2__logo-link">
                                <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="/godmusic/HTML/img/logo.PNG" alt="Dublin Logo" width="255px" high="208px">
                                <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="/godmusic/HTML/img/logo.PNG" alt="Dublin Logo" width="255px" high="208px">
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
                                    <a href="/godmusic/HTML/index_home.php" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOMEPAGE <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
                                    <ul class="dropdown-menu s-header-v2__dropdown-menu">
                                        <li><a href="#js__scroll-to-section" class="s-header-v2__dropdown-menu-link">Proximos conciertos</a></li>
                                        <li><a href="#js__scroll-to-section1" class="s-header-v2__dropdown-menu-link">Inscribirse conciertos</a></li>
                                        <li><a href="#js__scroll-to-section2" class="s-header-v2__dropdown-menu-link">Votar Conciertos</a></li>
                                        <li><a href="#js__scroll-to-section3" class="s-header-v2__dropdown-menu-link">Votar Locales</a></li>
                                        <li><a href="#js__scroll-to-section4" class="s-header-v2__dropdown-menu-link">Contact Us</a></li>
                                        <li><a href="#js__scroll-to-section5" class="s-header-v2__dropdown-menu-link">About</a></li>
                                    </ul>
                                </li>
                                <!-- End Home -->

                                <!-- Profile -->
                                <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                    <ul class="navbar-right">
                                <li class="dropdown"><a href="#" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="user-avatar pull-left" style="margin-right:8px; margin-top:28px;">
                                        <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" class="img-responsive img-circle" title="John Doe" alt="John Doe" width="30px" height="30px">
                                    </span>
                                    <span class="user-name">
                                        <?php echo $_SESSION['username'];?>
                                    </span>
                                    <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-content">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" alt="Alternate Text" class="img-responsive" width="120px" height="120px" />
                                                        <p class="text-center small">
                                                            <a href="/godmusic/HTML/change_profile.php">Change Photo</a></p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <span><?php echo $_SESSION['username'];?></span>
                                                        <p class="text-muted small">
                                                            <?php echo $_SESSION['email'];?></p>
                                                        <div class="divider">
                                                        </div>
                                                        <a href="/godmusic/HTML/my_profile.php" class="btn btn-default btn-xs"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contacts</a>
                                                        <a href="/godmusic/HTML/change_profile.php" class="btn btn-default btn-xs"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Help!</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="navbar-footer">
                                                <div class="navbar-footer-content">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="/godmusic/HTML/change_profile.php" class="btn btn-default btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change Passowrd</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="/godmusic/logout.php" class="btn btn-default btn-sm pull-right"><i class="fa fa-power-off" aria-hidden="true"></i> Sign Out</a>
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
    <!--========== END HEADER V2 ==========-->

    <!--========== SWIPER SLIDER ==========-->
    <div id="js__scroll-to-section" class="s-swiper js__swiper-slider">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <div class="g-fullheight--xs g-bg-position--center swiper-slide swip" style="background: url('/godmusic/HTML/img/1.png');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/2.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/3.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/4.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/5.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/6.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/7.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/8.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/9.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/10.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/12.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/13.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/14.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/15.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/16.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/17.png');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/godmusic/HTML/img/19.jpg');">
            </div>
        </div>
        <!-- End Swiper Wrapper -->

        <!-- Pagination -->
        <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--bc s-swiper__pagination-v1--white js__swiper-pagination"></div>
    </div>
    <!--========== END SWIPER SLIDER ==========-->

    <!--========== PAGE CONTENT ==========-->

    <!-- Events -->
    <div id="js__scroll-to-section2">

        <!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ --> 
<figure class="snip1237">


<div class="image" id="truck"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1223" alt="Touch-A-Truck" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Touch-A-Truck</h3><br> 
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1223" class="read-more">Read More</a> </figcaption> </figure> 


<!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ -->
<figure class="snip1237">
<div class="image" id="yardsale"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1234" alt="Yard Sale" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Community Yard Sale</h3><br> 
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1234" class="read-more">Read More</a> </figcaption> </figure> 

<!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ --> 
<figure class="snip1237">
<div class="image" id="shredding"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1226" alt="Shredding Day" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Shredding day</h3><br> 
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1226" class="read-more">Read More</a> </figcaption> </figure>

<!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ --> 
<figure class="snip1237">
<div class="image" id="haunt"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1221" alt="Haunted Barn" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Haunted Barn</h3><br> 
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1221" class="read-more">Read More</a> </figcaption> </figure>

<!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ --> <figure class="snip1237">
<div class="image" id="teenie"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1222" alt="Teenie Halloweenie" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Teenie Halloweenie</h3><br> 
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1222" class="read-more">Read More</a> </figcaption> </figure> 

<!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ --> <figure class="snip1237">
<div class="image" id="gingerbread"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1220" alt="Gingerbread" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Gingerbread House Decorating Contest</h3>  
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1220" class="read-more">Read More</a> </figcaption> </figure> 


    </div>
    <!-- /Events -->

    <div id="js__scroll-to-section3">

        <!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ --> 
<figure class="snip1237">


<div class="image" id="truck"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1223" alt="Touch-A-Truck" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Touch-A-Truck</h3><br> 
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1223" class="read-more">Read More</a> </figcaption> </figure> 


<!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ -->
<figure class="snip1237">
<div class="image" id="yardsale"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1234" alt="Yard Sale" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Community Yard Sale</h3><br> 
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1234" class="read-more">Read More</a> </figcaption> </figure> 

<!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ --> 
<figure class="snip1237">
<div class="image" id="shredding"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1226" alt="Shredding Day" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Shredding day</h3><br> 
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1226" class="read-more">Read More</a> </figcaption> </figure>

<!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ --> 
<figure class="snip1237">
<div class="image" id="haunt"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1221" alt="Haunted Barn" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Haunted Barn</h3><br> 
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1221" class="read-more">Read More</a> </figcaption> </figure>

<!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ --> <figure class="snip1237">
<div class="image" id="teenie"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1222" alt="Teenie Halloweenie" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Teenie Halloweenie</h3><br> 
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1222" class="read-more">Read More</a> </figcaption> </figure> 

<!-- -------------------------------------------------------------------------------------------START NEW MONTH------------------------------------------------------------------------------------------ --> <figure class="snip1237">
<div class="image" id="gingerbread"> <img src="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1220" alt="Gingerbread" height="100%" width="100%"><em></em>
 </div>
<figcaption>
<h3 style="text-align:center;">Gingerbread House Decorating Contest</h3>  
<a href="http://www.whitemarshtwp.org/ImageRepository/Document?documentID=1220" class="read-more">Read More</a> </figcaption> </figure> 


    </div>
    <!-- /Events -->

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
                                    support@godmusic.com
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
    
    <!--========== END PAGE CONTENT ==========-->

    <!--========== FOOTER ==========-->
    <footer id="js__scroll-to-section5" class="g-bg-color--dark">
        <!-- Links -->
        <div class="g-hor-divider__dashed--white-opacity-lightest">
            <div class="container g-padding-y-80--xs">
                <div class="row">
                    <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">Home</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">About</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">Work</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">Twitter</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">Facebook</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">Instagram</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">YouTube</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                        <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">Subscribe to Our Newsletter</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">Privacy Policy</a></li>
                            <li><a class="g-font-size-15--xs g-color--white-opacity" href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=godmusic">Terms &amp; Conditions</a></li>
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
                    <a href="index.html">
                        <img class="g-width-100--xs g-height-auto--xs" src="img/logo.png" alt="GODMusic Logo">
                    </a>
                </div>
                <div class="col-xs-6 g-text-right--xs">
                    <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="http://godmusic.com/preview/GODMusic/">GODMusic</a> Theme Powered by: <a href="http://www.godmusic.com/">godmusic.com</a></p>
                </div>
            </div>
        </div>
        <!-- End Copyright -->
    </footer>
    <!--========== END FOOTER ==========-->

    <!-- Back To Top -->
    <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

    <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
    <!-- Vendor -->
    <script type="text/javascript" src="vendor/jquery.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
    <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="vendor/masonry/jquery.masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="vendor/masonry/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.equal-height.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
    <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

    <!-- General Components and Settings -->
    <script type="text/javascript" src="js/global.min.js"></script>
    <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
    <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
    <script type="text/javascript" src="js/components/swiper.min.js"></script>
    <script type="text/javascript" src="js/components/masonry.min.js"></script>
    <script type="text/javascript" src="js/components/equal-height.min.js"></script>
    <script type="text/javascript" src="js/components/parallax.min.js"></script>
    <script type="text/javascript" src="js/components/wow.min.js"></script>
    <!--========== END JAVASCRIPTS ==========-->

</body>
<!-- End Body -->

</html>
<?php
} else{
    header("Location: index_home.php");
}?>