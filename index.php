<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Test</title>

		<!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
    <body>

    <div id="page-wrapper" class="page-loading">
        <!-- Page Container -->
        <!-- Preloader -->
        <div class="preloader">
            <div class="inner">
                <!-- Animation spinner for all modern browsers -->
                <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

                <!-- Text for IE9 -->
                <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
            </div>
        </div>
        <!-- END Preloader -->
        <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
            <!-- Alternative Sidebar -->
            <div id="sidebar-alt">
                Alternative Sidebar Content
            </div>
            <!-- END Alternative Sidebar -->

            <!-- Main Sidebar -->
            <div id="sidebar">
                <!-- Sidebar Brand -->
                <div id="sidebar-brand" class="themed-background">
                    <a href="index.html" class="sidebar-title">
                        <span class="sidebar-nav-mini-hide"><img src="logo/logo_okm.png" class="logo_app" alt="Dekora Hogar" width="60%" style="margin: 0 25px; position: relative; top: -3px;"></span>
                    </a>
                </div>
                <!-- END Sidebar Brand -->

                <!-- Wrapper for scrolling functionality -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            <li>
                                <a href="#/survey" class="sidebar-nav-menu-act active">
                                    <i class="fa fa-edit sidebar-nav-icon"></i>
                                    <span class="sidebar-nav-mini-hide animation-slideRight">Encuesta Inicial</span>
                                </a>
                            </li>
                            <li class="sidebar-separator">
                                <i class="fa fa-ellipsis-h"></i>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu">
                                    <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                                    <i class="fa fa-bookmark sidebar-nav-icon"></i>
                                    <span class="sidebar-nav-mini-hide animation-slideRight">Información Personal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu">
                                    <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                                    <i class="fa fa-mortar-board sidebar-nav-icon"></i>
                                    <span class="sidebar-nav-mini-hide animation-slideRight">Formación Académica</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu">
                                    <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                                    <i class="fa fa-suitcase sidebar-nav-icon"></i>
                                    <span class="sidebar-nav-mini-hide animation-slideRight">Experiencia Laboral</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu">
                                    <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                                    <i class="fa fa-male sidebar-nav-icon"></i>
                                    <span class="sidebar-nav-mini-hide animation-slideRight">Referencia Personal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="sidebar-nav-menu">
                                    <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                                    <i class="fa fa-info-circle sidebar-nav-icon"></i>
                                    <span class="sidebar-nav-mini-hide animation-slideRight">Informacón Adicional</span>
                                </a>
                            </li>
                            <!-- Sidebar Extra Info -->
                            <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
                                <div class="text-center">
                                    <small><i class="fa fa-lg fa-fw fa-copyright"></i>&nbsp;Copyright Okuma 2014. <br>All Rights Reserved.</small><br>
                                </div>
                            </div>
                            <!-- END Sidebar Extra Info -->
                        </ul>
                        <!-- END Sidebar Navigation -->
                    </div>
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
                <!-- Header -->
                <header class="navbar navbar-inverse navbar-fixed-top">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom nav-tabs" data-toggle="tabs">
                        <!-- Main Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');" class="lnk_tltp">
                                <i class="fa fa-caret-left fa-fw cl" id="sidebar-toggle-mini"><span class="tooltip_cl animation-slideDown" id="tooltip-toggle-mini">Ocultar</span></i>
                                <i class="fa fa-caret-right fa-fw cr" id="sidebar-toggle-full"><span class="tooltip_cr animation-slideDown" id="tooltip-toggle-full">Mostrar</span></i>
                            </a>
                        </li>
                        <!-- END Main Sidebar Toggle Button -->

                        <!-- Header Link -->
                            <!--<li class="hidden-xs animation-fadeInQuick">
                                <a href=""><strong>Bienvenido</strong></a>
                            </li>-->
                            <!--
                            <li class="animation-fadeInQuick">
                                <a href="#current_form_survey_1" id="tab-a1">
                                    <i class="fa fa-bookmark fa-fw" style="padding-right: 20px;"></i>
                                    <strong class="hidden-strong animation-fadeInQuick respLong">Información Personal</strong>
                                </a>
                            </li>
                            <li class="animation-fadeInQuick">
                                <a href="#current_form_survey_2" id="tab-a2">
                                    <i class="fa fa-mortar-board fa-fw" style="padding-right: 20px;"></i>
                                    <strong class="hidden-strong animation-fadeInQuick respLong">Formación Académica</strong>
                                </a>
                            </li>
                            <li class="animation-fadeInQuick">
                                <a href="#current_form_survey_3" id="tab-a3">
                                    <i class="fa fa-suitcase fa-fw" style="padding-right: 20px;"></i>
                                    <strong class="hidden-strong animation-fadeInQuick respLong">Experiencia Laboral</strong>
                                </a>
                            </li>
                            <li class="animation-fadeInQuick">
                                <a href="#current_form_survey_4" id="tab-a4">
                                    <i class="fa fa-male fa-fw" style="padding-right: 20px;"></i>
                                    <strong class="hidden-strong animation-fadeInQuick respLong">Referencia Personal</strong>
                                </a>
                            </li>
                            <li class="animation-fadeInQuick">
                                <a href="#current_form_survey_5" id="tab-a5">
                                    <i class="fa fa-info fa-fw" style="padding-right: 20px;"></i>
                                    <strong class="hidden-strong animation-fadeInQuick respLong">Informacón Adicional</strong>
                                </a>
                            </li>
                        -->
                        <!-- END Header Link -->
                    </ul>
                    <!-- END Left Header Navigation -->
                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">
                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-sign-out fa-fw"></i>
                                <span>Sing-out</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="../logout">
                                        <i class="fa fa-power-off fa-fw pull-right"></i>
                                        Serrar Sesión
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- END User Dropdown -->
                    </ul>
                    <!-- END Right Header Navigation -->
                </header>
                <!-- END Header -->

                <!-- Page Content -->
                <div id="page-content" style="">
                    
                </div>
                <!-- END Page Content -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-2.1.1.min.js"%3E%3C/script%3E'));</script>

    <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="js/pages/readyDashboard.js"></script>
    <script>$(function(){ ReadyDashboard.init(); });</script>



    <script>
        $(document).on("ready", function () {
            $(".tab-pane").hide(); //esconder contenido
            $("ul.nav-tabs li:first").addClass("active").show(); //Agrega la clase 'active' a la pestaña activa
            $(".tab-pane:first").show();
            //On Click Event
            $("ul.nav-tabs li").click(function() {
                $("ul.nav-tabs li").removeClass("active"); //Remover la clase 'active'
                $(this).addClass("active"); //Agregar clase 'active' a la pestaña seleccionada
                $(".tab-pane").hide();
                var activeTab = $(this).find("a").attr("href");
                $(activeTab).fadeIn();
                return false;
            });
        });
    </script>
</body>
</html>
>>>>>>> Stashed changes
