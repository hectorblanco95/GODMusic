<?php 
session_start();
require_once "../Functions/bbdd.php";

// Comprobamos si se ha pulsado botón "modificar"
 if (isset($_POST['modificar'])) {
    $newPass = $_POST['newPass'];
    $newPass2 = $_POST['newPass2'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $telef = $_POST['telef'];
    $ciudad = $_POST['ciudad'];
    $genero = $_POST['genero'];
    $descripcion = $_POST['descripcion'];
    $localizacion = $_POST['localizacion'];
 
    if($newPass!=$newPass2){
        echo 'las contraseñas no coinciden';
    } else{
    // Llamamos a la función que guarda los datos en la bbdd
    setDatosSession($newPass, $nombre, $apellidos, $email, $telef, $ciudad, $genero, $localizacion, $_SESSION['username']);
    header("Location: my_profile.php");
    }
    
} else{
    
if (isset($_SESSION['username']) && $_SESSION['perfil']=='m') {
$usu = sessionUsu($_SESSION['username']);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <form id="changebbdd-form" action="" method="post" role="form">
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
                                        <a href="/godmusic/HTML/profile.php" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="margin-right:-31px;">HOMEPAGE <span class="g-font-size-10--xs g-margin-l-5--xs ti-angle-down"></span></a>
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
                                <li class="dropdown" style="list-style-type: none !important;"><a href="#" class="dropdown-toggle s-header-v2__nav-link -is-active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                                                            <a href="/godmusic/HTML/change_profile.php">Change Photo</a></p>
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
                    <h1 class="panel-title pull-left" style="font-size:30px;"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="panel-title pull-left" style="font-size:30px;">My basic profile</h1>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Your Password</h3>
                    <br><br>
                    <form class="form-horizontal">
                        <label for="New_pass">New Password</label>
                        <input type="text" class="form-control" id="New_pass" name="newPass">
                        <label for="Repeat_pass">Repeat New Password</label>
                        <input type="text" class="form-control" id="Repeat_pass" name="newPass2">
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Your Name</h3>
                    <br><br>
                    <form class="form-horizontal">
                        <label for="First_name">First name</label>
                        <input type="text" class="form-control" id="First_name" name="nombre" value="<?php echo $usu['nombre'];?>">
                        <label for="Last_name">Last name</label>
                        <input type="text" class="form-control" id="Last_name" name="apellidos" value="<?php echo $usu['apellidos'];?>">
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Your Email</h3>
                    <br><br>
                    <form class="form-horizontal">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" id="Email" name="email" value="<?php echo $usu['email'];?>">
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Your Phone Number</h3>
                    <br><br>
                    <form class="form-horizontal">
                        <label for="PhoneNumber">Phone Number</label>
                        <input type="text" class="form-control" id="PhoneNumber" name="telef" value="<?php echo $usu['telefono'];?>">
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Your City</h3>
                    <br><br>
                    <form class="form-horizontal">
                        <label for="City">City</label>
                        <input type="text" class="form-control" id="City" name="ciudad" value="<?php echo $usu['ciudad'];?>">
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Describe yourself in 5 words</h3>
                    <br><br>
                    <form class="form-horizontal">
                        <input type="text" class="form-control" id="keywords" placeholder="Like #movies #kittens #travel #teacher #newyork" name="descripcion">
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">Your photo</h3>
                    <br><br>
                    <div align="center">
                        <div class="col-lg-12 col-md-12">
                            <img class="img-thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px">
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Upload a new profile photo!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="panel-title pull-left">My extended profile</h3>
                    <br><br>
                    <p>Visibility of your extended profile:</p>
                    ...
                    <br><br>
                    <form class="form-horizontal">
                        <label>Your bio</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </form>
                    <br><br>
                    <form class="form-horizontal">
                        <label for="Your_location">Your location</label>
                        <input type="text" class="form-control" id="Your_location" placeholder="Fill me out" name="localizacion" value="<?php echo $usu['ciudad'];?>">
                        <br>
                        <label for="Your_gender">Your gender</label>
                        <input type="text" class="form-control" id="Your_gender" placeholder="Fill me out" name="genero" value="<?php echo $usu['sexo'];?>">
                        <br>
                        <label>Your Birthday</label>
                        <?php
                        $date = $usu['nacimiento'];
                        list($y, $m, $d) = explode('-', $date);
                        if ($y=='0000') $y='Year';
                        if ($d=='00') $d='Day';
                        if ($m=='00') $m='Month';
                        else if ($m=='01') $m='January';
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
                        <div class='form-inline' id='birth-date'>
                            <select id='profile_date_year' name='profile[date][year]' class='form-control'>
                                <option value='' selected='selected'>$y</option>
                                <option value='2003'>2003</option>
                                <option value='2002'>2002</option>
                                <option value='2001'>2001</option>
                                <option value='2000'>2000</option>
                                <option value='1999'>1999</option>
                                <option value='1998'>1998</option>
                                <option value='1997'>1997</option>
                                <option value='1996'>1996</option>
                                <option value='1995'>1995</option>
                                <option value='1994'>1994</option>
                                <option value='1993'>1993</option>
                                <option value='1992'>1992</option>
                                <option value='1991'>1991</option>
                                <option value='1990'>1990</option>
                                <option value='1989'>1989</option>
                                <option value='1988'>1988</option>
                                <option value='1987'>1987</option>
                                <option value='1986'>1986</option>
                                <option value='1985'>1985</option>
                                <option value='1984'>1984</option>
                                <option value='1983'>1983</option>
                                <option value='1982'>1982</option>
                                <option value='1981'>1981</option>
                                <option value='1980'>1980</option>
                                <option value='1979'>1979</option>
                                <option value='1978'>1978</option>
                                <option value='1977'>1977</option>
                                <option value='1976'>1976</option>
                                <option value='1975'>1975</option>
                                <option value='1974'>1974</option>
                                <option value='1973'>1973</option>
                                <option value='1972'>1972</option>
                                <option value='1971'>1971</option>
                                <option value='1970'>1970</option>
                                <option value='1969'>1969</option>
                                <option value='1968'>1968</option>
                                <option value='1967'>1967</option>
                                <option value='1966'>1966</option>
                                <option value='1965'>1965</option>
                                <option value='1964'>1964</option>
                                <option value='1963'>1963</option>
                                <option value='1962'>1962</option>
                                <option value='1961'>1961</option>
                                <option value='1960'>1960</option>
                                <option value='1959'>1959</option>
                                <option value='1958'>1958</option>
                                <option value='1957'>1957</option>
                                <option value='1956'>1956</option>
                                <option value='1955'>1955</option>
                                <option value='1954'>1954</option>
                                <option value='1953'>1953</option>
                                <option value='1952'>1952</option>
                                <option value='1951'>1951</option>
                                <option value='1950'>1950</option>
                                <option value='1949'>1949</option>
                                <option value='1948'>1948</option>
                                <option value='1947'>1947</option>
                                <option value='1946'>1946</option>
                                <option value='1945'>1945</option>
                                <option value='1944'>1944</option>
                                <option value='1943'>1943</option>
                                <option value='1942'>1942</option>
                                <option value='1941'>1941</option>
                                <option value='1940'>1940</option>
                                <option value='1939'>1939</option>
                                <option value='1938'>1938</option>
                                <option value='1937'>1937</option>
                                <option value='1936'>1936</option>
                                <option value='1935'>1935</option>
                                <option value='1934'>1934</option>
                                <option value='1933'>1933</option>
                                <option value='1932'>1932</option>
                                <option value='1931'>1931</option>
                                <option value='1930'>1930</option>
                                <option value='1929'>1929</option>
                                <option value='1928'>1928</option>
                                <option value='1927'>1927</option>
                                <option value='1926'>1926</option>
                                <option value='1925'>1925</option>
                                <option value='1924'>1924</option>
                                <option value='1923'>1923</option>
                                <option value='1922'>1922</option>
                                <option value='1921'>1921</option>
                                <option value='1920'>1920</option>
                                <option value='1919'>1919</option>
                                <option value='1918'>1918</option>
                                <option value='1917'>1917</option>
                                <option value='1916'>1916</option>
                                <option value='1915'>1915</option>
                                <option value='1914'>1914</option>
                                <option value='1913'>1913</option>
                                <option value='1912'>1912</option>
                                <option value='1911'>1911</option>
                                <option value='1910'>1910</option>
                                <option value='1909'>1909</option>
                                <option value='1908'>1908</option>
                                <option value='1907'>1907</option>
                                <option value='1906'>1906</option>
                                <option value='1905'>1905</option>
                                <option value='1904'>1904</option>
                                <option value='1903'>1903</option>
                                <option value='1902'>1902</option>
                                <option value='1901'>1901</option>
                                <option value='1900'>1900</option>
                                <option value='1899'>1899</option>
                                <option value='1898'>1898</option>
                                <option value='1897'>1897</option>
                                <option value='1896'>1896</option>
                                <option value='1895'>1895</option>
                                <option value='1894'>1894</option>
                                <option value='1893'>1893</option>
                                <option value='1892'>1892</option>
                                <option value='1891'>1891</option>
                            </select>
                            <select id='profile_date_month' name='profile[date][month]' class='form-control'>
                                <option value='' selected='selected'>$m</option>
                                <option value='1'>January</option>
                                <option value='2'>February</option>
                                <option value='3'>March</option>
                                <option value='4'>April</option>
                                <option value='5'>May</option>
                                <option value='6'>June</option>
                                <option value='7'>July</option>
                                <option value='8'>August</option>
                                <option value='9'>September</option>
                                <option value='10'>October</option>
                                <option value='11'>November</option>
                                <option value='12'>December</option>
                            </select>
                            <select id='profile_date_day' name='profile[date][day]' class='form-control'>
                                <option value='' selected='selected'>$d</option>
                                <option value='1'>1</option>
                                <option value='2'>2</option>
                                <option value='3'>3</option>
                                <option value='4'>4</option>
                                <option value='5'>5</option>
                                <option value='6'>6</option>
                                <option value='7'>7</option>
                                <option value='8'>8</option>
                                <option value='9'>9</option>
                                <option value='10'>10</option>
                                <option value='11'>11</option>
                                <option value='12'>12</option>
                                <option value='13'>13</option>
                                <option value='14'>14</option>
                                <option value='15'>15</option>
                                <option value='16'>16</option>
                                <option value='17'>17</option>
                                <option value='18'>18</option>
                                <option value='19'>19</option>
                                <option value='20'>20</option>
                                <option value='21'>21</option>
                                <option value='22'>22</option>
                                <option value='23'>23</option>
                                <option value='24'>24</option>
                                <option value='25'>25</option>
                                <option value='26'>26</option>
                                <option value='27'>27</option>
                                <option value='28'>28</option>
                                <option value='29'>29</option>
                                <option value='30'>30</option>
                                <option value='31'>31</option>
                            </select>";?>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="panel panel-default">
                <div class="panel-body">
                    <button class="btn btn-default"><i class="fa fa-fw fa-times" aria-hidden="true"></i> Cancel</button>
                    <button type="submit" name="modificar" class="btn btn-primary"><i class="fa fa-fw fa-check" aria-hidden="true"></i> Update Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
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
    header("Location: ../index.php");
}
}?>