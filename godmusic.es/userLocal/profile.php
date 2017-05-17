<?php 
session_start(); 
if (isset($_SESSION['username'])) {
require_once "/Functions/bbdd.php";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Vendor Styles -->
    <link href="/HTML/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/HTML/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="/HTML/vendor/themify/themify.css" rel="stylesheet" type="text/css" />
    <link href="/HTML/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css" />
    <link href="/HTML/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="/HTML/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/HTML/css/global/global.css" rel="stylesheet" type="text/css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="/HTML/img/IconGodMusic.ico" type="image/x-icon">
    <link rel="icon" href="/HTML/img/IconGodMusic.ico" type="image/x-icon">
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
                    <button class="btn btn-default" action="/buscador.php" type="button"><span class="glyphicon glyphicon-search"></span></button>
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
                                    <!--Boto crear concert-->
                                    <a class="btn btn-primary s-header-v2__nav-link" data-toggle="modal" data-target="#newConcert" style=" line-height: 1.5rem;top: 25px;"><i class="fa fa-fw -square -circle fa-plus-square"></i> NEW CONCERT</a>
                                </li>
                                <li class="dropdown s-header-v2__nav-item s-header-v2__dropdown-on-hover">
                                    <a href="/index.php" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOMEPAGE <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
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
                                        <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" class="img-responsive img-circle" title="<?php echo $_SESSION['username'];?>" alt="<?php echo $_SESSION['username'];?>" width="30px" height="30px">
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
                                                        <img src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" alt="<?php echo $_SESSION['username'];?>" class="img-responsive" width="120px" height="120px" />
                                                        <p class="text-center small">
                                                            <a href="change_profile.php">Change Photo</a></p>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <span><?php echo $_SESSION['username'];?></span>
                                                        <p class="text-muted small">
                                                            <?php echo $_SESSION['email'];?></p>
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
    <!--========== END HEADER V2 ==========-->

    <!--========== SWIPER SLIDER ==========-->
    <div id="js__scroll-to-section" class="s-swiper js__swiper-slider">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <div class="g-fullheight--xs g-bg-position--center swiper-slide swip" style="background: url('/HTML/img/1.png');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/2.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/3.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/4.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/5.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/6.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/7.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/8.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/9.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/10.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/12.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/13.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/14.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/15.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/16.jpg');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/17.png');">
            </div>
            <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('/HTML/img/19.jpg');">
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
                       
                       <h2 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white spai">Ranking de grupos</h2>
                       
                        <div class="container3">
    <div>
        <!--CONCERT1 aqui-->
       <?php
        $groups = rankinggroups();
        while ($fila = mysqli_fetch_array($groups)) {
        extract($fila);
        
       
  
       echo "<div class='col-md-4 col-md-offset-4 watch-card' id='pedra' style='width:320px;'>
            <div class='artist-title col-md-12'>
                <a href=''><b>$nombre_artistico</b></a><br/>
            </div>
            <div class='artist-collage col-md-12'>
                <div class='col-md-6'><img src='http://i.ytimg.com/i/MXDyVR2tclKWhbqNforSyA/mq1.jpg' alt='artist-image' width='150' height='150'></div>
                <div class='col-md-6 collage-rhs'>
                    <div class='col-md-12'><img src='http://i.ytimg.com/vi/8gyLR4NfMiI/mqdefault.jpg' alt='artist-image' width='150' height='84'></div>
                    <div class='col-md-12'><img src='http://i.ytimg.com/vi/zKCrSN9oXgQ/mqdefault.jpg' alt='artist-image' width='150' height='84'></div>        
                </div>
            </div>
            <div class='listing-tab col-md-12'>
                  <!-- Nav tabs -->
                  <ul class='nav nav-tabs' id='myTabs' role='tablist'>
                    <li role='presentation' class='active'><a href='#track' aria-controls='track' role='tab' data-toggle='tab'>Datos del grupo</a></li>
                  </ul>
                
                  <!-- Tab panes -->
                 
                  <div class='tab-content'>
                    <div role='tabpanel' class='tab-pane active' id='track'>
                        <ul>
                          
                            <li>Numero de votos:$vt</a> </li>
                            <li>Genero:</a>  <span>$nomestilo</span></li>
                            <span>
                                <button id='yes'>
                                    <a href='javascript:clicks2();'>
                                        <div class='votar'>
                                             <img id='id' src='http://www.freeiconspng.com/uploads/like-button-png-3.png' width='25' height='25'/>
                                        </div>
                                    </a>
                                </button>
                            </span>
                        </ul>
        <p>Clicks negatius: <span id='clicks'>0</span></p>
        <p>Clicks positius: <span id='clicks2'>0</span></p>
                      
                    </div>
                </div>
            </div>
        </div>";
        }
        ?>
      
        
       
        
        
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
                <div><img src='/HTML/img/2.jpg' alt='artist-image' width='300' height='150'></div>
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
    
    <div class="fade modal" id="newConcert">
        <div class="modal-dialog">
            <div class="modal-content" style="top: 68px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-fw s fa-remove"></i></button>
                    <h2 class="modal-title" id="myModalLabel">Crea Concierto</h2>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="issets.php" method="post" role="form">
                        <fieldset>
                            <!-- Form Name -->
                            <!-- Prepended text-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nomConcierto">Nombre del Concierto</label>
                                <div class="col-md-5">
                                    <input id="nomConcierto" name="nomConcierto" class="form-control" placeholder="Nombre del concierto" type="text" required="">
                                </div>
                            </div>
                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="state">Estado</label>
                                <div class="col-md-5">
                                    <select id="tipo" name="tipo" class="form-control">
                                    <option value="T">Cerrado</option>
                                    <option value="O">Abierto</option>
                                    <option value="C">wf</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="day">Dia</label>
                                <div class="col-md-5">
                                    <input id="day" name="day" type="date" placeholder="Dia" class="form-control input-md" min="<?php echo date('Y-m-d'); ?>"  required="">
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Hora</label>
                                <div class="col-md-5">
                                    <input id="time" name="time" type="time" placeholder="Hora" class="form-control input-md" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="cost">Coste</label>
                                <div class="col-md-5">
                                    <input id="confirm-password" name="cost" type="number" placeholder="Coste" class="form-control input-md" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="genero">Genero</label>
                                <div class="col-md-5">
                                    <select id="tipo" name="tipo" class="form-control">
                                    <option value="1">Pop</option>
                                    <option value="2">Punk</option>
                                    <option value="3">Reggae</option>
                                    <option value="4">Reguetón</option>
                                    <option value="5">Soul</option>
                                    <option value="6">Jazz</option>
                                    <option value="7">Funk</option>
                                    <option value="8">Blues</option>
                                    <option value="9">Rock</option>
                                    <option value="10">Rap</option>
                                    <option value="11">Hip-Hop</option>
                                    <option value="12">Bachata</option>
                                    </select>
                                </div>
                                    <button type="submit" class="btn btn-primary" name="alta">
                                        <i class="fa fa-fw fa-save"></i>Save</button>
                                </div>
                            <!-- File Button -->
                            <!-- Button -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
                    <a href="/index.php">
                        <img class="g-width-100--xs g-height-auto--xs" src="img/logo.png" alt="GODMusic Logo">
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
    <!--========== END JAVASCRIPTS ==========--
    
</body>
<!-- End Body -->

</html>
<?php
} else
   header("Location: index.php");
?>