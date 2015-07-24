<?php
include_once '../incorporate/recover_password_request.php';
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

    <!-- Favicons -->
    <link href="images/favicon/favicon.ico" rel="shortcut icon">
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr Scripts -->
    <script src="javascript/vendor/modernizr-2.7.1.min.js"></script>
  </head>
  <body class="sign-in-up" id="to-top">

    <!-- Sign In/Sign Up section -->
    <section class="sign-in-up-section">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <!-- Logo -->
            <figure class="text-center">
              <a href="./index.php">
                <img class="img-logo" src="images/logo_okm.png" alt="">
              </a>
            </figure> <!-- /.text-center -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->



        <section class="sign-in-up-content">

          <div class="row">

            <div class="col-md-12">

              <h4 class="text-center">Recuperar Contraseña</h4>

              <p>Por favor ingresa tu correo electrónico. Te enviaremos un mail para ayudarte a recuperar tu contraseña.</p>

              <form class="sign-in-up-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" role="form">
                
                <!-- Input 1 -->
                <div class="form-group">
                  <input class="form-control input-recover-pass" id="email-recover" name="email" type="email" placeholder="Ingresa Correo Electrónico">
                </div> <!-- /.form-group -->

                <!-- Button -->
                <button class="btn btn-success btn-block" id="goRecover" name="btn_recupero" type="submit" onclick="formRecoverPass(this.form, this.form.email);" >Recuperar</button>   
                
              </form> <!-- /.sign-in-up-form -->
              
            </div> <!-- /.col-md-12 -->

          </div> <!-- /.row -->
          
        </section> <!-- /.sign-in-up-content -->


        <div class="row">

          <div class="col-md-12">

            <section class="footer-copyright text-center">

              <p>
                Okuma Sushi Passion 2014
              </p>
              
            </section> <!-- /.footer-section -->
            
          </div> <!-- /.col-md-12 -->

        </div> <!-- /.row -->
        
      </div> <!-- /.container -->

    </section> <!-- /.sign-in-up-section -->
    
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="javascript/vendor/jquery-2.1.0.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/assets/application.js"></script>

    <script src="lib/sha512.js"></script>
    <script src="lib/forms.js"></script>

<!--
    <script src="lib/forms2.js"></script>
-->

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

    <script>
      //ROOM
      $('button#goRecover').attr('disabled', true);
    </script>

    <script>
    //METHODS
      var formMethod = {
        fillingControl : function () {
          var validFieldName, perFormData, isFull, acepto, disable;
          validFieldName = ['email'];
          perFormData = $('form.sign-in-up-form').serializeFormJSON();
          isFull = OHR.validFormFull(perFormData, validFieldName);
          $('button#goRecover').attr('disabled', !isFull);
        },
        keyupInput : function (event) {
          formMethod.fillingControl();
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
        $('input.input-recover-pass').on('keyup', formMethod.keyupInput);
        $('button#goRecover').on('click', formMethod.clickGo);
      });
    </script>

  </body>
</html>
