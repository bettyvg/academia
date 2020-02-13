@extends('main')
@section('content')
    <section>

                    <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                        <div class="container-fluid" style="margin: 40px 0px 0px 0px">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="product-payment-inner-st">
                                        <ul id="myTabedu1" class="tab-review-design">
                                            <li class="active"><a href="#description">Ejecutivos</a></li>
                                        </ul>


                                            <!-- Tabla de registros evaluación   -->
                                            <div class="product-tab-list tab-pane fade active in"
                                                 id="description">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="sparkline13-list">
                                                                <div class="sparkline13-hd">
                                                                    <div class="main-sparkline13-hd">
                                                                        <!--<h1>Projects <span class="table-project-n">Data</span> Table</h1>-->
                                                                    </div>
                                                                </div>
                                                                <div id="myTabContent" class="tab-content custom-product-edit">
                                                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                                                        <div class="row">
                                                                            <div class="col-md-offset-8">
                                                                                <div class="payment-adress" >
                                                                                    <br>
                                                                                    <button type="button" class="btn btn-info pull-right" data-toggle="modal" name="agregar_ejecutivos" id="agregar_ejecutivos" data-target="#modal_ejecutivos">Agregar ejecutivo</button>
                                                                                </div>
                                                                            </div>
                                                                            <br>
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

                                                                        <table id="tabla_ejecutivos" name="tabla_ejecutivos" data-toggle="table"
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
                                                                               data-toolbar="#toolbar" >
                                                                            <thead>
                                                                            <tr>
                                                                                <th data-field="state"
                                                                                    data-checkbox="true"></th>
                                                                                <th data-field="nombre_ejecutivo">Nombre</th>
                                                                                <th data-field="apellido paterno">Apellido paterno</th>
                                                                                <th data-field="apellido materno">Apellido materno</th>
                                                                                <th data-field="acciones">Acciones</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            @foreach ($cat_ejecutivos as $Items )
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1"></td>
                                                                                    <td class="sorting_1">{{$Items->nombre_ejecutivo}}</td>
                                                                                    <td class="sorting_1">{{$Items->apellido_paterno}}</td>
                                                                                    <td class="sorting_1">{{$Items->apellido_materno}}</td>
                                                                                    <td class="sorting_1">
                                                                                        <button type="button"
                                                                                                title="Editar registro"
                                                                                                class="pd-setting-ed">
                                                                                            <a href='ModificaUsuarios/{{$Items->id_ejecutivo}}'>
                                                                                                <i class="fa fa-pencil-square-o"> </i>
                                                                                            </a></button>
                                                                                        <button class="btn-delete pd-setting-ed btn-delete"
                                                                                                type="button" data-toggle="modal"
                                                                                                data-target="#DangerModalalert"
                                                                                                name="delete_user"
                                                                                                id="delete_user"
                                                                                                data-toggle="tooltip"
                                                                                                title="Eliminar registro"                                                                                            >
                                                                                            <i class="fa fa-fw fa-trash-o"></i>
                                                                                        </button>
                                                                                    </td>
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

        <br>
        <!--INICIO MODAL AGREGAR EJECUTIVO-->
        <div class="modal" tabindex="-1" role="dialog" name="modal_ejecutivos" id="modal_ejecutivos">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: whiteSmoke;">
                        <h2 class="modal-title">Agregar ejecutivo</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="nombreejecutivo" class="col-sm-4">Nombre</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nombre_ejecutivo" id="nombre_ejecutivo" required="true">
                                        </div>
                                        <br><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="AccionistaNombre" class="col-sm-4">Apellido paterno</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" required="true">
                                        </div>
                                        <br><br>
                                    </div>
                                    <div class="form-group">

                                        <label for="AccionistaNombre" class="col-sm-4">Apellido materno</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" required="true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                         <input type="hidden" class="form-control" name="estatus" id="estatus" value="activo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="display: none; padding: 10px;" id="alert-modal">
                            <div class="col-12">
                                <div class="alert alert-warning" id="alerta">
                                    <button class="close" data-dismiss="alert"><span>&times;</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color: whiteSmoke;">
                        <form action="{{route('crear_ejecutivos')}}" method="POST" class="form-horizontal">
                            @csrf
                        <button type="submit" name="guardar_ejecutivos" id="guardar_ejecutivos" class="btn btn-primary waves-effect waves-light">Guardar</button>
                        </form>
                        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

            <!--INICIO MODAL AVISO ELIMINACION DE USUARIO-->
            <div id="DangerModalalert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <span class="educate-icon educate-danger modal-check-pro information-icon-pro" style="align:center;width:200px"></span>
                            <h2 style="text-align: center">Aviso!</h2><br><br>
                            <h4 style="text-align: center">¿Estas seguro de eliminar ejecutivo?</h4>
                        </div>
                        <div class="modal-footer danger-md">
                            <button class="btn btn-danger" data-dismiss="modal" href="#" style="text-align: left">Cancel</button><br><br>
                            <form action="./delete_ejecutivos/{{$Items->id_ejecutivo}}" method="POST">
                                {{method_field('PATCH')}}
                                {{csrf_field()}}
                                <button onclick="document.reload()"
                                        class="btn btn-info btn-delete"
                                        type="button" data-toggle="modal"
                                        data-target="#DangerModalalert"
                                        name=delete_user"
                                        id="delete_user"
                                        data-toggle="tooltip"
                                        title="Aceptar"
                                >Aceptar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @if(isset($alert) && $alert != null && isset($alert->type))
            <div class="alert alert-{{ $alert->type }}" role="alert">
                {{ $alert->message }}
            </div>
        @endif

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

        <script src="{{asset('../js/ejecutivos.js')}}" charset="utf-8"></script>

    </section>
@endsection

@section('scripts')
    <script>
        $('.btn-delete').on('click', function(e) {
            $(this).parents('form:first').submit()
        })
    </script>
@endsection
