<?php 
session_start(); 
require_once "/bbdd.php";
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
    <link rel="canonical" href="http://godmusic.es/" data-ajax-meta="binded">
    <meta name="keywords" content="HTML5 Theme" />
    <meta name="description" content="GODMusic - HTML5 Theme">
    <meta name="author" content="godmusic.es">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

    <!-- Vendor Styles -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css" />
    <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css" />
    <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css" />
    <link href="css/basic.css" rel="styleshit" type="text/css"/>
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
        <div class="col-md-4 col-md-offset-4 watch-card" id="pedra" style="width:320px;">
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
                            <li>Local:</a>  <span><a href="https://www.google.com/maps/place/Razzmatazz/@41.3968598,2.1915848,17.06z/data=!4m5!3m4!1s0x12a4a3190e0640b5:0x40f9d8fe93a98ca!8m2!3d41.397732!4d2.191077?hl=es" target="_blank">Razzmatazz</a></span></li>
                            <li>Genero:</a>  <span>Hip-Hop</span></li>
                             <li><button id="no"><div class="votar"><a href="javascript:clicks();"><img src="http://2.bp.blogspot.com/-qTZd5kDi-QY/Uw-B6MTrP4I/AAAAAAAAMt4/wtNO4wz4hys/s1600/facebook-logo-png-transparent-background-i3.png" width="25" height="25"></a></div></button></a>  <span><button id="yes"><div class="votar"><a href="javascript:clicks2();"><img src="http://www.freeiconspng.com/uploads/like-button-png-3.png" width="25" height="25"></a></div></button></span></li>
                        </ul>
                    <?php
                    	if(isset($_POST['form'])){
                    	    echo "<form action='' method='POST'>";
                    	    $usuari = $_POST['usu'];
                    	    echo "</form>";
                    	    echo $usuari.", voto efectuado satisfactoriamente!";
                    	}else{
                    echo "<form action='' method='POST'>";
	
                    	}
                    ?>

        <p>Clicks negatius: <span id="clicks">0</span></p>
        <p>Clicks positius: <span id="clicks2">0</span></p>
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
                            <li>Local:</a>  <span><a href="https://www.google.es/maps/place/Sala+Apolo/@41.3742979,2.1674963,17z/data=!3m1!4b1!4m5!3m4!1s0x12a4a25c75a2cf3b:0xfe58977ad221b3a6!8m2!3d41.3742979!4d2.169685" target="blank">Sala Apolo</a></span></li>
                            <li>Genero:</a>  <span>Rock'n Roll</span></li>
                             <li><button id="no"><div class="votar"><a href="javascript:clicks();"><img src="http://2.bp.blogspot.com/-qTZd5kDi-QY/Uw-B6MTrP4I/AAAAAAAAMt4/wtNO4wz4hys/s1600/facebook-logo-png-transparent-background-i3.png" width="25" height="25"></a></div></button></a>  <span><button id="yes"><div class="votar"><a href="javascript:clicks2();"><img src="http://www.freeiconspng.com/uploads/like-button-png-3.png" width="25" height="25"></a></div></button></span></li>
                        </ul>

        <p>Clicks negatius: <span id="clicks3">0</span></p>
        <p>Clicks positius: <span id="clicks4">0</span></p>
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
                            <li>Local:</a>  <span><a href="https://www.google.es/maps/place/Pacha+Barcelona/@41.3857471,2.1948701,17z/data=!3m1!4b1!4m5!3m4!1s0x12a4a30ed4c76ce9:0x3af51a6640254e5b!8m2!3d41.3857471!4d2.1970588" target="blank">Pacha</a></span></li>
                            <li>Genero:</a>  <span>Minimal</span></li>
                             <li><button id="no"><div class="votar"><a href="javascript:clicks();"><img src="http://2.bp.blogspot.com/-qTZd5kDi-QY/Uw-B6MTrP4I/AAAAAAAAMt4/wtNO4wz4hys/s1600/facebook-logo-png-transparent-background-i3.png" width="25" height="25"></a></div></button></a>  <span><button id="yes"><div class="votar"><a href="javascript:clicks2();"><img src="http://www.freeiconspng.com/uploads/like-button-png-3.png" width="25" height="25"></a></div></button></span></li>
                        </ul>

        <p>Clicks negatius: <span id="clicks5">0</span></p>
        <p>Clicks positius: <span id="clicks6">0</span></p>
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
        <?php
        $concierto = selectConciertos();
        while ($fila = mysqli_fetch_array($concierto)) {
        extract($fila);
        $date = $dia;
        list($y, $m, $d) = explode('-', $date);
        if ($m==01) $m='January';
        else if ($m==02) $m='February';
        else if ($m==03) $m='March';
        else if ($m==04) $m='April';
        else if ($m==05) $m='May';
        else if ($m==06) $m='June';
        else if ($m==07) $m='July';
        else if ($m==08) $m='August';
        else if ($m==09) $m='September';
        else if ($m==10) $m='October';
        else if ($m==11) $m='November';
        else if ($m==12) $m='December';
        echo "
        <div class='col-md-4 col-md-offset-4 watch-card' style='width:320px;'>
            <div class='artist-title col-md-12'>
                <a href=''>$nombre</a><br/>
            </div>
            <div class='artist-collage col-md-12'>
                <div><img src='/godmusic/HTML/img/2.jpg' alt='artist-image' width='300' height='150'></div>
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
                    <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="http://godmusic.es/preview/GODMusic/">GODMusic</a> Theme Powered by: <a href="http://www.godmusic.es/">godmusic.es</a></p>
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