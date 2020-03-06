<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Academia Fojal | Registro</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/stylesnuevoresgistro.css')}}">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.1.0.js"></script>
    <script src="{{asset('js/registroweb.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/cal_rfc_curp.js')}}" charset="utf-8"></script>
</head>

<body>
@if(isset($alert))
    <div class="row" style="padding: 10px; margin: 30px 20px 0px 20px">
        <div class="col-12">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{$alert->message}}
            </div>
        </div>
        @endif
        <form action="nuevoregistro2" method="POST">
            {{ csrf_field() }}
            <div class="container" id="registration-form">
                <div class="frm2">
                    <br>
                    <div style="text-align: center;"><img src="img/logo/logo.png" width="250px"
                                                          style="margin-bottom: 15px">
                    </div>
                    <h1>Bienvenido</h1>
                    @section('formulario_web')
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="registroplatica">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad add-professors">
                                            <form>
                                                <h5>Tienes empresa o eres emprendedor</h5>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group " required="true">
                                                        <select name="regimen_fiscal" id="regimen_fiscal"
                                                                class="form-control"
                                                                value="{{old('regimen_fiscal')}}">
                                                            <option value="none" selected="" disabled=""
                                                                    style="color: darkgrey;">
                                                                Seleccionar..
                                                            </option>
                                                            <option value="Emprendedor"
                                                                    @if(old('regimen_fiscal')=='Emprendedor') selected="selected"@endif>
                                                                Emprendedor
                                                            </option>
                                                            <option value="Empresario"
                                                                    @if(old('regimen_fiscal')=='Empresario') selected="selected"@endif>
                                                                Empresario
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group " id="altahacienda" hidden>
                                                        <h5>Años alta en hacienda</h5>
                                                        <select name="alta_hacienda" id="alta_hacienda"
                                                                class="form-control"
                                                                value="{{old('alta_hacienda')}}">
                                                            <option value="none" selected="" disabled=""
                                                                    style="color: darkgrey;">
                                                                Seleccionar..
                                                            </option>
                                                            <option value="Menos de 1 año"
                                                                    @if(old('alta_hacienda')=='Menos de 1 año') selected="selected"@endif>
                                                                Menos de 1 año
                                                            </option>
                                                            <option value="Más de 1 año"
                                                                    @if(old('alta_hacienda')=='Más de 1 año') selected="selected"@endif>
                                                                Más de 1 año
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br><br><br>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="nombre" id="nombre" type="text"
                                                                   required="true"
                                                                   class="form-control calcula_rfc"
                                                                   placeholder="Nombre"
                                                                   value="{{old('nombre')}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="apellido_paterno" id="apellido_paterno"
                                                                   type="text"
                                                                   required="true"
                                                                   class="form-control calcula_rfc"
                                                                   placeholder="Apellido paterno"
                                                                   value="{{old('apellido_paterno')}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="apellido_materno" id="apellido_materno"
                                                                   type="text"
                                                                   required="true"
                                                                   class="form-control calcula_rfc"
                                                                   placeholder="Apellido materno"
                                                                   value="{{old('apellido_materno')}}">
                                                        </div>

                                                        <div class="form-group">
                                                    <span class="spantext"
                                                          style="color: darkgrey;">Fecha de nacimiento</span>
                                                            <input name="fecha_nacimiento" id="fecha_nacimiento"
                                                                   type="date"
                                                                   class="form-control calcula_rfc"
                                                                   required="true"
                                                                   value="{{old('fecha_nacimiento')}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="spantext" style="color: darkgrey;">Edad</span>
                                                            <input name="edad" id="edad" type="text"
                                                                   required="true"
                                                                   class="form-control calcula_rfc"
                                                                   placeholder="Edad"
                                                                   value="{{old('edad')}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <select required='true'
                                                                    class="form-control select2 calcula_rfc"
                                                                    name="estado"
                                                                    id="estado" value="{{old('cve_ent')}}">
                                                                <option value="none" selected="" disabled="">Selecionar
                                                                    estado
                                                                    de nacimiento..
                                                                </option>
                                                                @foreach($cat_entidades as $estado)
                                                                    <option value="{{$estado->abr_dosdig}}">{{$estado->nom_ent}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group " required="true">
                                                            <select name="genero" id="genero"
                                                                    class="form-control calcula_rfc"
                                                                    value="{{old('genero')}}">
                                                                <option value="none" selected="" disabled=""
                                                                        style="color: darkgrey;">Genero
                                                                </option>
                                                                <option value="M"
                                                                        @if(old('genero')=='Masculino') selected="selected"@endif>
                                                                    Masculino
                                                                </option>
                                                                <option value="F"
                                                                        @if(old('genero')=='Femenino') selected="selected"@endif>
                                                                    Femenino
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                        <div class="form-group">
                                                            <span class="spantext" style="color: darkgrey;">RFC</span>
                                                            <input name="rfc" id="rfc" type="text"
                                                                   required="true"
                                                                   class="form-control"
                                                                   placeholder="RFC"
                                                                   value="{{old('rfc')}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="spantext" style="color: darkgrey;">CURP</span>
                                                            <input name="curp" id="curp" type="text"
                                                                   required="true"
                                                                   class="form-control"
                                                                   placeholder="CURP"
                                                                   value="{{old('curp')}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="domicilio" id="domicilio" type="text"
                                                                   required="true"
                                                                   class="form-control"
                                                                   placeholder="Domicilio"
                                                                   value="{{old('domicilio')}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="cp" id="cp" type="text"
                                                                   required="true"
                                                                   placeholder="Código Postal"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <select required='true' class="form-control select2"
                                                                    name="colonia"
                                                                    id="colonia" value="{{'colonia'}}">
                                                                <option value="none" selected="" disabled="">Seleccionar
                                                                    colonia..
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select required='true' class="form-control select2"
                                                                    name="municipio" id="municipio"
                                                                    value="{{old('cve_ent')}}">
                                                                <option value="none" selected="" disabled="">Selecionar
                                                                    municipio..
                                                                </option>
                                                                @foreach($cat_municipios as $municipios)
                                                                    <option @if($municipios->cve_ent <='9') value="{{"0".$municipios->cve_ent}}"
                                                                            @if(old('cve_ent')=="0".$municipios->cve_ent)selected="selected"
                                                                            @endif
                                                                            @else value="{{$municipios->cve_ent}}"
                                                                            @if(old('d_estado')==($municipios->cve_ent))selected="selected"@endif
                                                                            @endif>{{($municipios->D_mnpio)}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select required='true' class="form-control select2"
                                                                    name="region_pf" id="region_pf"
                                                                    value="{{old('cve_ent')}}">
                                                                <option value="none" selected="" disabled="">Selecionar
                                                                    región..
                                                                </option>
                                                                @foreach($cat_regiones as $region)
                                                                    <option
                                                                            @if(old('region_pf')==($region->region))selected="selected"@endif>{{($region->region)}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="correo" id="correo" type="email"
                                                                   class="form-control"
                                                                   required="true" placeholder="Correo"
                                                                   value="{{old('correo')}}">
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <input name="score_buro" id="score_buro"
                                                                   type="text"
                                                                   class="form-control calcula_rfc"
                                                                   placeholder="Score Buro"
                                                                   value="{{old('apellido_materno')}}">
                                                        </div>
                                                        <div class="form-group " hidden="">
                                                            <select name="calificacion_buro" id="calificacion_buro"
                                                                    class="form-control"
                                                                    value="{{old('alta_hacienda')}}">
                                                                <option value="none" selected="" disabled=""
                                                                        style="color: darkgrey;">
                                                                    Seleccionar..
                                                                </option>
                                                                <option value="Excelente"
                                                                        @if(old('calificacion_buro')=='Excelente') selected="selected"@endif>
                                                                    Excelente
                                                                </option>
                                                                <option value="Bueno"
                                                                        @if(old('calificacion_buro')=='Bueno') selected="selected"@endif>
                                                                    Bueno
                                                                </option>
                                                                <option value="Malo"
                                                                        @if(old('calificacion_buro')=='Malo') selected="selected"@endif>
                                                                    Malo
                                                                </option>
                                                                <option value="No reporta"
                                                                        @if(old('calificacion_buro')=='No reporta') selected="selected"@endif>
                                                                    No reporta
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <input name="monto_solicitado" id="monto_solicitado"
                                                                   type="text"
                                                                   class="form-control calcula_rfc"
                                                                   placeholder="Monto solicitado"
                                                                   value="{{old('monto_solicitado')}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <br>
                                                <div id='datos_empresa' hidden>
                                                    <H3>Datos de la empresa</H3>
                                                    <br>
                                                    <div class="row">
                                                        <div class="form-group col-md-8">
                                                            <br>
                                                            <input name="razon_social" id="razon_social" type="text"
                                                                   class="form-control"
                                                                   placeholder="Nombre de la empresa"
                                                                   value="{{old('razon_social')}}">
                                                        </div>
                                                        <div class=" col-md-4">
                                                            <span class="spantext" style="color: darkgrey;">Fecha de creación de la empresa</span>
                                                            <input name="fecha_creacion_empresa"
                                                                   id="fecha_creacion_empresa" type="date"
                                                                   class="form-control"
                                                                   value="{{old('fecha_nacimiento')}}">
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <br>
                                                            <input name="rfc_empresa" id="rfc_empresa" type="text"
                                                                   class="form-control"
                                                                   placeholder="RFC"
                                                                   value="{{old('rfc')}}">
                                                        </div>
                                                        <div class="form-group col-md-8">
                                                            <br>
                                                            <input name="domicilio_empresa" id="domicilio_empresa"
                                                                   type="text"
                                                                   class="form-control"
                                                                   placeholder="Domicilio"
                                                                   value="{{old('domicilio_empresa')}}">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <input name="cp_rep_empresa" id="cp_rep_empresa" type="text"
                                                                   placeholder="Código Postal"
                                                                   class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <select class="form-control select2"
                                                                    name="colonia_empresa"
                                                                    id="colonia_empresa" value="{{'colonia'}}">
                                                                <option value="none" selected="" disabled="">Seleccionar
                                                                    colonia..
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <select class="form-control select2"
                                                                    name="municipio_empresa" id="municipio_empresa"
                                                                    value="{{old('cve_ent')}}">
                                                                <option value="none" selected="" disabled="">Selecionar
                                                                    municipio..
                                                                </option>
                                                                @foreach($cat_municipios as $municipios)
                                                                    <option @if($municipios->cve_ent <='9') value="{{"0".$municipios->cve_ent}}"
                                                                            @if(old('cve_ent')=="0".$municipios->cve_ent)selected="selected"
                                                                            @endif
                                                                            @else value="{{$municipios->cve_ent}}"
                                                                            @if(old('d_estado')==($municipios->cve_ent))selected="selected"@endif
                                                                            @endif>{{($municipios->D_mnpio)}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <br>
                                                            <select class="form-control select2"
                                                                    name="region_pm" id="region_pm"
                                                                    value="{{old('cve_ent')}}">
                                                                <option value="none" selected="" disabled="">Selecionar
                                                                    región..
                                                                </option>
                                                                @foreach($cat_regiones as $region)
                                                                    <option
                                                                            @if(old('region_pf')==($region->region))selected="selected"@endif>{{($region->region)}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="spantext"
                                                                  style="color: darkgrey;">Tamaño de la empresa</span>
                                                            <select name="tam_empresa" id="tam_empresa"
                                                                    class="form-control"
                                                                    value="{{old('alta_hacienda')}}">
                                                                <option value="none" selected="" disabled=""
                                                                        style="color: darkgrey;">
                                                                    Seleccionar..
                                                                </option>
                                                                <option value="Micro"
                                                                        @if(old('calificacion_buro')=='Micro') selected="selected"@endif>
                                                                    Micro (0 a 10 empleados)
                                                                </option>
                                                                <option value="Pequeña"
                                                                        @if(old('calificacion_buro')=='Pequeña') selected="selected"@endif>
                                                                    Pequeña (11 a 50 empleados)
                                                                </option>
                                                                <option value="Mediana"
                                                                        @if(old('calificacion_buro')=='Mediana') selected="selected"@endif>
                                                                    Mediana (51 a 251 empleados)
                                                                </option>
                                                                <option value="Gran empresa"
                                                                        @if(old('calificacion_buro')=='Gran empresa') selected="selected"@endif>
                                                                    Gran empresa (251 y más empleados)
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <br>
                                                            <input name="telefono" id="telefono" type="text"
                                                                   onKeyUp="if(isNaN(this.value)){alert('sólo puede introdicur números');this.value=this.value.substring(0,this.value.lenght-1)}"
                                                                   @if(isset($registro)) value="{{$registro->telefono}}"
                                                                   @endif
                                                                   class="form-control"
                                                                   placeholder="Teléfono"
                                                                   value="{{old('telefono')}}">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="spantext"
                                                                  style="color: darkgrey;">Sector</span>
                                                            <select name="sector" id="sector"
                                                                    class="form-control select2">
                                                                <option value="">Seleccionar..</option>
                                                                @foreach($sectores as $sector)
                                                                    <option value="{{$sector->codigo_sector}}"
                                                                            @if(isset($prospecto) && $prospecto->codigo_sector == $sector->codigo_sector) selected @endif>{{$sector->descripcion_sector}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="spantext"
                                                                  style="color: darkgrey;">Subsector</span>
                                                            <select name="subsector" id="subsector"
                                                                    class="form-control select2">
                                                                <option value="">Seleccionar..</option>
                                                                @foreach($subsectores as $subsector)
                                                                    <option value="{{$subsector->codigo_subsector}}"
                                                                            @if(isset($prospecto) && $prospecto->codigo_subsector == $subsector->codigo_subsector) selected @endif>{{$subsector->descripcion_subsector}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="spantext" style="color: darkgrey;">Rama</span>
                                                            <select name="rama" id="rama" class="form-control select2">
                                                                <option value="">Seleccionar..</option>
                                                                @foreach($ramas as $rama)
                                                                    <option value="{{$rama->codigo_rama}}"
                                                                            @if(isset($prospecto) && $prospecto->codigo_rama == $rama->codigo_rama) selected @endif>{{$rama->descripcion_rama}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <span class="spantext"
                                                                  style="color: darkgrey;">Subrama</span>
                                                            <select name="subrama" id="subrama"
                                                                    class="form-control select2">
                                                                <option value="">Seleccionar..</option>
                                                                @foreach($subramas as $subrama)
                                                                    <option value="{{$subrama->codigo_subrama}}"
                                                                            @if(isset($prospecto) && $prospecto->codigo_subrama == $subrama->codigo_subrama) selected @endif>{{$subrama->descripcion_subrama}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class="spantext"
                                                                  style="color: darkgrey;">Actividad</span>
                                                            <select name="clase_actividad" id="clase_actividad"
                                                                    class="form-control select2">
                                                                <option value="">Seleccionar..</option>
                                                                @foreach($clase_actividad as $clase_actividades)
                                                                    <option value="{{$clase_actividades->codigo_clase}}"
                                                                            @if(isset($prospecto) && $prospecto->codigo_clase == $clase_actividades->codigo_clase) selected @endif>{{$clase_actividades->descripcion_clase}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <br>
                                                            <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light"
                                                                    id="guardar">
                                                                Enviar
                                                            </button>
                                                            <a href="{{route('enviar_correo')}}"
                                                               class="btn btn-primary waves-effect waves-light"
                                                               id="guardar">
                                                                Enviar correo
                                                            </a>
                                                            <input type="hidden" name="_token" id="csrf-token"
                                                                   value="{{csrf_token()}}">
                                                        </div>
                                                        <div align="center">
                                                            <!-- Agregado por Carlos Villalobos El 25/02/2020-->
                                                            @if(isset($alert))
                                                                <img src="{{asset("img/documentos/".$alert->qr)}}">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endsection
                </div>
            </div>
        </form>


    </div>
    </div>
</body>

</html>
