@extends('main')
@section('content')
    <section>
        <form action="{{route('MostrarUsuarios')}}" method="post" class="form-horizontal">

            <div class="single-pro-review-area mt-t-30 mg-b-15 ">
                <div class="container-fluid " style="margin: 40px 0px 0px 0px">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-payment-inner-st">
                                <ul id="myTabedu1" class="tab-review-design">
                                    <li class="active"><a href="#description">Modificación de usuario</a></li>
                                </ul>

                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div id="dropzone1" class="pro-ad addcoursepro">

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
                                                                                       data-show-refresh="true"
                                                                                       data-show-pagination-switch="true"
                                                                                       data-show-toggle="true" data-resizable="true"
                                                                                       data-cookie="true"
                                                                                       data-cookie-id-table="saveId"
                                                                                       data-show-export="true"
                                                                                       data-click-to-select="true"
                                                                                       data-toolbar="#toolbar">
                                                                                    <thead>
                                                                                    <tr>
                                                                                        <th data-field="state"
                                                                                            data-checkbox="true"></th>
                                                                                        <th class="sorting_asc" tabindex="0" rowspan="1"
                                                                                            colspan="1">Nombre
                                                                                        </th>
                                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                                            colspan="1">Apellido paterno
                                                                                        </th>
                                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                                            colspan="1">Apellido materno
                                                                                        </th>
                                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                                            colspan="1">Perfil
                                                                                        </th>
                                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                                            colspan="1">Área
                                                                                        </th>
                                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                                            colspan="1">Puesto
                                                                                        </th>
                                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                                            colspan="1">Correo
                                                                                        </th>
                                                                                        <th class="sorting" tabindex="0" rowspan="1"
                                                                                            colspan="1">Acciones
                                                                                        </th>
                                                                                    </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    @foreach ($detalle_registrousuarios as $registro)
                                                                                        <tr role="row" class="odd">
                                                                                            <td class="sorting_1"></td>
                                                                                            <td class="sorting_1">{{$registro->nombre}}</td>
                                                                                            <td class="sorting_1">{{$registro->apellido_paterno}}</td>
                                                                                            <td class="sorting_1">{{$registro->apellido_materno}}</td>
                                                                                            <td class="sorting_1">{{$registro->nom_perfil}}</td>
                                                                                            <td class="sorting_1">{{$registro->nom_dir}}</td>
                                                                                            <td class="sorting_1">{{$registro->nom_puesto}}</td>
                                                                                            <td class="sorting_1">{{$registro->correo_electronico}}</td>
                                                                                            <td class="sorting_1">
                                                                                                <button type="button"
                                                                                                        title="Editar registro"
                                                                                                        class="pd-setting-ed">
                                                                                                    <a href='edit_user/{{$registro->id_usuario}}'>
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


                                                        <form
                                                                class="dropzone dropzone-custom needsclick addcourse"
                                                                id="formulario-usuarios">
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <input name="nombre" id="nombre" type="text"
                                                                               value="{{$usuario->nombre}}"
                                                                               class="form-control"
                                                                               placeholder="Nombre">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="apat" id="apat" type="text"
                                                                               value="{{$usuario->apellido_paterno}}"
                                                                               class="form-control"
                                                                               placeholder="Apellido materno">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="amat" id="amat" type="text"
                                                                               value="{{$usuario->apellido_materno}}"
                                                                               class="form-control"
                                                                               placeholder="Apellido materno">
                                                                    </div>

                                                                </div>


                                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                    <div class="form-group">
                                                                        <input name="correo" type="email"
                                                                               class="form-control"
                                                                                placeholder="Correo"
                                                                               value="{{$usuario->correo_electronico}}">
                                                                        <div style="color: #fe4138">{!! $errors->first('correo', '<small>:message</small>') !!}</div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <input name="contrasena" type="password"
                                                                               @if(!isset($usuario))
                                                                               @endif
                                                                               class="form-control"
                                                                               placeholder="Contraseña">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <input name="confirma-contrasena"
                                                                               type="password"
                                                                               @if(!isset($usuario))
                                                                               @endif
                                                                               class="form-control"
                                                                               placeholder="Confirma contraseña">
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            @if(isset($usuario))
                                                                <p><b>Nota:</b> Si no requiere cambiar la contraseña,
                                                                    dejar en blanco el campo "Contraseña" y "Corfima
                                                                    contraseña"</p>

                                                            @endif
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="payment-adress">
                                                                        <br>
                                                                        <button type="submit"
                                                                                class="btn btn-primary waves-effect waves-light">
                                                                            Modificar
                                                                        </button>
                                                                        <input type="hidden" name="_token"
                                                                               id="csrf-token" value="{{csrf_token()}}">
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
        <script src="{{asset('js/form_academia.js')}}" charset="utf-8"></script>
    </section>
@endsection

@section('scripts')
    <script>
        $('.btn-delete').on('click', function(e) {
            $(this).parents('form:first').submit()
        })
    </script>
@endsection