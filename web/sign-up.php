<?php
include_once '../incorporate/ini_register_ohr.php';
?>

<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
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
    <link rel="stylesheet" href="../css/alertify-css/alertify.core.css" />
    <link rel="stylesheet" href="../css/alertify-css/alertify.default.css" />
    <!-- Favicons -->
    <link href="images/favicon/favicon.ico" rel="shortcut icon">
    <!-- <link href="images/favicon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="images/favicon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/favicon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="114x114"> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    

    <!-- Modernizr Scripts -->
    <script src="javascript/vendor/modernizr-2.7.1.min.js"></script>
  </head>
  <body class="sign-in-up" id="to-top">

    <!-- Login Container -->
        <div id="login-container">
            <!-- Register Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <i class="fa fa-plus"></i> <strong>Create Account</strong>
            </h1>
            <!-- END Register Header -->

            <!-- Register Form -->
            <div class="block animation-fadeInQuickInv">
                <!-- Register Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="page_ready_login.html" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Back to login"><i class="fa fa-user"></i></a>
                    </div>
                    <h2>Register</h2>
                </div>
                <!-- END Register Title -->

                <!-- Register Form -->
                <form id="form-register" action="page_ready_register.html" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" id="register-username" name="register-username" class="form-control" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" id="register-email" name="register-email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" id="register-password" name="register-password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" id="register-password-verify" name="register-password-verify" class="form-control" placeholder="Verify Password">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-6">
                            <label class="csscheckbox csscheckbox-primary" data-toggle="tooltip" title="Agree to the terms">
                                <input type="checkbox" id="register-terms" name="register-terms">
                                <span></span>
                            </label>
                            <a href="#modal-terms" data-toggle="modal">Terms</a>
                        </div>
                        <div class="col-xs-6 text-right">
                            <button type="submit" class="btn btn-effect-ripple btn-success"><i class="fa fa-plus"></i> Create Account</button>
                        </div>
                    </div>
                </form>
                <!-- END Register Form -->
            </div>
            <!-- END Register Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                <small><span id="year-copy"></span> &copy; <a href="http://goo.gl/RcsdAh" target="_blank">AppUI 1.2</a></small>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->

        <!-- Modal Terms -->
        <div id="modal-terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-center"><strong>Terms and Conditions</strong></h3>
                    </div>
                    <div class="modal-body">
                        <h4 class="page-header">1. <strong>General</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="page-header">2. <strong>Account</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="page-header">3. <strong>Service</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                        <h4 class="page-header">4. <strong>Payments</strong></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.</p>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center">
                            <button type="button" class="btn btn-effect-ripple btn-sm btn-primary" data-dismiss="modal">I've read them!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Modal Terms -->
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascript/vendor/jquery-2.1.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/assets/application.js"></script>

    <script src="lib/sha512.js"></script>
    <script src="lib/forms.js"></script>

    <!--<script src="../lib/jquery-1.11.0.min.js"></script>-->
    <script src='../lib/jquery-ui.js'></script>

    <script type="text/javascript" src="../lib/alertify/alertify.js"></script>

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
