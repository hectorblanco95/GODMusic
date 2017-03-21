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
                    <button class="btn btn-default" action="/godmusic/buscador.php" type="button"><span class="glyphicon glyphicon-search"></span></button>
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
                                        <li><a href="#js__scroll-to-section1" class="s-header-v2__dropdown-menu-link">Conciertos en Bcn</a></li>
                                        <li><a href="#js__scroll-to-section2" class="s-header-v2__dropdown-menu-link">Conciertos Recomendados</a></li>
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
    
    <div id="js__scroll-to-section1">
                   <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
                       
                       <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white spai">Conciertos Cerca De Barcelona</h2>
                       
                        <div class="container3">
    <div>
        <!--CONCERT1-->
        <div class="col-md-4 col-md-offset-4 watch-card" style="width:320px;">
            <div class="artist-title col-md-12">
                <a href=""><b>Chris Brown</b></a><br/>
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
                    <li role="presentation" class="active"><a href="#track" aria-controls="track" role="tab" data-toggle="tab">Próximo Conciertos</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <li><p class="calendar">26<em>Marzo</em></p></li>
                            <li>Hora:</a> <span><?php//$fila['hora'];?> 22.30h</span></li>
                            <li><a href="#">Local:</a>  <span><a href="https://www.google.com/maps/place/Razzmatazz/@41.3968598,2.1915848,17.06z/data=!4m5!3m4!1s0x12a4a3190e0640b5:0x40f9d8fe93a98ca!8m2!3d41.397732!4d2.191077?hl=es" target="_blank">Razzmatazz</a></span></li>
                            <li><a href="#">Genero:</a>  <span>Hip-Hop</span></li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>
        
        <div class="col-md-4 col-md-offset-4 watch-card" style="width:320px;">
            <div class="artist-title col-md-12">
                <a href=""><b>U2</b></a></a><br/>
            </div>
            <div class="artist-collage col-md-12">
                <div class="col-md-6"><img src="http://www.u2spain.es/wp-content/uploads/2014/11/U2-mojo2.jpg" alt="artist-image" width="150" height="150"></div>
                <div class="col-md-6 collage-rhs">
                    <div class="col-md-12"><img src="http://cdn.u2.com/images/news/news_tn_248X150.jpg" alt="artist-image" width="150" height="84"></div>
                    <div class="col-md-12"><img src="http://www.hollywoodreporter.com/sites/default/files/custom/u2-time.jpg" alt="artist-image" width="150" height="84"></div>        
                </div>
            </div>
            <div class="listing-tab col-md-12">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active"><a href="#track" aria-controls="track" role="tab" data-toggle="tab">Próximo Concierto</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <li><p class="calendar">5<em>Septiembre</em></p></li>
                            <li>Hora:</a> <span><?php//$fila['hora'];?> 21.00h</span></li>
                            <li><a href="#">Local:</a>  <span><a href="https://www.google.es/maps/place/Sala+Apolo/@41.3742979,2.1674963,17z/data=!3m1!4b1!4m5!3m4!1s0x12a4a25c75a2cf3b:0xfe58977ad221b3a6!8m2!3d41.3742979!4d2.169685" target="blank">Sala Apolo</a></span></li>
                            <li><a href="#">Genero:</a>  <span>Rock'n Roll</span></li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>
        
        <div class="col-md-4 col-md-offset-4 watch-card" style="width:320px;">
            <div class="artist-title col-md-12">
                <a href=""><b>Jus Deelax</b></a><br/>
            </div>
            <div class="artist-collage col-md-12">
                <div class="col-md-6"><img src="http://palace.hu/wp-content/uploads/2016/05/mnml_j%C3%BAl2-cover-845x315.jpg" alt="artist-image" width="150" height="150"></div>
                <div class="col-md-6 collage-rhs">
                    <div class="col-md-12"><img src="https://i.ytimg.com/vi/3m26fYt9kR8/hqdefault.jpg" alt="artist-image" width="150" height="84"></div>
                    <div class="col-md-12"><img src="http://emocion.movistar.es/yavoy_res/images/122173.jpg" alt="artist-image" width="150" height="84"></div>        
                </div>
            </div>
            <div class="listing-tab col-md-12">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active"><a href="#track" aria-controls="track" role="tab" data-toggle="tab">Próximo Concierto</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                 <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <li><p class="calendar">20<em>Abril</em></p></li>
                            <li>Hora:</a> <span><?php//$fila['hora'];?> 00.00h</span></li>
                            <li><a href="#">Local:</a>  <span><a href="https://www.google.es/maps/place/Pacha+Barcelona/@41.3857471,2.1948701,17z/data=!3m1!4b1!4m5!3m4!1s0x12a4a30ed4c76ce9:0x3af51a6640254e5b!8m2!3d41.3857471!4d2.1970588" target="blank">Pacha</a></span></li>
                            <li><a href="#">Genero:</a>  <span>Minimal</span></li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>
        
        
    </div>
</div>

                    </div>
                </div>
                
    <div id="js__scroll-to-section2">
                   <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
                       
                       <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white spai">Conciertos recomendados</h2>
                       
                        <div class="container3">
    <div>
        <div class="col-md-4 col-md-offset-4 watch-card" style="width:320px;">
            <div class="artist-title col-md-12">
                <a href=""><b>PLAN B</b></a><br/>
            </div>
            <div class="artist-collage col-md-12">
                <div class="col-md-6"><img src="http://www.elgenero.com/images/planb.jpg" alt="artist-image" width="150" height="150"></div>
                <div class="col-md-6 collage-rhs">
                    <div class="col-md-12"><img src="https://pbs.twimg.com/profile_images/440293390455152640/RFb6DPZ2.jpeg" alt="artist-image" width="150" height="84"></div>
                    <div class="col-md-12"><img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Plan_B.jpg" alt="artist-image" width="150" height="84"></div>        
                </div>
            </div>
            <div class="listing-tab col-md-12">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active"><a href="#track" aria-controls="track" role="tab" data-toggle="tab">Próximo Concierto</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                 <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <li><p class="calendar">3,5<em>Gener</em></p></li>
                            <li>Hora:</a> <span><?php//$fila['hora'];?> 20.15h</span></li>
                            <li><a href="#">Local:</a>  <span><a href="https://www.google.es/maps/place/Opium+Barcelona/@41.3853368,2.1945879,17z/data=!3m1!4b1!4m5!3m4!1s0x12a4a30ed4d7a9c1:0xdb50d778f3b623e4!8m2!3d41.3853368!4d2.1967766" target="blank">Opium</a></span></li>
                            <li><a href="#">Genero:</a>  <span>Reggaetón</span></li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>
        
        <div class="col-md-4 col-md-offset-4 watch-card" style="width:320px;">
            <div class="artist-title col-md-12">
                <a href=""><b>Young Thug</b></a><br/>
            </div>
            <div class="artist-collage col-md-12">
                <div class="col-md-6"><img src="https://assets.audiomack.com/rhymehiphopcom/87188f20d273942ccbc790fa7e9ba172.png" alt="artist-image" width="150" height="150"></div>
                <div class="col-md-6 collage-rhs">
                    <div class="col-md-12"><img src="http://media.gq.com/photos/56c39f0b480eac5d29f2ebe6/16:9/pass/young-thug-square.jpg" alt="artist-image" width="150" height="84"></div>
                    <div class="col-md-12"><img src="https://assets.audiomack.com/uhtijohn/1fa31b6192480a78fee88808b4af91d2.jpeg" alt="artist-image" width="150" height="84"></div>        
                </div>
            </div>
            <div class="listing-tab col-md-12">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active"><a href="#track" aria-controls="track" role="tab" data-toggle="tab">Próximo Concierto</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                 <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <li><p class="calendar">20<em>Agosto</em></p></li>
                            <li>Hora:</a> <span><?php//$fila['hora'];?> 00.00h</span></li>
                            <li><a href="#">Local:</a>  <span><a href="https://www.google.es/maps/place/Otto+Zutz/@41.4003998,2.1478314,17z/data=!3m1!4b1!4m5!3m4!1s0x12a4a298b318f9a9:0x32b685d25bfcf131!8m2!3d41.4003998!4d2.1500201" target="blank">Otto Zutz</a></span></li>
                            <li><a href="#">Genero:</a>  <span>Hip-Hop/Trap</span></li>
                        </ul>
                    </div>
                  </div>
            </div>
        </div>
        
        <div class="col-md-4 col-md-offset-4 watch-card" style="width:320px;">
            <div class="artist-title col-md-12">
                <a href=""><b>Rodolfo Chiquilicuatre</b></a><br/>
            </div>
            <div class="artist-collage col-md-12">
                <div class="col-md-6"><img src="data:image/jpeg;base64,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" alt="artist-image" width="150" height="150"></div>
                <div class="col-md-6 collage-rhs">
                    <div class="col-md-12"><img src="http://entasisblog.files.wordpress.com/2008/05/chikili4.jpg" alt="artist-image" width="150" height="84"></div>
                    <div class="col-md-12"><img src="http://quemedices.diezminutos.es/var/plain_site/storage/images/noticias_famosos/chiki_chiki/rodolfo_chikilicuatre_ha_nacido_una_estrella/6300-1-esl-ES/rodolfo_chikilicuatre_ha_nacido_una_estrella_reference.jpg" alt="artist-image" width="150" height="84"></div>        
                </div>
            </div>
            <div class="listing-tab col-md-12">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li role="presentation" class="active"><a href="#track" aria-controls="track" role="tab" data-toggle="tab">Próximo Concierto</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                 <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="track">
                        <ul>
                            <li><p class="calendar">3<em>Mayo</em></p></li>
                            <li>Hora:</a> <span><?php//$fila['hora'];?> 00.00h</span></li>
                            <li><a href="#">Local:</a>  <span><a href="https://www.google.es/maps/place/Catalunya/@41.386655,2.1675835,17z/data=!3m1!4b1!4m5!3m4!1s0x12a4a2f3c37acd4f:0xc6878e918e86b13e!8m2!3d41.386655!4d2.1697722" target="blank">Plaza Catalunya</a></span></li>
                            <li><a href="#">Genero:</a>  <span>Alternativo</span></li>
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
                       
                       <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white spai">Vota los mejores conciertos!</h2>
                       
                        <div class="container3">
    <div>
        <div>
        <?php
        require_once '../Functions/bbdd.php';
        echo "<form action='' method='POST'>";
	
	    echo "Selecciona el concierto que deseas votar: <select name='vot'><br>";
	$concert = selectConciertos();
	while($fila = mysqli_fetch_array($concert)){
		extract($fila);
		echo "<option value='$nombre'>$nombre</option>";
	}
	echo "</select><br>";
        ?>
        </div>
        </div>
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
    <a href="javascript:void(0); " class="s-back-to-top js__back-to-top "></a>

    <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
    <!-- Vendor -->
    <script type="text/javascript " src="vendor/jquery.min.js "></script>
    <script type="text/javascript " src="vendor/jquery.migrate.min.js "></script>
    <script type="text/javascript " src="vendor/bootstrap/js/bootstrap.min.js "></script>
    <script type="text/javascript " src="vendor/jquery.smooth-scroll.min.js "></script>
    <script type="text/javascript " src="vendor/jquery.back-to-top.min.js "></script>
    <script type="text/javascript " src="vendor/scrollbar/jquery.scrollbar.min.js "></script>
    <script type="text/javascript " src="vendor/swiper/swiper.jquery.min.js "></script>
    <script type="text/javascript " src="vendor/masonry/jquery.masonry.pkgd.min.js "></script>
    <script type="text/javascript " src="vendor/masonry/imagesloaded.pkgd.min.js "></script>
    <script type="text/javascript " src="vendor/jquery.equal-height.min.js "></script>
    <script type="text/javascript " src="vendor/jquery.parallax.min.js "></script>
    <script type="text/javascript " src="vendor/jquery.wow.min.js "></script>


    <!-- General Components and Settings -->
    <script type="text/javascript " src="js/global.min.js "></script>
    <script type="text/javascript " src="js/components/header-sticky.min.js "></script>
    <script type="text/javascript " src="js/components/scrollbar.min.js "></script>
    <script type="text/javascript " src="js/components/swiper.min.js "></script>
    <script type="text/javascript " src="js/components/masonry.min.js "></script>
    <script type="text/javascript " src="js/components/equal-height.min.js "></script>
    <script type="text/javascript " src="js/components/parallax.min.js "></script>
    <script type="text/javascript " src="js/components/wow.min.js "></script>
    <!--========== END JAVASCRIPTS ==========-->

</body>
<!-- End Body -->

</html>
<?php
} else{
    header("Location: index_home.php");
}?>