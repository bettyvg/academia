@extends('main')
@section('content')
    <section>
        <form action="{{route('evaluacionplaticainfo')}}" method="post" class="form-horizontal">
            @csrf

                    @if(isset($alert2))
                        <div class="row" style="padding: 10px;">
                            <div class="col-12">
                                <div class="alert alert-{{$alert2->type}}">
                                    <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                    {{$alert2->message}}
                                </div>
                            </div>
                        </div>

                    @endif
                    <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                        <div class="container-fluid" style="margin: 40px 0px 0px 0px">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-payment-inner-st">
                                        <ul id="myTabedu1" class="tab-review-design">
                                            <li class="active"><a href="#description">Evaluación plática
                                                    informativa</a></li>
                                            <li><a href="#reviews"> Detalle evaluaciones</a></li>
                                        </ul>

                                        <div id="myTabContent" class="tab-content custom-product-edit">
                                            <div class="product-tab-list tab-pane fade active in" id="description">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="review-content-section">
                                                            <div id="dropzone1" class="pro-ad addcoursepro">
                                                                <br>
                                                                <div><h4>Datos <span
                                                                                class="table-project-n">Personales</span>
                                                                    </h4>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    <div class="form-group">
                                                                        <input name="nombre" id="nombre"
                                                                               type="text"
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Nombre"
                                                                               value="{{old('nombre')}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="correo" id="correo"
                                                                               type="email"
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Correo electrónico"
                                                                               value="{{old('correo')}}">
                                                                        <div style="color: #fe4138">{!! $errors->first('correo', '<small>:message</small>') !!}</div>
                                                                    </div>
                                                                    <div class="from-group">
                                                                        <select required='true'
                                                                                class="form-control"
                                                                                name="id_ejecutivo"
                                                                                id="id_ejecutivo">
                                                                            <option value="">Seleccionar
                                                                                ejecutivo..
                                                                            </option>
                                                                            @foreach($cat_ejecutivos as $ejecutivos)
                                                                                <option value="{{$ejecutivos->id_ejecutivo}}" @if(old('id_ejecutivo')==$ejecutivos->id_ejecutivo)selected="selected"@endif>{{$ejecutivos->nombre_ejecutivo." ". $ejecutivos->apellido_paterno." ".$ejecutivos->apellido_materno}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>

                                                                </div>


                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="telefono" id="telefono"
                                                                               type="number"
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="Teléfono"
                                                                               value="{{old('telefono')}}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="curp" id="curp"
                                                                               onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                                                                               type="text"
                                                                               required="true"
                                                                               class="form-control"
                                                                               placeholder="CURP"
                                                                               value="{{old('curp')}}">
                                                                        <div style="color: #fe4138">{!! $errors->first('curp', '<small>:message</small>') !!}</div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <select required='true'
                                                                                class="form-control"
                                                                                name="municipio"
                                                                                id="municipio">
                                                                            <option value="">Municipio
                                                                            </option>
                                                                            @foreach($cat_municipios as $municipios)
                                                                                <option value="{{$municipios->cve_compuesta_ent_mun}}" @if(old('municipio')==$municipios->cve_compuesta_ent_mun)selected="selected"@endif> {{$municipios->nom_mun}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <br>
                                                                    <button type="button"
                                                                            class="btn btn-info pull-right"
                                                                            data-toggle="modal"
                                                                            name="btnagregar_evaluacion"
                                                                            id="btnagregar_evaluacion"
                                                                            data-target="#modal_evaluacion">Evaluar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="modal" tabindex="-1" role="dialog" name="modal_evaluacion"
                                                     id="modal_evaluacion">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header"
                                                                 style="background-color: whiteSmoke;">
                                                                <h2 class="modal-title">Evaluación</h2>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Favor de seleccionar entre la escala del 1 (malo) al
                                                                    5 (excelente) y marcar la casilla que considere más
                                                                    adecuada :
                                                                </h5> <br>
                                                                <div class="widget-program-box mg-tb-30">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">
                                                                                                Puntualidad del
                                                                                                ejecutivo</h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-time"></i>
                                                                                                <br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="puntualidad"
                                                                                                            id="puntualidad">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        @for($i = 5; $i >= 1; $i--)
                                                                                                            <option value="{{$i}}" @if(old('puntualidad')==$i)selected="selected"@endif>{{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">
                                                                                                Conocimiento del
                                                                                                Ejecutivo</h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-thumbs-up"></i>
                                                                                                <br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="conocimiento"
                                                                                                            id="conocimiento">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        @for($i = 5; $i >= 1; $i--)
                                                                                                            <option value="{{$i}}"@if(old('conocimiento')==$i)selected="selected"@endif> {{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">Capacidad
                                                                                                para resolver
                                                                                                dudas </h4>
                                                                                            <div class="m icon-box">
                                                                                                <i class="glyphicon glyphicon-question-sign"></i>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="capacidad"
                                                                                                            id="capacidad">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        @for($i = 5; $i >= 1; $i--)
                                                                                                            <option value="{{$i}}" @if(old('capacidad')==$i)selected="selected"@endif> {{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="widget-program-box mg-tb-30">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">Claridad
                                                                                                de la
                                                                                                información</h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-ok"></i>
                                                                                                <br><br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control"
                                                                                                            name="claridad"
                                                                                                            id="claridad">
                                                                                                        <option value=""
                                                                                                                selected="">
                                                                                                            Seleccionar...
                                                                                                        </option>
                                                                                                        @for($i = 5; $i >= 1; $i--)
                                                                                                            <option value="{{$i}}" @if(old('claridad')==$i)selected="selected"@endif> {{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">Utilidad
                                                                                                de la
                                                                                                información</h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-info-sign"></i>
                                                                                                <br><br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="utilidad"
                                                                                                            id="utilidad">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        @for($i = 5; $i >= 1; $i--)
                                                                                                            <option value="{{$i}}" @if(old('utilidad')==$i)selected="selected"@endif> {{$i}}</option>
                                                                                                        @endfor
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">¿Cuál es
                                                                                                el modelo de
                                                                                                emprendimiento
                                                                                                adecuado para su
                                                                                                proyecto de
                                                                                                negocio?</h4>
                                                                                            <div class="m icon-box">
                                                                                                <i class="educate-icon educate-project"></i>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="modelo"
                                                                                                            id="modelo"
                                                                                                            >
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        <option value="Modelo Social Colaborativo" @if(old('modelo')=="Modelo Social Colaborativo")selected="selected"@endif>
                                                                                                            Modelo
                                                                                                            Social
                                                                                                            Colaborativo
                                                                                                        </option>
                                                                                                        <option value="Modelo Tradicional" @if(old('modelo')=="Modelo Tradicional")selected="selected"@endif>
                                                                                                            Modelo
                                                                                                            Tradicional
                                                                                                        </option>
                                                                                                        <option value="Modelo Institucional" @if(old('modelo')=="Modelo Institucional")selected="selected"@endif>
                                                                                                            Modelo
                                                                                                            Institucional
                                                                                                        </option>
                                                                                                        <option value="Modelo Alto Inpacto" @if(old('modelo')=="Modelo Alto Inpacto")selected="selected"@endif>
                                                                                                            Modelo Alto
                                                                                                            Inpacto
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="widget-program-box mg-tb-30">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">Razón por
                                                                                                la que asiste a
                                                                                                FOJAL </h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-map-marker"></i>
                                                                                                <br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="razonasiste"
                                                                                                            id="razonasiste">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        <option value="Financiamiento" @if(old('razonasiste')=="Financiamiento")selected="selected"@endif>
                                                                                                            Financiamiento
                                                                                                        </option>
                                                                                                        <option value="Capacitación" @if(old('razonasiste')=="Capacitación")selected="selected"@endif>
                                                                                                            Capacitación
                                                                                                        </option>
                                                                                                        <option value="Ambos" @if(old('razonasiste')=="Ambos")selected="selected"@endif>
                                                                                                            Ambos
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">Tipo de
                                                                                                persona
                                                                                                jurídica</h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-user"></i>
                                                                                                <br><br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="col-sm-12">
                                                                                                <select required='true'
                                                                                                        class="form-control "
                                                                                                        name="personajuridica"
                                                                                                        id="personajuridica">
                                                                                                    <option value=""
                                                                                                            selected=""
                                                                                                    >Seleccionar...
                                                                                                    </option>
                                                                                                    <option value="Persona física" @if(old('personajuridica')=="Persona física")selected="selected"@endif>
                                                                                                        Persona
                                                                                                        física
                                                                                                    </option>
                                                                                                    <option value="Persona Moral" @if(old('personajuridica')=="Persona Moral")selected="selected"@endif>
                                                                                                        Persona
                                                                                                        Moral
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">Esta dado
                                                                                                de alta en
                                                                                                hacienda</h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-info-sign"></i>
                                                                                                <br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="altahacienda"
                                                                                                            id="altahacienda">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        <option value="Si" value="altahacienda" @if(old('altahacienda')=="Si")selected="selected"@endif>
                                                                                                            Si
                                                                                                        </option>
                                                                                                        <option value="No" value="altahacienda" @if(old('altahacienda')=="No")selected="selected"@endif>
                                                                                                            No
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="widget-program-box mg-tb-30">
                                                                    <div class="container-fluid">
                                                                        <div class="row">
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">¿Cuantos
                                                                                                años tiene dado
                                                                                                de
                                                                                                alta
                                                                                                en
                                                                                                el SAT?
                                                                                                </label> </h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-bed"></i>
                                                                                                <br><br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select
                                                                                                            class="form-control "
                                                                                                            name="anosalta"
                                                                                                            id="anosalta">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        <option value="0 a 1" @if(old('anosalta')=="0 a 1")selected="selected"@endif>
                                                                                                            0 a 1 años
                                                                                                        </option>
                                                                                                        <option value="1 a 3" @if(old('anosalta')=="1 a 3")selected="selected"@endif>
                                                                                                            1 a 3 años
                                                                                                        </option>
                                                                                                        <option value="3 o más" @if(old('anosalta')=="3 o más")selected="selected"@endif>
                                                                                                            3 o más
                                                                                                            años
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                                                <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                                                                                    <div class="panel-body">
                                                                                        <div class="text-center content-box">
                                                                                            <h4 class="m-b-xs">En caso
                                                                                                de requerir
                                                                                                financiamiento;
                                                                                                ¿Cuál es el monto que
                                                                                                necesita?</h4>
                                                                                            <div class="m icon-box">
                                                                                                <br>
                                                                                                <i class="glyphicon glyphicon-usd"></i>
                                                                                                <br>
                                                                                            </div>
                                                                                            <p class="small mg-t-box">
                                                                                            <div class="form-group">
                                                                                                <div class="col-sm-12">
                                                                                                    <select required='true'
                                                                                                            class="form-control "
                                                                                                            name="montofinanciamiento"
                                                                                                            id="montofinanciamiento">
                                                                                                        <option value=""
                                                                                                                selected=""
                                                                                                        >Seleccionar...
                                                                                                        </option>
                                                                                                        <option value="$2,500.00 - $12,000.00" @if(old('montofinanciamiento')=="$2,500.00 - $12,000.00")selected="selected"@endif>
                                                                                                            $2,500.00 -
                                                                                                            $12,000.00
                                                                                                        </option>
                                                                                                        <option value="$50,000.00 - $500,000.00" @if(old('montofinanciamiento')=="$50,000.00 - $500,000.00")selected="selected"@endif>
                                                                                                            $50,000.00 -
                                                                                                            $500,000.00
                                                                                                        </option>
                                                                                                        <option value="$500,000.00 - $5´000,000.00" @if(old('montofinanciamiento')=="$500,000.00 - $5´000,000.00")selected="selected"@endif>
                                                                                                            $500,000.00
                                                                                                            -
                                                                                                            $5´000,000.00
                                                                                                        </option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row" style="display: none; padding: 10px;"
                                                                     id="alert-modal">
                                                                    <div class="col-12">
                                                                        <div class="alert alert-warning" id="alerta">
                                                                            <button class="close" data-dismiss="alert">
                                                                                <span>&times;</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer"
                                                                 style="background-color: whiteSmoke;">
                                                                <button type="submit"
                                                                        class="btn btn-primary waves-effect waves-light" id="guardar">
                                                                    Enviar
                                                                </button>
                                                                <button type="button"
                                                                        class="btn btn-secondary pull-left"
                                                                        data-dismiss="modal">Cerrar
                                                                </button>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="col-sm-10 aviso">
                                                                    <p>Aviso de Confidencialidad El Fondo Jalisco de
                                                                        Fomento
                                                                        Empresarial (FOJAL), ubicado en Av. Adolfo López
                                                                        Mateos
                                                                        Norte
                                                                        #1135,
                                                                        esquina con Colomos, colonia Italia Providencia,
                                                                        C.P. 44648
                                                                        en
                                                                        la
                                                                        ciudad
                                                                        de Guadalajara, Jalisco, es responsable del uso
                                                                        y protección
                                                                        de
                                                                        sus
                                                                        datos
                                                                        personales, por ello hace de su conocimiento lo
                                                                        siguiente:
                                                                        los
                                                                        datos
                                                                        personales
                                                                        que usted proporcione a este Fideicomiso, serán
                                                                        única y
                                                                        exclusivamente
                                                                        utilizados
                                                                        para llevar a cabo los objetivos y atribuciones
                                                                        de esta
                                                                        Institución.
                                                                        Si
                                                                        desea
                                                                        consultar nuestro aviso de privacidad integral
                                                                        lo podrá
                                                                        consultar a
                                                                        través de la
                                                                        página de internet de este Fideicomiso, en el
                                                                        siguiente
                                                                        link:
                                                                        <a href="http://fojal.jalisco.gob.mx/"
                                                                           target="_blank">http://fojal.jalisco.gob.mx/</a>
                                                                    </p>
                                                                </div>
                                                                <div class="col-sm-2 avisoimg">
                                                                    <img src="img/aviso.png">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Tabla de registros evaluación   -->
                                            <div class="product-tab-list tab-pane fade data-table-area mg-b-15"
                                                 id="reviews">
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
                                                                               data-show-columns="true"
                                                                               data-show-pagination-switch="true"
                                                                               data-show-toggle="true"
                                                                               data-resizable="true"
                                                                               data-cookie="true"
                                                                               data-cookie-id-table="saveId"
                                                                               data-show-export="true"
                                                                               data-click-to-select="true"
                                                                               data-toolbar="#toolbar" >
                                                                            <thead>
                                                                            <tr>
                                                                                <th data-field="state"
                                                                                    data-checkbox="true"></th>
                                                                                <th data-field="Nombre">Nombre</th>
                                                                                <th data-field="Ejecutivo">Ejecutivo
                                                                                </th>
                                                                                <th data-field="Telefono"> Teléfono</th>
                                                                                <th data-field="Curp">Curp</th>
                                                                                <th data-field="Municipio">Municipio
                                                                                </th>
                                                                                <th data-field="Puntualidad" data-checkbox="false">
                                                                                    Puntualidad
                                                                                </th>
                                                                                <th data-field="Conocimiento">
                                                                                    Conocimiento
                                                                                </th>
                                                                                <th data-field="Capacidad">Capacidad
                                                                                </th>
                                                                                <th data-field="Claridad">Claridad</th>
                                                                                <th data-field="Utilidad">Utilidad</th>
                                                                                <th data-field="ModeloEmprendimiento">
                                                                                    Modelo Emprendimiento
                                                                                </th>
                                                                                <th data-field="AisteFojal">Asiste a
                                                                                    Fojal
                                                                                </th>
                                                                                <th data-field="PersonaJuridica">Persona
                                                                                    Juridica
                                                                                </th>
                                                                                <th data-field="AltaHacienda">Alta
                                                                                    Hacienda
                                                                                </th>
                                                                                <th data-field="AnosAlta"> Años
                                                                                    hacienda
                                                                                </th>
                                                                                <th data-field="MontoFinanciamiento">
                                                                                    Financiamiento
                                                                                </th>
                                                                                <th data-field="fecha">Fecha</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            @foreach ($detalle_evaluacion as $Items )
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1"></td>
                                                                                    <td class="sorting_1">{{$Items->nombre}}</td>
                                                                                    <td class="sorting_1">{{$Items->ejecutivos->nombre_ejecutivo." ".$Items->ejecutivos->apellido_materno." ".$Items->ejecutivos->apellido_paterno}}</td>
                                                                                    <td class="sorting_1">{{$Items->telefono}}</td>
                                                                                    <td class="sorting_1">{{$Items->curp}}</td>
                                                                                    <td class="sorting_1">{{$Items->nombre_municipio->nom_mun}}</td>
                                                                                    <td class="sorting_1">{{$Items->puntualidad}}</td>
                                                                                    <td class="sorting_1">{{$Items->conocimiento}}</td>
                                                                                    <td class="sorting_1">{{$Items->capacidad}}</td>
                                                                                    <td class="sorting_1">{{$Items->claridad}}</td>
                                                                                    <td class="sorting_1">{{$Items->utilidad}}</td>
                                                                                    <td class="sorting_1">{{$Items->modelo}}</td>
                                                                                    <td class="sorting_1">{{$Items->razonasiste}}</td>
                                                                                    <td class="sorting_1">{{$Items->personajuridica}}</td>
                                                                                    <td class="sorting_1">{{$Items->altahacienda}}</td>
                                                                                    <td class="sorting_1">{{$Items->anosalta}}</td>
                                                                                    <td class="sorting_1">{{$Items->montofinanciamiento}}</td>
                                                                                    <td class="sorting_1">{{$Items->created_at}}</td>
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
                                            <!-- Tabla de registros de evaluación -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
        <br>
        @if(isset($alert) && $alert != null && isset($alert->type))
            <div class="alert alert-{{ $alert->type }}" role="alert">
                {{ $alert->message }}
            </div>
        @endif

    </section>
@endsection
