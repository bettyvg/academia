
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Academia Fojal | Inicio de sesión</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs_ CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>


  <body>
  <br><br>
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <button>Inscribirse</button>
      <div class="login-box content-error col-12" >
        <div class="hpanel" style="text-align: center">
          <div class="panel-body error-page-int" style="width: 450px; display: block">
            <img src="img/logo/logo.png" width="250px" style="margin-bottom: 15px">
            <form method="post">
              <div class="form-group has-feedback">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <input type="email" class="form-control" name="usuario" placeholder="Correo">
              </div>
              <div class="form-group has-feedback">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
              </div>
              <div class="row">
                <!-- /.col -->
                <button type="submit" class="btn btn-danger btn-block btn-flat">Entrar</button>
                <!-- /.col -->
              </div>
              <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
            </form>

            <br>
            @if(isset($alert) && $alert != null && isset($alert->type))
              <div class="alert alert-{{ $alert->type }}" role="alert">
                {{ $alert->message }}
              </div>
              @endif
              </form>
          </div>
          <!-- /.login-box-body -->
        </div>
      </div>
    </div>
    <div class="col-3"></div>
  </div>

    <!-- /.login-box -->


  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <!-- bootstrap JS
      ============================================ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- wow JS
      ============================================ -->
  <script src="js/wow.min.js"></script>
  <!-- price-slider JS
      ============================================ -->
  <script src="js/jquery-price-slider.js"></script>
  <!-- meanmenu JS
      ============================================ -->
  <script src="js/jquery.meanmenu.js"></script>
  <!-- owl.carousel JS
      ============================================ -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- sticky JS
      ============================================ -->
  <script src="js/jquery.sticky.js"></script>
  <!-- scrollUp JS
      ============================================ -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- mCustomScrollbar JS
      ============================================ -->
  <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
  <!-- metisMenu JS
      ============================================ -->
  <script src="js/metisMenu/metisMenu.min.js"></script>
  <script src="js/metisMenu/metisMenu-active.js"></script>
  <!-- tab JS
      ============================================ -->
  <script src="js/tab.js"></script>
  <!-- icheck JS
      ============================================ -->
  <script src="js/icheck/icheck.min.js"></script>
  <script src="js/icheck/icheck-active.js"></script>
  <!-- plugins JS
      ============================================ -->
  <script src="js/plugins.js"></script>
  <!-- main JS
      ============================================ -->
  <script src="js/main.js"></script>
  <!-- tawk chat JS
      ============================================ -->
  <script src="js/tawk-chat.js"></script>
  </body>
</html>
