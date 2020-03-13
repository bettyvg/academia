@extends('main')
@section('content')
    <script src="{{asset('js/registroweb.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/cal_rfc_curp.js')}}" charset="utf-8"></script>

    <section>
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
                <div action="{{route('registro_admin')}}" method="post" class="form-horizontal">
                    <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-payment-inner-st">
                                        <ul id="myTabedu1" class="tab-review-design">
                                            <li class="active"><a href="#registrowe">Registro web</a></li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content custom-product-edit">
                                            <div class="col-md-offset-12">
                                                <div class="payment-adress">
                                                    <br>
                                                    <button type="button" class="btn btn-info pull-right"
                                                            data-toggle="modal"
                                                            name="agregar_usuario" id="agregar_usuario"
                                                            data-target="#modal_usuario">Agregar registro
                                                    </button>
                                                    <input type="hidden" name="_token"
                                                           id="csrf-token" value="{{csrf_token()}}">
                                                </div>
                                                <br>
                                            </div>
                                            <!-- Tabla de registros evaluación   -->
                                            <div class="product-tab-list tab-pane fade active in data-table-area mg-b-15"
                                                 id="registroweb">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="sparkline13-list">
                                                                <div class="sparkline13-hd">
                                                                    <div class="main-sparkline13-hd">
                                                                        <!--<h1>Projects <span class="table-project-n">Data</span> Table</h1>-->
                                                                    </div>
                                                                </div>
                                                                <div class="sparkline13-graph">
                                                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                                                        <div id="toolbar">
                                                                            <select class="form-control dt-tb">
                                                                                <option value="all">Exportar todo
                                                                                </option>
                                                                                <option value="selected">Exportar
                                                                                    Seleccionados
                                                                                </option>
                                                                            </select>
                                                                        </div>
                                                                        <table id="table" data-toggle="table"
                                                                               data-pagination="true"
                                                                               data-search="true"
                                                                               data-show-columns="true"
                                                                               data-show-pagination-switch="true"
                                                                               data-show-toggle="true"
                                                                               data-resizable="true"
                                                                               data-cookie="true"
                                                                               data-cookie-id-table="saveId"
                                                                               data-show-export="true"
                                                                               data-click-to-select="true"
                                                                               data-toolbar="#toolbar">
                                                                            <thead>
                                                                            <tr>
                                                                                <th data-field="state"
                                                                                    data-checkbox="true"></th>
                                                                                <th data-field="acciones">Acciones
                                                                                </th>
                                                                                <th class="sorting_asc" tabindex="0"
                                                                                    rowspan="1" colspan="1">Nombre
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    rowspan="1" colspan="1">Apellido
                                                                                    paterno
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    rowspan="1" colspan="1">Apellido
                                                                                    materno
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    rowspan="1" colspan="1">Fecha
                                                                                    nacimiento
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    rowspan="1" colspan="1">Edad
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    rowspan="1" colspan="1">rfc
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    rowspan="1" colspan="1">curp
                                                                                </th>
                                                                                <th class="sorting" tabindex="0"
                                                                                    rowspan="1" colspan="1">
                                                                                    domicilio
                                                                                </th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            @foreach ($registroweb as $Items)
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1"></td>
                                                                                    <td class="sorting_1">
                                                                                        <button type="button"
                                                                                                title="Editar registro"
                                                                                                class="pd-setting-ed">
                                                                                            <a href='edit_registro_admin/{{$Items->id_beneficiario}}'>
                                                                                                <i class="fa fa-pencil-square-o"> </i>
                                                                                            </a></button>
                                                                                    </td>
                                                                                    <td class="sorting_1">{{$Items->nombre}}</td>
                                                                                    <td class="sorting_1">{{$Items->apellido_paterno}}</td>
                                                                                    <td class="sorting_1">{{$Items->apellido_materno}}</td>

                                                                                    <td class="sorting_1">{{$Items->fecha_nacimiento}}</td>
                                                                                    <td class="sorting_1">{{$Items->edad}}</td>
                                                                                    <td class="sorting_1">{{$Items->rfc}}</td>
                                                                                    <td class="sorting_1">{{$Items->curp}}</td>
                                                                                    <td class="sorting_1">{{$Items->domicilio}}</td>
                                                                                </tr>
                                                                            @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tabla de registros de platica -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!-- Modal Agregar usuarios   -->
            <div class="modal" tabindex="-1" role="dialog" name="modal_usuario" id="modal_usuario">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: whiteSmoke;">
                            <h2 class="modal-title">Agregar registro</h2>
                        </div>
                        <form action="registro_admin" method="POST">
                            <div class="modal-body">
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
                                                <option value="H"
                                                        @if(old('genero')=='Masculino') selected="selected"@endif>
                                                    Masculino
                                                </option>
                                                <option value="M"
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
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <span class="spantext" style="color: darkgrey;">Escribe Actividad Empresarial</span>
                                            <input name="act_empresarial" id="act_empresarial" type="text"
                                                   class="form-control"
                                                   value="">

                                        </div>
                                    </div>
                                    <!-- Tabla de registros evaluación   -->
                                    <div class="product-tab-list tab-pane fade active in data-table-area mg-b-15"
                                         id="registroweb">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <!--<h1>Projects <span class="table-project-n">Data</span> Table</h1>-->
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">

                                                                <table id="table_scian" data-toggle="table"
                                                                       data-search="true"
                                                                       data-pagination="true"
                                                                       data-search="true"
                                                                       data-cookie="true"
                                                                       data-cookie-id-table="saveId">
                                                                    <thead>
                                                                    <tr>
                                                                        <th data-field="state"></th>
                                                                        <th class="sorting_asc" tabindex="0"
                                                                            rowspan="1" colspan="1">Descripción subrama
                                                                        </th>
                                                                        <th class="sorting_asc" tabindex="0"
                                                                            rowspan="1" colspan="1">Clase de Actividad
                                                                        </th>
                                                                        <th class="sorting" tabindex="0"
                                                                            rowspan="1" colspan="1">Sector sedeco
                                                                        </th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <tr role="row" class="items check rows">
                                                                            <td class=""><input class="check rows"
                                                                                                name="id_scian"
                                                                                                type="radio">
                                                                            </td>
                                                                            <td class="sorting_1" id="descripcion_subrama"
                                                                                name="descripcion_subrama"></td>
                                                                            <td class="sorting_1" id="descripcion_clase"
                                                                                name="descripcion_clase"></td>
                                                                            <td class="sorting_1" id="descripcion_sedeco"
                                                                                name="descripcion_sedeco"></td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input name="codigo_clase" id="codigo_clase" type="hidden">
                                        <input name="descripcion_clase" id="descripcion_clase" type="hidden">
                                        <input name="codigo_sedeco" id="codigo_sedeco" type="hidden">
                                        <input name="descripcion_sedeco" id="descripcion_sedeco" type="hidden">

                                    </div>
                                    <!-- Tabla de registros de platica -->


                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="payment-adress">
                                            <br>
                                            <button type="submit"
                                                    class="btn btn-primary waves-effect waves-light"
                                                    id="guardar" hidden>
                                                Enviar
                                            </button>
                                            <a href="{{route('enviar_correo')}}"
                                               class="btn btn-primary waves-effect waves-light"
                                               id="guardar" hidden>
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


                                <div class="row" style="display: none; padding: 10px;" id="alert-modal">
                                    <div class="col-6">
                                        <div class="alert alert-warning" id="alerta">
                                            <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer" style="background-color: whiteSmoke;">

                                <button type="submit" class="btn btn-primary waves-effect waves-light">Agregar</button>

                                <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">
                                    Cancelar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Modal Agregar usuarios  -->

    </section>
@endsection
