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
	<!-- Page Wrapper -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
        Available classes:

        'page-loading'      enables page preloader
    -->
    <div id="page-wrapper" class="page-loading">
        <!-- Preloader -->
        <div class="preloader">
            Preloader Content
        </div>
        <!-- END Preloader -->

        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
        Available #page-container classes:

        'sidebar-visible-lg-mini'                       main sidebar condensed - Mini Navigation (> 991px)
        'sidebar-visible-lg-full'                       main sidebar full - Full Navigation (> 991px)

        'sidebar-alt-visible-lg'                        alternative sidebar visible by default (> 991px) (You can add it along with another class)

        'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
        'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

        'fixed-width'                                   for a fixed width layout (can only be used with a static header/main sidebar layout)
        -->
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
                                <a href="index.html" class="active"><i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                            </li>
                            <li class="sidebar-separator">
                                <i class="fa fa-ellipsis-h"></i>
                            </li>
                            <!-- 
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-rocket sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">User Interface</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_ui_widgets.html">Widgets</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Elements</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ui_blocks_grid.html">Blocks &amp; Grid</a>
                                                </li>
                                                <li>
                                                    <a href="page_ui_typography.html">Typography</a>
                                                </li>
                                                <li>
                                                    <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                                                </li>
                                                <li>
                                                    <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                                                </li>
                                                <li>
                                                    <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                                                </li>
                                                <li>
                                                    <a href="page_ui_tables.html">Tables</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Forms</a>
                                            <ul>
                                                <li>
                                                    <a href="page_forms_components.html">Components</a>
                                                </li>
                                                <li>
                                                    <a href="page_forms_wizard.html">Wizard</a>
                                                </li>
                                                <li>
                                                    <a href="page_forms_validation.html">Validation</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Icon Packs</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ui_icons_fontawesome.html">Font Awesome</a>
                                                </li>
                                                <li>
                                                    <a href="page_ui_icons_glyphicons_pro.html">Glyphicons Pro</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-airplane sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Components</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_comp_todo.html">To-do List</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_gallery.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_maps.html">Google Maps</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_calendar.html">Calendar</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_charts.html">Charts</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_animations.html">CSS3 Animations</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_tree.html">Tree View Lists</a>
                                        </li>
                                        <li>
                                            <a href="page_comp_nestable.html">Nestable &amp; Sortable Lists</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-more_items sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">UI Layouts</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_layout_static.html">Static</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_fixed_width.html">Static Fixed Width</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_top.html">Top Header (Fixed)</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_bottom.html">Bottom Header (Fixed)</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_static_sidebar_mini.html">Sidebar Mini (Static)</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_fixed_sidebar_mini.html">Sidebar Mini (Fixed)</a>
                                        </li>
                                        <li>
                                            <a href="page_layout_alternative_sidebar_visible.html">Visible Alternative Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-gift sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Extra Pages</span></a>
                                    <ul>
                                        <li>
                                            <a href="page_ready_error.html">Error Page</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_blank.html">Blank</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_article.html">Article</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_invoice.html">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_search_results.html">Search Results</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="page_ready_profile.html">User Profile</a>
                                        </li>
                                        <li>
                                            <a href="#" class="sidebar-nav-submenu"><i class="fa fa-chevron-left sidebar-nav-indicator"></i>Login, Register &amp; Lock</a>
                                            <ul>
                                                <li>
                                                    <a href="page_ready_login.html">Login</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_reminder.html">Password Reminder</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_register.html">Register</a>
                                                </li>
                                                <li>
                                                    <a href="page_ready_lock_screen.html">Lock Screen</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-separator">
                                    <i class="fa fa-ellipsis-h"></i>
                                </li>
                                <li>
                                    <a href="page_app_email.html"><i class="gi gi-inbox sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Email Center</span></a>
                                </li>
                                <li>
                                    <a href="page_app_social.html"><i class="fa fa-share-alt sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Social Net</span></a>
                                </li>
                                <li>
                                    <a href="page_app_media.html"><i class="gi gi-picture sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Media Box</span></a>
                                </li>
                                <li>
                                    <a href="page_app_estore.html"><i class="gi gi-shopping_cart sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">eStore</span></a>
                                </li>
                             -->
                            <!-- Sidebar Extra Info -->
                            <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
                                <div class="text-center">
                                    <small><i class="fa fa-lg fa-fw fa-copyright text-danger"></i>&nbsp;Copyright Okuma 2014. <br>All Rights Reserved.</small><br>
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
                <!-- In the PHP version you can set the following options from inc/config file -->
                <!--
                Available header.navbar classes:

                'navbar-default'            for the default light header
                'navbar-inverse'            for an alternative dark header

                'navbar-fixed-top'          for a top fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                    'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                'navbar-fixed-bottom'       for a bottom fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                    'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                -->
                <header class="navbar navbar-inverse navbar-fixed-top">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom">
                        <!-- Main Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                                <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                            </a>
                        </li>
                        <!-- END Main Sidebar Toggle Button -->

                        <!-- Header Link -->
                        <li class="hidden-xs animation-fadeInQuick">
                            <a href=""><strong>WELCOME</strong></a>
                        </li>
                        <!-- END Header Link -->
                    </ul>
                    <!-- END Left Header Navigation -->
                </header>
                <!-- END Header -->

                <!-- Page Content -->
                <div id="page-content" style="max-width: 100%;">
                    <div class="form_content">
                        <div class="table_form_container">
                            <header class="caption_info">
                                <div class="ico_content">
                                    <i class="fa fa-bookmark fa-3x fa-lg fa-fw text-primary change_fa"></i>
                                </div>
                                <div class="title_conten">
                                    <h1 class="info_per">Información Personal</h1>
                                </div>
                            </header>
                            <section class="body_form_info">
                                <div class="form_inline_content" id='container_personal'>
                                    <form id='survey-personal'>
                                        <div class="row">                                            
                                            <div class="col-md-4">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Nombre
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <input type='text' 
                                                               id='canNombre' 
                                                               name='can_name' 
                                                               class='form-control perInput' 
                                                               placeholder='. . .' 
                                                               data-entorno='ap_nombre'>
                                                        </div>   
                                                    </div>                                                                                                     
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Apellido Paterno
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <input type='text' 
                                                               id='canApellidoPaterno' 
                                                               name='can_sur_pat' 
                                                               class='form-control perInput' 
                                                               placeholder='. . .' 
                                                               data-entorno='ap_paterno'>
                                                        </div>   
                                                    </div>     
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Apellido Materno
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <input type='text' 
                                                               id='canApellidoMaterno' 
                                                               name='can_sur_mat' 
                                                               class='form-control perInput' 
                                                               placeholder='. . .' 
                                                               data-entorno='ap_materno'>
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Fecha Nacimiento
                                                    </div>
                                                    <div class="from-group">
                                                        <div>
                                                            <input type='text' 
                                                               class='form-control perInput' 
                                                               id='canNacimiento' 
                                                               name='can_birthday'
                                                               placeholder='AAAA-MM-DD'
                                                               data-date-format='YYYY-MM-DD'
                                                               data-entorno='birth_day'><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Lugar de Nacimiento
                                                    </div>
                                                    <div class="from-group">
                                                        <div>
                                                            <input type='text' 
                                                               id='canCityBorn' 
                                                               name='can_birthplace' 
                                                               class='form-control perInput' 
                                                               placeholder='Ciudad de Nacimiento' 
                                                               data-entorno='city_born'><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Sexo
                                                    </div>
                                                    <div class="from-group">
                                                        <div class="col-xs-5">
                                                            <label class='radio-inline'>
                                                                <input type='radio' 
                                                                    class='perRadio canSex' 
                                                                    id='canSexH' 
                                                                    name='can_gender' 
                                                                    value='Hombre' 
                                                                    data-entorno='sex'>
                                                                    <label for="canSexH"><span></span>Hombre</label> 
                                                            </label>
                                                        </div>
                                                        <div class="col-xs-5">
                                                            <label class='radio-inline'>
                                                                <input type='radio' 
                                                                    class='perRadio canSex' 
                                                                    id='canSexM' 
                                                                    name='can_gender' 
                                                                    value='Mujer'
                                                                    data-entorno='sex'>
                                                                    <label for="canSexM"><span></span>Mujer</label>  
                                                            </label>
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        ¿Tienes Hijos?
                                                    </div>
                                                    <div class="from-group">
                                                        <div class="col-xs-5">
                                                            <label class='radio-inline'>
                                                                <input type='radio' 
                                                                    class='perRadio canChi' 
                                                                    id='canChiS' 
                                                                    name='can_children' 
                                                                    value='Si' 
                                                                    data-entorno='chi'>
                                                                    <label for="canChiS"><span></span>Sí</label> 
                                                            </label>
                                                        </div>
                                                        <div class="col-xs-5">
                                                            <label class='radio-inline'>
                                                                <input type='radio' 
                                                                    class='perRadio canChi' 
                                                                    id='canChiN' 
                                                                    name='can_children' 
                                                                    value='No'
                                                                    data-entorno='chi'>
                                                                    <label for="canChiN"><span></span>No</label>  
                                                            </label>
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Estado Civil
                                                    </div>
                                                    <div class="from-group">
                                                        <div class="col-xs-3">
                                                            <label class='radio-inline'>
                                                                <input type='radio' 
                                                                   class='perRadio canCivil'
                                                                   id='canCivilS' 
                                                                   name='can_m_status' 
                                                                   value='Soltero(a)' 
                                                                   data-entorno='civil'> 
                                                                    <label for="canCivilS"><span></span>Soltero(a)</label> 
                                                            </label>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <label class='radio-inline'>
                                                                <input type='radio' 
                                                                   class='perRadio canCivil'
                                                                   id='canCivilC' 
                                                                   name='can_m_status' 
                                                                   value='Casado(a)' 
                                                                   data-entorno='civil'>
                                                                    <label for="canCivilC"><span></span>Casado(a)</label> 
                                                            </label>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <label class='radio-inline'>
                                                                <input type='radio' 
                                                                   class='perRadio canCivil'
                                                                   id='canCivilD' 
                                                                   name='can_m_status' 
                                                                   value='Divorciado(a)' 
                                                                   data-entorno='civil'> 
                                                                    <label for="canCivilD"><span></span>Divorciado(a)</label> 
                                                            </label>
                                                        </div>
                                                        <div class="col-xs-3">
                                                            <label class='radio-inline'>
                                                                <input type='radio' 
                                                                   class='perRadio canCivil'
                                                                   id='canCivilV' 
                                                                   name='can_m_status' 
                                                                   value='Viudo(a)' 
                                                                   data-entorno='civil'> 
                                                                    <label for="canCivilV"><span></span>Viudo(a)</label> 
                                                            </label>
                                                        </div>
                                                        <br><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">                                            
                                            <div class="col-md-4">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        CURP
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <input type='text' 
                                                                 id='canCurp' 
                                                                 name='can_curp' 
                                                                 class='form-control perInput' 
                                                                 placeholder='. . .' 
                                                                 data-entorno='curp'>
                                                        </div>   
                                                    </div>                                                                                                     
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        RFC
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <input type='text' 
                                                                id='canRFC' 
                                                                name='can_rfc' 
                                                                class='form-control perInput' 
                                                                placeholder='. . .' 
                                                                data-entorno='rfc' disabled>
                                                        </div>   
                                                    </div>     
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Nº Seguro Social
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <input type='text' 
                                                                 id='canSS' 
                                                                 name='can_assurance' 
                                                                 class='form-control perInput' 
                                                                 placeholder='. . .' 
                                                                 data-entorno='ss'>
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="row">                                            
                                            <div class="col-md-4">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Telefono
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <input type='text' 
                                                                 id='canPhone' 
                                                                 name='can_phone'
                                                                 class='form-control perInput' 
                                                                 placeholder='. . .' 
                                                                 data-entorno='phone'>
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Calle y Número
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <input type='text' 
                                                               id='canStreet' 
                                                               name='adr_name' 
                                                               class='form-control perInput' 
                                                               placeholder='. . .' 
                                                               data-entorno='street'>
                                                        </div>   
                                                    </div>     
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        Código Postal
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <input type='number' 
                                                               id='canZC' 
                                                               name='adr_cp' 
                                                               class='form-control perInput' 
                                                               placeholder='. . .' 
                                                               data-entorno='zc'>
                                                        </div>   
                                                    </div>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </form>
                                </div>
                            </section>
                        </div>
                    </div>
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
</body>
</html>