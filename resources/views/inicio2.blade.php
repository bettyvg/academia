@extends('main2')
@section('content')
    <link rel="stylesheet" href="{{asset('estiloscard.css')}}">
    <script src="{{asset('./js/inscripcioncursos.js')}}"></script>
    <script src="{{asset('./js/examen/site.js')}}"></script>
    <?php
    $user = Session::get('usuario');
    ?>
    <br><br><br>
        <section>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15" style="margin: 10px 0px 0px 0px">

                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        <div class="product-payment-inner-st" id="tabs">
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="agregar">
                                    <h3>Información FOJAL</h3>
                                    <?php $contador = 0; ?>
                                    @foreach($cursos as $curso)
                                        @if ($contador == 3)
                                            <div class="row container">
                                                <div class="row ">
                                                    <div class="card" id="{{$curso->id_cursosonline}}">
                                                        <a href="#">
                                                            @if($curso->nombre_documento != null )
                                                                <img src="{{asset('img/documentos/'.$curso->nombre_documento)}}"
                                                                     alt="">                                            </a>
                                                        @elseif($curso->nombre_documento == null)
                                                            <img src="{{asset('img/documentos/default.jpeg')}}"
                                                                 alt="">
                                                        @endif
                                                        <br><br>
                                                        <h4 style="text-align: left; padding-left: 10px">{{$curso->nombre_curso}}</h4>
                                                        <h5 style="color: darkgrey; text-align: left; padding-left: 20px">{{$curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador }}</h5>
                                                        <button type="button"
                                                                class="button-default cart-btn ver_cursos"
                                                                id="{{$curso->id_cursosonline}}">Ver detalles
                                                        </button>

                                                    </div>
                                                </div>
                                                @elseif($contador < 3)
                                                    <div class="row container">
                                                        <div class="card" id="{{$curso->id_cursosonline}}">
                                                            <a href="{{url('cursodetalle', ['id_cursonline' => $curso->id_cursosonline])}}">
                                                                @if($curso->nombre_documento != null)
                                                                    <img src="{{asset('img/documentos/'.$curso->nombre_documento)}}"
                                                                         alt=""></a>
                                                            @elseif($curso->nombre_documento == null)
                                                                <img src="{{asset('img/documentos/default.jpeg')}}"
                                                                     alt=""></a>
                                                            @endif
                                                            <br><br>

                                                            <h4 style="text-align: center">{{$curso->nombre_curso}}</h4>
                                                            <h5 style="color: darkgrey; text-align: center; padding-left: 10px">{{$curso->nombre_capacitador. ' '.$curso->apellido_paterno_capacitador. ' '.$curso->apellido_materno_capacitador }}</h5>
                                                            <a href="{{url('cursodetalle', ['id_cursonline' => $curso->id_cursosonline])}}"
                                                               type="button"
                                                               class="btn2 btn-primary2 btn_inscripcion"
                                                               data-id="{{$curso->id_cursosonline}}">Ver
                                                                video</a>
                                                        </div>
                                                    </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <?php
                                    $contador++;
                                    if ($contador == 4) {
                                        echo '</div>';
                                        $contador = 0;
                                    }
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <!--Poner codigo Facebook-->
                        <div class="product-payment-inner-st" id="tabs">
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="agregar">
                                    <h3>Facebook FOJAL</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="modal fade" tabindex="-1" role="dialog" name="modal-curso" id="modal-curso">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: whiteSmoke;">
                        <h2 class="modal-title">Curso</h2>
                    </div>
                    <div class="modal-body" style="height: 230px">
                        <div class="box-body">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><img id="imagen_curso_modal"
                                                                                   src=""
                                                                                   class="img-fluid"
                                                                                   width="60%">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <h1 id="nombre_curso_modal"></h1>
                                <h5 id="tema_modal"></h5>
                                <br>
                                <p id="profesor_modal"></p>
                                <p id="descripcion_modal"></p>
                            </div>
                            <input type="hidden" name="_token" id="id_user" value="{{$user->id_usuario}}">
                            @foreach($cursos as $curso)
                                <input type="hidden" name="_token" id="id_cursosonline" value="">
                            @endforeach
                        </div>
                    </div>

                    <div class="modal-footer" style="background-color: whiteSmoke;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id='btn_cerrar'>
                            Cerrar
                        </button>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="{{asset('js/cursos_online.js')}}"></script>
    <script src="{{asset('js/notify.min.js')}}"></script>

@endsection
