@extends('main')
@section('content')

    <section>
        @if(isset($alert))
            <div class="row" style="padding: 10px; margin: 30px 20px 0px 20px">
                <div class="col-12">
                    <div  class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{$alert->message}}
                    </div>
                </div>
                @endif
        <form action="{{route('registroplatica')}}" method="post" class="form-horizontal">
             <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
             <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#registroplatica">Registro plática informativa</a></li>
                                <li><a href="#modificacioninscritos"> Consulta de registros</a></li>
                            </ul>


                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="myTabContent" class="tab-content custom-product-edit">
                                                    <div class="product-tab-list tab-pane fade active in" id="registroplatica">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="review-content-section">
                                                                    <div id="dropzone1" class="pro-ad add-professors">
                                                                        <form>
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                                    <div class="form-group">

                                                                                        <input name="nombre" id="nombre" type="text"
                                                                                               required="true"
                                                                                               class="form-control"
                                                                                               placeholder="Nombre"
                                                                                               value="{{old('nombre')}}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input name="apellido_paterno" id="apellido_paterno" type="text"
                                                                                               required="true"
                                                                                               class="form-control"
                                                                                               placeholder="Apellido paterno"
                                                                                               value="{{old('apellido_paterno')}}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input name="apellido_materno" id="apellido_materno" type="text"
                                                                                               required="true"
                                                                                               class="form-control"
                                                                                               placeholder="Apellido materno"
                                                                                               value="{{old('apellido_materno')}}">
                                                                                    </div>
                                                                                    <div class="form-group" >
                                                                                        <span class="spantext" style="color: darkgrey;">Fecha de nacimiento</span>
                                                                                        <input name="fecha_nacimiento" id="fecha_nacimiento" type="date"
                                                                                               class="form-control"
                                                                                               required="true"
                                                                                               value="{{old('fecha_nacimiento')}}">
                                                                                    </div>

                                                                                </div>

                                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                                    <div class="form-group " required="true">
                                                                                        <select name="genero" id="genero" class="form-control" value="{{old('genero')}}">
                                                                                            <option value="none" selected="" disabled="" style="color: darkgrey;">Genero</option>
                                                                                            <option value="Masculino" @if(old('genero')=='Masculino') selected="selected"@endif>Masculino</option>
                                                                                            <option value="Femenino" @if(old('genero')=='Femenino') selected="selected"@endif>Femenino</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input name="edad" id="edad" type="text"
                                                                                               required="true"
                                                                                               class="form-control"
                                                                                               placeholder="Edad"
                                                                                               value="{{old('edad')}}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input name="rfc" id="rfc" type="text"
                                                                                               required="true"
                                                                                               class="form-control"
                                                                                               placeholder="RFC"
                                                                                               value="{{old('rfc')}}">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <input name="correo" id="correo" type="email"
                                                                                               class="form-control"
                                                                                               required="true" placeholder="Correo"
                                                                                               value="{{old('correo')}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br><br><br>
                                                                            <H3>Datos de la empresa</H3>
                                                                            <br>
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <span class="spantext" style="color: darkgrey;">Sector</span>
                                                                                    <select name="sector" id="sector" class="form-control select2" required>
                                                                                        <option value="">Seleccionar..</option>
                                                                                        @foreach($sectores as $sector)
                                                                                            <option value="{{$sector->codigo_sector}}" @if(isset($prospecto) && $prospecto->codigo_sector == $sector->codigo_sector) selected @endif>{{$sector->descripcion_sector}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <span class="spantext" style="color: darkgrey;">Subsector</span>
                                                                                    <select name="subsector" id="subsector" class="form-control select2" required>
                                                                                        <option value="">Seleccionar..</option>
                                                                                        @foreach($subsectores as $subsector)
                                                                                            <option value="{{$subsector->codigo_subsector}}" @if(isset($prospecto) && $prospecto->codigo_subsector == $subsector->codigo_subsector) selected @endif>{{$subsector->descripcion_subsector}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <span class="spantext" style="color: darkgrey;">Rama</span>
                                                                                    <select name="rama" id="rama" class="form-control select2" required>
                                                                                        <option value="">Seleccionar..</option>
                                                                                        @foreach($ramas as $rama)
                                                                                            <option value="{{$rama->codigo_rama}}" @if(isset($prospecto) && $prospecto->codigo_rama == $rama->codigo_rama) selected @endif>{{$rama->descripcion_rama}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    <span class="spantext" style="color: darkgrey;">Subrama</span>
                                                                                    <select name="subrama" id="subrama" class="form-control select2" required>
                                                                                        <option value="">Seleccionar..</option>
                                                                                        @foreach($subramas as $subrama)
                                                                                            <option value="{{$subrama->codigo_subrama}}" @if(isset($prospecto) && $prospecto->codigo_subrama == $subrama->codigo_subrama) selected @endif>{{$subrama->descripcion_subrama}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <span class="spantext" style="color: darkgrey;">Actividad</span>
                                                                                    <select name="clase_actividad" id="clase_actividad" class="form-control select2" required>
                                                                                        <option value="">Seleccionar..</option>
                                                                                        @foreach($clase_actividad as $clase_actividades)
                                                                                            <option value="{{$clase_actividades->codigo_clase}}" @if(isset($prospecto) && $prospecto->codigo_clase == $clase_actividades->codigo_clase) selected @endif>{{$clase_actividades->descripcion_clase}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-4">
                                                                                    <input name="edad" id="edad" type="text"
                                                                                           required="true"
                                                                                           class="form-control"
                                                                                           placeholder="Tamaño de la empresa"
                                                                                           value="{{old('edad')}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-group col-md-4">
                                                                                    <input name="edad" id="edad" type="text"
                                                                                           required="true"
                                                                                           class="form-control"
                                                                                           placeholder="Calle"
                                                                                           value="{{old('edad')}}">
                                                                                </div>
                                                                                <div class="form-group col-md-4">
                                                                                    <input name="edad" id="edad" type="text"
                                                                                           required="true"
                                                                                           class="form-control"
                                                                                           placeholder="Numero Exterior."
                                                                                           value="{{old('edad')}}">
                                                                                </div>
                                                                                <div class="form-group col-md-4">
                                                                                    <input name="edad" id="edad" type="text"
                                                                                           required="true"
                                                                                           class="form-control"
                                                                                           placeholder="Numero interior."
                                                                                           value="{{old('edad')}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-group col-md-4" >
                                                                                    <select required='true' class="form-control select2"  name="estado" id="estado" value="{{old('cve_ent')}}">
                                                                                        <option value="none" selected="" disabled="">Selecionar estado..</option>
                                                                                        @foreach($cat_entidades as $entidades)
                                                                                            <option @if($entidades->cve_ent <='9') value="{{"0".$entidades->cve_ent}}"
                                                                                                    @if(old('cve_ent')=="0".$entidades->cve_ent)selected="selected" @endif
                                                                                                    @else value="{{$entidades->cve_ent}}" @if(old('d_estado')==($entidades->cve_ent))selected="selected"@endif
                                                                                                    @endif>{{($entidades->nom_ent)}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-4" >
                                                                                    <select required='true' class="form-control select2"  name="municipio" id="municipio" value="{{old('cve_ent')}}">
                                                                                        <option value="none" selected="" disabled="">Selecionar municipio..</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="form-group col-md-4">
                                                                                    <select required='true' class="form-control select2"  name="colonia" id="colonia" value="{{'colonia'}}">
                                                                                        <option value="none" selected="" disabled="">Seleccionar colonia..</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-group col-md-4">
                                                                                    <input name="cp" id="cp" type="text"
                                                                                           required="true"
                                                                                           placeholder="Código Postal"
                                                                                           class="form-control">
                                                                                </div>
                                                                                <div class="form-group col-md-4">
                                                                                    <input name="telefono" id="telefono" type="text"
                                                                                           onKeyUp="if(isNaN(this.value)){alert('sólo puede introdicur números');this.value=this.value.substring(0,this.value.lenght-1)}"
                                                                                           @if(isset($registro)) value="{{$registro->telefono}}" @endif
                                                                                           class="form-control"
                                                                                           placeholder="Teléfono"
                                                                                           value="{{old('telefono')}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="payment-adress">
                                                                                        <br>
                                                                                        <button type="submit"
                                                                                                class="btn btn-primary waves-effect waves-light" id="guardar">
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
                                                </div>
                                            </div>
                                        </div>


                                <!-- Tabla de registros evaluación   -->
                                <div class="product-tab-list tab-pane fade data-table-area mg-b-15" id="modificacioninscritos">
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
                                                                   data-search="true"
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
                                                                    <th data-field="acciones">Acciones</th>
                                                                    <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" >Nombre</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido paterno</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido materno</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Genero</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Estado de nacimiento</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Municipio visita</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Fecha de nacimiento</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Correo</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Teléfono</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Nivel Escolaridad</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Estatus Escolaridad</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Ocupación</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Fecha de registro</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($detalle_registrop as $Items)
                                                                    <tr role="row" class="odd">
                                                                        <td class="sorting_1"></td>
                                                                        <td class="sorting_1">
                                                                            <button type="button"
                                                                                    title="Editar registro"
                                                                                    class="pd-setting-ed">
                                                                                <a href='edit_registrop/{{$Items->id_registro}}'>
                                                                                    <i class="fa fa-pencil-square-o"> </i>
                                                                                </a></button>
                                                                        </td>
                                                                        <td class="sorting_1">{{$Items->nombre}}</td>
                                                                        <td class="sorting_1">{{$Items->apellido_paterno}}</td>
                                                                        <td class="sorting_1">{{$Items->apellido_materno}}</td>
                                                                        <td class="sorting_1">{{$Items->genero}}</td>
                                                                        <td class="sorting_1">{{$Items->nom_ent}}</td>
                                                                        <td class="sorting_1">{{$Items->nom_mun}}</td>
                                                                        <td class="sorting_1">{{$Items->fecha_nacimiento}}</td>
                                                                        <td class="sorting_1">{{$Items->correo}}</td>
                                                                        <td class="sorting_1">{{$Items->telefono}}</td>
                                                                        <td class="sorting_1">{{$Items->nivel}}</td>
                                                                        <td class="sorting_1">{{$Items->estatus}}</td>
                                                                        <td class="sorting_1">{{$Items->ocupacion}}</td>
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
                                <!-- Tabla de registros de platica -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

                </div>
        </form>
        <br>

    </section>
@endsection
