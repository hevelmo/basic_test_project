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
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                                <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                            </a>
                        </li>
                        <!-- END Main Sidebar Toggle Button -->

                        <!-- Header Link -->
                        <!--
                        <li class="hidden-xs animation-fadeInQuick">
                            <a href=""><strong>Bienvenido</strong></a>
                        </li>
                        <li class="hidden-xs-tab animation-fadeInQuick active">
                            <a href="#blk-tbs-cont-inf_personal"><i class="fa fa-bookmark fa-fw" style="padding-right: 20px;"></i><strong class="hidden-strong animation-fadeInQuick">Información Personal</strong></a>
                        </li>
                        <li class="hidden-xs-tab animation-fadeInQuick">
                            <a href="#blk-tbs-cont-for_acedemica"><i class="fa fa-mortar-board fa-fw" style="padding-right: 20px;"></i><strong class="hidden-strong animation-fadeInQuick">Formación Académica</strong></a>
                        </li>
                        -->
                        <li class="hidden-xs-tab animation-fadeInQuick">
                            <a href="#blk-tbs-cont-exp_laboral"><i class="fa fa-suitcase fa-fw" style="padding-right: 20px;"></i><strong class="hidden-strong animation-fadeInQuick">Experiencia Laboral</strong></a>
                        </li>
                        <!-- END Header Link -->
                    </ul>
                    <!-- END Left Header Navigation -->
                </header>
                <!-- END Header -->

                <!-- Page Content -->
                <div id="page-content" style="max-width: 100%;">
                    <div class="tab-content">
                        <!-- FORMULARIO: Información Personal -->
                        <!--
                            <div class="form_content animation-fadeInQuick tab-pane" id="blk-tbs-cont-inf_personal">
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
                                        <div class="form_inline_content" id='container_inf_personal'>
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
                                                                         placeholder='Maximo 11 Digitos' 
                                                                         data-entorno='ss'
                                                                         maxlength='11'>
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
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="block">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                Estado
                                                            </div>
                                                            <div class="form-group">
                                                                <div>
                                                                    <div id='div-can-state'></div>
                                                                </div>   
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="block">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                Municipio
                                                            </div>
                                                            <div class="form-group">
                                                                <div>
                                                                    <div id='div-can-city'></div>
                                                                </div>   
                                                            </div>     
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="block">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                Colonia
                                                            </div>
                                                            <div class="form-group">
                                                                <div>
                                                                    {{!-
                                                                        <select class='form-control perSelect' 
                                                                        id='canColony' 
                                                                        name='adr_suburb'
                                                                        data-entorno='colony'>
                                                                        <option value=''>- Seleccione una colonia -</option>
                                                                        <option value='Colonia 1'>Colonia 1</option>
                                                                        <option value='Colonia 2'>Colonia 2</option>
                                                                        <option value='Colonia 3'>Colonia 3</option>
                                                                        <option value='Colonia 4'>Colonia 4</option>
                                                                        <option value='Colonia 5'>Colonia 5</option>
                                                                        </select>
                                                                    --}}
                                                                    <input type='text' 
                                                                        id='canColony' 
                                                                        name='adr_suburb' 
                                                                        class='form-control perInput' 
                                                                        placeholder='Colonia' 
                                                                        data-entorno='colony'>
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
                                                                Peso kg
                                                            </div>
                                                            <div class="from-group">
                                                                <div>
                                                                    <input type='text' 
                                                                        id='canWeight' 
                                                                        name='can_weight' 
                                                                        class='form-control perInput' 
                                                                        placeholder='Peso kg' 
                                                                        data-entorno='weight'><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="block">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                Altura cm
                                                            </div>
                                                            <div class="from-group">
                                                                <div>
                                                                    <input type='text' 
                                                                        id='canHeight' 
                                                                        name='can_height' 
                                                                        class='form-control perInput' 
                                                                        placeholder='Altura cm' 
                                                                        data-entorno='height'><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="block full">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                ¿Cómo consideras tu estado de salud actual?  
                                                            </div>
                                                            <div class="from-group">
                                                                <div class="col-xs-4">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='perRadio canHealth' 
                                                                           id='canHealthB' 
                                                                           name='hlt_current' 
                                                                           value='Bueno'
                                                                           data-entorno='health'> 
                                                                           <label for="canHealthB"><span></span>Bueno</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='perRadio canHealth' 
                                                                           id='canHealthM' 
                                                                           name='hlt_current' 
                                                                           value='Regular'
                                                                           data-entorno='health'> 
                                                                           <label for="canHealthM"><span></span>Regular</label> 
                                                                      </label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='perRadio canHealth' 
                                                                           id='canHealthR' 
                                                                           name='hlt_current' 
                                                                           value='Malo'
                                                                           data-entorno='health'> 
                                                                           <label for="canHealthR"><span></span>Malo</label>
                                                                    </label>
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="block full">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                ¿Con qué frecuencia fumas?  
                                                            </div>
                                                            <div class="from-group">
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canSmoke' 
                                                                            id='canSmokeN' 
                                                                            name='hlt_f_smoke' 
                                                                            value='Nunca'
                                                                            data-entorno='smoke'> 
                                                                           <label for="canSmokeN"><span></span>Nunca</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canSmoke' 
                                                                            id='canSmokeCN' 
                                                                            name='hlt_f_smoke' 
                                                                            value='Sólo en ocasiones especiales<' 
                                                                            data-entorno='smoke'> 
                                                                           <label for="canSmokeCN"><span></span>Sólo en ocasiones especiales</label> 
                                                                      </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canSmoke' 
                                                                            id='canSmokeAV' 
                                                                            name='hlt_f_smoke' 
                                                                            value='Todos los fines de semana para relajarme' 
                                                                            data-entorno='smoke'> 
                                                                           <label for="canHealthR"><span></span>Todos los fines de semana para relajarme</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canSmoke' 
                                                                            id='canSmokeM' 
                                                                            name='hlt_f_smoke' 
                                                                            value='2 veces por semana' 
                                                                            data-entorno='smoke'> 
                                                                           <label for="canSmokeM"><span></span>2 veces por semana</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canSmoke' 
                                                                            id='canSmokeS' 
                                                                            name='hlt_f_smoke' 
                                                                            value='Todos los días un poco' 
                                                                            data-entorno='smoke'> 
                                                                           <label for="canSmokeS"><span></span>Todos los días un poco</label>
                                                                    </label>
                                                                </div>
                                                            </div><br><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="block full">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                ¿Con qué frecuencia consumes alcohol?  
                                                            </div>
                                                            <div class="from-group">
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canSmoke' 
                                                                            id='canSmokeN' 
                                                                            name='hlt_f_smoke' 
                                                                            value='Nunca'
                                                                            data-entorno='smoke'> 
                                                                           <label for="canSmokeN"><span></span>Nunca</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canSmoke' 
                                                                            id='canSmokeCN' 
                                                                            name='hlt_f_smoke' 
                                                                            value='Uno o dos al mes' 
                                                                            data-entorno='smoke'> 
                                                                           <label for="canSmokeCN"><span></span>Uno o dos al mes</label> 
                                                                      </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canSmoke' 
                                                                            id='canSmokeAV' 
                                                                            name='hlt_f_smoke' 
                                                                            value='Los fines de semana' 
                                                                            data-entorno='smoke'> 
                                                                           <label for="canSmokeAV"><span></span>Los fines de semana</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canSmoke' 
                                                                            id='canSmokeM' 
                                                                            name='hlt_f_smoke' 
                                                                            value='Uno al día' 
                                                                            data-entorno='smoke'> 
                                                                           <label for="canSmokeM"><span></span>Uno al día</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canSmoke' 
                                                                            id='canSmokeS' 
                                                                            name='hlt_f_smoke' 
                                                                            value='Todos los días más de dos cigarrillos' 
                                                                            data-entorno='smoke'> 
                                                                           <label for="canSmokeS"><span></span>Todos los días más de dos cigarrillos</label>
                                                                    </label>
                                                                </div>
                                                            </div><br><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="block full">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                ¿Con qué frecuencia te ejercitas? 
                                                            </div>
                                                            <div class="from-group">
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canExcercise' 
                                                                            id='ccanExcerciseN' 
                                                                            name='hlt_f_exercise' 
                                                                            value='Nunca' 
                                                                            data-entorno='exercise'> 
                                                                           <label for="ccanExcerciseN"><span></span>Nunca</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canExcercise' 
                                                                            id='ccanExcerciseCN' 
                                                                            name='hlt_f_exercise' 
                                                                            value='Casi Nunca' 
                                                                            data-entorno='exercise'> 
                                                                           <label for="ccanExcerciseCN"><span></span>Casi Nunca</label> 
                                                                      </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canExcercise' 
                                                                            id='ccanExcerciseAV' 
                                                                            name='hlt_f_exercise' 
                                                                            value='Algunas Veces' 
                                                                            data-entorno='exercise'> 
                                                                           <label for="ccanExcerciseAV"><span></span>Algunas Veces</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canExcercise' 
                                                                            id='ccanExcerciseM' 
                                                                            name='hlt_f_exercise' 
                                                                            value='La mayor parte del tiempo' 
                                                                            data-entorno='exercise'> 
                                                                           <label for="ccanExcerciseM"><span></span>La mayor parte del tiempo</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='perRadio canExcercise' 
                                                                            id='ccanExcerciseS' 
                                                                            name='hlt_f_exercise' 
                                                                            value='Siempre' 
                                                                            data-entorno='exercise'> 
                                                                           <label for="ccanExcerciseS"><span></span>Siempre</label>
                                                                    </label>
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="block" style="-webkit-box-shadow: none; box-shadow: none;">                                            
                                                            <div class="col-xs-6 col-lg-3"></div>
                                                            <div class="col-xs-6 col-lg-3"></div>
                                                            <div class="col-xs-6 col-lg-3"></div>
                                                            <div class="col-xs-6 col-lg-3">
                                                                <button class='btn btn-default btn-success' 
                                                                    id='goPersonal'>Continuar</button>
                                                            </div>
                                                            <br><br>
                                                        </div>          
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        -->
                        <!-- END -> FORMULARIO: Información Personal -->
                        <!-- FORMULARIO: Formación Académica -->
                        <!--
                            <div class="form_content animation-fadeInQuick tab-pane" id="blk-tbs-cont-for_acedemica">
                                <div class="table_form_container">
                                    <header class="caption_info">
                                        <div class="ico_content">
                                            <i class="fa fa-mortar-board fa-3x fa-lg fa-fw text-primary change_fa"></i>
                                        </div>
                                        <div class="title_conten">
                                            <h1 class="info_per">Formación Académica</h1>
                                        </div>
                                    </header>
                                    <section class="body_form_info">
                                        <div class="form_inline_content" id='container_for_academy'>
                                            <form id='survey-personal'>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="block full">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                Situación académica
                                                            </div>
                                                            <div class="from-group">
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='acaRadio canGrade' 
                                                                            id='canGradeSE' 
                                                                            name='aca_grade' 
                                                                            value='Sin escolaridad' 
                                                                            data-entorno='grade'> 
                                                                           <label for="canGradeSE"><span></span>Sin escolaridad</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='acaRadio canGrade' 
                                                                            id='canGradePri' 
                                                                            name='aca_grade' 
                                                                            value='Primaria' 
                                                                            data-entorno='grade'>  
                                                                           <label for="canGradePri"><span></span>Primaria</label> 
                                                                      </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='acaRadio canGrade' 
                                                                            id='canGradeSec' 
                                                                            name='aca_grade' 
                                                                            value='Secundaria' 
                                                                            data-entorno='grade'> 
                                                                           <label for="canGradeSec"><span></span>Secundaria</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='acaRadio canGrade' 
                                                                            id='canGradePre' 
                                                                            name='aca_grade' 
                                                                            value='Preparatoria' 
                                                                            data-entorno='grade'> 
                                                                           <label for="canGradePre"><span></span>Preparatoria</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='acaRadio canGrade' 
                                                                            id='canGradeUTr' 
                                                                            name='aca_grade' 
                                                                            value='Universidad trunca' 
                                                                            data-entorno='grade'> 
                                                                           <label for="canGradeUTr"><span></span>Universidad trunca</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-2">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                            class='acaRadio canGrade' 
                                                                            id='canGradeUTe' 
                                                                            name='aca_grade' 
                                                                            value='Universidad terminada' 
                                                                            data-entorno='grade'> 
                                                                           <label for="canGradeUTe"><span></span>Universidad terminada</label>
                                                                    </label>
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="block full">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                ¿Estado?
                                                            </div>
                                                            <div class="from-group">
                                                                <div class="col-xs-4">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='acaRadio canGradeStatus' 
                                                                           id='canGradeStatusTru' 
                                                                           name='aca_status' 
                                                                           value='Trunca' 
                                                                           data-entorno='grade_status'> 
                                                                           <label for="canGradeStatusTru"><span></span>Trunca</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='acaRadio canGradeStatus' 
                                                                           id='canGradeStatusEst' 
                                                                           name='aca_status' 
                                                                           value='Estudiante' 
                                                                           data-entorno='grade_status'> 
                                                                           <label for="canGradeStatusEst"><span></span>Estudiante</label> 
                                                                      </label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='acaRadio canGradeStatus' 
                                                                           id='canGradeStatusTer' 
                                                                           name='aca_status' 
                                                                           value='Terminado' 
                                                                           data-entorno='grade_status'> 
                                                                           <label for="canGradeStatusTer"><span></span>Terminado</label>
                                                                    </label>
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="block full">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                ¿Hablas otro idioma además del español?
                                                            </div>
                                                            <div class="from-group">
                                                                <div class="col-xs-6">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='acaRadio canLge' 
                                                                           id='canLgeS' 
                                                                           name='aca_o_language' 
                                                                           value='Si' 
                                                                           data-language = '1'  
                                                                           data-entorno='language'> 
                                                                           <label for="canLgeS"><span></span>Sí</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='acaRadio canLge' 
                                                                           id='canLgeN' 
                                                                           name='aca_o_language' 
                                                                           value='No' 
                                                                           data-language = '0'  
                                                                           data-entorno='language'> 
                                                                           <label for="canLgeN"><span></span>No</label> 
                                                                      </label>
                                                                </div>
                                                            </div><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row divCanLgeInfo" style="display:none;">
                                                    <div class="col-xs-12">
                                                        <div class="block full">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                ¿Cuál?
                                                            </div>
                                                            <div class="from-group">
                                                                <div class="col-xs-3"></div>
                                                                <div class="col-xs-6">
                                                                    <div>
                                                                        <input class='form-control acaInput' 
                                                                             id='canLgeName' 
                                                                             name='lge_name' 
                                                                             placeholder='Idioma' 
                                                                             class="form-control perInput">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-3"></div>
                                                            </div><br><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row divCanLgeInfo" style="display:none;">
                                                    <div class="col-xs-12">
                                                        <div class="block full">
                                                            <div class="block-title" style="text-align: left; padding: 5px;">
                                                                <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                Nivel de dominio                                                    </div>
                                                            <div class="from-group">
                                                                <div class="col-xs-4">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='acaRadio canLgeLevel' 
                                                                           id='canLgeLevelB' 
                                                                           name='lge_level' 
                                                                           value='Basico' 
                                                                           data-entorno='language_level'> 
                                                                           <label for="canLgeLevelB"><span></span>Básico</label>
                                                                    </label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='acaRadio canLgeLevel' 
                                                                           id='canLgeLevelI' 
                                                                           name='lge_level' 
                                                                           value='Intermedio' 
                                                                           data-entorno='language_level'> 
                                                                           <label for="canLgeLevelI"><span></span>Intermedio</label> 
                                                                      </label>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <label class='radio-inline'>
                                                                        <input type='radio' 
                                                                           class='acaRadio canLgeLevel' 
                                                                           id='canLgeLevelA' 
                                                                           name='lge_level' 
                                                                           value='Avanzado' 
                                                                           data-entorno='language_level'> 
                                                                           <label for="canLgeLevelA"><span></span>Avanzado</label> 
                                                                      </label>
                                                                </div>
                                                            </div><br><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="block" style="-webkit-box-shadow: none; box-shadow: none;">                                            
                                                            <div class="col-xs-6 col-lg-3"></div>
                                                            <div class="col-xs-6 col-lg-3"></div>
                                                            <div class="col-xs-6 col-lg-3"></div>
                                                            <div class="col-xs-6 col-lg-3">
                                                                <button class='btn btn-default btn-success' 
                                                                    id='goPersonal'>Continuar</button>
                                                            </div>
                                                            <br><br>
                                                        </div>          
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        -->
                        <!-- END -> FORMULARIO: Formación Académica -->
                        <!-- FORMULARIO: Experiencia Laboral -->
                            <div class="form_content animation-fadeInQuick tab-pane active" id="blk-tbs-cont-exp_laboral">
                                <div class="table_form_container">
                                    <header class="caption_info">
                                        <div class="ico_content">
                                            <i class="fa fa-suitcase fa-3x fa-lg fa-fw text-primary change_fa"></i>
                                        </div>
                                        <div class="title_conten">
                                            <h1 class="info_per">Experiencia Laboral</h1>
                                        </div>
                                    </header>
                                    <section class="body_form_info" id='container_exp_laboral'>
                                        <div class="form_inline_content" id='container_exp_laboral'>
                                            <form id='survey-professional'>
                                                <div class="block">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        ¿Has trabajado antes?
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="block full">
                                                             <div class="col-xs-6">
                                                                <label class='radio-inline'>
                                                                    <input type='radio' 
                                                                       class='proRadio canExpPre'
                                                                       id='canExpPreS' 
                                                                       name='exp_previous' 
                                                                       value='Si' 
                                                                       data-entorno='work'>
                                                                    <label for="canExpPreS"><span></span>Sí</label>
                                                                </label>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <label class='radio-inline'>
                                                                    <input type='radio' 
                                                                       class='proRadio canExpPre'
                                                                       id='canExpPreN' 
                                                                       name='exp_previous' 
                                                                       value='No' 
                                                                       data-entorno='work'>
                                                                    <label for="canExpPreN"><span></span>No</label> 
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="block exp-pre" style="">
                                                    <div class="block-title" style="text-align: left; padding: 5px;">
                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                        ¿Actualmente Laboras?
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="block full">
                                                            <div class="col-xs-6">
                                                                <label class='radio-inline'>
                                                                    <input type='radio' 
                                                                       class='proRadio canExpPre'
                                                                       id='canExpPreS' 
                                                                       name='exp_previous' 
                                                                       value='Si' 
                                                                       data-entorno='work'>
                                                                    <label for="canExpPreS"><span></span>Sí</label>
                                                                </label>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <label class='radio-inline'>
                                                                    <input type='radio' 
                                                                       class='proRadio canExpPre'
                                                                       id='canExpPreN' 
                                                                       name='exp_previous' 
                                                                       value='No' 
                                                                       data-entorno='work'>
                                                                    <label for="canExpPreN"><span></span>No</label> 
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <!-- input radio -> no -->
                                                        <div class='container'>
                                                            <div class="col-xs-12" style="margin: 0px -20px; width: 102.3%;padding: 0;">
                                                                <h4 class="sub-header" style="text-align: left; padding: 5px;">
                                                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                    Ingresa los lugares en los que has trabajado
                                                                </h4>
                                                                <div class="row">
                                                                    <h5 class="sub-header" style="text-align: left; width: 90%; margin: 0 auto;">
                                                                        <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                                        <strong>Empresa 1</strong>
                                                                    </h5>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="block" style="text-align: left; padding: 5px; width: 90%; margin: 0 auto;">
                                                                        <div class="col-sm-3" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplJob'>Puesto</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplJob' 
                                                                                    name='wpl_job' 
                                                                                    data-entorno='work_add_puesto' 
                                                                                    placeholder='Puesto'>
                                                                        </div>
                                                                        <div class="col-sm-3" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplCompany'>Nombre Empresa</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplCompany' 
                                                                                    name='wpl_company' 
                                                                                    data-entorno='work_add_empresa' 
                                                                                    placeholder='Nombre Empresa'>
                                                                        </div>
                                                                        <div class="col-sm-2" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplBeginning'>Año Inicio</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplBeginning' 
                                                                                    name='wpl_beginning' 
                                                                                    data-entorno='work_add_inicio' 
                                                                                    placeholder='Año Inicio'>
                                                                        </div>
                                                                        <div class="col-sm-2" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplEnding'>Año Finalización</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplEnding' 
                                                                                    name='wpl_ending' 
                                                                                    data-entorno='work_add_fin' 
                                                                                    placeholder='Año Finalización'>
                                                                        </div>
                                                                        <div class="col-sm-2" style="text-align: left; padding: 5px;">
                                                                              <select class='form-control proSelect wplElement' 
                                                                                      id='canWplStatus' 
                                                                                      name='wpl_status' 
                                                                                      data-entorno='work_add_status'>
                                                                                <option value=''>Estatus</option>
                                                                                <option value='Actual'>Actual</option>
                                                                                <option value='Terminación por despido'>Terminación por despido</option>
                                                                                <option value='Terminación por renuncia'>Terminación por renuncia</option>
                                                                              </select>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="block full">
                                                                                    <div class="col-sm-10"></div>
                                                                                    <div class="col-sm-2">
                                                                                        <button class='btn btn-default btn-success' id='add-job' disabled><i class="fa fa-plus" style="padding: 5px;"></i>Agragar Referencias</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="" style="/*display: none;*/ ">
                                                                            <!-- Referencias empresa 1 -->
                                                                                <!-- Ref - 01 -->
                                                                                    <div class="row">
                                                                                        <h6 class="sub-header" style="text-align: left; width: 100%; margin: 0 auto; padding-left: 20px;">
                                                                                            <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                                                            <strong>Referencia 1</strong>
                                                                                        </h6>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="block" style="text-align: left; padding: 5px; width: 90%; margin: 0 auto;">
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProName1'>Nombre</label>
                                                                                                  <input type='text' 
                                                                                                    class='form-control refInput' 
                                                                                                    id='refProName1' 
                                                                                                    name='ref_pro_name_1' 
                                                                                                    data-entorno='work_add_Nombre' 
                                                                                                    placeholder='Nombre'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProPhone1'>Teléfono</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProPhone1' 
                                                                                                        name='ref_pro_phone_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Teléfono'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProRelation1'>Relación</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProRelation1' 
                                                                                                        name='ref_pro_relation_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Relación'>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                <!-- end -->
                                                                                <!-- Ref - 02 -->
                                                                                    <div class="row">
                                                                                        <h6 class="sub-header" style="text-align: left; width: 100%; margin: 0 auto; padding-left: 20px;">
                                                                                            <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                                                            <strong>Referencia 2</strong>
                                                                                        </h6>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="block" style="text-align: left; padding: 5px; width: 90%; margin: 0 auto;">
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProName1'>Nombre</label>
                                                                                                  <input type='text' 
                                                                                                    class='form-control refInput' 
                                                                                                    id='refProName1' 
                                                                                                    name='ref_pro_name_1' 
                                                                                                    data-entorno='work_add_Nombre' 
                                                                                                    placeholder='Nombre'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProPhone1'>Teléfono</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProPhone1' 
                                                                                                        name='ref_pro_phone_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Teléfono'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProRelation1'>Relación</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProRelation1' 
                                                                                                        name='ref_pro_relation_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Relación'>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                <!-- end -->
                                                                            <!-- end -->
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                
                                                                <div class="row">
                                                                    <h5 class="sub-header" style="text-align: left; width: 90%; margin: 0 auto;">
                                                                        <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                                        <strong>Empresa 2</strong>
                                                                    </h5>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="block" style="text-align: left; padding: 5px; width: 90%; margin: 0 auto;">
                                                                        <div class="col-sm-3" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplJob'>Puesto</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplJob' 
                                                                                    name='wpl_job' 
                                                                                    data-entorno='work_add_puesto' 
                                                                                    placeholder='Puesto'>
                                                                        </div>
                                                                        <div class="col-sm-3" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplCompany'>Nombre Empresa</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplCompany' 
                                                                                    name='wpl_company' 
                                                                                    data-entorno='work_add_empresa' 
                                                                                    placeholder='Nombre Empresa'>
                                                                        </div>
                                                                        <div class="col-sm-2" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplBeginning'>Año Inicio</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplBeginning' 
                                                                                    name='wpl_beginning' 
                                                                                    data-entorno='work_add_inicio' 
                                                                                    placeholder='Año Inicio'>
                                                                        </div>
                                                                        <div class="col-sm-2" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplEnding'>Año Finalización</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplEnding' 
                                                                                    name='wpl_ending' 
                                                                                    data-entorno='work_add_fin' 
                                                                                    placeholder='Año Finalización'>
                                                                        </div>
                                                                        <div class="col-sm-2" style="text-align: left; padding: 5px;">
                                                                              <select class='form-control proSelect wplElement' 
                                                                                      id='canWplStatus' 
                                                                                      name='wpl_status' 
                                                                                      data-entorno='work_add_status'>
                                                                                <option value=''>Estatus</option>
                                                                                <option value='Actual'>Actual</option>
                                                                                <option value='Terminación por despido'>Terminación por despido</option>
                                                                                <option value='Terminación por renuncia'>Terminación por renuncia</option>
                                                                              </select>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="block full">
                                                                                    <div class="col-sm-10"></div>
                                                                                    <div class="col-sm-2">
                                                                                        <button class='btn btn-default btn-success' id='add-job' disabled><i class="fa fa-plus" style="padding: 5px;"></i>Agragar Referencias</button>
                                                                                        <!--<a href="" class="label label-default" id='add-ref' style="padding: 5px 15px;"><i class="fa fa-plus" style="padding: 5px;"></i>Agragar Referencias...</a>-->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="" style="/*display: none;*/">
                                                                            <!-- Referencias empresa 2 -->
                                                                                <!-- Ref - 01 -->
                                                                                    <div class="row">
                                                                                        <h6 class="sub-header" style="text-align: left; width: 100%; margin: 0 auto; padding-left: 20px;">
                                                                                            <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                                                            <strong>Referencia 1</strong>
                                                                                        </h6>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="block" style="text-align: left; padding: 5px; width: 90%; margin: 0 auto;">
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProName1'>Nombre</label>
                                                                                                  <input type='text' 
                                                                                                    class='form-control refInput' 
                                                                                                    id='refProName1' 
                                                                                                    name='ref_pro_name_1' 
                                                                                                    data-entorno='work_add_Nombre' 
                                                                                                    placeholder='Nombre'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProPhone1'>Teléfono</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProPhone1' 
                                                                                                        name='ref_pro_phone_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Teléfono'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProRelation1'>Relación</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProRelation1' 
                                                                                                        name='ref_pro_relation_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Relación'>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                <!-- end -->
                                                                                <!-- Ref - 02 -->
                                                                                    <div class="row">
                                                                                        <h6 class="sub-header" style="text-align: left; width: 100%; margin: 0 auto; padding-left: 20px;">
                                                                                            <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                                                            <strong>Referencia 2</strong>
                                                                                        </h6>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="block" style="text-align: left; padding: 5px; width: 90%; margin: 0 auto;">
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProName1'>Nombre</label>
                                                                                                  <input type='text' 
                                                                                                    class='form-control refInput' 
                                                                                                    id='refProName1' 
                                                                                                    name='ref_pro_name_1' 
                                                                                                    data-entorno='work_add_Nombre' 
                                                                                                    placeholder='Nombre'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProPhone1'>Teléfono</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProPhone1' 
                                                                                                        name='ref_pro_phone_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Teléfono'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProRelation1'>Relación</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProRelation1' 
                                                                                                        name='ref_pro_relation_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Relación'>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                <!-- end -->
                                                                            <!-- end -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- end -->
                                                        <!-- input radio -> si -->
                                                        <div class='container'>
                                                            <div class="col-xs-12" style="margin: 0px -20px; width: 102.3%;padding: 0;">
                                                                <h4 class="sub-header" style="text-align: left; padding: 5px;">
                                                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                    Ingresa los datos del empleo actual
                                                                </h4>
                                                                <div class="row">
                                                                    <h5 class="sub-header" style="text-align: left; width: 90%; margin: 0 auto;">
                                                                        <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                                        <strong>Empresa Actual</strong>
                                                                    </h5>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="block" style="text-align: left; padding: 5px; width: 90%; margin: 0 auto;">
                                                                        <div class="col-sm-3" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplJob'>Puesto</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplJob' 
                                                                                    name='wpl_job' 
                                                                                    data-entorno='work_add_puesto' 
                                                                                    placeholder='Puesto'>
                                                                        </div>
                                                                        <div class="col-sm-3" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplCompany'>Nombre Empresa</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplCompany' 
                                                                                    name='wpl_company' 
                                                                                    data-entorno='work_add_empresa' 
                                                                                    placeholder='Nombre Empresa'>
                                                                        </div>
                                                                        <div class="col-sm-2" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplBeginning'>Año Inicio</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplBeginning' 
                                                                                    name='wpl_beginning' 
                                                                                    data-entorno='work_add_inicio' 
                                                                                    placeholder='Año Inicio'>
                                                                        </div>
                                                                        <div class="col-sm-2" style="text-align: left; padding: 5px;">
                                                                            <label class='sr-only' for='canWplEnding'>Año Finalización</label>
                                                                                <input type='text' 
                                                                                    class='form-control proInput wplElement' 
                                                                                    id='canWplEnding' 
                                                                                    name='wpl_ending' 
                                                                                    data-entorno='work_add_fin' 
                                                                                    placeholder='Default'>
                                                                        </div>
                                                                        <div class="col-sm-2" style="text-align: left; padding: 5px;">
                                                                              <select class='form-control proSelect wplElement' 
                                                                                      id='canWplStatus' 
                                                                                      name='wpl_status' 
                                                                                      data-entorno='work_add_status'>
                                                                                <option value=''>Estatus</option>
                                                                                <option value='Actual'>Actual</option>
                                                                              </select>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="form-group">
                                                                            <div class="row">
                                                                                <div class="block full">
                                                                                    <div class="col-sm-10"></div>
                                                                                    <div class="col-sm-2">
                                                                                        <button class='btn btn-default btn-success' id='add-job' disabled><i class="fa fa-plus" style="padding: 5px;"></i>Agragar Referencias</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="clear"></div>
                                                                        <div class="" style="/*display: none;*/ ">
                                                                            <!-- Referencias empresa actual -->
                                                                                <!-- Ref - 01 -->
                                                                                    <div class="row">
                                                                                        <h6 class="sub-header" style="text-align: left; width: 100%; margin: 0 auto; padding-left: 20px;">
                                                                                            <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                                                            <strong>Referencia 1</strong>
                                                                                        </h6>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="block" style="text-align: left; padding: 5px; width: 90%; margin: 0 auto;">
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProName1'>Nombre</label>
                                                                                                  <input type='text' 
                                                                                                    class='form-control refInput' 
                                                                                                    id='refProName1' 
                                                                                                    name='ref_pro_name_1' 
                                                                                                    data-entorno='work_add_Nombre' 
                                                                                                    placeholder='Nombre'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProPhone1'>Teléfono</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProPhone1' 
                                                                                                        name='ref_pro_phone_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Teléfono'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProRelation1'>Relación</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProRelation1' 
                                                                                                        name='ref_pro_relation_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Relación'>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                <!-- end -->
                                                                                <!-- Ref - 02 -->
                                                                                    <div class="row">
                                                                                        <h6 class="sub-header" style="text-align: left; width: 100%; margin: 0 auto; padding-left: 20px;">
                                                                                            <i class="fa fa-ellipsis-h fa-fw" style="padding-right: 10px;"></i>
                                                                                            <strong>Referencia 2</strong>
                                                                                        </h6>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <div class="block" style="text-align: left; padding: 5px; width: 90%; margin: 0 auto;">
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProName1'>Nombre</label>
                                                                                                  <input type='text' 
                                                                                                    class='form-control refInput' 
                                                                                                    id='refProName1' 
                                                                                                    name='ref_pro_name_1' 
                                                                                                    data-entorno='work_add_Nombre' 
                                                                                                    placeholder='Nombre'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProPhone1'>Teléfono</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProPhone1' 
                                                                                                        name='ref_pro_phone_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Teléfono'>
                                                                                            </div>
                                                                                            <div class="col-sm-4" style="text-align: left; padding: 5px;">
                                                                                                <label class='sr-only' for='refProRelation1'>Relación</label>
                                                                                                    <input type='text' 
                                                                                                        class='form-control refInput' 
                                                                                                        id='refProRelation1' 
                                                                                                        name='ref_pro_relation_1' 
                                                                                                        data-entorno='work_add_empresa' 
                                                                                                        placeholder='Relación'>
                                                                                            </div>
                                                                                            <div class="clear"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                <!-- end -->
                                                                            <!-- end -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                        <!-- end -->                                                        
                                                    </div>                                                 
                                                </div>
                                            </form>
                                        </div>
                                    </section>
                                </div>
                            </div>
                                                <!--
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="block full">
                                                                <div class="block-title" style="text-align: left; padding: 5px;">
                                                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                    ¿Has trabajado antes?
                                                                </div>
                                                                <div class="from-group">
                                                                    <div class="col-xs-6">
                                                                        <label class='radio-inline'>
                                                                            <input type='radio' 
                                                                               class='proRadio canExpPre'
                                                                               id='canExpPreS' 
                                                                               name='exp_previous' 
                                                                               value='Si' 
                                                                               data-entorno='work'>
                                                                               <label for="canExpPreS"><span></span>Sí</label>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <label class='radio-inline'>
                                                                            <input type='radio' 
                                                                               class='proRadio canExpPre'
                                                                               id='canExpPreN' 
                                                                               name='exp_previous' 
                                                                               value='No' 
                                                                               data-entorno='work'>
                                                                               <label for="canExpPreN"><span></span>No</label> 
                                                                          </label>
                                                                    </div>
                                                                </div><br>
                                                            </div>
                                                        </div>
                                                    </div>-->
                                                    <!--<div class="row exp-pre" style="display:none">--><!--
                                                    <div class="row exp-pre" style="">
                                                        <div class="col-xs-12">
                                                            <div class="block full">
                                                                <div class="block-title" style="text-align: left; padding: 5px;">
                                                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                    ¿Actualmente Laboras?                                                    </div>
                                                                <div class="from-group">
                                                                    <div class="col-xs-6">
                                                                        <label class='radio-inline'>
                                                                            <input type='radio' 
                                                                               class='proRadio canExpCurrent' 
                                                                               id='canExpCurrentS' 
                                                                               name='exp_current' 
                                                                               value='Si' 
                                                                               data-entorno='work'>
                                                                               <label for="canExpCurrentS"><span></span>Sí</label>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <label class='radio-inline'>
                                                                            <input type='radio' 
                                                                               class='proRadio canExpCurrent' 
                                                                               id='canExpCurrentN' 
                                                                               name='exp_current' 
                                                                               value='No' 
                                                                               data-entorno='work'>
                                                                               <label for="canExpCurrentN"><span></span>No</label> 
                                                                          </label>
                                                                    </div>
                                                                </div><br>
                                                            </div>
                                                        </div>
                                                    </div>-->
                                                    <!-- Formulario en caso de seleccionar "SI" -->
                                                    <!--<div class="row exp-pre-si" style="display:none">--><!--
                                                    <div class="row exp-pre-si" style="">
                                                        <div class="col-md-12">
                                                            <div class="block full">
                                                                <div class="block-title" style="text-align: left; padding: 5px;">
                                                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                    Ingresa el lugar actual de trabajo
                                                            </div>  
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="block-title-inner" style="text-align: left; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Puesto                                                   
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-2"></div>
                                                                        <div class="col-md-8">
                                                                            <input type='text' 
                                                                               class='form-control proInput wplElement' 
                                                                               id='canWplJob' 
                                                                               name='wpl_job' 
                                                                               data-entorno='work_add_puesto' 
                                                                               placeholder='. . .'>
                                                                        </div>
                                                                        <div class="col-md-2"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="block-title-inner" style="text-align: left; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Nombre Empresa
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-2"></div>
                                                                        <div class="col-md-8">
                                                                            <input type='text' 
                                                                               class='form-control proInput wplElement' 
                                                                               id='canWplCompany' 
                                                                               name='wpl_company' 
                                                                               data-entorno='work_add_empresa' 
                                                                               placeholder='. . .'>
                                                                        </div>
                                                                        <div class="col-md-2"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="block-title-inner" style="text-align: left; margin-top: 20px; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Año Inicio
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-2"></div>
                                                                        <div class="col-md-8">
                                                                            <input type='text' 
                                                                               class='form-control proInput wplElement' 
                                                                               id='canWplBeginning' 
                                                                               name='wpl_beginning' 
                                                                               data-entorno='work_add_inicio' 
                                                                               placeholder='. . .'>
                                                                        </div>
                                                                        <div class="col-md-2"></div>
                                                                    </div>
                                                                </div><br><br>
                                                                <div class="col-md-6">
                                                                    <div class="block-title-inner" style="text-align: left; margin-top: 20px; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Año Finalización
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-2"></div>
                                                                        <div class="col-md-8">
                                                                            <input type='text' 
                                                                               class='form-control proInput wplElement' 
                                                                               id='canWplEnding' 
                                                                               name='wpl_ending' 
                                                                               data-entorno='work_add_fin' 
                                                                               placeholder='Default...'>
                                                                        </div>
                                                                        <div class="col-md-2"></div>
                                                                    </div>
                                                                </div>-->
                                                                <!--
                                                                <div class="col-md-6">
                                                                    <div class="block-title-inner" style="text-align: left; margin-top: 20px; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Estatus
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-2"></div>
                                                                        <div class="col-md-8">
                                                                            <select class='form-control proSelect wplElement' 
                                                                                id='canWplStatus' 
                                                                                name='wpl_status' 
                                                                                data-entorno='work_add_status'>
                                                                                <option value=''>Estatus</option>
                                                                                <option value='Actual'>Actual</option>
                                                                                <option value='Terminación por despido'>
                                                                                Terminación por despido
                                                                                </option>
                                                                                <option value='Terminación por renuncia'>Terminación por renuncia</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-2"></div>
                                                                    </div>
                                                                </div>--><!--
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="block full">
                                                                <a href="" class="label label-default" style="padding: 5px 15px;"><i class="fa fa-plus" style="padding: 5px;"></i>Agragar Otro...</a>
                                                            </div>
                                                        </div>
                                                    </div>-->
                                                    <!-- Formulario en caso de seleccionar "NO" --><!--
                                                    <div class="row exp-pre-no" style="display:none;">
                                                        <div class="col-md-12">
                                                            <div class="block full">
                                                                <div class="block-title" style="text-align: left; padding: 5px;">
                                                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                    Ingresa los lugares en los que has trabajado - <i class="ital">maximo 2 areas de trabajo</i>
                                                            </div>  
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="block-title-inner" style="text-align: left; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Puesto                                                   
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-12">
                                                                            <input type='text' 
                                                                               class='form-control proInput wplElement' 
                                                                               id='canWplJob' 
                                                                               name='wpl_job' 
                                                                               data-entorno='work_add_puesto' 
                                                                               placeholder='. . .'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="block-title-inner" style="text-align: left; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Nombre Empresa                                                  
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-12">
                                                                            <input type='text' 
                                                                               class='form-control proInput wplElement' 
                                                                               id='canWplCompany' 
                                                                               name='wpl_company' 
                                                                               data-entorno='work_add_empresa' 
                                                                               placeholder='. . .'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="block-title-inner" style="text-align: left; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Año Inicio
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-12">
                                                                            <input type='text' 
                                                                               class='form-control proInput wplElement' 
                                                                               id='canWplBeginning' 
                                                                               name='wpl_beginning' 
                                                                               data-entorno='work_add_inicio' 
                                                                               placeholder='. . .'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="block-title-inner" style="text-align: left; margin-top: 20px; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Año Finalización
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-2"></div>
                                                                        <div class="col-md-8">
                                                                            <input type='text' 
                                                                               class='form-control proInput wplElement' 
                                                                               id='canWplEnding' 
                                                                               name='wpl_ending' 
                                                                               data-entorno='work_add_fin' 
                                                                               placeholder='. . .'>
                                                                        </div>
                                                                        <div class="col-md-2"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="block-title-inner" style="text-align: left; margin-top: 20px; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Estatus
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-2"></div>
                                                                        <div class="col-md-8">
                                                                            <select class='form-control proSelect wplElement' 
                                                                                id='canWplStatus' 
                                                                                name='wpl_status' 
                                                                                data-entorno='work_add_status'>
                                                                                <option value=''>Estatus</option>
                                                                                <option value='Actual'>Actual</option>
                                                                                <option value='Terminación por despido'>
                                                                                Terminación por despido
                                                                                </option>
                                                                                <option value='Terminación por renuncia'>Terminación por renuncia</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-2"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row exp-pre-jap" style="/*display:none;*/">
                                                        <div class="col-md-12">
                                                            <div class="block full">
                                                                <div class="block-title" style="text-align: left; padding: 5px;">
                                                                    <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                    Referencia Laboral - <i class="ital">maximo 2 referencias</i>
                                                            </div> 
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="block-title-inner" style="text-align: left; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Nombre
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-12">
                                                                            <input type='text' 
                                                                               class='form-control refInput' 
                                                                               id='refProName2' 
                                                                               name='ref_pro_name_2' 
                                                                               data-entorno='work_add_Nombre' 
                                                                               placeholder='. . .'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="block-title-inner" style="text-align: left; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Teléfono
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <div class="col-md-12">
                                                                            <input type='text' 
                                                                               class='form-control refInput' 
                                                                               id='refProPhone2' 
                                                                               name='ref_pro_phone_2' 
                                                                               data-entorno='work_add_empresa' 
                                                                               placeholder='. . .'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="block-title-inner" style="text-align: left; padding: 5px;">
                                                                        <i class="fa fa-ellipsis-v fa-fw" style="padding-right: 10px;"></i>
                                                                        Relación
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <input type='text' 
                                                                           class='form-control refInput' 
                                                                           id='refProRelation2' 
                                                                           name='ref_pro_relation_2' 
                                                                           data-entorno='work_add_empresa' 
                                                                           placeholder='. . .'>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                -->
                                            <!--</form>
                                        </div>
                                    </section>
                                </div>
                            </div>-->
                        <!-- END -> FORMULARIO: Experiencia Laboral -->
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

    <script>
        $(document).ready(function () {
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

    <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/app.js"></script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="js/pages/readyDashboard.js"></script>
    <script>$(function(){ ReadyDashboard.init(); });</script>


</body>
</html>