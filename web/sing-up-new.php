<?php
include_once '../incorporate/ini_register_ohr.php';
?>

<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--[if IE 9]>         
  <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html  lang="en" class="no-js"> <!--<![endif]-->
  <head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">

    <!-- Title -->
    <title>Okuma Recursos Humanos</title>

    <!-- Templates core CSS -->
    <link href="stylesheets/application.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="shortcut icon" href="../img/ico/favicon.ico">
    <!-- <link href="images/favicon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="images/favicon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/favicon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="114x114"> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Stylesheets -->       
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="../css/alternativo/bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="../css/alternativo/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="../css/alternativo/main.css">

    <!-- Include a specific file here from ../css/alternativo/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="../css/alternativo/themes.css">
    <!-- END Stylesheets -->

    <link rel="stylesheet" href="../css/alertify-css/alertify.core.css" />
    <link rel="stylesheet" href="../css/alertify-css/alertify.default.css" />

    <!-- Modernizr (browser feature detection library) -->
        <script src="../css/alternativo/alternativo-js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body class="sign-in-up" id="to-top">
    <!-- Sign In/Sign Up section -->
    <section class="sign-in-up-section">

      <div class="container">
        <!-- Login Container -->
        <div id="login-container">
          <!-- Register Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <a href="./index.php">
                  <img class="img-logo" src="images/logo_okm.png" alt="">
                </a>
            </h1>
            <!-- END Register Header -->
            <!-- Register Form -->
            <div class="block animation-fadeInQuickInv">
                <section class="">
                  <!-- Register Title -->
                  <div class="block-title">
                      <div class="block-options pull-right">
                          <a href="./sign-in.php" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="¿Ya tienes una cuenta?"><span style="font-size: 13px; margin-right: 10px;">Inicia Sesión</span><i class="fa fa-user"></i></a>
                      </div>
                      <h2>Registro</h2>
                  </div>
                  <!-- END Register Title -->
                  <!-- Register Form -->
                  <form class="form-horizontal sign-in-up-form" id="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" role="form" >
                      <div class="form-group">
                          <div class="col-xs-12">
                              <!-- Input 1 -->
                                <input class="form-control input-register" id="exampleInputName1" type="text" name="username" placeholder="Nombre">
                              <!-- /.form-group -->
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-12">
                              <!-- Input 2 -->
                                <input class="form-control input-register" id="email" type="email" placeholder="Correo Electrónico" name="email">
                              <!-- /.form-group -->
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-12">
                              <!-- Input 2 -->
                                <input class="form-control input-register" id="email-conf" type="email_re" name="email_re" placeholder="Verifica tu correo electrónico">
                              <!-- /.form-group -->
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-xs-12">
                              <!-- Input 3 -->
                                <input class="form-control input-register" id="password" type="password" placeholder="Contraseña" name="password">
                              <!-- /.form-group -->
                          </div>
                      </div>
                      <div class="form-group form-actions">
                          <div class="col-xs-6">
                              <label class="csscheckbox csscheckbox-primary" data-toggle="tooltip" title="Acepto los Terminos" style="margin-right: 5px;">
                                  <input type="checkbox" name="acepto" id="acepto">
                                  <span></span>
                              </label>
                              </a>
                          </div>
                          <div class="col-xs-6 text-right">
                              <!-- Button -->
                              <button type="submit" class="btn btn-effect-ripple btn-success btn-block" id="registrar" name="btn_acepto" onclick="formRegister(this.form, this.form.username, this.form.email, this.form.email_re, this.form.password, this.form.btn_acepto);"><i class="fa fa-plus" style="margin_right: 15px;"></i> Terminado</button>
                          </div>
                          <div class="col-xs-12 text-left">
                            <a href="#modal-terms" data-toggle="modal" style="font-size: 13px;">Aviso de Privacidad</a>
                          </div>
                      </div>
                  </form>
                  <!-- END Register Form -->
                </section>
            </div>
            <!-- END Register Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                <small style="color: #fff;"><a href="http://goo.gl/RcsdAh" target="_blank" style="color: #fff;">Okuma Sushi Passion 2014</a></small>
            </footer>
            <!-- END Footer -->
        </div>
        
        <!-- END Login Container -->
    
    </section> <!-- /.sign-in-up-section -->
    
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../lib/jquery-1.11.1.js"></script>
    <!--<script src="javascript/bootstrap.min.js"></script>-->
    <script src="javascript/assets/application.js"></script>

    <script src="lib/sha512.js"></script>
    <script src="lib/forms.js"></script>
    <script type="text/javascript" src="../lib/alertify/alertify.js"></script>

    <!--<script src="../lib/jquery-1.11.0.min.js"></script>-->
    <script src='../lib/jquery-ui.js'></script>

    <script src="../lib/underscore-min.js"></script>
    <script src="../lib/handlebars.js"></script>
    <script src="../templates/templates.js"></script>
    <script src='../lib/moment.js'></script>
    <script src="../lib/bootstrap-datetimepicker.min.js"></script>

    <script src="../lib/finch.min.js"></script>
    <script src="../lib/transitions.js"></script>
    <script src="../lib/collapse.js"></script>
    <!--<script src="../lib/bootstrap.min.js"></script>-->
    <script src="../lib/hover-dropdown.js"></script>

    <script src="../js/model.js"></script>  

    <!-- Script del Tema -->
    <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <!--<script src="../lib/jquery-1.11.0.min.js"></script>-->
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="../lib/jquery-1.11.1.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="../css/alternativo/alternativo-js/vendor/bootstrap.min.js"></script>
        <script src="../css/alternativo/alternativo-js/plugins.js"></script>
        <script src="../css/alternativo/alternativo-js/app.js"></script>

    <script>
      //ROOM
      $('button#registrar').attr('disabled', true);
      $('input#acepto').attr('checked', false);
    </script>

    <script>
    //METHODS
      var formMethod = {
        fillingControl : function () {
          var validFieldName, perFormData, isFull, acepto, disable;
          validFieldName = ['username', 'email', 'email_re', 'password'];
          perFormData = $('form.sign-in-up-form').serializeFormJSON();
          isFull = OHR.validFormFull(perFormData, validFieldName);
          acepto = ($('input#acepto').is(':checked'));
          enable = (isFull && acepto);
          $('button#registrar').attr('disabled', !enable);
        },

        clickAcepto : function (event) {
          formMethod.fillingControl();
        },
        keyupInput : function (event) {
          formMethod.fillingControl();
        },
        keyupMail : function (event) {
          
        },
        keyupMailConf : function (event) {
          
        },
        clickGo : function (event) {
        }
      }
    </script>

    <script>
      //MAIN

      $.fn.serializeFormJSON = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
      };

      $(document).ready(function() {
        $('input#acepto').on('click', formMethod.clickAcepto);
        $('input#email').on('keyup', formMethod.keyupMail);
        $('input#email-conf').on('keyup', formMethod.keyupMailConf);
        $('input.input-register').on('keyup', formMethod.keyupInput);
        $('button#registrar').on('click', formMethod.clickGo);
      });
    </script>
    

  </body>
</html>
