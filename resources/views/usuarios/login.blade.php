<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
  <title>Academia Fojal | Inicio de sesión</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/styleslogin.css')}}">
</head>

<body>
    <div class="container" id="registration-form">
        <div class="image"></div>
        <div class="frm">
          <br>
          <div style="text-align: center;"><img src="{{asset('img/logo/logo.png')}}" width="250px" style="margin-bottom: 15px"></div>
            <h1>Iniciar sesión</h1>
            <form method="post">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input  style="width: 90%;" type="email" class="form-control" name="usuario" id="usuario" placeholder="Introduce tu email">
                </div>
                <div class="form-group">
                    <label for="pwd">Contraseña:</label>
                    <input  style="width: 90%;" type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Introduce tu contraseña">
                </div>
                <div class="form-group">
                    <br>
                    <button  style="width: 90%;" type="submit" class="btn btn-success btn-lg btn-block btn-flat">Entrar</button>
                </div>
                <div class="form-group">
                    <br>
                    <label for="pwd">¿Aún no tienes cuenta?</label><a href="{{route('nuevoregistro')}}">    Registrate</a>
                </div>
              <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
              @if(isset($alert) && $alert != null && isset($alert->type))
                <div class="alert alert-{{ $alert->type }}" role="alert">
                  {{ $alert->message }}
                </div>
              @endif
            </form>
        </div>
    </div>
</body>

</html>
