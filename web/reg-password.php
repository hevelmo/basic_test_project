<?php
include '../incorporate/db_connect.php';
include '../incorporate/functions.php';
include '../incorporate/change_password.php';
sec_session_start();

$odp = filter_input(INPUT_GET, 'odp');

if($odp == NULL && $odp == ''){
  header('Location: ../');
}

$decrip = urldecode($odp);
$reqId = decrypt($decrip, ENCRYPTION_KEY);
$reqId = trim($reqId);

//var_dump($reqId);

if(isUsedRequest($reqId)){
   header('Location: ../');
}

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

              <form class="sign-in-up-form" action="<?php echo htmlentities($_SERVER['PHP_SELF'] . '?=' . $odp); ?>" method="post" name="login_form" role="form">
                
              <input class="form-control" id="d" name="d" type="hidden" value="<?php echo htmlentities($reqId);?>">

                <!-- Input 1 -->
                <div class="form-group">
                  <input class="form-control input-pass-reg" id="email-pass-reg" name="email" type="email" placeholder="Correo Electrónico">
                </div> <!-- /.form-group -->

                <!-- Input 2 -->
                <div class="form-group">
                  <input class="form-control input-pass-reg" id="password-pass-reg" name="password" type="password" placeholder="Nueva Contraseña">
                </div> <!-- /.form-group -->

                <!-- Input 3 -->
                <div class="form-group">
                  <input class="form-control input-pass-reg" id="password-pass-reg-conf" name="password-reg" type="password" placeholder="Confirma tu nueva contraseña">
                </div> <!-- /.form-group -->

                <!-- Input 4 -->
                <div class="form-group">
                  <input class="form-control input-pass-reg" id="code-pass-reg" name="code" type="text" placeholder="Código de seguridad">
                </div> <!-- /.form-group -->

                <!-- Button -->
                 <button class="btn btn-success btn-block" id="goReset" type="submit" name="btn_acepto" onclick="formResetPass(this.form, this.form.password);">Cambiar Contraseña</button>

                <!-- Checkbox -->
                <section class="text-center">
                  <div class="checkbox">
                    <label>
                      <!-- <input type="checkbox" checked> Keep me logged in -->
                    </label>
                  </div> 
                </section> <!-- /.text-center -->

                <!-- Sign In/Sign Up links -->
                <section class="sign-in-up-links text-center" style="font-size:14px">
                </section> <!-- /.sign-in-up-links -->
                
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
      $('button#goReset').attr('disabled', true);
    </script>

    <script>
    //METHODS
      var formMethod = {
        fillingControl : function () {
          var validFieldName, perFormData, isFull, acepto, disable;
          validFieldName = ['email', 'password', 'code'];
          perFormData = $('form.sign-in-up-form').serializeFormJSON();
          isFull = OHR.validFormFull(perFormData, validFieldName);
          $('button#goReset').attr('disabled', !isFull);
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
        $('input.input-pass-reg').on('keyup', formMethod.keyupInput);
        $('button#goReset').on('click', formMethod.clickGo);
      });
    </script>

  </body>
</html>
