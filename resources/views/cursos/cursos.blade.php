@extends('main')
@section('content')

    <section>

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 40px 0px 0px 0px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st" id="tabs">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#agregar" id="agregar_curso">Agregar nuevo curso</a></li>
                                <li><a href="#cursos"> Detalle cursos</a></li>
                                <!--<li><a href="#INFORMATION">Información</a></li>-->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="agregar">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone" class="pro-ad addcoursepro">
                                                    <form action="{{route('cursos')}}" method="post"
                                                          enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="nombre_curso" id="nombre_curso" type="text"
                                                                           class="form-control"
                                                                           placeholder="Nombre del curso" required>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <span>&nbsp;Fecha inicio de curso</span>
                                                                            <input name="fecha_inicio" id="fecha_inicio"
                                                                                   type="date"
                                                                                   class="form-control fechas"
                                                                                   placeholder="Fecha inicio" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <span>&nbsp;Hora inicio de curso</span>
                                                                            <input name="horario_inicio"
                                                                                   id="horario_inicio" type="time"
                                                                                   class="form-control fechas"
                                                                                   placeholder="Hora inicio" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="capacitador" id="capacitador"
                                                                            class="form-control" required>
                                                                        <option value="">Selecciona un capacitador..
                                                                        </option>
                                                                        @foreach($cat_capacitadores as $cat_capacitador)
                                                                            <option value="{{$cat_capacitador->id_capacitador}}">{{$cat_capacitador->nom_cap. ' ' .$cat_capacitador->apellido_paterno. ' ' .$cat_capacitador->apellido_materno}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <select name="categoria" id="categoria"
                                                                            class="form-control" required>
                                                                        <option value="">Selecciona una categoría..
                                                                        </option>
                                                                        @foreach($cat_temas as $cat_tema)
                                                                            <option value="{{$cat_tema->id_tema}}">{{$cat_tema->tema}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <span>&nbsp;Fecha fin de curso</span>
                                                                            <input name="fecha_fin" id="fecha_fin"
                                                                                   type="date"
                                                                                   class="form-control fechas"
                                                                                   placeholder="Fecha fin" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <span>&nbsp;Hora fin de curso</span>
                                                                            <input name="horario_fin" id="horario_fin"
                                                                                   type="time"
                                                                                   class="form-control fechas"
                                                                                   placeholder="Hora fin" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="ubicacion" id="ubicacion"
                                                                            class="form-control" required>
                                                                        <option value="">Selecciona una ubicación..
                                                                        </option>
                                                                        @foreach($cat_instituciones as $cat_institucion)
                                                                            <option value="{{$cat_institucion->id_institucion}}">{{$cat_institucion->nombre_inst}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <textarea name="descripcion" id="descripcion"
                                                                              placeholder="Descripción"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <span>Selecciona imagen para el curso</span>
                                                                <div class="file-upload-inner ts-forms">
                                                                    <input type="file" name="imagen_curso"
                                                                           id="imagen_curso" class="form-control"
                                                                           accept="image/*">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    @csrf
                                                                    <input type="hidden" id="editar" name="editar" value="0">
                                                                    <input type="hidden" id="id_curso" name="id_curso" value="0">
                                                                    <button type="submit" id="enviar"
                                                                            class="btn btn-primary waves-effect waves-light">
                                                                        Enviar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if(isset($alert))
                                                            <div class="row" style="padding: 10px;">
                                                                <div class="col-lg-12">
                                                                    <div class="alert alert-{{$alert->type}}">
                                                                        <button class="close" data-dismiss="alert">
                                                                            <span>&times;</span></button>
                                                                        {{$alert->message}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="cursos">
                                    @if(isset($cursos))
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="courses-area">
                                                                <div class="container-fluid courses-inner  table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n">
                                                                    <div class="row">
                                                                        <?php $contador = 0; ?>
                                                                        @foreach($cursos as $curso)
                                                                            @if ($contador == 4)
                                                                                <div class='row mg-b-15'>
                                                                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"
                                                                                         id="{{$curso->id_curso}}">
                                                                                        <div class="courses-inner res-mg-b-30">
                                                                                            <div class="courses-title">
                                                                                                <a href="#">
                                                                                                    @if($curso->nombre_documento != null)
                                                                                                        <img src="{{asset('img/documentos/'.$curso->nombre_documento)}}"
                                                                                                             alt=""></a>
                                                                                                @else
                                                                                                    <img src="{{asset('img/documentos/default.jpeg')}}"
                                                                                                         alt=""></a>
                                                                                                @endif
                                                                                                <h2>{{$curso->tema}}</h2>
                                                                                                <h5>{{$curso->nombre_curso}}</h5>
                                                                                            </div>
                                                                                            <div class="courses-alaltic">
                                                                                    <span class="cr-ic-r"><span
                                                                                                class="course-icon"><i
                                                                                                    class="fa fa-clock"></i></span><b>Fecha de inicio: {{$curso->fecha_inicio}}</b> <b>Hora:</b> {{$curso->hora_inicio}}</span>
                                                                                            </div>
                                                                                            <div class="course-des">
                                                                                                <p>
                                                                                                    <span><i class="fa fa-clock"></i></span>
                                                                                                    <b>Profesor:</b> {{$curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador }}
                                                                                                </p>
                                                                                                <p>
                                                                                                    <span><i class="fa fa-clock"></i></span>
                                                                                                    <b>Ubicación:</b> {{$curso->nombre_inst .', '. $curso->direccion}}
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="product-buttons">
                                                                                                <button type="button"
                                                                                                        class="button-default cart-btn ver_cursos"
                                                                                                        id="{{$curso->id_curso}}"
                                                                                                        data-target="#modal-curso"
                                                                                                        data-toggle="modal">
                                                                                                    Ver
                                                                                                </button>
                                                                                                <button type="button"
                                                                                                        class="button-blue cart-btn editar_curso" id="{{$curso->id_curso}}">
                                                                                                    Editar
                                                                                                </button>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    @else
                                                                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"
                                                                                             id="{{$curso->id_curso}}">
                                                                                            <div class="courses-inner res-mg-b-30">
                                                                                                <div class="courses-title">
                                                                                                    <a href="#">
                                                                                                        @if($curso->nombre_documento != null)
                                                                                                            <img src="{{asset('img/documentos/'.$curso->nombre_documento)}}"
                                                                                                                 alt=""></a>
                                                                                                    @else
                                                                                                        <img src="{{asset('img/documentos/default.jpeg')}}"
                                                                                                             alt=""></a>
                                                                                                    @endif
                                                                                                    <br><br>
                                                                                                    <h4>{{$curso->tema}}</h4>

                                                                                                </div>
                                                                                                <div class="courses-alaltic">
                                                                                    <span class="cr-ic-r"><span
                                                                                                class="course-icon"><i
                                                                                                    class="fa fa-clock"></i></span><b>Fecha de inicio:</b> {{$curso->fecha_inicio}} <b>Hora:</b> {{$curso->hora_inicio}}</span>
                                                                                                </div>
                                                                                                <div class="course-des">
                                                                                                    <p>
                                                                                                        <span><i class="fa fa-clock"></i></span>
                                                                                                        <b>Profesor:</b> {{$curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador }}
                                                                                                    </p>
                                                                                                    <p>
                                                                                                        <span><i class="fa fa-clock"></i></span>
                                                                                                        <b>Ubicación:</b> {{$curso->nombre_inst .', '. $curso->direccion}}
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="product-buttons">
                                                                                                    <button type="button"
                                                                                                            class="button-default cart-btn ver_cursos"
                                                                                                            id="{{$curso->id_curso}}"
                                                                                                            data-target="#modal-curso"
                                                                                                            data-toggle="modal">
                                                                                                        Ver
                                                                                                    </button>
                                                                                                    <button type="button"
                                                                                                            class="button-blue cart-btn editar_curso" id="{{$curso->id_curso}}">
                                                                                                        Editar
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php
                                                                                        $contador++;
                                                                                        IF ($contador == 4) {
                                                                                            echo '</div>';
                                                                                            $contador = 0;
                                                                                        }
                                                                                        ?>
                                                                                    @endif
                                                                                    @endforeach
                                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>
                                            <!--<div class="product-tab-list tab-pane fade" id="INFORMATION">
                                                <div class="row">

                                                </div>
                                            </div> -->
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="{{asset('js/cursos.js')}}"></script>
                <script src="{{asset('js/notify.min.js')}}"></script>
            </div>
        </div>

                <div class="modal fade" tabindex="-1" role="dialog" name="modal-curso" id="modal-curso">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: whiteSmoke;" >
                                <h2 class="modal-title">Cursos</h2>
                            </div>
                            <div class="modal-body" style="height: 330px">
                                    <div class="box-body " >
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img id="imagen_curso_modal" src="" class="img-fluid" width="60%"></div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                            <h1 id="tema_modal"></h1>
                                            <h5 id="nombre_curso_modal"></h5>
                                            <br>
                                            <p id="fecha_hora_modal"></p>
                                            <p id="profesor_modal"></p>
                                            <p id="ubicacion_modal"></p>
                                            <p id="descripcion_modal"></p>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer" style="background-color: whiteSmoke;">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>



             <!--   <div class="modal fade" id="modal-curso" tabindex="-1" role="dialog">
                    <div class="modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-header" style="background-color: whiteSmoke;">
                                    <h2 class="modal-title">Cursos</h2>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img id="imagen_curso_modal" src="" class="img-fluid" width="60%"></div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                        <h1 id="tema_modal"></h1>
                                        <h5 id="nombre_curso_modal"></h5>
                                        <br>
                                        <p id="fecha_hora_modal"></p>
                                        <p id="profesor_modal"></p>
                                        <p id="ubicacion_modal"></p>
                                        <p id="descripcion_modal"></p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </section>
    <script>
        var reproductor = videojs('fm-video', {
            fluid: true
        });
    </script>
@endsection
