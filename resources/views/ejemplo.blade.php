<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Imprimir en PDF</title>
</head>
<body>
<style>
body {
background-image: url("./img/cons.png");
background-color: #cccccc;
}
#segundo {
    color: #696969;
    text-align: center;
    font-weight: bold;
    font-size: 30px;
}
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p id="segundo">@if(isset($data))  {{$data->nombre." ".$data->apellido_paterno." ".$data->apellido_materno}} @endif</p>
</body>
</html>