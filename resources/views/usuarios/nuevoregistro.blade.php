<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Academia Fojal | Registro</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/styleslogin.css')}}">
</head>

<body>
<form action="nuevoregistro" method="POST">
    {{ csrf_field() }}
<div class="container" id="registration-form">
    <div class="frm">
        <br>
        <div style="text-align: center;"><img src="img/logo/logo.png" width="250px" style="margin-bottom: 15px"></div>
        <h1 >Registro</h1>
            <div class="form-group">
                <br>
                <input name="nombre" id="nombre" type="text"
                       required="true"
                       class="form-control"
                       placeholder="Nombre"
                       value="{{old('nombre')}}">
            </div>
            <div class="form-group">
                <input name="apat" id="apat" type="text"
                       required="true"
                       class="form-control"
                       placeholder="Apellido paterno"
                       value="{{old('apat')}}">
            </div>
            <div class="form-group">
                <input name="amat" id="amat" type="text"
                       required="true"
                       class="form-control"
                       placeholder="Apellido materno"
                       value="{{old('amat')}}">
            </div>
<div class="form-group">
                <span>&nbsp;Fecha de nacimiento</span>
                <input name="fecha_nacimiento" id="fecha_nacimiento"
                       type="date"
                       class="form-control fechas"
                       placeholder="Fecha nacimiento" required>
            </div>


        <div class="form-group">
            <select name="municipio_usuario" id="municipio_usuario"
                    class="form-control" required>
                <option value="">Seleccione municipio..
                </option>
                @foreach($cat_municipios as $cat_municipio)
                    <option value="{{$cat_municipio->cve_compuesta_ent_mun}}">{{$cat_municipio->nom_mun}}</option>
                @endforeach
            </select>
        </div>
                @foreach($errors->get('correo') as $error)
            <div class="alert alert-danger" role="alert">
                <strong>{{ $error }}</strong>
            </div>
        @endforeach
            <div class="form-group">
                <input name="correo" id="correo" type="email"
                       class="form-control"
                       required="true" placeholder="Correo"
                       value="{{old('correo')}}">
            </div>
            <div class="form-group">
                <input name="contrasena"  type="password"
                       @if(!isset($edit_user)) required="true" @endif
                       class="form-control"
                       placeholder="Contraseña">
            </div>
            <div class="form-group">
                <input name="confirma-contrasena" id="confirma-contrasena" type="password"
                       class="form-control"
                       required="true" placeholder="Confirmar contraseña"
                       value="{{old('confirma-contrasena')}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block btn-flat">Crear cuenta</button>
            </div>
       <!-- <input type="hidden" name="_token" id="id_perfil" value="4">
        <input type="hidden" name="_token" id="id_puesto" value="45">
        <input type="hidden" name="_token" id="id_direcciones" value="9">-->
        <div class="form-group">
            <a href="{{route('login')}}">Iniciar sesión</a>
        </div>
    </div>
</div>
        </form>

    </div>
</div>
</body>

</html>
