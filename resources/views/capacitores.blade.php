@extends('main')
@section('content')
    <section>

        <form action="" method="post" class="form-horizontal">


        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#registroplatica">Registro capacitador</a></li>
                                <li><a href="#modificacion">Modificación de capacitadores</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="registroplatica">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad add-professors">
                                                    <form action="{{route('registro')}}">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    <br>
                                                                    <input name="nombre" id="nombre" type="text"
                                                                           @if(isset($registro)) value="{{$registro->nombre}}" @endif
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Nombre">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="apat" id="apat" type="text"
                                                                           @if(isset($registro)) value="{{$registro->apellido_paterno}}" @endif
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Apellido paterno">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="amat" id="amat" type="text"
                                                                           @if(isset($registro)) value="{{$registro->apellido_materno}}" @endif
                                                                           required="true"
                                                                           class="form-control"
                                                                           placeholder="Apellido materno">
                                                                </div>
                                                                <div class="form-group ">
                                                                    <select name="genero" id="genero" class="form-control"
                                                                            @if(isset($registro)) value="{{$registro->genero}}" @endif>
                                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Genero</option>
                                                                        <option value="Masculino">Masculino</option>
                                                                        <option value="Femenino">Femenino</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select required='true' class="form-control select2"  name="estado" id="estado" @if(isset($registro)) value="{{$registro->estado}}" @endif>
                                                                        <option value="none" selected="" disabled="">Estado de nacimiento</option>
                                                                        @foreach($cat_entidades as $entidades)
                                                                            <option value="{{$entidades->cve_ent}}"> {{$entidades->nom_ent}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select required='true' class="form-control select2"  name="municipio" id="municipio">
                                                                        <option value="none" selected="" disabled="">Municipio</option>
                                                                        @foreach($cat_municipios as $municipios)
                                                                            <option value="{{$municipios->cve_compuesta_ent_mun}}"> {{$municipios->nom_mun}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                    <span class="spantext" style="color: darkgrey;">Fecha de nacimiento</span>
                                                                    <input name="fechanacimiento" id="fechanacimiento" type="date"
                                                                           class="form-control"
                                                                           @if(isset($registro)) value="{{$registro->fecha_nacimiento}}" @endif
                                                                           required="true">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="rfc" id="rfc" type="text"
                                                                           @if(isset($registro)) value="{{$registro->rfc}}" @endif
                                                                           class="form-control"
                                                                           required="true" placeholder="RFC">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="correo" id="correo" type="email"
                                                                           @if(isset($registro)) value="{{$registro->correo}}" @endif
                                                                           class="form-control"
                                                                           required="true" placeholder="Correo">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="telefono" id="telefono" type="text"
                                                                           @if(isset($registro)) value="{{$registro->telefono}}" @endif
                                                                           class="form-control"
                                                                           placeholder="Teléfono">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="usuario"  type="text"
                                                                           @if(isset($registro)) required="true" value="{{$registro->escolaridad}}" @endif
                                                                           class="form-control"
                                                                           placeholder="Usuario">
                                                                </div>
                                                                <div class="form-group">

                                                                    <input name="ocupacion"  type="text"
                                                                           @if(isset($registro)) required="true" value="{{$registro->ocupacion}}" @endif
                                                                           class="form-control"
                                                                           placeholder="Contraseña">
                                                                </div>


                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <br>
                                                                    <button type="submit"
                                                                            class="btn btn-primary waves-effect waves-light">
                                                                        Guardar
                                                                    </button>
                                                                    <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Tabla de registros capacitores   -->
                                <div class="product-tab-list tab-pane fade data-table-area mg-b-15" id="modificacion">
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
                                                                    <option value="all">Exportar todo</option>
                                                                    <option value="selected">Exportar Seleccionados
                                                                    </option>
                                                                </select>
                                                            </div>

                                                            <table id="table" data-toggle="table"
                                                                   data-pagination="true"
                                                                   data-show-columns="true"
                                                                   data-show-pagination-switch="true"
                                                                   data-show-toggle="true" data-resizable="true"
                                                                   data-cookie="true"
                                                                   data-cookie-id-table="saveId"
                                                                   data-show-export="true"
                                                                   data-click-to-select="true"
                                                                   data-toolbar="#toolbar">
                                                                <thead>
                                                                <tr>
                                                                    <th data-field="state" data-checkbox="true"></th>
                                                                    <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" >Nombre</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido paterno</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido materno</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Genero</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Estado de nacimiento</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Municipio</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Fecha de nacimiento</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >RFC</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Correo</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Teléfono</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Usuario</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Fecha de registro</th>
                                                                </tr>
                                                                </thead>
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




</form>
    </section>
@endsection()
