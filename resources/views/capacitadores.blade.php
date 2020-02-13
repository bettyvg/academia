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
                                <li class="active"><a href="#registroplatica">Capacitador</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="registroplatica">

                                        <div class="col-md-offset-12">
                                            <div class="payment-adress" >
                                                <br>
                                                <button type="button" class="btn btn-info pull-right" data-toggle="modal" name="agregar_capacitador" id="agregar_capacitador" data-target="#modal_capacitador">Agregar capacitador</button>
                                                <input type="hidden" name="_token"
                                                       id="csrf-token" value="{{csrf_token()}}">
                                            </div>

                                        <br>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
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
                                                                <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" >Nombre</th>
                                                                <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido paterno</th>
                                                                <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Apellido materno</th>
                                                                <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Genero</th>
                                                                <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Estado de nacimiento</th>
                                                                <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Municipio</th>
                                                                <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Fecha de nacimiento</th>
                                                                <th class="sorting" tabindex="0" rowspan="1" colspan="1" >RFC</th>
                                                                <th class="sorting" tabindex="0" rowspan="1" colspan="1" >Correo</th>
                                                            </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div id="dropzone1" class="pro-ad add-professors">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Modal Agregar capacitores   -->
            <div class="modal" tabindex="-1" role="dialog" name="modal_capacitador" id="modal_capacitador">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: whiteSmoke;">
                            <h2 class="modal-title">Agregar capacitador</h2>
                        </div>
                        <div class="modal-body">
                            <div class="col-6">
                                <div class="box-body">
                                    <form action="{{route('registro')}}">
                                        <div class="row">
                                                <div class="col-sm-6">
                                                    <br>
                                                    <input name="nombre" id="nombre" type="text"
                                                           required="true"
                                                           class="form-control"
                                                           placeholder="Nombre">
                                                </div>
                                                <div class="col-sm-6">
                                                    <br>
                                                    <input name="apat" id="apat" type="text"
                                                           required="true"
                                                           class="form-control"
                                                           placeholder="Apellido paterno">
                                                </div>
                                                <div class="col-sm-6">
                                                    <br>
                                                    <input name="amat" id="amat" type="text"
                                                           required="true"
                                                           class="form-control"
                                                           placeholder="Apellido materno">
                                                </div>
                                                <div class="col-sm-6 ">
                                                    <br>
                                                    <select name="genero" id="genero" class="form-control">
                                                        <option value="none" selected="" disabled="" style="color: darkgrey;">Genero</option>
                                                        <option value="Masculino">Masculino</option>
                                                        <option value="Femenino">Femenino</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <br>
                                                    <input name="correo" id="correo" type="email"
                                                           class="form-control"
                                                           required="true" placeholder="Correo">
                                                </div>

                                                <div class="col-sm-6">
                                                    <br>
                                                    <span class="spantext" style="color: darkgrey;">Fecha de nacimiento</span>
                                                    <input name="fechanacimiento" id="fechanacimiento" type="date"
                                                           class="form-control"
                                                           required="true">
                                                </div>
                                                <div class="col-sm-6">
                                                    <br>
                                                    <input name="rfc" id="rfc" type="text"
                                                           class="form-control"
                                                           required="true" placeholder="RFC">
                                                </div>

                                                <div class="col-sm-6">
                                                    <br>
                                                    <input name="telefono" id="telefono" type="text"
                                                           class="form-control"
                                                           placeholder="Teléfono">
                                                </div>
                                                <div class="col-sm-6">
                                                    <br>
                                                    <select required='true' class="form-control select2"  name="estado" id="estado">
                                                        <option value="none" selected="" disabled="">Estado de nacimiento</option>
                                                        @foreach($cat_entidades as $entidades)
                                                            <option value="{{$entidades->cve_ent}}"> {{$entidades->nom_ent}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <br>
                                                    <select required='true' class="form-control select2"  name="municipio" id="municipio">
                                                        <option value="none" selected="" disabled="">Municipio</option>
                                                        @foreach($cat_municipios as $municipios)
                                                            <option value="{{$municipios->cve_compuesta_ent_mun}}"> {{$municipios->nom_mun}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                    </form>
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
                            <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Agregar capacitores  -->


</form>
    </section>
@endsection()
