@extends('main')
@section('content')
    <section>
        <form action="{{route('temas')}}" method="post" class="form-horizontal">
            @csrf

                <div class="container-fluid" style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Temas</a></li>
                                </ul>


                                <!-- Tabla de temas   -->
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
                                                        <div class="product-tab-list tab-pane fade active in"
                                                             id="description">
                                                            <div class="row">
                                                                <div class="col-md-offset-8">
                                                                    <div class="payment-adress">
                                                                        <br>
                                                                        <button type="button"
                                                                                class="btn btn-info pull-right"
                                                                                data-toggle="modal" name="agregar_temas"
                                                                                id="agregar_temas"
                                                                                data-target="#modal_temas">Nuevo tema
                                                                        </button>
                                                                        <input type="hidden" name="_token"
                                                                               id="csrf-token" value="{{csrf_token()}}">
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
                                                                            <th data-field="Sesion">Sesion</th>
                                                                            <th data-field="Nombre">Nombre del tema</th>
                                                                            <th data-field="acciones">Acciones</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @foreach ($cat_temas as $Items )
                                                                            <tr role="row" class="odd">
                                                                                <td class="sorting_1"></td>
                                                                                <td class="sorting_1">{{$Items->num_sesion}}</td>
                                                                                <td class="sorting_1">{{$Items->tema}}</td>
                                                                                <td class="sorting_1">
                                                                                    <button type="button"
                                                                                            title="Editar registro"
                                                                                            class="pd-setting-ed">
                                                                                        <a href='editar_tema/{{$Items->id_tema}}'>
                                                                                            <i class="fa fa-pencil-square-o"> </i>
                                                                                        </a></button>
                                                                                    <button class="btn-delete pd-setting-ed btn-delete"
                                                                                            type="button"
                                                                                            data-toggle="modal"
                                                                                            data-target="#DangerModalalert"
                                                                                            name=delete_user"
                                                                                            id="delete_user"
                                                                                            data-toggle="tooltip"
                                                                                            title="Eliminar registro">
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
            <div class="modal" tabindex="-1" role="dialog" name="modal_temas" id="modal_temas">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: whiteSmoke;">
                            <h2 class="modal-title">Agregar tema</h2>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="TemaNombre" class="col-sm-4">Numero de sesion</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="num_sesion"
                                                       id="num_sesion" required="true">
                                            </div>
                                            <br><br>
                                        </div>
                                        <div class="form-group">
                                            <label for="AccionistaNombre" class="col-sm-4">Nombre del tema</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="tema" id="tema"
                                                       required="true">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="estatus" id="estatus"
                                                   value="activo">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer" style="background-color: whiteSmoke;">
                            <form action="temas" method="POST">{{csrf_field()}}
                                <button type="submit" name="guardar_temas" id="guardar_temas"
                                        class="btn btn-primary waves-effect waves-light">Guardar
                                </button>
                            </form>
                            <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="DangerModalalert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">

                        <span class="educate-icon educate-danger modal-check-pro information-icon-pro"
                              style="align:center;width:200px"></span>
                        <h2 style="text-align: center">Aviso!</h2><br><br>
                        <h4 style="text-align: center">¿Estas seguro de eliminar el tema</h4>
                        <h4 style="text-align: center">{{' '.$Items->tema}}</h4>
                    </div>
                    <div class="modal-footer danger-md">

                        <button class="btn btn-danger" data-dismiss="modal" href="#" style="text-align: left">Cancel
                        </button>
                        <br><br>
                        <form action="delete_tema/{{$Items->id_tema}}" method="POST">
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

    </section>
@endsection
@section('scripts')
    <script>
        $('.btn-delete').on('click', function (e) {
            $(this).parents('form:first').submit()
        })
    </script>
@endsection
